@extends('layouts.app')

@section('title', 'Listagem de pacientes')

@section('content')
<div class="container">
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
        <div class="col">
        @foreach($patients as $patient)

            <div class="card-box d-flex flex-row">
                <div class="card">
                    <div class="card-image"><img style="width: 120px;" src="{{ $patient->foto }}" alt=""></div>
                    <div class="card-title">{{ $patient->nome }}</div>
                </div>
            </div>
           
        @endforeach
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