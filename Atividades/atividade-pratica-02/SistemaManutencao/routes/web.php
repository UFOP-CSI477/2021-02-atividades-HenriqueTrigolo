<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UserController;

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
    return view('index');
})->name('pagina_inicial');

Route::get('/suporte', function () {
    return view('suporte');
})->name('suporte');

Route::get('/administrativa', function () {
    return view('administrativa');
})->name('administrativa');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::resource('/registros', RegistroController::Class);
Route::resource('/equipamentos', EquipamentoController::Class);
Route::resource('/users', UserController::Class);
