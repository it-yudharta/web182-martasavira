<?php

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

Route::get('/mahasiswa','mahasiswaController@index');
Route::post('/mahasiswa/create','mahasiswaController@create');
Route::get('/mahasiswa/{id}/Edit','mahasiswaController@Edit');
Route::post('/mahasiswa/{id}/Update','mahasiswaController@Update');
Route::get('/mahasiswa/{id}/Delete','mahasiswaController@Delete');