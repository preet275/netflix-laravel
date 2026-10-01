@extends('site.layouts.auth')

@section('content')
    <div class="login-page">

        <!-- Netflix logo with Home link -->
        <div class="login-logo">

            <a href="{{ route('home') }}">
                <img src="{{ asset('images/site/netflix-logo.svg') }}" alt="Netflix Home">
            </a>

        </div>

        <!-- Registration box -->
        <div class="login-box">

            <h1>Create your account</h1>

            <h2>Enter your details to get started.</h2>

            <form action="{{ route('register.store') }}" method="POST">

                @csrf

                <!-- Name -->
                <input type="text" name="name" placeholder="Name">

                @error('name')
                    <span class="text-danger d-block mb-2">{{ $message }}</span>
                @enderror

                <!-- Email -->
                <input type="email" name="email" placeholder="Email">

                @error('email')
                    <span class="text-danger d-block mb-2">{{ $message }}</span>
                @enderror

                <!-- Password -->
                <input type="password" name="password" placeholder="Password">

                @error('password')
                    <span class="text-danger d-block mb-2">{{ $message }}</span>
                @enderror



                <!-- Confirm password -->
                <input type="password" name="password_confirmation" placeholder="Confirm password">

                <!-- Register button -->
                <button type="submit">
                    Register
                </button>

            </form>

        </div>

    </div>

    <!-- Registration footer -->
    <footer class="login-footer">

        <p>Questions? Call 000-800-919-1743 (Toll-Free)</p>

        <!-- Footer links -->
        <div class="row login-footer-links">

            <!-- Column 1 -->
            <div class="col-6 col-lg-3">
                <a href="#">FAQ</a>
                <a href="#">Cookie Preferences</a>
            </div>

            <!-- Column 2 -->
            <div class="col-6 col-lg-3">
                <a href="#">Help Centre</a>
                <a href="#">Corporate Information</a>
            </div>

            <!-- Column 3 -->
            <div class="col-6 col-lg-3">
                <a href="#">Terms of Use</a>
            </div>

            <!-- Column 4 -->
            <div class="col-6 col-lg-3">
                <a href="#">Privacy</a>
            </div>

        </div>

        <select>
            <option>English</option>
            <option>हिन्दी</option>
        </select>

    </footer>
@endsection
