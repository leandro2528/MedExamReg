@extends('layouts.app')

@section('title', 'Cadastro de pacientes')

@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="">
            <h5>CADASTRO DE PACIENTES</h5>
            <a class="btn btn-secondary btn-sm my-3" href="{{ route('patients-index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708z"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-between">
            <form action="{{ route('patients-store') }}" method="POST" onsubmit="alert('Cadastro realizado com sucesso!')" enctype="multipart/form-data">
                @csrf
                <div class="form-box d-flex">
                    <div class="form-group my-3">
                        <label for="">Nome</label>
                        <input type="text" class="form-control" name="nome" required>
                    </div>
                    <div class="form-group my-3 mx-3">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group my-3">
                        <label for="">Senha</label>
                        <input type="password" class="form-control" name="senha"required>
                    </div>
                    <div class="form-group my-3 ms-3">
                        <label for="">CPF</label>
                        <input type="text" class="form-control" name="cpf" required>
                    </div>
                </div>
                <div class="form-box d-flex">
                    <div class="form-group my-3">
                        <label for="">Telefone</label>
                        <input type="text" class="form-control" name="telefone" required>
                    </div>
                    <div class="form-group my-3 mx-3">
                        <label for="">Cidade</label>
                        <input type="text" class="form-control" name="cidade" required>
                    </div>
                    <div class="form-group my-3">
                        <label for="">Foto</label>
                        <input type="file" class="form-control" name="foto" required>
                    </div>
                    <div class="form-group my-3 ms-3">
                        <label for="">Observação</label>
                        <input type="text" class="form-control" name="observacao" required>
                    </div>
                </div>
                <div class="form-box">
                    <div class="form-group my-3">
                        <input type="submit" class="btn btn-primary" value="Cadastrar">
                    </div>
                </div>
            </form>
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