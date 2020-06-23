@extends('layouts.main')
@section('main-content')
    {{-- <h1>User Index</h1>
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
    @endforeach --}}

    <div class="container">
        <div class="user-index">
            <h1 class="title-page">User Index</h1>

            @foreach($users as $user)
                <div class="user">
                    <div class="img">
                        <img src="{{ $user->info['avatar'] }}" alt="{{ $user->name }}">
                    </div>
                    <div class="user-info">
                        <h2>{{ $user->name }}</h2>
                        <h4>{{ $user->email }}</h4>
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
                </div>
            @endforeach
        </div>
    </div>
@endsection