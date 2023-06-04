<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'EvogeHotspot') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <style>
        .login{
        /*
          background: url('https://tailwindadmin.netlify.app/dist/images/login-new.jpeg');
        */
        background: url('http://bit.ly/2gPLxZ4');
        background-repeat: no-repeat;
        background-size: cover;
      }
      </style>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">                   
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>