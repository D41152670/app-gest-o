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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/grid', function (){
    return view('pggrid');
});

Route::get('/form', function (){
    return view('pgform');
});

// Rota para fornecedores
Route::prefix('fornecedores')->group(function (){
    // index CURD = Create, Update, Read, Destroy
    Route::get('/', ['App\Http\Controllers\FornecedoresController', 'index'])->name('fornecedores');
    // create show the form
    Route::get('/create', ['App\Http\Controllers\FornecedoresController', 'create'])->name('create');
    // add
    Route::post('/store', ['App\Http\Controllers\FornecedoresController', 'store']);
    // edit form
    Route::get('/edit/{id}', ['App\Http\Controllers\FornecedoresController', 'edit'])->name('edit');
    // update form
    Route::post('/update', ['App\Http\Controllers\FornecedoresController', 'update'])->name('update');
    // destroy
    Route::get('/destroy/{id}', ['App\Http\Controllers\FornecedoresController', 'destroy']);
});

// Rota para unidades
Route::prefix('unidades')->group(function (){
    // index CURD = Create, Update, Read, Destroy
    Route::get('/', ['App\Http\Controllers\FornecedoresController', 'index'])->name('unidade');
    // create show the form
    Route::get('/create', ['App\Http\Controllers\FornecedoresController', 'create'])->name('unidade_create');
    // add
    Route::post('/store', ['App\Http\Controllers\FornecedoresController', 'store']);
    // edit form
    Route::get('/edit/{id}', ['App\Http\Controllers\FornecedoresController', 'edit'])->name('unidade_edit');
    // update form
    Route::get('/update', ['App\Http\Controllers\FornecedoresController', 'update'])->name('unidade_update');
    // destroy
    Route::get('/destroy/{id}', ['App\Http\Controllers\FornecedoresController', 'destroy']);
});
