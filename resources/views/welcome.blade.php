@extends('template')
@section('content')
    @auth
        <div class="container mx-auto pt-5 pl-6 pr-6">
            <div class ="menu menu-horizontal flex justify-center items-center gap-x-12">
                <a href="/question" class="text-xl font-bold hover">Anonymous</a>
                <a href="#" class="text-xl font-bold hover">Cash Flow</a>
            </div>
            <hr>
            <div>
                <h1 class="text-3xl font-bold">Dashboard</h1>
            </div>
        </div>
    @else
        <div class="container mx-auto">
            <div class="hero my-1 h-[37rem] lg:h-[55rem] md:h-[55rem]"
                style="background-image: url({{ asset('gambar/gambar.png') }})">
                <div class="hero-overlay bg-opacity-60"></div>
                <div class="hero-content text-center text-neutral-content">
                    <div class="max-w-md">
                        <h1 class="mb-5 text-xl font-bold">Halooo gaess</h1>
                        <p class="mb-5">Ini adalah sebuah website untuk ceplas ceplos ke seseorang yang dituju. Anda dapat
                            membuat sebuah pertanyaan dan dijawab secara anonim oleh orang lain.</p>
                        <button class="btn btn-primary">Get Started</button>
                    </div>
                </div>
            </div>
        </div>
    @endauth
@endsection
