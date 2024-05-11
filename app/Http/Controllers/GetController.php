<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\Role;
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
    public function getRoles (){
        $roles = Role::select('name', 'id', 'abbreviation')->get();
        return $roles;
    }
    public function getRetentions (){
        $retentions = DocumentRetentions::all();
        return $retentions;
    }
    public function getNewBoxCode ($officeID){
        $officeAcronym = Office::where('id', $officeID)->value('acronym');
        $currentYear = date('Y');
        $boxCodePattern1 = "/^([A-Z]+)-(\d+)-(\d{4})$/";
        $boxCodePattern2 = "/^LHIO-([A-Z]+)-(\d+)-(\d{4})$/";
        $lastBox = Inventory::where('office_id', $officeID)->orderBy('box_code','desc')->value('box_code');

        if (preg_match($boxCodePattern1, $lastBox)) {
            $lastBoxArray = explode("-", $lastBox);
            $lastBoxCount = $currentYear==$lastBoxArray[2]? intval($lastBoxArray[1]): 0;
            $newBoxCode = $officeAcronym . '-' . str_pad($lastBoxCount+1, 3, "0", STR_PAD_LEFT). '-' . $currentYear ;
        } 
        else if (preg_match($boxCodePattern2, $lastBox)){
            $lastBoxArray = explode("-", $lastBox);
            $lastBoxCount = $currentYear==$lastBoxArray[3]? intval($lastBoxArray[2]): 0;
            $newBoxCode = $officeAcronym . '-' . str_pad($lastBoxCount+1, 3, "0", STR_PAD_LEFT). '-' . $currentYear ;
        }
        else {
            $newBoxCode = $officeAcronym . '-' . str_pad(1, 3, "0", STR_PAD_LEFT). '-' . $currentYear ;
        }
        return $newBoxCode;
    }

}
