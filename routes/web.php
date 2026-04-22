<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/halo',function(){
    return view('halo');
});

Route::get('/profil', function(){
    return view('profil');
});

Route::get('/user/{nama}', function($nama){
    return "halo kak ". $nama;
});