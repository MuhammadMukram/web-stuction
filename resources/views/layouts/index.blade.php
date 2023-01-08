<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- Meta --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Web Title --}}
    <title>
        @yield('title')
    </title>

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('styles/layouts/index.css') }}">

    {{-- Page's Styles --}}
    @yield('styles')

</head>

<body>
    {{-- Page's Navbar --}}
    @yield('navbar')

    {{-- Page's Content --}}
    @yield('content')

    {{-- Scripts --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    {{-- Page's Scripts  --}}
    @yield('scripts')

</body>

</html>
