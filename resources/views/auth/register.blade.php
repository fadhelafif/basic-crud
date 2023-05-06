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
                <h2 class="text-center mb-5">Register</h2>
                <form class="widget" method="POST" action="{{ route('register') }}">
                    <div class="mb-3">
                        <label class="form-label" for="email">Name</label
                        ><input id="name" class="form-control item" type="text" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label
                        ><input id="email" class="form-control item" type="email" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Password</label
                        ><input id="password" class="form-control" type="password" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password_confirmation">Confirm Password</label
                        ><input id="password_confirmation" class="form-control" type="password" />
                    </div>

                    <button class="btn btn-primary" type="submit">Register</button>
                </form>
                <div class="text-center mt-5">
                    <p>Already have an account? <a href="{{ route('login') }}">Sign in</a></p>
                </div>
            </div>
        </section>
    </body>
</html>
