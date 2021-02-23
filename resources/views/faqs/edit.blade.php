@extends('layout')


@section('content')
    <h1>Edit Faq</h1>
    <form method="POST" action="/faqs/{{ $faq->id }}">
        @csrf
        @method('PUT')

        <label for="question">Question</label><br>
        <input type="text" id="question" name="question" size="160" value="{{ $faq->question }}"><br>

        <label for="answer">Answer</label><br>
        <input type="text" id="answer" name="answer" size="160" value="{{ $faq->answer }}"><br>

        <label for="link">Link</label><br>
        <input type="text" id="link" name="link" size="160" value="{{ $faq->link }}"><br><br>

        <input type="submit" value="Save">
    </form><br>
    <form method="POST" action="/faqs/{{ $faq->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
