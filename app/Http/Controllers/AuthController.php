<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $credetials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        //checking login valid
        if (Auth::attempt($credetials)) {
            //admin
            if (Auth::user()->role_id == 1) {
                return redirect('/admin/dashboard');
            }
            //user
            if (Auth::user()->role_id == 2) {
                return redirect('/dashboard');
            }
        }
        //error
        return back()->with('error', 'Error Email or Password');
    }

    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        // Validator::make($request->all(), [
        //     'name' => 'required',
        //     'email' => 'required|unique:users',
        //     'password' => 'required|same:password_confirmation',
        //     ])->validate();

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|same:password_confirmation',
        ], [
            'password.same' => 'The password confirmation does not match.'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Register successfully');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
