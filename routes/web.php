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

// para ver las rutas - php artisan route:list
Route::resource('socios', 'SociosController');  //crea todas las vistas del controlador para 


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');