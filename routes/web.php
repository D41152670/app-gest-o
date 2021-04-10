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
    Route::get('/update', ['App\Http\Controllers\FornecedoresController', 'update'])->name('update');
    // destroy
    Route::get('/destroy', ['App\Http\Controllers\FornecedoresController', 'destroy']);
    // show grid
    Route::get('/fornecedores', ['App\Http\Controllers\FornecedoresController', 'show']);
});


