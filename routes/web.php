<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;

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

//cadastrar********************************************
Route::get('/pessoa/cadastrar', 'PessoaController@create');
Route::post('/pessoa/cadastrar', 'PessoaController@store')->name('salvar_pessoa');

//listar***********************************************
Route::get('/pessoa/listar', 'PessoaController@show');

//excluir**********************************************
Route::get('/pessoa/excluir/{id}', 'PessoaController@destroy')->name('excluir_pessoa');

//editar***********************************************
Route::get('/pessoa/editar/{id}', 'PessoaController@edit')->name('editar_pessoa');
Route::post('/pessoa/editar/{id}', 'PessoaController@update')->name('atualizar_pessoa');
