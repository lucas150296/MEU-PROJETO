<?php

use App\Http\Controllers\medicoController;
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

Route::get('/', 'principalController@index')->name('site.principal');

Route::get('/abriFicha', 'Ficha@index')->name('abriFicha');

Route::post('/salvaFicha', 'Ficha@salvaFicha')->name('ficha');
Route::get('/salvaFicha', 'Ficha@salvaFicha')->name('ficha');

Route::get('/ficha', 'Ficha@ficha')->name('cadastro');
Route::post('/ficha', 'Ficha@busca')->name('site.ficha');

Route::get('/nomePacientes', 'Ficha@nomePaciente')->name('nomePaciente');



Route::prefix('/cadastro')->group(function () {
    Route::get('/paciente', 'CadastroController@cadastro')->name('site.cadastro');
    Route::post('/paciente', 'CadastroController@salva')->name('site.cadastro');

    Route::get('/medico', 'medicoController@cadastro')->name('medico.cadastro');
    Route::post('/medico', 'medicoController@salva')->name('medico.cadastro');

});
