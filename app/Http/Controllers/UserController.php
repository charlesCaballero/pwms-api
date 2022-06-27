<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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
        $user_data = User::where('company_id_number', $id)->with('role')->with('office')->get();
        return $user_data;
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
        //
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

    public function changePhoto(Request $request)
    {
        $user_id = Auth::user()->id;
        if ($request->photo) {
            try {
                $changePhoto = User::where('id', $user_id)->update($request->all());
                return $changePhoto;
            } catch (\Illuminate\Database\QueryException $ex) {
                $message = $ex->getMessage();
                $error = '';
                if (str_contains($message, 'SQLSTATE[22001]')) {
                    $error = 'Image size is too large.';
                }
                return $this->error($error, 500);
            }
        } else return $this->error('Error.. empty photo.' . json_encode($request->all()), 500);
    }
}
