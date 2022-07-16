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
            <a class="btn btn-ghost normal-case text-4xl" href="/">Plas<b> Plos</b></a>
        </div>
        <div class="navbar-end">
            @auth
                <div class="dropdown dropdown-end">
                    <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img src="https://placeimg.com/80/80/people" />
                        </div>
                    </label>
                    <ul tabindex="0"
                        class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                        <li>
                            <a class="justify-between">
                                Profile
                                <span class="badge">New</span>
                            </a>
                        </li>
                        <li><a>Settings</a></li>
                        <li><a href="/logout"
                                onclick="event.preventDefault();document.getElementById('logout-btn').submit();">Logout</a>
                        </li>
                        <form id="logout-btn" action="/logout" method="POST">
                            {{ csrf_field() }}
                        </form>
                    </ul>
                </div>
            @else
                <a class="btn btn-sm btn-primary mr-1 my-3" href="/login">Login</a>
                <a class="btn btn-sm btn-primary mr-1" href="/register">Register</a>
            @endauth

        </div>
    </div>

    {{-- @if (session('berhasil_login'))
        <div class="alert alert-info shadow-lg" id='alert'>
            <div>
                <span>{{ session('berhasil_login') }}</span>
            </div>
        </div>
    @endif
    @if (session('gagal_login'))
        <div class="alert alert-error shadow-lg">
            <div>
                <span>{{ session('gagal_login') }}</span>
            </div>
        </div>
    @endif
    @if (session('logout'))
        <div class="alert alert-error shadow-lg">
            <div>
                <span>{{ session('logout') }}</span>
            </div>
        </div>
    @endif --}}



    @yield('content')

    {{-- <div class="container-fluid fixed inset-x-0 bottom-0">
        <footer class="footer footer-center p-4 bg-base-300 text-base-content">
            <div>
                <p>Copyright © 2022 - All right reserved by ACME Industries Ltd</p>
            </div>
        </footer>
    </div> --}}

    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    
</body>

</html>
