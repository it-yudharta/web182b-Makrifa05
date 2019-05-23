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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/warung', 'PembeliController@index');
Route::get('/warung/tampilkan', 'PembeliController@show');
Route::get('/warung/tambah', 'PembeliController@tambah');
Route::get('/warung/store', 'PembeliController@store');
Route::get('/warung/{id}/edit', 'PembeliController@edit');
Route::get('/warung/{id}/update', 'PembeliController@update');
Route::get('/warung/{id}/hapus', 'PembeliController@destroy');