<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    {{-- Makes the page responsive --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Page title --}}
    <title>@yield('title', 'Netflix')</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Font Awesome Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    {{-- Browse page CSS --}}
    <link rel="stylesheet" href="{{ asset('css/browse.css') }}">
</head>

<body>

    {{-- Main page content --}}
    @yield('content')

    {{-- Bootstrap JavaScript --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Browse page JavaScript --}}
    <script src="{{ asset('js/browse.js') }}"></script>

</body>

</html>
