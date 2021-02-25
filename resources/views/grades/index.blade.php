@extends('layout')


@section('content')
    <h1>Personal Dashboard</h1>

    <table style="height: 270px; width: 610px; border-spacing: 0px;">
        <tbody>

        <tr style="height: 1px; border-bottom-width: 4px;">
            <th style="width: 100px; height: 1px;">Quartile</th>
            <th style="width: 600px; height: 1px;">Course</th>
            <th style="width: 100px; height: 1px;">EC</th>
            <th style="width: 400px; height: 1px;">Exam</th>
            <th style="width: 100px; height: 1px;">Grade</th>
        </tr>
        @foreach($grades as $grade)
            <tr style="height: 45px;">
                <td style="border-left-width: 4px;">{{ $grade->quartile }}</td>
                <td>{{ $grade->course_name }}</td>
                <td>{{ $grade->ec }}</td>
                <td>{{ $grade->test_name }}</td>
                <td style="border-right-width: 4px;">{{ $grade->best_grade }} </td>
                <td style="border: 0"><a style="text-decoration: none; color: darkblue; " href="/dashboard/{{ $grade->id }}/edit"><span>&#9998;</span></a></td>
            </tr>
        @endforeach
        </tbody>
    </table><br>
    <div id="flexbox-container">
        <!--Between div, adjust the percentage based on your progress. (also in main.css)-->
        <div id="flexbox-progress">27.5 / 60 EC</div>
    </div>
    <h2>Study links</h2>
    <ul>
        <li><a target="_blank" href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen">HZ Course and Examination Regulations (CER)</a></li>
        <li><a target="_blank" href="https://hz.nl/uploads/documents/Regelingen/OERS/2019-2020/2020-2021-ICT-Implementation-Regulations-CER-HZ-DEF1.0.pdf">Implementation Regulations (IR)</a></li>
        <li><a target="_blank" href="https://learn.hz.nl/my/">Learn environment HZ</a></li>
        <li><a target="_blank" href="https://apps.hz.nl/angular/studievoortgang/studiestatus">Study Progress</a></li>
        <li><a target="_blank" href="https://teams.microsoft.com/_?culture=nl-nl&country=NL&lm=deeplink&lmsrc=homePageWeb&cmpid=WebSignIn#/school//?ctx=teamsGrid">Teams environment</a></li>
        <li><a target="_blank" href="https://github.com/LarsDuve">Github</a></li>
    </ul>
@endsection
