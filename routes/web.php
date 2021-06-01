<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ayuda/Ayuda', [App\Http\Controllers\WreckController::class, 'wreck'])->name('ayuda.Ayuda');
Route::get('/comunidad/Comunidad', [App\Http\Controllers\MenuController::class, 'comunidad'])->name('comunidad.Comunidad');
Route::get('/derechos/Derechos', [App\Http\Controllers\MenuController::class, 'derechos'])->name('derechos.Derechos');
Route::get('/informacion/Informacion', [App\Http\Controllers\MenuController::class, 'informacion'])->name('informacion.Informacion');
Route::get('/mision/mision', [App\Http\Controllers\MenuController::class, 'mision'])->name('mision.mision');

Route::get('/primernivel/primernivel', [App\Http\Controllers\MenuController::class, 'primernivel'])->name('primernivel.primernivel');
Route::get('/primernivel/agenda', [App\Http\Controllers\MenuController::class, 'agenda'])->name('primernivel.agenda');
Route::get('/primernivel/dormir', [App\Http\Controllers\MenuController::class, 'dormir'])->name('primernivel.dormir');
Route::get('/primernivel/mañana', [App\Http\Controllers\MenuController::class, 'mañana'])->name('primernivel.mañana');
Route::get('/primernivel/tarde', [App\Http\Controllers\MenuController::class, 'tarde'])->name('primernivel.tarde');

Route::get('/segundo/segundonivel', [App\Http\Controllers\MenuController::class, 'segundo'])->name('segundo.segundonivel');
Route::get('/segundo/conversacion', [App\Http\Controllers\MenuController::class, 'conversacion'])->name('segundo.conversacion');
Route::get('/segundo/escuchar', [App\Http\Controllers\MenuController::class, 'escuchar'])->name('segundo.escuchar');
Route::get('/segundo/noverbal', [App\Http\Controllers\MenuController::class, 'noverbal'])->name('segundo.noverbal');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
