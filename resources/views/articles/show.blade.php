@extends('layout')


@section('content')
    <h1><a href="{{ $article->link }}" style="text-decoration: none; color: darkblue">{{ $article->title }}</a> <a style="text-decoration: none; color: darkblue" href="/articles/{{ $article->id }}/edit"><span>&#9998;</span></a></h1>
    <p>{{ $article->body }}</p>

@endsection
