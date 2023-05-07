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
        <nav class="navbar navbar-light navbar-expand-lg bg-white clean-navbar shadow-sm">
            <div class="container"><a class="navbar-brand logo" href="{{ route('dashboard') }}">Talentlytica</a><button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div id="navcol-1" class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('participant.index') }}">Participant</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        {{ $slot }}
    </body>
</html>
