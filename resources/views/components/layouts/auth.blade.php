<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{ Vite::asset('resources/static/logo-small.svg') }}">
        <title>{{ $title ? $title . ' - ' . config('app.name') : config('app.name') }}</title>
        <meta name="description" content="{{ $description }}">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class=" d-flex flex-column">
        <div class="page page-center">
            {{ $slot }}
        </div>
    </body>
</html>
