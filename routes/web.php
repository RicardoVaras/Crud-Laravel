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


Route::get('/', 'ClienteController@index') ->name('index');
Route::post('/add', 'ClienteController@add') ->name('add');
Route::post('/update/{id}', 'ClienteController@update') ->name('update');
Route::post('/editar/{id}', 'ClienteController@editar') ->name('editar');
Route::post('/delete/{id}', 'ClienteController@delete') ->name('delete');