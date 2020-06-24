@extends('layouts.main')
@section('main-content')

   <div class="container">
        <h1 class="title-page">Edit Post</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div>
                <label for="title">Titolo:</label>
                <input id="title" type="text" name="title" value="{{ old('title', $post->title) }}">
            </div>

            <div>
                <label for="body">Testo:</label>
                <textarea name="body" id="body">
                    {{ old('body',$post->body) }}
                </textarea>
            </div>

            @foreach ($tags as $tag)
                <div>
                    <input type="checkbox" name="tags[]" id="tag-{{ $loop->iteration }}" value="{{ $tag->id }}"
                    @if( $post->tags->contains($tag->id) ) checked @endif>
                   
                <label for="tag-{{ $loop->iteration }}">{{ $tag->name }}</label>
                </div>
            @endforeach

            <input type="submit" value="Create poost">
        </form>
   </div>

@endsection