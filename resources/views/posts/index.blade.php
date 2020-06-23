@extends('layouts.main')
@section('main-content')

   <div class="container">
        <section class="posts-page-container">
            <h1 class="title-page">Blog Archive</h1>
            @foreach($posts as $post)
                
                <div class="posts">
                    <article>
                        <h2>{{ $post->title }}</h2>
                        <p>{{ $post->body }}</p>  
                        <div class="info-date">
                            <h3 class="author">Autore: {{ $post->user->name }}</h3>
                            <small>Created: {{ $post->created_at }}, Last update: {{ $post->updated_at }}</small>
                        </div>     
                    </article>
            
                    <div class="comment-container">
                        <h3>Comments:</h3>
                        @forelse ($post->comments as $comment)
                            <h4>{{ $comment->name }}</h4>
                            <p>{{ $comment->body }}</p>
                        @empty
                            <h2>Non vi sono commenti disponibili</h2>
                        @endforelse
                    </div>
                </div>

            
            @endforeach
        </section>
   </div>

@endsection