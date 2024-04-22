@extends('layouts.app')

@section('title', 'Dashsboard')

@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-6">

            <div class="card p-3">
                <h6 class="text-center">DASHBOARD</h6>
                <div class="btn-info-patients d-flex justify-content-between mt-4">
                    <a class="btn border px-5" href="">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-hearts" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.5 1.246c.832-.855 2.913.642 0 2.566-2.913-1.924-.832-3.421 0-2.566M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4m13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276ZM15 2.165c.555-.57 1.942.428 0 1.711-1.942-1.283-.555-2.281 0-1.71Z"/>
                            </svg>
                        </span>
                        <span class="ms-4">00 - Pacientes</span>
                    </a>
                    <a class="btn border px-5" href="">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
                                <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
                            </svg>
                        </span>
                        <span class="ms-4">00 - Exames</span>
                    </a>
                </div>
                <!-- fIM  btn-info-patients-->

                <div class="card my-4 d-flex flex-row justify-content-between p-4" style="background-color: #F8F8FF">
                    <div class="image-user">
                        <div class="name-user text-center mb-3"><h6>Leandro Carvalho</h6></div>
                        <div class="image-user"><img style="width: 140px;" src="{{ asset('image/image-user.png') }}" alt=""></div>
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <a class="btn btn-outline-secondary btn-sm" href="">Editar meu Perfil</a>
                        <a class="btn btn-info my-2 btn-sm" href="">Todos os Pacientes</a>
                        <a class="btn btn-info btn-sm" href="">Adicionar Pacientes</a>
                    </div>
                </div>
                <!-- fim perfil user -->

                <div class="table-exams-updated">
                    <h4 class="text-center">Exames Laboratorias</h4>
                    <h6 class="text-center my-2">Últimos Atualizados</h6>
                    <table class="table table-bordered table-striped table-hover-">
                        <thead style="font-size: 12px;">
                            <tr>
                                <th>Pacientes</th>
                                <th>Tipo de Exame</th>
                                <th>Data</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 10px;">
                            <tr>
                                <td>Pacientes Teste</td>
                                <td>Exame Teste</td>
                                <td>22/04/2024</td>
                                <td class="d-flex">
                                    <a class="btn btn-sm" href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                        </svg>
                                    </a>
                                    <button class="btn btn-sm ms-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Pacientes Teste</td>
                                <td>Exame Teste</td>
                                <td>22/04/2024</td>
                                <td class="d-flex">
                                    <a class="btn btn-sm" href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                        </svg>
                                    </a>
                                    <button class="btn btn-sm ms-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Pacientes Teste</td>
                                <td>Exame Teste</td>
                                <td>22/04/2024</td>
                                <td class="d-flex">
                                    <a class="btn btn-sm" href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                        </svg>
                                    </a>
                                    <button class="btn btn-sm ms-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- fim tabelas exames atualizados -->
                </div>

            </div>
        </div>
        <div class="col-6">
            <div class="card p-3">
                <h6 class="text-center">PACIENTE DA CLÍNICA</h6>
                <div class="btn-search mt-4">
               
                    <form action="" class="form-control d-flex justify-content-end">
                        <input type="text" class="bg-transparent border-0 w-100 custom-outline-0" name="search" placeholder="Pesquisar pacientes">
                        <button class="btn custom-outline-0">Buscar</button>
                    </form>
                    
                </div>
                <!-- fIM btn search-->
                <div class="card-box-info-pacient d-flex justify-content-between">
                    <div class="d-flex justify-content-cetner align-items-center card w-100 py-3">
                        <img style="width: 100px;"  src="{{ asset('image/image-user.png') }}" alt="">
                        <h6 class="my-3">Nome do paciente</h6>
                        <div class="btn-info-pacient">
                            <a class="btn btn-sm" href="">01</a>
                            <a class="btn btn-sm" href="">02</a>
                            <a class="btn btn-sm" href="">03</a>
                        </div>
                    </div>

                    <div class="d-flex justify-content-cetner align-items-center card w-100 py-3 mx-3">
                        <img style="width: 100px;"  src="{{ asset('image/image-user.png') }}" alt="">
                        <h6 class="my-3">Nome do paciente</h6>
                        <div class="btn-info-pacient">
                            <a class="btn btn-sm" href="">01</a>
                            <a class="btn btn-sm" href="">02</a>
                            <a class="btn btn-sm" href="">03</a>
                        </div>
                    </div>

                    <div class="d-flex justify-content-cetner align-items-center card w-100 py-3">
                        <img style="width: 100px;"  src="{{ asset('image/image-user.png') }}" alt="">
                        <h6 class="my-3">Nome do paciente</h6>
                        <div class="btn-info-pacient">
                            <a class="btn btn-sm" href="">01</a>
                            <a class="btn btn-sm" href="">02</a>
                            <a class="btn btn-sm" href="">03</a>
                        </div>
                    </div>
                </div>
                <!-- primeira fila dos cards -->
                <div class="card-box-info-pacient d-flex justify-content-between my-3">
                    <div class="d-flex justify-content-cetner align-items-center card w-100 py-3">
                        <img style="width: 100px;"  src="{{ asset('image/image-user.png') }}" alt="">
                        <h6 class="my-3">Nome do paciente</h6>
                        <div class="btn-info-pacient">
                            <a class="btn btn-sm" href="">01</a>
                            <a class="btn btn-sm" href="">02</a>
                            <a class="btn btn-sm" href="">03</a>
                        </div>
                    </div>

                    <div class="d-flex justify-content-cetner align-items-center card w-100 py-3 mx-3">
                        <img style="width: 100px;"  src="{{ asset('image/image-user.png') }}" alt="">
                        <h6 class="my-3">Nome do paciente</h6>
                        <div class="btn-info-pacient">
                            <a class="btn btn-sm" href="">01</a>
                            <a class="btn btn-sm" href="">02</a>
                            <a class="btn btn-sm" href="">03</a>
                        </div>
                    </div>

                    <div class="d-flex justify-content-cetner align-items-center card w-100 py-3">
                        <img style="width: 100px;"  src="{{ asset('image/image-user.png') }}" alt="">
                        <h6 class="my-3">Nome do paciente</h6>
                        <div class="btn-info-pacient">
                            <a class="btn btn-sm" href="">01</a>
                            <a class="btn btn-sm" href="">02</a>
                            <a class="btn btn-sm" href="">03</a>
                        </div>
                    </div>
                </div>
                <!-- segnda fila dos cards -->
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