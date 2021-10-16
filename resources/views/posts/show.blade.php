@section('title', $post->title)
@extends('layout.index')

@section('content')

@include('posts.summary')

@endsection
