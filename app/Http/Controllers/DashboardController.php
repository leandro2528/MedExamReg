<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Patient;
use App\Models\Exam;

class DashboardController extends Controller
{
    public function index() {
        
        $exams = Exam::with('patient')->get();
        $patients = Patient::all();
        $totalPatients = Patient::count();

        return view('dashboards.index', 
        [ 
            'exams'=>$exams,
            'patients'=>$patients,
            'totalPatients'=>$totalPatients
        ]
        
    );
    }
}
