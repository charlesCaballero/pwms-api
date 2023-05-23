<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Inventory;
use App\Models\StorageRequest;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use Illuminate\Database\Eloquent\Builder;
use Auth;

class InventoryController extends Controller
{
    use ApiResponser;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lastStorageReqForm = StorageRequest::latest()->value('form_no');
        $newStorageReqForm = StorageRequest::count()>0 ? ((int)substr($lastStorageReqForm, -3))+1 : 1;
        foreach ($request->all() as $box) {
            $inventory = Inventory::create([
                'office_id'     => $box["office_id"],
                'box_code'      => $box["box_code"],
                'box_details'   => json_encode($box["box_details"]),
                'remarks'       => $box["remarks"],
                'disposal_date' => $box["disposal_date"],
                'location'      => 'Processing',
                'status'        => 'Awaiting storage request',
            ]);
            $lastId = Inventory::latest()->value('id');
            $storage = StorageRequest::create([
                'form_no'       => 'S-'.date('Y').'-'.str_pad($newStorageReqForm, 3, '0', STR_PAD_LEFT),
                'user_id'       => Auth::user()->id,
                'office_id'     => $request->all()[0]["office_id"],
                'inventory_id'  => $lastId,
                'status'        => 'Awaiting storage request',
                'remarks'       => ' ',
                // 'date_stored'   => null
            ]);
        }        
        $data['details'] = $request->all();
        $data["form_no"] = 'S-'.date('Y').'-'.str_pad($newStorageReqForm, 3, '0', STR_PAD_LEFT);
        $explodeBoxCode = explode('-', $data['details'][0]["box_code"]);
        $data["office"] = $explodeBoxCode[0];
        $user = User::find(Auth::user()->id);
        $firstName = $user->first_name;
        $lastName = $user->last_name;
        $data["user_name"] = $firstName . ' ' . $lastName;
        return $this->success(
            $data,
            'Success',
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {
        return $inventory;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventory $inventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventory)
    {
        //
    }

    public function search($officeID,$keyword)
    {
        $data = Inventory::where('office_id', $officeID)
                        ->where('status', 'like', '%Awaiting storage request%')
                        ->where(function (Builder $query) use ($keyword){
                            return $query->where('box_code', 'like', '%'.$keyword.'%')
                                        ->orWhere('box_details', 'like', '%'.$keyword.'%')
                                        ->orWhere('remarks', 'like', '%'.$keyword.'%')
                                        ->orWhere('disposal_date', 'like', '%'.$keyword.'%');
                        })
                        ->get();
        
        // dd($data);
        return $data;
    }
}
