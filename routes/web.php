<?php

use Illuminate\Support\Facades\App;
use App\Http\Controllers\SociosController;


Route::get('/', function () {
    return view('welcome');
});
///// Socios //////

Route::get('/socios', function () {
    return view('socios.index');
});
//Route::get('/socios/crear',[SociosController::class,'create']);


Route::resource('socios', 'SociosController');  //crea todas las vistas del controlador

