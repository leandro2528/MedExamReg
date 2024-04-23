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

    public function edit($id) {
        $patients = Patient::where('id', $id)->first();
        return view('patients.edit',
        [
            'patients'=>$patients
        ]
    );
    }

    public function update(Request $request, $id) {
        $date = [
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => $request->senha,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone,
            'cidade' => $request->cidade,
            'foto' => $request->foto,
            'observacao' => $request->observacao
        ];

        $patients = Patient::where('id', $id)->update($date);
        return redirect()->route('patients-index');

    }
}
