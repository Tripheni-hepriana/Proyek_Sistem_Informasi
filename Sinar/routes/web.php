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

Route::get('halo', function(){
    return 'Hello world! Halo semuanya, selamat belajar Laravel.';
});

Route::get('/regis', function () {
    return view('register');
});

Route::get('contents', 'ContentsController@index');
