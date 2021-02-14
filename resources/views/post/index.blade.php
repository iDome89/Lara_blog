@extends('layouts.master')
@section('content')
    <form action="{{ route('post') }}" method="post" class="w-50 m-auto bg-white">
        @csrf

        <div class="row m-auto w-75">

            @if(session('status'))
                <div class="text-white bg-danger small mt-2 p-1">{{ session('status') }}</div>
            @endif
            <label class="sr-only" for="title">Title</label>
            <input type="text" name="post_title" id="post_title" class="form-control mt-3 bg-light"
                   placeholder="Enter a Title..."
                   value="{{ old('post_title')}}">
            @error('post_title')
            <div class="text-danger small">ĺ
                {{ $message }}
            </div>
            @enderror
            <select class="form-control mt-2" id="category" name="category">
                <option value="">Select a Category...</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category')
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


    <div class="w-50 m-auto bg-white">

        @if ($posts->count())
            @foreach($posts as $post)

                <div class="card text-center mt-2 mb-2">
                    <div class="card-header">
                        <strong>{{ $post->user->username }}</strong>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$post->post_title}}</h5>
                        <p class="card-text">{{$post->post_content}}</p>
                    </div>
                    <div class="card-footer">
                        <p class="text-muted">{{$post->created_at->diffForHumans()}}<p>
                        <h6>Category: {{$post->category->name}}</h6>
                    </div>
                </div>

            @endforeach

            {{ $posts->links() }}

        @else
            <p>There aren't any posts</p>
        @endif

    </div>





@endsection
