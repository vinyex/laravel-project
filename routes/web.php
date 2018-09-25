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
//API Testing
Route::get('/kontakAPI','Kontak@indexAPI');
Route::get('/kontakAPI/{id}','Kontak@showAPI');
Route::post('/kontakAPI/store','Kontak@storeAPI');
Route::post('/kontakAPI/update/{id}','Kontak@updateAPI');
Route::post('/kontakAPI/delete/{id}','Kontak@destroyAPI');

//Import data
Route::post('kontak/import', 'Kontak@importCSV');
//Export Data
Route::get('kontak/export', 'Kontak@exportCSV');

//Input Foto
Route::resource('file','File');

Route::get('/file_create', function () {
    return view('file_create');
});

Route::resource('kontak','Kontak');

Route::get('/', function () {
    return view('index');
});

Route::get('/kontak_create', function () {
    return view('kontak_create');
});

//Login
Route::get('/home_user', 'User@index');
Route::get('/login', 'User@login');
Route::post('/loginPost', 'User@loginPost');
Route::get('/register', 'User@register');
Route::post('/registerPost', 'User@registerPost');
Route::get('/logout', 'User@logout');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
