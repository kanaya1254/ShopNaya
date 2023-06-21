<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AuthController extends Controller
{
    //
    function show(){
        return view('login');
    }
    
    function auth(Request $request){
        $naya = $request->only('email','password');
        if(Auth::attempt($naya)){
            if(Auth::user()->level=="admin"){
                return redirect()->intended('dashboard');
            }elseif(Auth::user()->level=="member"){
                return redirect()->intended('beranda');
            }else{
            return redirect()->back();
            }
        }

    }
    function logout(){
        Auth::logout();
        return redirect('/');
    }
}

