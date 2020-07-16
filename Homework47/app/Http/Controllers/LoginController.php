<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session;

class LoginController extends Controller
{
    public function show() {
        return view('login');
    }

    public function authenticate() {
        $validateData = request()->validate([
            'email' => 'required',
            'password' => 'required|min:6'
        ]); 

        if(Auth::attempt($validateData)) {
            return redirect()->route('index');
        }
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return view('index');
    }
}
