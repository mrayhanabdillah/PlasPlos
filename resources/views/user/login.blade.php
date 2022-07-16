@extends('template')
@section('content')
    <div class="container mt-12 mx-auto">
        <div class="card w-[100%] bg-base-100 lg:drop-shadow-xl">
            <div class="card-body">
                <h2 class="text-center font-bold text-2xl underline">Login</h2>
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="text" placeholder="email" name="email" class="input input-bordered" />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="password" placeholder="password" name="password" class="input input-bordered" />
                    </div>
                    <div class="card-actions justify-end mt-3">
                        <button class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
@endsection
