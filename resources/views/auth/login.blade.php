@extends('layouts.master')
@section('content')

    <form action="{{ route('login') }}" method="post" class="w-25 m-auto bg-white">
        @csrf

        <div class="row m-auto w-75">

            @if(session('status'))
                <div class="text-white bg-danger small mt-2 p-1">{{ session('status') }}</div>
            @endif
            <label class="sr-only" for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control mt-3 bg-light" placeholder="Email Address"
                   value="{{ old('email')}}">
            @error('email')
            <div class="text-danger small">ĺ
                {{ $message }}
            </div>
            @enderror
            <label class="sr-only" for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control mt-3 bg-light"
                   placeholder="Password">
            @error('password')
            <div class="text-danger small">
                {{ $message }}
            </div>
            @enderror

            <button type="submit" class="btn btn-primary btn-block mb-2 mt-2">Login</button>
        </div>

        <div class="ml-5 form-check form-check-inline">
            <label class="small form-check-label" for="remember">Remember me</label>
            <input class="form-check-input ml-1" type="checkbox" name="remember" id="remember">
        </div>

    </form>
    </div>
@endsection
