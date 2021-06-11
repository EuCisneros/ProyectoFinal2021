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
                        <div class="card m-auto" style="width: 40rem; border:2px solid Gold;">
                            <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/w_RHmkNXjP4" title="YouTube video player" frameborder></iframe>
                            </div>
                            <div class="card-body" style="background-color: #DAF7A6;">
                                <h5 class="card-title my-2">SIMON DICE</h5>
                                <div class="d-card-text">
                                Te divertiras siguiendo ordenes a simon!!! con este video los niños podran aprender a escuchar lo que se les indica hacer y les ayudara a desarrollar habilidades auditivas.
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 text-center mt-5">
                        <div class="card m-auto" style="width: 40rem; border:2px solid Gold;">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/MWcl7Lef_Iw" title="YouTube video player"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="card-body" style="background-color: #DAF7A6;">
                                <h5 class="card-title my-2">CONGELADOS</h5>
                                <div class="d-card-text">
                                    Esta dinamica ayuda la comprencion auiditiva, anima a tu hijo a bailar o moverse con
                                    música. Cuando la música se detenga, todos deben quedarse inmóviles.
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 text-center mt-5">
                        <div class="card m-auto" style="width: 40rem; border:2px solid Gold;">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/C6ceoTxSLIQ" title="YouTube video player" frameborder></iframe>
                            </div>
                            <div class="card-body" style="background-color: #DAF7A6;">
                                <h5 class="card-title my-2">ADIVINA QUIEN</h5>
                                <div class="d-card-text">
                                    Con esta actividad los niños aprenden a comprender y asociar las ideas para encontrar las respuestas correctas.
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