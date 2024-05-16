<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="{{ $description }}">
        <title>{{ $title ? $title . ' - ' . config('app.name') : config('app.name') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
    <div class="page">
        <!-- Navbar -->
        <x-header/>
        <div class="page-wrapper">
            {{ $slot }}
            <x-footer/>
        </div>
    </div>


    </body>
</html>
