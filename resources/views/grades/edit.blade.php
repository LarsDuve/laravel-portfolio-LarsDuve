@extends('layout')


@section('content')
    <h1>Edit Course</h1>
    <form method="POST" action="/dashboard/{{ $grade->id }}">
        @csrf
        @method('PUT')

        <label for="quartile">Quartile</label><br>
        <input type="text" id="quartile" name="quartile" size="70" value="{{ $grade->quartile }}"><br>

        <label for="course_name">Course name</label><br>
        <input type="text" id="course_name" name="course_name" size="70" value="{{ $grade->course_name }}"><br>

        <label for="test_name">Test name</label><br>
        <input type="text" id="test_name" name="test_name" size="70" value="{{ $grade->test_name }}"><br>

        <label for="ec">Ec</label><br>
        <input type="text" id="ec" name="ec" size="70" value="{{ $grade->ec }}"><br>

        <label for="best_grade">Grade</label><br>
        <input type="text" id="best_grade" name="best_grade" size="70" value="{{ $grade->best_grade }}"><br><br>

        <input type="submit" value="Submit">
    </form>
@endsection
