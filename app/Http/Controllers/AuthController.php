<?php

namespace App\Http\Controllers;

use App\Constants\SessionConstant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication successful, redirect to the desired page
            return redirect("home");
        } else {
            // Authentication failed, redirect back to the login form
            return redirect()->back()->withInput()->withErrors(['username' => 'Invalid credentials']);
        }
    }

    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Create a new user in the database
        User::create([
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
        ]);

        // Registration successful, redirect to the login form
        return redirect('/')->with('success', 'Registration successful. You can now log in.');
    }
}
