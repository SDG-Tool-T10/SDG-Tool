<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SDG Tool</title>

    @yield('script')

    <link rel="icon" href={{ asset('image/HZ_logo.png') }}>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bulma.min.css') }}" rel="stylesheet">
</head>
<body>
@include('common.navbar')

@yield('content')

@include('common.footer')
</body>
</html>

