@extends('layout')

@section('content')
    <h1>Contenido de Blog</h1>

    <ul class="blog">
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('blog.show', $post->slug) }}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
