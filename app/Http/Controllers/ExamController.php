<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Exam;
use App\Models\Patient;

class ExamController extends Controller
{
    public function index() {
        $exams = Exam::orderBy('id', 'desc')->with('patient')->get(); 
    
        // Verifica se cada exame tem uma foto; se não, define uma string vazia
        foreach($exams as $exam)
            if (isset($exam->foto)) {
                $exam->foto;
            } else {
                $exam->foto = '';
            }

    
        $patients = Patient::all();
        $produto = [];
        return view('exams.index', compact('exams', 'patients', 'produto'));
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
        $produto = $request->all();

        if ($request->foto) {
            $produto['foto'] = $request->foto->store('produtos');
        }

        $produto = Exam::create($produto);
        return redirect()->route('exams-index')->with('sucess', 'Produto cadastrado com sucesso');
    }

    public function edit($id) {
        $exams = Exam::findOrFail($id);
        $patients = Patient::all();
        return view('exams.edit', ['exams'=>$exams, 'patients'=>$patients]);
    }
}
