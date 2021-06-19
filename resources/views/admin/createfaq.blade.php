@extends('layout')


@section('content')
    <h1>New Faq</h1>
    <form method="POST" action="/faqs">
        @csrf
        <label for="question">Question</label><br>
        <textarea class="textarea @error('question') is-danger @enderror"
                  id="question" name="question"
                  rows="4" cols="170"
                  placeholder="The most relevant question of all"></textarea>
        @error('question')
        <p class="help is-danger"> {{ $errors->first('question') }}</p>
        @enderror
        <br>

        <label for="answer">Answer</label><br>
        <textarea class="textarea @error('answer') is-danger @enderror"
                  id="answer" name="answer"
                  rows="4" cols="170"
                  placeholder="Some relevant answer"></textarea>
        @error('answer')
        <p class="help is-danger"> {{ $errors->first('answer') }}</p>
        @enderror
        <br>

        <label for="link">Link</label><br>
        <textarea id="link" name="link"
                  rows="4" cols="170"
                  placeholder="A potential link to go with the article"></textarea>
        <br><br>

        <input type="submit" value="Submit">
    </form>
@endsection
