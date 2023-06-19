<?php

namespace App\Http\Controllers;

use App\Classes\ApiDataTable;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use App\Models\User;
use App\Models\Inventory;
use App\Models\WithdrawalRequest;
use App\Models\ReturnRequest;
use Auth;

class ReturnRequestController extends Controller
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
        return $datatable->data_table_query(
            $request->page,
            $request->limit,
            $request->order,
            $request->orderBy,
            $request->search,
            json_decode($request->filters),
            'WithdrawalRequest',
            'Retrieved'//query with status 
        );
    }

    public function pending(Request $request)
    {
        $datatable = new ApiDataTable();
        $result = $datatable->data_table_query(
            $request->page,
            $request->limit,
            $request->order,
            $request->orderBy,
            $request->search,
            json_decode($request->filters),
            'ReturnRequest',
            'Awaiting return request form'//query with status 
        );
        $index = 0;
        foreach ($result['data'] as $row) {
            $withdrawal = WithdrawalRequest::where('id', $row['withdrawal_id'])->first();
            $result['data'][$index]['withdrawal'] = $withdrawal;
            $index++;
        }
        $data = [];
        foreach ($result['data'] as $row) {
            if(count($data)>=1){
                $index=0;
                $duplicate=false;
                foreach ($data as $values) {
                    if($values['form_no']===$row['form_no']){
                        array_push($data[$index]['details'],[
                            'inventory_id'=>$row['inventory_id'],
                            'box_code'=>$row['inventory']['box_code'],
                            'withdrawal_form'=>$row['withdrawal']['form_no'],
                            'remarks'=>$row['withdrawal']['remarks'],
                            'location'=>$row['inventory']['location'],
                            'type' => $row['withdrawal']['copy_type'],
                        ]);
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
                        'status'=>$row['created_at'],
                        'details'=>[[
                            'inventory_id'=>$row['inventory_id'],
                            'box_code'=>$row['inventory']['box_code'],
                            'withdrawal_form'=>$row['withdrawal']['form_no'],
                            'remarks'=>$row['withdrawal']['remarks'],
                            'location'=>$row['inventory']['location'],
                            'type' => $row['withdrawal']['copy_type'],
                        ]]
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
                    'details'=>[[
                        'inventory_id'=>$row['inventory_id'],
                        'box_code'=>$row['inventory']['box_code'],
                        'withdrawal_form'=>$row['withdrawal']['form_no'],
                        'remarks'=>$row['withdrawal']['remarks'],
                        'location'=>$row['inventory']['location'],
                        'type' => $row['withdrawal']['copy_type'],
                    ]]
                ]);
            }
        }

        return (['data'=> $data, 'rows'=> count($data) ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        $lastReturnReqForm = ReturnRequest::latest()->value('form_no');
        $newReturnReqForm = ReturnRequest::count()>0 ? ((int)substr($lastReturnReqForm, -3))+1 : 1;
        foreach ($request->all() as $box) {
            $returns = ReturnRequest::create([
                'form_no'       => 'R-'.date('Y').'-'.str_pad($newReturnReqForm, 3, '0', STR_PAD_LEFT),
                'user_id'       => Auth::user()->id,
                'office_id'     => Auth::user()->office_id,
                'inventory_id'  => $box["inventory_id"],
                'withdrawal_id'  => $box["withdrawal_id"],
                'status'        => 'Awaiting return request form',
                // 'remarks'       => $box["remarks"],
            ]);
            $inventory = Inventory::where('id', $box["inventory_id"])
                                    ->update(['status' => 'Awaiting return request form']);
            // $withdrawal = WithdrawalRequest::where('id', $box["withdrawal_id"])
            //                         ->update(['status' => 'Awaiting return request form']);
        }   
        $data['details'] = $request->all();
        $data["form_no"] = 'R-'.date('Y').'-'.str_pad($newReturnReqForm, 3, '0', STR_PAD_LEFT);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
            Inventory::where('id', $box['inventory_id'])->update([
                'status'        => 'Ongoing return request',
            ]);
        }
        ReturnRequest::where('form_no', $id)->update([
            'status'        => 'Ongoing return request',
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
