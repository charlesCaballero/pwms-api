<?php

namespace App\Http\Controllers;

use App\Classes\ApiDataTable;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use App\Models\User;
use App\Models\Inventory;
use App\Models\StorageRequest;
use Auth;

class StorageRequestController extends Controller
{
    use ApiResponser;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datatable = new ApiDataTable();
        $result = $datatable->data_table_query(
            $request->page,
            $request->limit,
            $request->order,
            $request->orderBy,
            $request->search,
            json_decode($request->filters),
            'StorageRequest',
            'Awaiting storage request form'//query with status 
        );
        $data = [];
        foreach ($result['data'] as $row) {
            if(count($data)>=1){
                $index=0;
                $duplicate=false;
                foreach ($data as $values) {
                    if($values['form_no']===$row['form_no']){
                        array_push($data[$index]['details'],$row['inventory']);
                        $duplicate=true;
                        break;
                    }
                    $index++;
                }
                if(!$duplicate){
                    array_push($data,[
                        'id'=>$row['id'],
                        'form_no'=>$row['form_no'],
                        'user_name'=>$row['user']['first_name']." ".$row['user']['last_name'],
                        'office'=>$row['office'],
                        'created_at'=>$row['created_at'],
                        'status'=>$row['status'],
                        'details'=>[$row['inventory']]
                    ]);
                }
                
            }
            else{
                array_push($data,[
                    'id'=>$row['id'],
                    'form_no'=>$row['form_no'],
                    'user_name'=>$row['user']['first_name']." ".$row['user']['last_name'],
                    'office'=>$row['office'],
                    'created_at'=>$row['created_at'],
                    'status'=>$row['status'],
                    'details'=>[$row['inventory']]
                ]);
            }
        }

        return (['data'=> $data, 'rows'=> count($data) ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $req=$request->all();
        foreach ($req['details'] as $box) {
            Inventory::where('id', $box['id'])->update([
                'status'        => 'Ongoing storage request',
            ]);
        }
        StorageRequest::where('form_no', $id)->update([
            'status'        => 'Ongoing storage request',
            // 'remarks'       => $req['remarks'],
        ]);
        return $this->success(
            'Success',
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
