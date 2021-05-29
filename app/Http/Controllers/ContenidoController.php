<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContenidoController extends Controller
{
    public function primernivel ()
    {
        return view('primernivel.primernivel');
    }
}
