@extends('site.layouts.auth')

@section('content')
    <div class="login-page">

        <!-- Netflix logo with Home link -->
        <div class="login-logo">

            <a href="{{ route('home') }}">
                <img src="{{ asset('images/site/netflix-logo.svg') }}" alt="Netflix Home">
            </a>

        </div>
        <!-- Login box -->
        <div class="login-box">

            <h1>Enter your info to sign in</h1>
            <h2>Or get started with a new account.</h2>
            <form method="POST" action="{{ route('site.login.authenticate') }}">
                @csrf
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

                <!-- Login button -->
                <button type="submit">
                    Sign In
                </button>

            </form>

            <!-- Get Help -->
            <div class="dropdown get-help">

                <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Get Help
                </span>

                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="{{ route('register') }}">
                            Create Account
                        </a>
                    </li>
                </ul>

            </div>

        </div>
    </div>
    <!-- Login footer -->
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
