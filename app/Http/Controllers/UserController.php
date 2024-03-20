<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Module;
use App\Classes\ApiDataTable;
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
            'User'
        );
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
    public function show($id, Request $request)
    {
        if (isset($request->select)) {
            $user_modules = User::select('modules')->where('company_id_number', $id)->get();
            if (in_array('*', json_decode($user_modules[0]->modules))) {
                $modules = Module::select(['id', 'reference'])->get();
            } else {
                $user_modules_id_arr = array_column(json_decode($user_modules[0]->modules), 'moduleId');
                $modules = Module::select(['id', 'reference'])->whereIn('id', $user_modules_id_arr)->get();
            }
            $user_data = ['userModule' => json_decode($user_modules[0]->modules), 'moduleDetails' => $modules];
        } else {
            $user_data = User::where('company_id_number', $id)->with('role')->with('office')->get();
        }
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
        $update = User::where('company_id_number', $id)->update($request->all());
        return $update;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $query = User::where('company_id_number',$id)->delete();
        $query = User::where('company_id_number',$id)->delete();
        return $this->success($query,"Delete Success",200);
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

    public function details ()
    {
        $details = (object)array(
            'user_name'=> Auth::user()->first_name." ".Auth::user()->last_name,
            'id_number'=> Auth::user()->company_id_number,
            'role_id'=> Auth::user()->role_id,
        );
        return $details;
    }
}
