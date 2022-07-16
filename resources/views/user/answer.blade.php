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
        <form action="/answer/{{ $quest->slug }}" method="POST">
            @csrf
            <div class="card bg-accent w-[20rem] bg-base-100 shadow-xl">
                <div class="card-body">
                    <p class="text-xl text-center">{{ $quest->description }}</p>
                    <input type="text" name="answer" placeholder="Ceplas Ceplos aja ges"
                        class="input rounded-3xl bg-base-200 w-full max-w-xs" />
                    <button class="btn btn-sm btn-primary">send</button>
                </div>
            </div>
        </form>
    </div>

</html>
