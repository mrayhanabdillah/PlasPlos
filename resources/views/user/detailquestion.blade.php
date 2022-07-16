@extends('template')
@section('content')
    <div class="container mx-auto pt-5 pl-6">
        <div>
            <h1 class="text-3xl font-bold">Dashboard > Detail Question</h1>
        </div>
        <div class="flex justify-center mt-5">
            <div class="card bg-accent w-[20rem] bg-base-100 shadow-xl">
                <div class="card-body">
                    <p class="text-xl text-center">{{ $quest->description }}</p>
                    <input type="text" placeholder="Ceplas Ceplos aja ges" class="input rounded-3xl bg-base-200 w-full max-w-xs" />
                    <a class="btn btn-sm btn-primary" href="/answer/{{ $quest->slug }}" target="_blank">preview</a>
                </div>
            </div>
        </div>
        <div>
            <h1 class="text-3xl font-bold text-center mt-5">Answers</h1>
        </div>
        <div class="flex justify-center flex-col lg:flex-row lg:flex-wrap lg:items-stretch items-center gap-4 mt-2">
            @foreach ($ans as $data)
                <div class="card bg-accent w-[20rem] bg-base-100 shadow-xl">
                    <div class="card-body">
                        <p class="text-xl text-center">{{ $quest->description }}</p>
                        <input type="text" name="answer" placeholder="Type here"
                            class="input rounded-3xl bg-base-200 w-full max-w-xs" value="{{$data->answer}}" readonly/>
                    </div>
                </div>
            @endforeach
        </div>


    </div>
@endsection
