@extends('layouts.main')
@section('main-content')

   <h1>Blog Archive</h1>
    @foreach($posts as $post)
        <article>
            <h2>{{ $post->title }}</h2>
            <h3 class="author">Autore: {{ $post->user->name }}</h3>
            <h4>Created: {{ $post->created_at }}, Last update: {{ $post->updated_at }}</h4>
            <p>{{ $post->body }}</p>
        </article>

        @if (!$loop->last)
        <hr>
        @endif
    @endforeach

@endsection