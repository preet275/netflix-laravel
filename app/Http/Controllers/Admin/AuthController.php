<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Show admin login page
    public function login()
    {
        return view('admin.auth.login');
    }


    // Handle login form submission
    public function authenticate(Request $request)
    {
        // Validate login form data
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Check email and password
        if (auth()->attempt($credentials)) {

            // Regenerate session after successful login
            $request->session()->regenerate();

            // Redirect to admin dashboard
            return redirect()->route('admin.home');
        }

        // Login failed
        return back()->withErrors([
            'email' => 'The provided email or password is incorrect.',
        ])->onlyInput('email');
    }

    // Handle admin logout
    public function logout(Request $request)
    {
        // Logout the currently logged-in user
        auth()->logout();

        // Clear the current session
        $request->session()->invalidate();

        // Regenerate CSRF token
        $request->session()->regenerateToken();

        // Redirect to login page
        return redirect()->route('admin.login');
    }
}
