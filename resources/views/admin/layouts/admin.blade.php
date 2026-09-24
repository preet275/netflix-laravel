<!DOCTYPE html>
<html lang="en">

<head>

    {{-- Basic page settings --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Dynamic page title --}}
    <title>@yield('title', 'Admin Panel')</title>

    {{-- Bootstrap 5 CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Admin custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

</head>

<body>

    <div class="admin-wrapper">

        {{-- Sidebar --}}
        @include('admin.partials.sidebar')

        <div class="admin-main">

            {{-- Top Navbar --}}
            @include('admin.partials.navbar')

            {{-- Main page content --}}
            <main class="admin-content">

                @yield('content')

            </main>
            {{-- Footer --}}
            @include('admin.partials.footer')

        </div>

    </div>

    {{-- Bootstrap JavaScript --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Admin custom JavaScript --}}
    <script src="{{ asset('js/admin.js') }}"></script>

</body>

</html>
