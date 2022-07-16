<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PlasPlos</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Styles -->

    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <div class="navbar bg-base-100">
        <div class="lg:navbar-start">
            <a class="btn btn-ghost normal-case text-4xl">Plas<b> Plos</b></a>
        </div>
    </div>

    <div class="flex justify-center items-center mt-32">
        <div class="card w-96 bg-base-100">
            <div class="card-body">
                <h2 class="text-3xl font-bold text-center">Thank you</h2>
                <p class="text-center">Thank you for your answer</p>
            </div>
        </div>
    </div>

</html>
