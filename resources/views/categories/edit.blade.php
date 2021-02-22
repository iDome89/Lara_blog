@extends('layouts.master')
@section('content')
    <form action={{route('category.edit', $category)}} method="post" class="w-50 m-auto bg-white">
        @csrf
        @method('PUT')
        <div class="row m-auto w-75">
            <label class="sr-only" for="title">Title</label>
            <input type="text" name="name" id="name" class="form-control mt-3 bg-light"
                   placeholder="Enter a Title..."
                   value="{{$category->name}}">
            <button type="submit" class="btn btn-primary btn-block mb-2 mt-2">Save</button>
        </div>

    </form>
@endsection
