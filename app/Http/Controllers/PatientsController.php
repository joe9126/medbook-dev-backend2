<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientsController extends Controller
{
    public function register_patient(Request $request){
      Patient::create([
            "name" =>$request->name,
            "dob"=>$request->dob,
            "gender_id" =>$gender()->id,
            "service_id" =>$service()->id
        ]);

        Gender::create([
            'patient_id'=>$patient()->id,
            "gender" =>$request->gender
        ]);

        Service::create([
            'patient_id'=>$patient()->id,
            "service"=>$request->servicetype,
            "comment"=>$request->comment
        ]);

        $patients = Patients::all();

        return response()->json(["patients"=>$patients],201);
    }
}
