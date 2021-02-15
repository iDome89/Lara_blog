@extends('layouts.master')
@section('content')
    <div class="w-50 m-auto bg-white">
        <x-post :post="$post"/>
    </div>
@endsection
