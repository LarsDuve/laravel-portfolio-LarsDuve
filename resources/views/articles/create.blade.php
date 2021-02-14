@extends('layout')


@section('content')
    <h1>New Article</h1>
    <form method="POST" action="/faqs">
        @csrf
        <label for="title">Title</label><br>
        <input type="text" id="title" name="title" size="70" value="The most interesting title of all"><br>

        <label for="excerpt">Excerpt</label><br>
        <input type="text" id="excerpt" name="excerpt" size="70" value="The excerpt of the article, this will be shown when you browse trough the articles"><br>

        <label for="body">Body</label><br>
        <input type="text" id="body" name="body" size="70" value="The content of the article itself"><br><br>

        <input type="submit" value="Submit">
    </form>
@endsection
