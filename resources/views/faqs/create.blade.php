@extends('layout')


@section('content')
    <h1>New Faq</h1>
    <form method="POST" action="/articles">
        @csrf
        <label for="question">Question</label><br>
        <input type="text" id="question" name="question" size="70" value="The most relevant question of all"><br>

        <label for="answer">Answer</label><br>
        <input type="text" id="answer" name="answer" size="70" value="Some relevant answer"><br>

        <label for="link">Link</label><br>
        <input type="text" id="link" name="link" size="70" value="A potential link to go with the article"><br><br>

        <input type="submit" value="Submit">
    </form>
@endsection
