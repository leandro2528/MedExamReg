<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Exam;
use App\Models\Patient;

class ExamController extends Controller
{
    public function index() {
        $exams = Exam::orderBy('id', 'desc')->with('patient')->get(); 
        $patients = Patient::all();
        return view('exams.index', 
        [
            'exams' => $exams, 'patients'=>$patients
        ]
    );

    }

    public function create() {
        $exams = Exam::all();
        $patients = Patient::all();
        return view('exams.create', 
        [
            'exams' => $exams, 'patients'=>$patients
        ]
    );

    }

    public function store(Request $request) {
        $request->validate([
            'patient_id' => 'required',
            'exame' => 'required'
        ]);

        Exam::create($request->all());
        return redirect()->route('exams-index');
    }
}
