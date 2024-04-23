<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Patient;
use App\Models\Exam;

class DashboardController extends Controller
{
    public function index() {
        $patients = Patient::orderBy('id', 'desc')->get();
        $totalPatients = Patient::count();

        return view('dashboards.index', 
        [
            'patients'=>$patients,
            'totalPatients'=>$totalPatients
        ]
        
    );
    }
}
