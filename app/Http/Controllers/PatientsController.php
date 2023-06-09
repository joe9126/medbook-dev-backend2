<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientsController extends Controller
{
    public function register_patient(Request $request){
     $result =    Patient::create([
            name =>$request->name,
            dob=>$request->dob
        ]);

       /* if($result){

        }*/
    }
}
