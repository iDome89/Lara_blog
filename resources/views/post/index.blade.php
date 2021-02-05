@extends('layouts.master')
@section('content')
    <form action="{{ route('post') }}" method="post" class="w-50 m-auto bg-white">
        @csrf

        <div class="row m-auto w-75">

            @if(session('status'))
                <div class="text-white bg-danger small mt-2 p-1">{{ session('status') }}</div>
            @endif
            <label class="sr-only" for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control mt-3 bg-light" placeholder="Enter a Title..."
                   value="{{ old('title')}}">
            <select class="form-control mt-2" id="exampleFormControlSelect1">
                <option value="">Select a Category...</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            @error('email')
            <div class="text-danger small">ĺ
                {{ $message }}
            </div>
            @enderror
            <label class="sr-only" for="password">Password</label>
            <textarea name="post_content" id="post_content" class="form-control mt-3 bg-light" maxlength=300
                      placeholder="Write your post..."></textarea>
            @error('post_content')
            <div class="text-danger small">
                {{ $message }}
            </div>
            @enderror

            <button type="submit" class="btn btn-primary btn-block mb-2 mt-2">Post!</button>
        </div>

    </form>
    </div>
@endsection
