@extends('layout')


@section('content')
    <h1>Edit Faq</h1>
    <form method="POST" action="/faqs/{{ $faq->id }}">
        @csrf
        @method('PUT')

        <label for="question">Question</label><br>
        <textarea id="question" name="question" rows="4" cols="170">{{ $faq->question }}</textarea><br>

        <label for="answer">Answer</label><br>
        <textarea id="answer" name="answer" rows="4" cols="170">{{ $faq->answer }}</textarea><br>

        <label for="link">Link</label><br>
        <textarea id="link" name="link" rows="4" cols="170">{{ $faq->link }}</textarea><br><br>

        <input type="submit" value="Save">
    </form><br>
    <form method="POST" action="/faqs/{{ $faq->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
