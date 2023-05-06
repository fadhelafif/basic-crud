<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">

        <title>{{ $title ?? 'Talentlytica' }}</title>

        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body class="bg-gray">
        <div class="container pt-5">
            {{ $slot }}
        </div>
    </body>
</html>
