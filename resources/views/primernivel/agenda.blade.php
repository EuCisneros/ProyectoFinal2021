<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Visual</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    @include('welcome')
    @include('layouts.app')
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-5 text-center mt-10">
                <div class="row">
                    <div class="col-14 text-center mt-10">
                        <nav class="navbar navbar-light navbar-expand-lg"
                            style="background-color: #01918E; border:2px solid Teal">
                            <div class="container-fluid">
                                <div class="collapse navbar-collapse" id="navbarText">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('primernivel.agenda') }}">Agenda
                                                Visual</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('primernivel.mañana') }}">Por la
                                                Mañana</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('primernivel.tarde') }}">Por la Tarde</a>
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
            <div class="col-12 text-center mt-5">
                <div class="row">

            

                    <div class="col-6 text-center mt-12">
                        <div class="card m-auto" style="width: 30rem; border:2px solid MediumOrchid;">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/Yzdebzz4oDU" title="YouTube video player" frameborder></iframe>
                            </div>
                            <div class="card-body" style="background-color: #DDA0DD;">
                                <h5 class="card-title my-2">Aprenderemos a Crear una Agenda Visual</h5>
                                <div class="d-card-text">
                                    Aprenderemos a crear la agenda visual paso a paso y porque es bueno tener esta util herramienta.
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-6 text-center mt-12">
                        <div class="card m-auto" style="width: 30rem; border:2px solid MediumOrchid;">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/z3xhfkHGhwU" title="YouTube video player" frameborder></iframe>
                            </div>
                            <div class="card-body" style="background-color: #DDA0DD;">
                                <h5 class="card-title my-2">Como utilizar la Agenda Visual</h5>
                                <div class="d-card-text">
                                    Con este video recibiremos los consejos y sugerencias de como podemos hacer uso de esta herramienta
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