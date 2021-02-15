@extends('layouts.master')
@section('content')
    <form action={{route('post.edit', $post)}} method="post" class="w-50 m-auto bg-white">
        @csrf
        @method('PUT')
        <div class="row m-auto w-75">

            <label class="sr-only" for="title">Title</label>
            <input type="text" name="post_title" id="post_title" class="form-control mt-3 bg-light"
                   placeholder="Enter a Title..."
                   value="{{$post->post_title}}">
            <select class="form-control mt-2" id="category" name="category">
                <option value="">{{$post->category->name}}</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <label class="sr-only" for="password">Password</label>
            <textarea name="post_content" id="post_content" class="form-control mt-3 bg-light" maxlength=300
                      placeholder="Write your post...">{{$post->post_content}}</textarea>

            <button type="submit" class="btn btn-primary btn-block mb-2 mt-2">Edit!</button>
        </div>

    </form>
@endsection
