@extends('layouts.master')
@section('content')
    <div>
        <table class="table w-75 m-auto">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Created At:</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td><a href={{route('dashboard.show', $post)}}>{{$post->post_title}}</a></td>
                    <td>{{$post->created_at}}</td>
                </tr>

            @endforeach
            </tbody>

        </table>

        {{$posts->links()}}

    </div>
@endsection
