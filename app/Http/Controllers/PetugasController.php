<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller

{
    public function index()
    {
        return view("halamanlogin");
    }

    public function login(Request $request)
    {
        $dataLogin = $request->only("username", "password");

        if (Auth::attempt($dataLogin)) {
            return redirect("/home");
        } else {
            // echo "gagal login";
            return redirect("/login");
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect("/login");
    }
}
