@extends('template')
@section('content')
    <div class="container mx-auto pt-5 pl-6">
        <div>
            <h1 class="text-3xl font-bold">Dashboard > Add Question</h1>
        </div>
        <div class="card w-[100%] bg-base-100 lg:drop-shadow-xl">
            <div class="card-body">
                <form action="/addquestion" method="POST">
                    @csrf
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Title</span>
                        </label>
                        <input type="text" placeholder="Title" name="title" class="input input-bordered" />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Description</span>
                        </label>
                        <textarea class="textarea textarea-bordered h-24" name="description" placeholder="Description"></textarea>
                    </div>
                    <div class="card-actions justify-end mt-3">
                        <button class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
