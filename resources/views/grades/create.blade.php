@extends('layout')


@section('content')
    <h1>New Course</h1>
    <form method="POST" action="/dashboard">
        @csrf
        <label for="quartile">Quartile</label><br>
        <textarea id="quartile" name="quartile"></textarea><br>

        <label for="course_name">Course name</label><br>
        <textarea id="course_name" name="course_name"></textarea><br>

        <label for="test_name">Test name</label><br>
        <textarea id="test_name" name="test_name"></textarea><br>

        <label for="ec">Ec</label><br>
        <textarea id="ec" name="ec"></textarea><br>

        <label for="best_grade">Grade</label><br>
        <textarea id="best_grade" name="best_grade"></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
@endsection
