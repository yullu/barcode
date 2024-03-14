<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|same:confirm_password'
        ]);
        $register = new User();
        $register->name=$request->name;
        $register->email=$request->email;
        $register->password= Hash::make($request->password);

        $register->save();

        return redirect()->route('register')->with('success','Congratulations, Account created successfully. You can now register');
    }
}
