<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DatatableController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

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
    return view('home');
});

Route::get('/home', function () {
    // $locale = App::currentLocale();
    // return $locale;
    return view('home');
});


Route::resource('clientes',ClienteController::class);

// Esta ruta en realidad podria ser un metodo del ArticuloController
Route::get('dt/clientes',[DatatableController::class,'clientes'])->name('dt.clientes');
// Route::get('clientes/datatable',[ClienteController::class,'datatable'])->name('dt.clientes');

