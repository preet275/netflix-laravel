<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    // Show registration form
    public function show()
    {
        return view('site.auth.register');
    }

    // Store new member registration
    public function store(Request $request)
    {
        // Validate registration data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:members,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create member with pending approval
        Member::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])
        ]);

        // Redirect to login after successful registration
        return redirect()->route('site.login');
    }
}
