@extends('layout')


@section('content')
    <h1>Personal Dashboard</h1>

    <table style="height: 270px; width: 610px;">
        <tbody>

        <tr style="height: 1px;">
            <th style="width: 100px; height: 1px;">Quartile</th>
            <th style="width: 600px; height: 1px;">Course</th>
            <th style="width: 100px; height: 1px;">EC</th>
            <th style="width: 400px; height: 1px;">Exam</th>
            <th style="width: 100px; height: 1px;">Grade</th>
        </tr>
        @foreach($grades as $grade)
            <tr style="height: 45px;">
                <td >{{ $grade->quartile }}</td>
                <td>{{ $grade->course_name }}</td>
                <td>{{ $grade->ec }}</td>
                <td>{{ $grade->test_name }}</td>
                <td>{{ $grade->best_grade }} <p><a href="/dashboard/{{ $grade->id }}/edit"><span>&#9998;</span></a></p></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div id="flexbox-container">
        <!--Between div, adjust the percentage based on your progress. (also in main.css)-->
        <div id="flexbox-progress">49%</div>
    </div>
    <h2>Study links</h2>
    <ul>
        <li><a target="_blank" href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen">HZ Course and Examination Regulations (CER)</a></li>
        <li><a target="_blank" href="https://hz.nl/uploads/documents/Regelingen/OERS/2019-2020/2020-2021-ICT-Implementation-Regulations-CER-HZ-DEF1.0.pdf">Implementation Regulations (IR)</a></li>
        <li><a target="_blank" href="https://learn.hz.nl/my/">Learn omgeving HZ</a></li>
        <li><a target="_blank" href="https://apps.hz.nl/angular/studievoortgang/studiestatus">Studie voortgang</a></li>
        <li><a target="_blank" href="https://teams.microsoft.com/_?culture=nl-nl&country=NL&lm=deeplink&lmsrc=homePageWeb&cmpid=WebSignIn#/school//?ctx=teamsGrid">Teams omgeving</a></li>
        <li><a target="_blank" href="https://github.com/LarsDuve">Github</a></li>
    </ul>
@endsection
