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

use App\Models\Estado;
use App\Models\Produto;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ola', function(){
    return 'Ola, mundo';
});

Route::get('/estados', function(){

    $estados = Estado::all();
    return view('lista', ['dados' => $estados]);
});

Route::get('/estados/{id}', function($id){
    return Estado::find($id);
});

Route::get('/produtos', function(){

    $produtos = Produto::all();
    return view('lista', ['dados' => $produtos]);
});

Route::get('/produtos/{id}', function($id){
    
    $produtos = Produto::find($id);
    return view('lista', ['dados' => $produtos]);
});