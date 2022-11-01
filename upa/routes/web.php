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

Route::get('/', 'principalController@principal')->name('site.principal');

Route::get('/cadastro', 'CadastroController@cadastro')->name('site.cadastro');
Route::post('/cadastro', 'CadastroController@salva')->name('site.cadastro');

Route::get('/abriFicha', 'Ficha@abriFicha')->name('abriFicha');

Route::post('/salvaFicha', 'Ficha@salvaFicha')->name('salvaFicha');
Route::get('/salvaFicha', 'Ficha@salvaFicha')->name('salvaFicha');


Route::get('/ficha', 'Ficha@ficha')->name('site.ficha');
Route::post('/ficha', 'Ficha@salva')->name('site.ficha');


