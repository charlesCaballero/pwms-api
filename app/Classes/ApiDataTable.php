<?php

namespace App\Classes;

use Illuminate\Support\Facades\Schema;

/*
|--------------------------------------------------------------------------
| Api DataTable Class
|--------------------------------------------------------------------------
|
| This class will be used for all quesries fro data table
|
*/

class ApiDataTable
{
    /**
     * Return a success JSON response.
     *
     * @param  array|string  $data
     * @param  string  $message
     * @param  int|null  $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function data_table_query(
        int $page = 0,
        int $limit = 5,
        string $order = null,
        string $orderBy = null,
        string $search = null,
        $filters = [],
        $model = null
    ) {
        $get_model = 'App\Models\\' . $model;
        $model_name = new $get_model;
        if ($search !== '' && $search !== null) {
            unset($filters);
            $query = $model_name->query();
            $table = $model_name->getTable();
            $columns = Schema::getColumnListing($table);
            foreach ($columns as $column) {
                $query->orWhere($column, 'LIKE', '%' . $search . '%');
            }
            $rows_count =  $query->count();
            if ($orderBy) {
                // $data = $model === 'User' ? $query->orderBy($orderBy, $order)->skip($page * $limit)->take($limit)->with('role')->with('office')->get() :
                //     $query->orderBy($orderBy, $order)->skip($page * $limit)->take($limit)->get();
                if($model === 'User'){
                    $data = $query->orderBy($orderBy, $order)->skip($page * $limit)->take($limit)->with('role')->with('office')->get();
                }
                elseif ($model === 'WithdrawalRequest') {
                    $data = $query->orderBy($orderBy, $order)->skip($page * $limit)->take($limit)->with('user')->with('office')->with('inventory')->get();
                }
                else {
                    $data = $query->orderBy($orderBy, $order)->skip($page * $limit)->take($limit)->get();
                }
            } else {
                // $data = $model === 'User' ? $query->skip($page * $limit)->take($limit)->with('role')->with('office')->get() :
                //     $query->skip($page * $limit)->take($limit)->get();
                if($model === 'User'){
                    $data = $query->skip($page * $limit)->take($limit)->with('role')->with('office')->get();
                }
                elseif ($model === 'WithdrawalRequest') {
                    $data = $query->skip($page * $limit)->take($limit)->with('user')->with('office')->with('inventory')->get();
                }
                else {
                    $data = $query->skip($page * $limit)->take($limit)->get();
                }
            }
        } else {
            $rows_count = $model_name->all()->count();
            if ($orderBy) {
                // $data = $model === 'User' ? $model_name->orderBy($orderBy, $order)->skip($page * $limit)->take($limit)->with('role')->with('office')->get() :
                //     $model_name->orderBy($orderBy, $order)->skip($page * $limit)->take($limit)->get();
                if($model === 'User'){
                    $data = $model_name->orderBy($orderBy, $order)->skip($page * $limit)->take($limit)->with('role')->with('office')->get();
                }
                elseif ($model === 'WithdrawalRequest') {
                    $data = $model_name->orderBy($orderBy, $order)->skip($page * $limit)->take($limit)->with('user')->with('office')->with('inventory')->get();
                }
                else {
                    $data = $model_name->orderBy($orderBy, $order)->skip($page * $limit)->take($limit)->get();
                }
            } else {
                if($model === 'User'){
                    $data = $model_name->skip($page * $limit)->take($limit)->with('role')->with('office')->get();
                }
                elseif ($model === 'WithdrawalRequest') {
                    $data = $model_name->skip($page * $limit)->take($limit)->with('user')->with('office')->with('inventory')->get();
                }
                else {
                    $data = $model_name->skip($page * $limit)->take($limit)->get();
                }
                // $data = $model === 'User' ? $model_name->skip($page * $limit)->take($limit)->with('role')->with('office')->get() :
                //     $model_name->skip($page * $limit)->take($limit)->get();
            }
        }

        if (isset($filters)) {
            $where_arr = [];
            for ($index = 0; $index < count($filters); $index++) {
                if ($filters[$index]->operator === 'contains') array_push($where_arr, [$filters[$index]->column, 'like', '%' . $filters[$index]->value . '%']);
                if ($filters[$index]->operator === 'matches with') array_push($where_arr, [$filters[$index]->column, '=', $filters[$index]->value]);
                if ($filters[$index]->operator === 'ends with') array_push($where_arr, [$filters[$index]->column, 'like', '%' . $filters[$index]->value]);
                if ($filters[$index]->operator === 'starts with') array_push($where_arr, [$filters[$index]->column, 'like', $filters[$index]->value . '%']);
                if ($filters[$index]->operator === 'is empty') array_push($where_arr, [$filters[$index]->column, '=', null]);
                if ($filters[$index]->operator === 'not empty') array_push($where_arr, [$filters[$index]->column, '!=', null]);
            }

            $rows_count = $model_name->where($where_arr)->count();

            if ($orderBy) {
                // $data = $model === 'User' ? $model_name->where($where_arr)->orderBy($orderBy, $order)->skip($page * $limit)->take($limit)->with('role')->with('office')->get() :
                //     $model_name->where($where_arr)->orderBy($orderBy, $order)->skip($page * $limit)->take($limit)->get();
                if($model === 'User'){
                    $data = $model_name->where($where_arr)->orderBy($orderBy, $order)->skip($page * $limit)->take($limit)->with('role')->with('office')->get();
                }
                elseif ($model === 'WithdrawalRequest') {
                    $data = $model_name->where($where_arr)->orderBy($orderBy, $order)->skip($page * $limit)->take($limit)->with('user')->with('office')->with('inventory')->get();
                }
                else{
                    $data = $model_name->where($where_arr)->orderBy($orderBy, $order)->skip($page * $limit)->take($limit)->get();
                }
            } else {
                if($model === 'User'){
                    $data = $model_name->skip($page * $limit)->take($limit)->with('role')->with('office')->get();
                }
                elseif ($model === 'WithdrawalRequest') {
                    $data = $model_name->skip($page * $limit)->take($limit)->with('user')->with('office')->with('inventory')->get();
                }
                else {
                    $data = $model_name->skip($page * $limit)->take($limit)->get();
                }
            }
        }

        return ['data' => $data, 'rows' => $rows_count];
    }
}
