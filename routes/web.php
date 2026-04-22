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

Route::get('/user/{nama}/{harga}', function($nama, $harga){
    return "product $nama -  harga  $harga" ;
});

Route::get('/user/{id}', function($id){
    return "userid " . $id;
})->where('id','[0-9]+');