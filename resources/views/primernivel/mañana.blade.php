<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Por la Mañana</title>
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
            <div class="col-8 text-center mt-5">
                <div class="row">
                    <div class="col-14 text-center mt-3">

                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="background-color: #01918E; border:6px solid Teal">
                            <div class="carousel-inner">
                                <div class="carousel-item active ">
                                    <img src="{{ asset ('images/D1.jpg')}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset ('images/D2.jpg')}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset ('images/D3.jpg')}}" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="card-body">
                                <h5 class="card-title my-2">Actividades que realizamos por la mañana</h5>
                                <div class="d-card-text">
                                    -Por la mañana nos lavamos los dientes y el rostro.
                                </div>
                                <div class="d-card-text">
                                    -Luego comemos un rico y nutritivo desayuno.
                                </div>
                                <div class="d-card-text">
                                    -Y tambien nos damos un baño.
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