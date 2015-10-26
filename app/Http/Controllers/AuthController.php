<?php

namespace Social\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Social\Models\User;

class AuthController extends Controller
{
    public function getSignin()
    {
        if(!Auth::check())
            return view('auth.signin');
        else
            return redirect()->route('home');
    }
    
    public function getSignup()
    {
        if(!Auth::check())
            return view('auth.signup');
        else
            return redirect()->route('home');
    }

    public function postSignin(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email|max:255',
            'password' => 'required|min:6',
        ]);

        if(!Auth::attempt($request->only(['email','password']),$request->has('remember')))
        {
            return redirect()->back()->with('info','Could not signed you in');
        }

        return redirect()->route('home')->with('info','Your are now signed in');
    }
    
    public function postSignup(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|unique:users|email|max:255',
            'username' => 'required|unique:users|alpha_dash|max:20',
            'password' => 'required|min:6',
        ]);

        User::create([
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password'))
        ]);

        return redirect()->route('home')->with('info','Your account has been created successfully');
    }

    public function getSignout()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}