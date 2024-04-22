<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') - SISTEMA DE GESTÃO PARA EXAMES MEDICOS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body style="background-color: #F0F8FF	">
        <div class="container-fluid">
            <div class="row shadow">
                <div class="col-4 d-flex justify-content-start align-items-center">
                    <h5>MEDEXAMREG</h5>
                </div>
                <div class="col-4">
                    <nav class="navbar navbar-expand">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dashboards-index') }}">DASHBOARD</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('patients-index') }}">PACIENTES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">EXAMES</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <h6>LOGOUT</h6>
                </div>
            </div>
        </div>

        @yield('content')


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>