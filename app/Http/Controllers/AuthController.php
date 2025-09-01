<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function registerSave(Request $request){
       User::create([
        'email'=>$request->email,
        'password'=>$request->password
       ]);

       return redirect()->route('login');

    }

    public function login(){
        return view('auth.login');

    }

    public function loginAction(Request $request){
        if (!Auth::attempt($request->only('email','password'), $request->boolean('remember'))){
            throw ValidationException::withMessages([
                'email'=>trans('auth.failed')
            ]);
        }

        $request->session()->regenerate();
        return redirect()->route('dashboard');

    }
}

