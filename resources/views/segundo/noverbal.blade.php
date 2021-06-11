<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
@include('welcome')
    @include('layouts.app')

    <section class="container">
        <div class="row justify-content-center">
            <div class="col-7 text-center mt-10">
                <div class="row">
                    <div class="col-14 text-center mt-3">

                        <nav class="navbar navbar-light navbar-expand-lg"
                            style="background-color: #01918E; border:2px solid Teal">
                            <div class="container-fluid">
                                <div class="collapse navbar-collapse" id="navbarText">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('segundo.escucha') }}">Habilidades de
                                                Escucha</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('segundo.noverbal') }}">Habilidades No
                                                Verbales</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('segundo.conversacion') }}">Habilidades
                                                de Conversación</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center mt-10">
                <div class="row">

                    <div class="col-12 text-center mt-5">
                        <div class="card m-auto" style="width: 40rem; border:2px solid LightSalmon;">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/qvmOGy7Pb40" title="YouTube video player" frameborder></iframe>
                            </div>
                            <div class="card-body" style="background-color: #F9C787;">
                                <h5 class="card-title my-2">SIMON LO HACE</h5>
                                <div class="d-card-text">
                                En esta dinámica los niños aprenden a realizar actividades  viendo lo que otros hacen sin necesidad de forzar ya que se realiza por medio de un juego.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-5">
                        <div class="card m-auto" style="width: 40rem; border:2px solid LightSalmon;">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/HGDixnCWQAE" title="YouTube video player" frameborder></iframe>
                            </div>
                            <div class="card-body" style="background-color: #F9C787;">
                                <h5 class="card-title my-2">ADIVINA CON MIMICA</h5>
                                <div class="d-card-text">
                                Con esta actividad los niños desarrollan sus habilidades de comunicación no verbal, realizando gestos y movimientos con el cuerpo.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
</body>