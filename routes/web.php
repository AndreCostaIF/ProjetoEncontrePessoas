<?php

use App\Http\Controllers\PessoasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [PessoasController::class, 'index'])->name('index');

Route::get('/cadastrar', [PessoasController::class, 'cadastro'])->name('cadastroPessoa');

Route::post('/cadastrarPessoa', [PessoasController::class, 'create'])->name('cadastroPessoaForm');