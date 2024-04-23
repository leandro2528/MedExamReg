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
        <div class="col">
            <table class="table table-hover table-striped table-borderd">
                <thead>
                    <tr>
                        <th>Paciente</th>
                        <th>Tipo de Exame</th>
                        <th>Telefone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($exams as $exam)
                    <tr>
                        <td>{{ $exam->patient->nome }}</td>
                        <td>{{ $exam->exame }}</td>
                        <td>{{ $exam->patient->telefone }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection