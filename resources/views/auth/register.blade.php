@extends('layouts.master')
@section('content')
    <form action="{{ route('register') }}" method="post" class="w-25 m-auto bg-white">
        @csrf
        <div class="row m-auto w-75">
            <label class="sr-only" for="name">Full Name</label>
            <input type="text" name="name" id="name" class="form-control mt-3 bg-light" placeholder="Full Name" value="{{ old('name') }}">
            @error('name')
            <div class="text-danger small">
             {{ $message }}
            </div>
            @enderror
            <label class="sr-only" for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control mt-3 bg-light" placeholder="Username" value="{{ old('username')}}">
            @error('username')
            <div class="text-danger small">
                {{ $message }}
            </div>
            @enderror
            <label class="sr-only" for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control mt-3 bg-light" placeholder="Email Address" value="{{ old('email')}}">
            @error('email')
            <div class="text-danger small">
                {{ $message }}
            </div>
            @enderror
            <label class="sr-only" for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control mt-3 bg-light"
                   placeholder="Enter a Password">
            @error('password')
            <div class="text-danger small">
                {{ $message }}
            </div>
            @enderror
            <label class="sr-only" for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control mt-3 bg-light"
                   placeholder="Confirm Password">
            @error('password_confirmation')
            <div class="text-danger small">
                {{ $message }}
            </div>
            @enderror
            <button type="submit" class="btn btn-primary btn-block mb-3 mt-2">Submit</button>
        </div>

    </form>
@endsection
