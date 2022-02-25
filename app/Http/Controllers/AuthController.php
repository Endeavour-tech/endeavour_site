<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_index()
    {
        return view('admin.login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }else{
            return back()->with('error','Email ou mot de passe Incorrect');
        }
    }
}
