<?php

namespace App\Http\Controllers;

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
    public function index()
    {
        //
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
                'status'        => 'Awaiting withdrawal request',
                'remarks'       => $box["remarks"],
                'copy_type'       => $box["type"],
            ]);
            $inventory = Inventory::where('id', $box["inventory_id"])
                                    ->update(['status' => 'Awaiting withdrawal request']);
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
        //
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
