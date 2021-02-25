@extends('layout')


@section('content')
    <h1>New Article</h1>
    <form method="POST" action="/articles">
        @csrf

        <label for="title">Title</label><br>
        <textarea class="textarea @error('title') is-danger @enderror"
                  id="title" name="title"
                  rows="1" cols="170"
                  placeholder="The most interesting title of all">{{ old('title') }}</textarea>
        @error('title')
            <p class="help is-danger"> {{ $errors->first('title') }}</p>
        @enderror
        <br>

        <label for="excerpt">Excerpt</label><br>
        <textarea class="textarea @error('excerpt') is-danger @enderror"
                  id="excerpt" name="excerpt"
                  rows="4" cols="170"
                  placeholder="The excerpt of the article, this will be shown when you browse trough the articles">{{ old('excerpt') }}</textarea>
        @error('excerpt')
            <p class="help is-danger"> {{ $errors->first('excerpt') }}</p>
        @enderror
        <br>

        <label for="body">Body</label><br>
        <textarea class="textarea @error('body') is-danger @enderror"
                  id="body" name="body"
                  rows="9" cols="170"
                  placeholder="The content of the article itself">{{ old('body') }}</textarea>
        @error('body')
            <p class="help is-danger"> {{ $errors->first('body') }}</p>
        @enderror
        <br><br>

        <input type="submit" value="Submit">
    </form>
@endsection
