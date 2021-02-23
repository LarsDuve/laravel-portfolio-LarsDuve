@extends('layout')


@section('content')
    <h1>New Course</h1>
    <form method="POST" action="/dashboard">
        @csrf
        <label for="quartile">Quartile</label><br>
        <input type="text" id="quartile" name="quartile" size="70" value="The most relevant question of all"><br>

        <label for="course_name">Course name</label><br>
        <input type="text" id="course_name" name="course_name" size="70" value="Some relevant answer"><br>

        <label for="test_name">Test name</label><br>
        <input type="text" id="test_name" name="test_name" size="70" value="A potential link to go with the article"><br>

        <label for="ec">Ec</label><br>
        <input type="text" id="ec" name="ec" size="70" value="A potential link to go with the article"><br>

        <label for="best_grade">Grade</label><br>
        <input type="text" id="best_grade" name="best_grade" size="70" value="A potential link to go with the article"><br><br>

        <input type="submit" value="Submit">
    </form>
@endsection
