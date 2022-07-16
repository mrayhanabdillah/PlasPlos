@extends('template')
@section('content')
    @auth
        <div class="container mx-auto pt-5 pl-6 pr-6">
            <div>
                <h1 class="text-3xl font-bold">Dashboard</h1>
            </div>
            <a class="btn btn-primary mt-3" href="/addquestion">Add Some Question</a>
            <div class="flex justify-center flex-col lg:flex-row lg:flex-wrap lg:items-stretch items-center gap-4 mt-2">
                @foreach ($asks as $data)
                    <div class="card bg-accent w-[20rem] bg-base-100 shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title">{{$data->title}}</h2>
                            <p>{{$data->description}}</p>
                            <div class="card-actions justify-end mt-3">
                                <form action="/deletequestion/{{ $data->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-sm btn-primary" href="/detailquestion/{{$data->slug}}">View</a>
                                    <button class="btn btn-sm btn-error">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
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
