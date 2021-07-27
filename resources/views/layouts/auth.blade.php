<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="flex items-center justify-center h-screen bg-gray-200">
            <div class="w-11/12 md:w-7/12 lg:w-5/12 xl:w-3/12">
                {{-- Logo TODO Idea --}}
                <div class="flex items-center justify-center w-full mb-10">
                    <img src="{{ asset('images/Logos/RFLT01.png') }}" class="h-10" alt="{{ config('app.name', 'Laravel') }}">
                </div>
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
