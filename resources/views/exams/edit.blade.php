@extends('layouts.app')

@section('title', 'Edição de Exame')

@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-10">
            <h6>Edição de Exame</h6>
        </div>
        <div class="col-2">
            <a class="btn btn-secondary btn-sm" href="{{ route('dashboards-index') }}">Voltar</a>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Método PUT para atualização -->
                <div class="from-group my-3">
                    <label for="">Tipo de exame</label>
                    <select class="form-select" name="exam" id="exam">
                        @foreach($exams as $exam)
                            <option value="{{ $exam->id }}" {{ $patients->exam_id == $exam->id ? 'selected' : '' }}>{{ $exam->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-3">
                    <label for="">Paciente</label>
                    <select class="form-select" name="patient_id" id="patient_id">
                        @foreach($patients as $patient)
                            <option value="{{ $patient->id }}" {{ $exam->patient_id == $patient->id ? 'selected' : '' }}>{{ $patient->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-3">
                    <label for="">Foto</label>
                    <input type="file" class="form-control" name="foto">
                </div>
                <div class="form-group my-3">
                    <input type="submit" class="btn btn-primary btn-sm" value="Atualizar">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
