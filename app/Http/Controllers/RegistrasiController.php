<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    function table(){
        $registrasi = DB::table(
            'registrasi')->get();
        return view(
            'table_registrasi', ['registrasi'=> $registrasi]);
    }

    function registrasi (request $request){
        $id = $request->id;
        $nama = $request->nama;
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;

        DB::table('registrasi')->insert([
            'id'=> $nik,
            'nama'=> $nama,
            'username'=> $username,
            'email'=> $email,
            'password'=> Hash::make($password),
        ]);

        

        return redirect('/login');
    }

    function buat_akun(){
        return view('registrasi');
    }

    function login(){
        return view('halamanlogin');
      }
}
