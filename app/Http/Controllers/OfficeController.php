<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;
use Mockery\Undefined;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $page = $request->page;
        $limit = $request->limit;
        $order = $request->order;
        $orderBy = $request->orderBy;
        $search = $request->search;
        $filters = json_decode($request->filters);

        if($search !== '' && $search !== null ){
            unset($filters);
            $query = Office::query();
            $columns = ['name', 'acronym', 'code'];
            foreach($columns as $column){
                $query->orWhere($column, 'LIKE', '%' . $search . '%');
            }
            $rows_count =  $query->count();
            if($orderBy){
                $offices = $query->orderBy($orderBy, $order)->skip($page*$limit)->take($limit)->get();
            }
            else {
                $offices = $query->skip($page*$limit)->take($limit)->get();
            }
        }
        else {
            $rows_count = Office::all()->count();
            if($orderBy){
                $offices = Office::orderBy($orderBy, $order)->skip($page*$limit)->take($limit)->get();
            }
            else $offices = Office::skip($page*$limit)->take($limit)->get();
        }

        if (isset($filters)) {
            $rows_count = Office::all()->count();
            $where_arr = [];
            for ($index=0; $index < count($filters); $index++) { 
                if($filters[$index]->operator==='contains') array_push($where_arr, [$filters[$index]->column, 'like', '%' . $filters[$index]->value . '%']);
                if($filters[$index]->operator==='matches with') array_push($where_arr, [$filters[$index]->column, '=', $filters[$index]->value]);
                if($filters[$index]->operator==='ends with') array_push($where_arr, [$filters[$index]->column, 'like', '%' . $filters[$index]->value]);
                if($filters[$index]->operator==='starts with') array_push($where_arr, [$filters[$index]->column, 'like', $filters[$index]->value . '%']);
                if($filters[$index]->operator==='is empty') array_push($where_arr, [$filters[$index]->column, '=', null]);
                if($filters[$index]->operator==='not empty') array_push($where_arr, [$filters[$index]->column, '!=', null]);
            }

            $rows_count = Office::where($where_arr)->count();

            if($orderBy){
            $offices = Office::where($where_arr)->orderBy($orderBy, $order)->skip($page*$limit)->take($limit)->get();
            }
            else {
            $offices = Office::where($where_arr)->skip($page*$limit)->take($limit)->get();
            }
        }

        

        return ['data'=>$offices, 'rows'=>$rows_count];
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
        $insert = Office::create($request->all());
        return $insert;
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
        $update = Office::where('id',$id)->update($request->all());
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
        $delete = Office::where('id',$id)->delete();

        return $delete;
    }
}
