@extends('layouts.app')

@section('title', 'Listagem de pacientes')

@section('content')
<div class="container-fluid">
    <div class="row my-3">
        <div class="">
            <h5>PACIENTES DA CLÍNCA</h5>
            <a class="btn btn-primary btn-sm my-3" href="{{ route('patients-create') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                </svg>
            </a>
            <form action="" class="form-control d-flex justify-content-end">
                <input type="text" class="bg-transparent border-0 w-100 custom-outline-0" name="search" placeholder="Pesquisar pacientes">
                <button class="btn custom-outline-0">Buscar</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col d-flex row flex-wrap justify-content-center">
        @foreach($patients as $patient)

            <div class="card-box" style="width: 230px;">
                <div class="card p-4 mb-3 text-center">
                    <div class="card-image"><img style="width: 120px;" src="{{ $patient->foto }}" alt=""></div>
                    <div class="card-title mt-3 text-secondary"><h6>{{ $patient->nome }}</h6></div>
                    <div class="btn-info-pacient">
                        <a class="btn btn-sm" href="{{ route('patients-edit', ['id'=>$patient->id]) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg>
                        </a>
                        <a class="btn btn-sm" href="{{ route('patients-create') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                            </svg>
                        </a>
                        <a class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                                <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
           
        @endforeach
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Dados do Paciente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
            <h6>Paciente: {{ $patient->nome }}</h6>
            <h6>Email: {{ $patient->email }}</h6>
            <h6>CPF: {{ $patient->cpf }}</h6>
            <h6>Telefone: {{ $patient->telefone }}</h6>
            <h6>Observações: {{ $patient->observacao }}</h6></br>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">PDF</button>
            </div>
        </div>
    </div>
</div>


@endsection

<style>
    /* Remover a borda de foco ao clicar */
    .custom-outline-0:focus {
        outline: none !important;
        box-shadow: none !important;
    }
</style>