<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validate user input (you can add validation rules as needed)
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            // Authentication successful, redirect to a dashboard or home page
            return redirect()->route('dashboard.products');
        } else {
            // Authentication failed, redirect back to login with an error message
            return redirect()->back()->with('error', 'Invalid credentials.');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
