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

// Route CRUD for Kulina :
Route::get('/review', 'HomeKulina@index');

Route::get('/review/add', 'HomeKulina@add');

Route::get('/review/edit/{id}', 'HomeKulina@edit');

Route::get('/review/remove/{id}', 'HomeKulina@remove');

Route::post('/review/store', 'HomeKulina@store');

Route::post('/review/update', 'HomeKulina@update');
