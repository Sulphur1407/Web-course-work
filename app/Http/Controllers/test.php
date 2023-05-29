<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Diplom;
use App\Models\Patient;
use App\Models\DoctorPatient;

class Test extends Controller
{
    public function show_doctor($id){
        $doctor = Doctor::where("id", $id)->first();
        if ($doctor){
            $diploms = $doctor->diploms->all();
            $patients = $doctor->patients->all();
            return view("doctor", compact("doctor", "diploms", "patients"));

        }
    }

    public function show_patient($id){
        $patient = Patient::where("id", $id)->first();
        if ($patient){
            $doctors = $patient->doctors->all();
            return view("patient", compact("doctors", "patient"));

        }
    }
}
