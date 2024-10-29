<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Megacable</title>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <img src="logo.jpg" class="img-fluid" alt="50" width="50">
                <a class="navbar-brand" href="#">Megacable</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Menu
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                <li><a class="dropdown-item" href="{{ route('register') }}">Registro</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <br><br>


    <div class="container ">
        <div class="row gy-5">
            <div class="col-6">
                <div class="mb-5 card border-primary " style="max-width: 18rem;">
                    <div class="card-header">Misión</div>
                    <div class="card-body text-primary">
                        <h5 class="card-title">Proporcionar servicios de entretenimiento, telecomunicaciones y
                            soluciones
                            logísticas, empresariales y residenciales que excedan las expectativas del cliente.</h5>

                    </div>

                </div>
            </div>
            <div class="col-6">
                <div class="mb-3 card border-secondary" style="max-width: 18rem;">
                    <div class="card-header">Visión</div>
                    <div class="card-body text-secondary">
                        <h5 class="card-title">Ser la mejor compañía de telecomunicaciones del país.</h5>

                    </div>
                </div>

            </div>

        </div>
    </div>














</body>

<footer>
    <div class="container mx-auto">
        Megacable Derechos reservados 2024

    </div>
</footer>

</html>
