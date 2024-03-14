<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(auth()->attempt($request->only('email','password')))
        {
            return redirect()->route('product');
        }
        else
        {
            return back()->with('status','Incorrect Login Details!');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
