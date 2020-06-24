<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,600;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="header-page">
        <nav>
            <span class="header-title"><a href="{{ route('home') }}">BoolPress</a></span>
            <ul class="list-inline">
                <li><a href="{{ route('users.index') }}">User Index</a></li>
                <li><a href="{{ route('posts.index') }}">Post index</a></li>
                <li><a href="{{ route('posts.create') }}">New Post</a></li>
            </ul>
        </nav>
    </header>