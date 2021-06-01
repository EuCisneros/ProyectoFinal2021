@extends('layouts.layouts')
<body>
<div id="app">
    <h5>No pude realizar el foro</h5>

    <nav class="navbar navbar-light bg-main">
        <div class="container p-4">
            <a class="navbar-brand m-auto" href="#">
                <img src="{{asset('images/sad.gif')}}" width="150" alt="" loading="lazy">
            </a>
        </div>
    </nav>
    <section class="container-fluid content py-5">
        <div class="row justify-content-center">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Correo</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su correo">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Ingresar Texto</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
  <label for="formFileMultiple" class="form-label">Seleccionar Archivos</label>
  <input class="form-control" type="file" id="formFileMultiple" multiple>
  <button type="button" class="btn btn-primary">Enviar</button>
</div>

        </div>
    </section>
</div>

</body>