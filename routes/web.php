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
    return view('home');
});

Route::get('/fornecedores', function () {
    return view('fornecedores');
});

Route::get('/fornecedores/cadastro', function () {
    return view('fornecedores-cadastro');
});

Route::get('/clientes', function () {
    return view('clientes');
});

Route::get('/clientes/cadastro', function () {
    return view('clientes-cadastro');
});

