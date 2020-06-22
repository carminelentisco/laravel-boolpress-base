@extends('layouts.main')
@section('main-content')
    <h1>User Index</h1>
    <a href="{{ route('posts.index') }}">All Post</a>

    @foreach($users as $user)
        <div class="user">
            <h2>{{ $user->name }}</h2>
            <h4>{{ $user->email }}</h4>
            <img src="{{ $user->info['avatar'] }}" alt="{{ $user->name }}">
            <h4>{{ $user->info['phone'] }}</h4>


            <h3>Posts</h3>
            <ul>
            @foreach ($user->posts as $post)
                <li>
                    <h4>
                        {{  $post->title }}
                    </h4>
                    <p>
                        {{  $post->body }}
                    </p>
                </li>
                @endforeach
            </ul>
        </div>
     
        @if (!$loop->last)
        <hr>
        @endif
    @endforeach
@endsection