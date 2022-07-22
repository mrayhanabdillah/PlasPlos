@extends('template')
@section('content')
    <div class="container mx-auto pt-5 pl-6 pr-6">
        <div class="menu menu-horizontal flex justify-center items-center gap-x-12">
            <a href="/question" class="text-xl font-bold hover">Anonymous</a>
            <a href="#" class="text-xl font-bold hover">Cash Flow</a>
        </div>
        <div>
            <h1 class="text-3xl font-bold"><a href="/">Dashboard</a> > Questions</h1>
        </div>
        <a class="btn btn-primary mt-3" href="/addquestion">Add Some Question</a>
        <div class="flex justify-center flex-col lg:flex-row lg:flex-wrap lg:items-stretch items-center gap-4 mt-2">
            @foreach ($asks as $data)
                <div class="card bg-accent w-[20rem] bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title">{{ $data->title }}</h2>
                        <p>{{ $data->description }}</p>
                        <div class="card-actions justify-end mt-3">
                            <form action="/deletequestion/{{ $data->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-sm btn-primary" href="/detailquestion/{{ $data->slug }}">View</a>
                                <button class="btn btn-sm btn-error">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
