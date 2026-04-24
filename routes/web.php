<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/halo',function(){
    return view('halo');
});

// Route::get('/profil', function(){
//     return view('profil');
// });

Route::get('/user/{nama}/{harga}', function($nama, $harga){
    return "product $nama -  harga  $harga" ;
});

Route::get('/user/{id}', function($id){
    return "userid " . $id;
})->where('id','[0-9]+');

Route::get('/halo/{nama}',[UserController::class, 'halo']);
Route::get('/profil/{nama}', [UserController::class, 'profil']);
Route::get('/detail/{nama}/{harga}', [BarangController::class, 'detail']);

Route::get('/home', function(){
    return view('home');
});

Route::get('/profil/{nama}',[UserController::class, 'profil']);

Route::get('/about', function(){
    return view('about');
});

Route::get('/kontak' , function(){
    return view('kontak');
});

Route::get('/produk',[ProdukController::class, 'index']);