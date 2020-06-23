@extends('layouts.main')
@section('main-content')
    <div class="container">
        <div class="home-route">
            <a href="{{ route('users.index') }}">
                <div class="card">
                    <h2>All User</h2>
                    <small>View All User</small>
                </div>
            </a>
            <a href="{{ route('posts.index') }}">
                <div class="card">
                    <h2>All Posts</h2>
                    <small>View All Posts</small>
                </div>
            </a>
        </div>
    </div>
@endsection