@extends('layout')

@section('content')
    {{-- <h1>Contenido de Post</h1> --}}

    <h1>{{ $post->title }}</h1>

    <p>{{ $post->body }}</p>
@endsection
