<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function halo($nama){
        return "hale may bre dari controller : ". $nama;
    }

    public function profil($nama){
        return view('profil', ['nama' => $nama]);
    }
}
