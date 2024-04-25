<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Patient;

class PatientController extends Controller
{
    public function index() {
        $patients = Patient::orderBy('id', 'desc')->get();

        foreach($patients as $patient)
            if(!isset($patient->foto)) {
                $patient->foto;
            } else {
                $patient->foto = '';
            }

            $img = [];

        return view('patients.index', compact('patients', 'img'));

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
        $img = $request->all();

        
        if ($request->foto) {
            $img['foto'] = $request->foto->store('imgs');
        }

        $img = Patient::create($img);
        return redirect()->route('patients-index')->with('success', 'Paciente cadastrado com sucesso!');

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
