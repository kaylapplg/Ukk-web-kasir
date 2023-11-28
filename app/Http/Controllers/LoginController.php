<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Iluminate\Support\Facades\Session;

class LoginController extends Controller
{
    function index(){

        // return Hash::make("aether123");
        return view("halamanlogin");
    }
    function login(Request $request){
        $dataLogin = $request->only("username", "password");
        if(Auth::attempt($dataLogin)){
            return redirect("/home");
        }else{
            // echo "gagal login";
            return redirect("/login");
        }
    }

    function logout(){
        Auth::logout();

        return redirect("/login");
    }
}
