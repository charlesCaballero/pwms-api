<?php

namespace App\Http\Controllers;

use App\Classes\ApiDataTable;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use App\Models\User;
use App\Models\Inventory;
use App\Models\WithdrawalRequest;
use Auth;

class WithdrawalRequestController extends Controller
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
            'WithdrawalRequest',
            'Awaiting withdrawal request form'//query with status 
        );
        $data = [];
        foreach ($result['data'] as $row) {
            if(count($data)>=1){
                $index=0;
                $duplicate=false;
                foreach ($data as $values) {
                    if($values['form_no']===$row['form_no']){
                        array_push($data[$index]['details'],[
                            'withdrawal_id'=>$row['id'],
                            'inventory_id'=>$row['inventory_id'],
                            'box_code'=>$row['inventory']['box_code'],
                            'remarks'=>$row['remarks'],
                            'location'=>$row['inventory']['location'],
                            'type' => $row['copy_type'],
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
                        'status'=>$row['status'],
                        'details' => [[
                            'withdrawal_id'=>$row['id'],
                            'inventory_id'=>$row['inventory_id'],
                            'box_code'=>$row['inventory']['box_code'],
                            'remarks'=>$row['remarks'],
                            'location'=>$row['inventory']['location'],
                            'type' => $row['copy_type'],
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
                    'details' => [[
                        'withdrawal_id'=>$row['id'],
                        'inventory_id'=>$row['inventory_id'],
                        'box_code'=>$row['inventory']['box_code'],
                        'remarks'=>$row['remarks'],
                        'location'=>$row['inventory']['location'],
                        'type' => $row['copy_type'],
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
     * Store a newly created resource in Withdrawal.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lastWithdrawalReqForm = WithdrawalRequest::latest()->value('form_no');
        $newWithdrawalReqForm = WithdrawalRequest::count()>0 ? ((int)substr($lastWithdrawalReqForm, -3))+1 : 1;
        foreach ($request->all() as $box) {
            $withdrawal = WithdrawalRequest::create([
                'form_no'       => 'W-'.date('Y').'-'.str_pad($newWithdrawalReqForm, 3, '0', STR_PAD_LEFT),
                'user_id'       => Auth::user()->id,
                'office_id'     => Auth::user()->office_id,
                'inventory_id'  => $box["inventory_id"],
                'status'        => 'Awaiting withdrawal request form',
                'remarks'       => $box["remarks"],
                'copy_type'       => $box["type"],
            ]);
            $inventory = Inventory::where('id', $box["inventory_id"])
                                    ->update(['status' => 'Awaiting withdrawal request form']);
        }   
        $data['details'] = $request->all();
        $data["form_no"] = 'W-'.date('Y').'-'.str_pad($newWithdrawalReqForm, 3, '0', STR_PAD_LEFT);
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
     * Update the specified resource in Withdrawal.
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
                'status'        => 'Ongoing withdrawal request',
            ]);
        }
        WithdrawalRequest::where('form_no', $id)->update([
            'status'        => 'Ongoing withdrawal request',
            // 'remarks'       => $req['remarks'],
        ]);
        return $this->success(
            'Success',
        );
    }

    /**
     * Remove the specified resource from Withdrawal.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
