<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\DocumentRetentions;
use Illuminate\Http\Request;

class GetController extends Controller
{
    //
    public function getOffices (){
        $offices = Office::select('name', 'id', 'acronym')->get();
        return $offices;
    }
    public function getRetentions (){
        $retentions = DocumentRetentions::all();
        return $retentions;
    }
}
