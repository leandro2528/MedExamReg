@extends('layouts.app')

@section('title', 'Listagem de Exames')

@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-10">
            <h6>Lista de Exames</h6>
            <a class="btn btn-primary btn-sm" href="{{ route('exams-create') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
                </svg>
            </a>
        </div>
        <div class="col-2">
            <a class="btn btn-secondary btn-sm" href="{{ route('exams-index') }}">Voltar</a>
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
                        <th>Foto</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($exams as $exam)
                    <tr>
                        <td>{{ $exam->patient->nome }}</td>
                        <td>{{ $exam->exame }}</td>
                        <td>{{ $exam->patient->telefone }}</td>
                        <td><img style="width: 60px; height: 60px; border-radius: 50%;" src="{{ $exam->foto ? url('storage/' . $exam->foto) : 'placeholder.jpg' }}" alt=""></td>
                        <td>
                            <a class="btn btn-sm" href="{{ route('exams-edit', ['id'=>$exam->id]) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection