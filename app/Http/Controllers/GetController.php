<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\DocumentRetentions;
use App\Models\Inventory;
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
    public function getNewBoxCode ($officeID){
        $officeAcronym = Office::where('id', $officeID)->value('acronym');
        $currentYear = date('Y');
        $boxCodePattern = "/^[A-Z]{4}-\d{4}-\d{3}$/";
        $lastBox = Inventory::where('office_id', $officeID)->orderBy('box_code','desc')->value('box_code');
        if (preg_match($boxCodePattern, $lastBox)) {
            $lastBoxArray = explode("-", $lastBox);
            $lastBoxCount = $currentYear==$lastBoxArray[1]? intval($lastBoxArray[2]): 0;
            $newBoxCode = $lastBoxArray[0] . '-' . $currentYear . '-' . str_pad($lastBoxCount+1, 3, "0", STR_PAD_LEFT);
        } else {
            $newBoxCode = $officeAcronym . '-' . $currentYear . '-' . str_pad(1, 3, "0", STR_PAD_LEFT);
        }
        return $newBoxCode;
    }

}
