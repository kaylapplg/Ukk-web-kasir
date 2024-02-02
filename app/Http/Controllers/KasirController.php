<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasirController extends Controller
{
    function tampilan_home(){
        return view('home');
        }

    function tambah_produk(){
        return view('tambahproduk');
        }
}



