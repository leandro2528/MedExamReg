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

    public function create() {
        $patients = Patient::all();
        return view('patients.create', 
    
        [
            'patients'=>$patients
        ]
    );

    }

    public function store(Request $request) {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'senha' => 'required',
            'cpf' => 'required',
            'telefone' => 'required',
            'cidade' => 'required',
            'foto' => 'required',
            'observacao' => 'required'
        ]);

        Patient::create($request->all());
        return redirect()->route('patients-index');

    }
}
