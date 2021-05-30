<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function comunidad ()
    {
        return view('comunidad.Comunidad');
    }

    public function derechos ()
    {
        return view('derechos.Derechos');
    }

    public function informacion ()
    {
        return view('informacion.Informacion');
    }

    public function mision ()
    {
        return view('mision.mision');
    }
    public function primernivel ()
    {
        return view('primernivel.Primernivel');

    }
    public function segundo ()
    {
        return view('segundo.segundonivel');

    }
    public function dormir ()
    {
        return view('primernivel.dormir');
    }
    public function tarde ()
    {
        return view('primernivel.tarde');
    }
    public function mañana ()
    {
        return view('primernivel.mañana');
    }
    public function conversacion ()
    {
    return view('segundo.conversacion');
    }
    public function escuchar ()
    {
        return view('segundo.escuchar');
    }
    public function noverbal ()
    {
        return view('segundo.noverbal');
    }
 
}