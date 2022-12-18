<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class SignUpController extends Controller
{
    public function signup()
    {
        return view('signup');
    }
    public function signupCheck(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|min:4|max:100|unique:users,name',
            'email' => 'required|email:rfc,dns|max:100|unique:users,email',
            'password' => 'required|min:8|max:100',
        ]);

        $user = User::create([
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'password' => bcrypt($request->input('password')),
        ]);
        Auth::loginUsingId($user->id);
        return redirect()->route('home')->with('succses',"Вы успешно зарегистрировались");
    }
    
}