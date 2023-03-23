<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\StorageRequest;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
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
                'disposal_date' => $box["disposal_date"],
                'location'      => 'Processing',
                'status'        => 'Ongoing request',
            ]);
            $lastId = Inventory::latest()->value('id');
            $storage = StorageRequest::create([
                'form_no'       => 'S-'.date('Y').'-'.str_pad($newStorageReqForm, 3, '0', STR_PAD_LEFT),
                'user_id'       => Auth::user()->id,
                'office_id'     => $request->all()[0]["office_id"],
                'inventory_id'  => $lastId,
                'status'        => 'Ongoing request',
                'remarks'       => ' ',
                // 'date_stored'   => null
            ]);
        }        
        
        
        return $this->success(
            null,
            $newStorageReqForm
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
        //
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
}
