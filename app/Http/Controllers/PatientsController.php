<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Gender;
use App\Models\Service;

class PatientsController extends Controller
{
    public function register_patient(Request $request){
        $patient = Patient::create([
            "name" =>$request->name,
            "dob"=>$request->dob,
        ]);

        $gender = new Gender(array('gender'=>$request->gender));
        $patient->gender()->save($gender);

        $service = new Service(array(
            'type_of_service'=>$request->servicetype,
            'general_comments'=>$request->comment
        ));
        $patient->service()->save($service);


        $patients = Patient::with('gender')->with('service')->get();

       return $this->patients();

    }

    function patients(){
        $patients = Patient::with('gender')->with('service')->orderBy('created_at','desc')->get();
        return  response()->json($patients,201);
    }
}
