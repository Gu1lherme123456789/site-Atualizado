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
    return view('Login');
});

Route::get('/Comentarios', function () {
    return view('Comentarios');
});

Route::get('/Cadastro', function () {
    return view('Cadastro');
});

Route::get('/Duvidas', function () {
    return view('Duvidas');
});

Route::get('/Conteudos', function () {
    return view('Conteudos');
});

