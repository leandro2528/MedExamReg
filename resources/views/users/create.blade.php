@extends('layouts.app')

@section('title', 'Cadastro de Usuários')

@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-10">
            <h6>Cadastro de Usuários</h6>
        </div>
        <div class="col-2">
            <a class="btn btn-secondary btn-sm" href="{{ route('users-index') }}">Lista de Usuários</a>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <form action="{{ route('users-store') }}" method="POST">
                @csrf
                <div class="form-group my-3">
                    <label for="">Nome</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group my-3">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group my-3">
                    <label for="">Senha</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group my-3">
                    <input type="submit" class="btn btn-primary btn-sm" value="Cadastrar">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection