@section('title', 'Home')
@extends('layout.index')

@section('content')

@foreach ($posts as $post)
    @include('posts.summary')
@endforeach

@endsection
