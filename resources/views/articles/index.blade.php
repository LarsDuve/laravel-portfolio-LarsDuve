@extends('layout')


@section('content')
    <h1>Articles </h1>
    <h4><a style="text-decoration: none; color: darkblue" href="/articles/create">Add Article <span>&#10010;</span></a></h4>

    @foreach($articles as $article)
        <h3 style="color: dimgrey"><a href="{{ $article->path() }}" style="text-decoration: none; color: darkblue">{{ $article->title }}</a> {{ $article->updated_at }}</h3>
        <p>{{ $article->excerpt }}</p>
    @endforeach

@endsection
