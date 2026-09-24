@extends('admin.layouts.app')

@section('title', 'Sign In')

@section('content')

    <div class="container-fluid login-page">
        <div class="row min-vh-100 justify-content-center align-items-center">

            <div class="col-11 col-sm-8 col-md-6 col-lg-4">

                <div class="login-card">

                    <h2 class="mb-4">Sign In</h2>
                    {{-- Submit login form --}}
                    <form method="POST" action="{{ route('admin.authenticate') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">
                                Email
                            </label>

                            <input type="email" id="email" name="email" class="form-control"
                                placeholder="Enter your email">
                            {{-- Email validation error --}}
                            @error('email')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">
                                Password
                            </label>

                            <input type="password" id="password" name="password" class="form-control"
                                placeholder="Enter your password">
                            {{-- Password validation error --}}
                            @error('password')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">

                                <label class="form-check-label" for="remember">
                                    Remember me
                                </label>
                            </div>

                            <a href="#" class="forgot-password">
                                Forgot password?
                            </a>

                        </div>

                        <button type="submit" class="btn btn-danger w-100">
                            Sign In
                        </button>

                    </form>

                </div>

            </div>

        </div>
    </div>

@endsection
