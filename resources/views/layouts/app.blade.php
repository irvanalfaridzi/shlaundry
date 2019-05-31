<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'shcleanerz') }}</title>
    @include('frontend.include._header-script')
</head>
<body class="bg-default">
    @yield('content')
    @include('frontend.include._footer-script')
</body>
</html>
