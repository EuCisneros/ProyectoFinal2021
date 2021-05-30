@extends('layouts.layouts')
<body>
<hr>
<hr>
<nav class="navbar navbar-light navbar-expand-lg" style="background-color: #40E0D0;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('segundo.escuchar') }}">Habilidades de Escucha</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('segundo.noverbal') }}">Habilidades No Verbales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('segundo.conversacion') }}">Habilidades de Conversación</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    
</body>
