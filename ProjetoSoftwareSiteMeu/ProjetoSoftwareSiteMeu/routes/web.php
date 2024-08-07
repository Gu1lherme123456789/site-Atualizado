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

Route::get('/Avaliacao', function () {
    return view('Avaliacao');
});

Route::get('/PaginaMatematica', function () {
    return view('PaginaMatematica');
});

Route::get('/PaginaPortugues', function () {
    return view('PaginaPortugues');
});

Route::get('/PaginaHistoria', function () {
    return view('PaginaHistoria');
});

Route::get('/PaginaGeografia', function () {
    return view('PaginaGeografia');
});

Route::get('/PaginaQuimica', function () {
    return view('PaginaQuimica');
});

Route::get('/PaginaFisica', function () {
    return view('PaginaFisica');
});

Route::get('/PaginaBiologia', function () {
    return view('PaginaBiologia');
});

Route::get('/Favoritas', function () {
    return view('Favoritas');
});

Route::get('/Contato', function () {
    return view('Contato');
});

