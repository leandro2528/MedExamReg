@extends('layouts.app')

@section('title', 'Listagem de Exames')

@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-10">
            <h6>Lista de Exames</h6>
        </div>
        <div class="col-2">
            <a class="btn btn-secondary btn-sm" href="{{ route('dashboards-index') }}">Voltar</a>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <form action="{{ route('exams-store') }}" method="POST">
                @csrf
                <div class="from-group my-3">
                    <label for="">Tipo de exame</label>
                    <select class="form-select" name="exame" id="exame">
                        <option value="select">-- Selecione um exame --</option>
                        <option value="hemograma">Hemograma</option>
                        <option value="colesterol">Colesterol</option>
                        <option value="transaminase">Transaminase</option>
                        <option value="tsh e t4 livre">TSH e T4 Livre</option>
                    </select>
                </div>
                <div class="form-group my-3">
                    <label for="">Paciente</label>
                    <select class="form-select" name="patient_id" id="patient_id">
                        <option value="select">-- Selecione o paciente</option>
                        @foreach($patients as $patient)
                            <option value="{{ $patient->id }}">{{ $patient->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-3">
                    <input type="submit" class="btn btn-primary btn-sm" value="Cadastrar">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection