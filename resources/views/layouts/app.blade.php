<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') </title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @wireUiScripts
    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireStyles
</head>

<body>
    {{-- @include('layouts.navigation') --}}
    @include('layouts.frontend.header')


    <main>
        @yield('content')
    </main>


    @livewireScripts
</body>

</html>
