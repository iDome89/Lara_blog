@extends('layouts.master')
@section('content')
    <div class="w-50 m-auto">
        <form action="{{ route('categories') }}" method="post" class="w-50 m-auto">
            @csrf
            <label for="new_category" class="sr-only">New Category</label>
            <input type="text" class="form-control" name="new_category" id="new_category" placeholder="Add a Category...">

            @error('new_category')
            <div class="text-danger small">
                {{ $message }}
            </div>

            @enderror
            <button type="submit" class="btn btn-primary btn-block w-25 mb-2 mt-2">Add</button>
        </form>
    </div>
    <div class="w-75 m-auto">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td><a class="btn btn-primary" href={{route('category.edit', $category)}}>Edit</a></td>
                    <td>
                        <form action={{route('category.destroy', $category)}} method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>

            @endforeach
            </tbody>

        </table>

    </div>
@endsection
