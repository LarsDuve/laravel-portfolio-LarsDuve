@extends('layout')


@section('content')
    <h1>New Course</h1>
    <form method="POST" action="/dashboard">
        @csrf
{{--        <label for="quartile">Quartile</label><br>--}}
{{--        <input type="text" id="quartile" name="quartile" size="70" maxlength="1" value=""><br>--}}

{{--        <label for="course_name">Course name</label><br>--}}
{{--        <input type="text" id="course_name" name="course_name" size="70" value=""><br>--}}

{{--        <label for="test_name">Test name</label><br>--}}
{{--        <input type="text" id="test_name" name="test_name" size="70" value=""><br>--}}

{{--        <label for="ec">Ec</label><br>--}}
{{--        <input type="text" id="ec" name="ec" size="70" value=""><br>--}}

{{--        <label for="best_grade">Grade</label><br>--}}
{{--        <input type="text" id="best_grade" name="best_grade" size="70" value=""><br><br>--}}

        <label for="quartile">Quartile</label><br>
        <textarea id="quartile" name="quartile"></textarea><br>

        <label for="course_name">Course name</label><br>
        <textarea id="course_name" name="course_name"></textarea><br>

        <label for="test_name">Test name</label><br>
        <textarea id="test_name" name="test_name"></textarea><br>

        <label for="ec">Ec</label><br>
        <textarea id="ec" name="ec"></textarea><br>

        <label for="best_grade">Grade</label><br>
        <input type="number" id="best_grade" name="best_grade"><br><br>

        <input type="submit" value="Submit">
    </form>
@endsection
