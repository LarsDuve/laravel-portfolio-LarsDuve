@extends('layout')


@section('content')
    <h1>Articles </h1>
    <h4><a href="/articles/create">Add Article <span>&#10010;</span></a></h4>

    @foreach($articles as $article)
        <h3><a href="/articles/{{ $article->id }}" style="text-decoration: none">{{ $article->title }}</a> {{ $article->updated_at }}</h3>
        <p>{{ $article->excerpt }}</p>
    @endforeach

@endsection
