<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function authenticate(Request $request) {
        $request->validate([
            'email'=> 'required',
            'password'=> 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {
            return redirect(route('store'));
        }

        return redirect(route('login')) ->with("error", "Dados de login inválidos");
        
    }

    function logout() {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }

}
