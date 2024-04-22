<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Patient;

class PatientController extends Controller
{
    public function index() {
        $patients = Patient::orderBy('id', 'desc')->get();
        return view('patients.index',
    
        [
            'patients'=>$patients
        ]
    );
    }
}
