<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">

        <title>Talentlytica</title>

        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body class="bg-gray">
        <section class="">
            <div class="container pt-5">
                <h2 class="text-center mb-5">Log In</h2>
                <form class="widget" method="POST" action="{{ route('login') }}">
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label
                        ><input id="email" class="form-control item" type="email" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Password</label
                        ><input id="password" class="form-control" type="password" />
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input
                                id="checkbox"
                                class="form-check-input"
                                type="checkbox"
                            /><label class="form-check-label" for="checkbox"
                                >Remember me</label
                            >
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Log In</button>
                </form>
            </div>
        </section>
    </body>
</html>
