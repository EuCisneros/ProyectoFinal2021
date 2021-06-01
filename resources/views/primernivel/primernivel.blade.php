@extends('layouts.layouts')
<body>
<hr>
<hr>
<nav class="navbar navbar-light navbar-expand-lg" style="background-color: #40E0D0;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('primernivel.agenda') }}">Agenda Visual</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('primernivel.mañana') }}">Por la Mañana</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('primernivel.tarde') }}">Por la Tarde</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('primernivel.dormir') }}">Antes de Dormir</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


</body>
