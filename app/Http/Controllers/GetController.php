<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;

class GetController extends Controller
{
    //
    public function getOffices (){
        $offices = Office::select('name', 'id', 'acronym')->get();
        return $offices;
    }
}
