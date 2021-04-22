<?php

use App\Http\Controllers\InicioController;
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

Route::get('/bienvenida/{nombre?}/{apellido?}', [InicioController::class, 'bienvenida']);

Route::get('/contacto', [InicioController::class, 'contacto']);

Route::get('/hola/{nombre}', function($nombre){
    return "Hola " . $nombre . ", Juguemos League of Legends!";
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
