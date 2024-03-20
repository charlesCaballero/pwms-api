<?php

namespace App\Http\Controllers;

use App\Classes\ApiDataTable;
use App\Models\User;
use App\Models\Inventory;
use App\Models\StorageRequest;
use App\Models\WithdrawalRequest;
use App\Models\ReturnRequest;
use App\Models\DisposalRequest;
use App\Models\Office;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;
use Auth;

class InventoryController extends Controller
{
    use ApiResponser;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type,Request $request)
    {
        $datatable = new ApiDataTable();
        $result = $datatable->data_table_query(
            $request->page,
            $request->limit,
            $request->order,
            $request->orderBy,
            $request->search,
            json_decode($request->filters),
            'Inventory',
            $type==='show'?'':'Ongoing '.$type//query with status 
        );
        $index = 0;
        foreach ($result['data'] as $row) {
            $office = Office::where('id', $row['storage']['office_id'])->first();
            $user = User::where('id', $row['storage']['user_id'])->first();
            $result['data'][$index]['office'] = $office;
            $result['data'][$index]['user'] = $user;
            $index++;
        }

        return $result;
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
                'priority_level'      => $box["priority_level"],
                'box_details'   => json_encode($box["box_details"]),
                'remarks'       => $box["remarks"],
                'disposal_date' => $box["disposal_date"],
                'location'      => 'Processing',
                'status'        => 'Awaiting storage request form',
            ]);
            $storage = StorageRequest::create([
                'form_no'       => 'S-'.date('Y').'-'.str_pad($newStorageReqForm, 3, '0', STR_PAD_LEFT),
                'user_id'       => Auth::user()->id,
                'office_id'     => $request->all()[0]["office_id"],
                'inventory_id'  => $inventory->id,
                'status'        => 'Awaiting storage request form',
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
    public function update(Request $request, $type, $id)
    {
        $req=$request->all();
        
        Inventory::where('id', $id)->update([
            'status'        => $type==='storage'?'In storage':($type==='withdrawal'?'Box Retrieved':($type==='disposal'?'Box Disposed':'In storage')),
            'location'      => $req['location'],
        ]);
        if($type==='storage'){
            StorageRequest::where('id', $req['storage']['id'])->update([
                'status'        => 'Done',
                'date_stored'   => Carbon::now(),
                'remarks'       => $req['storage']['remarks'],
            ]);
        }
        elseif($type==='withdrawal'){
            WithdrawalRequest::where('id', $req['withdrawal']['id'])->update([
                'status'            => 'Retrieved',
                'date_retrieved'    => Carbon::now(),
            ]);
        }
        elseif($type==='return'){
            ReturnRequest::where('id', $req['return']['id'])->update([
                'status'            => 'Returned',
                'date_returned'    => Carbon::now(),
                'remarks'       => $req['return']['remarks'],
            ]);
            WithdrawalRequest::where('id', $req['withdrawal']['id'])->update([
                'status'            => 'Returned',
            ]);
        }
        elseif($type==='disposal'){
            DisposalRequest::where('id', $req['disposal']['id'])->update([
                'status'            => 'Disposed',
                'date_disposed'    => Carbon::now(),
                'remarks'       => $req['disposal']['remarks'],
            ]);
        }
        return $this->success(
            'Success',
        );
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
                        ->where('status', 'like', '%In storage%')
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
