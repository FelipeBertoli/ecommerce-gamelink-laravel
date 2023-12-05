<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
use App\Models\Library;

class RegisterController extends Controller
{
    function registration(Request $request) {
        $request->validate([
            'name'=> 'required',
            'username' => 'required|unique:users',
            'email'=> 'required|email|unique:users',
            'password' => 'required',
            'role' => 'required',
            'profile_pic' => 'nullable'
        ]);
        $user = User::create([
            'name'=>$request->input('name'),
            'username'=>$request->input('username'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
            'role'=>$request->input('role'),
            'profile_pic'=> $request->input('profile_pic')
        ]);
        if(!$user) {
            return redirect(route('register'))->with("error", "Algo de errado aconteceu");
        }

        $cart = Cart::create([
            'totalItens' => 0,
            'price' => 00.00,
            'user_id' => $user->id
        ]);

        $library = Library::create([
            'user_id' => $user->id
        ]);

        $user->cart()->save($cart);
        $user->library()->save($library);

        return redirect(route('register-confirmation'));
    }
}