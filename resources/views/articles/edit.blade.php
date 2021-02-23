@extends('layout')


@section('content')
    <h1>Update Article</h1>
    <form method="POST" action="/articles/{{ $article->id }}">
        @csrf
        @method('PUT')

        <label for="title">Title</label><br>
        <input type="text" id="title" name="title" size="160" value="{{ $article->title }}"><br>

        <label for="excerpt">Excerpt</label><br>
        <input type="text" id="excerpt" name="excerpt" size="160" value="{{ $article->excerpt }}"><br>

        <label for="body">Body</label><br>
        <input type="text" id="body" name="body" size="160" value="{{ $article->body }}"><br><br>

        <input type="submit" value="Save">
    </form><br>
    <form method="POST" action="/articles/{{ $article->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection