@extends('layout')


@section('content')
    <h1><a href="{{ $article->link }}" style="text-decoration: none">{{ $article->title }}</a></h1>
    <p>{{ $article->body }}</p>

@endsection
