<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function detail($nama, $harga){
        return view('barang',['nama' => $nama,'harga'=> $harga]);
    }
}
