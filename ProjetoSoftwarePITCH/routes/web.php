<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



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
/*Rota Avaliação */
Route::get('/Avaliacao', function () {
    return view('Avaliacao');
});
/*Rota Cadastro */
Route::get('/Cadastro', function () {
    return view('Cadastro');
});
/*Rota Calendario */
Route::get('/Calendario', function () {
    return view('Calendario');
});
/*Rota Comentarios */
Route::get('/Comentarios', function () {
    return view('Comentarios');
});
/*Rota Contato*/
Route::get('/Contato', function () {
    return view('Contato');
});
/*Rota Duvidas */
Route::get('/Duvidas', function () {
    return view('Duvidas');
});
/*Rota EditarSenha */
Route::get('/EditarSenha', function () {
    return view('EditarSenha');
});
/*Rota Favoritas */
Route::get('/Favoritas', function () {
    return view('Favoritas');
});
/*Rota para /" */
Route::get('/', function () {
    return view('inicialPage');
});

/*Rota Materias */Route::get('/Materias', function () {
    return view('Materias');
});

/*Rota das paginas de materias */Route::get('/PaginaBiologia', function () {
    return view('PaginaBiologia');
});

Route::get('/PaginaEspanhol', function () {
    return view('PaginaEspanhol');
});

Route::get('/PaginaFisica', function () {
    return view('PaginaFisica');
});

Route::get('/PaginaGeografia', function () {
    return view('PaginaGeografia');
});

Route::get('/PaginaHistoria', function () {
    return view('PaginaHistoria');
});

Route::get('/PaginaIngles', function () {
    return view('PaginaIngles');
});

Route::get('/PaginaMatematica', function () {
    return view('PaginaMatematica');
});

Route::get('/PaginaPortugues', function () {
    return view('PaginaPortugues');
});

Route::get('/PaginaQuimica', function () {
    return view('PaginaQuimica');
});

/*Rota Professores */Route::get('/Professores', function () {
    return view('Professores');
});

/*Rota Sobre */Route::get('/Sobre', function () {
    return view('Sobre');
});

/*Rota TermosdeUso */Route::get('/TermosdeUso', function () {
    return view('TermosdeUso');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Auth::routes();
