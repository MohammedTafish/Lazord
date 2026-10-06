<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function show_login(){
        return view('lazord.login');
    }
    public function loginUser(Request $request){
        
        $validated = $request->validate([
            'email'    => 'required',
            'password' => 'required',
        ]);



        if (Auth::attempt($validated)) {
            $request->session()->regenerate();

            return redirect()->intended(route('home'))->with('success', 'تم تسجيل الدخول بنجاح!');
        }

        return back()->withErrors([
            'email' => 'البريد الإلكتروني أو كلمة المرور غير صحيحة.',
        ])->onlyInput('email');        

    }
}