<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberAuthController extends Controller
{
    // Show member login page
    public function login()
    {
        return view('site.auth.login');
    }

    // Handle member login
    public function authenticate(Request $request)
    {
        // Validate login form data
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Only approved members can login
        $credentials['status'] = 'approved';

        // Check member email and password
        if (auth('member')->attempt($credentials)) {

            // Regenerate session after successful login
            $request->session()->regenerate();

            // Redirect member to browse page
            return redirect()->route('browse');
        }

        // Login failed
        return back()->withErrors([
            'email' => 'The provided email or password is incorrect.',
        ])->onlyInput('email');
    }

    // Handle member logout
    public function logout(Request $request)
    {
        // Logout member
        auth('member')->logout();

        // Clear current session
        $request->session()->invalidate();

        // Regenerate CSRF token
        $request->session()->regenerateToken();

        // Redirect to login page
        return redirect()->route('site.login');
    }
}
