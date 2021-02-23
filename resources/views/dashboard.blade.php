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
                    <td>{{ $grade->best_grade }}</td>
                </tr>
                @endforeach

{{--                <tr style="height: 45px;">--}}
{{--                    <td rowspan="3">1</td>--}}
{{--                    <td>Programme and career orientation</td>--}}
{{--                    <td>2,5</td>--}}
{{--                    <td>Assessment Exam</td>--}}
{{--                    <td>7,6</td>--}}
{{--                </tr>--}}
{{--                <tr style="height: 45px;">--}}
{{--                    <td>Computer Science Basics</td>--}}
{{--                    <td>7,5</td>--}}
{{--                    <td>Written Exam</td>--}}
{{--                    <td>6,1</td>--}}
{{--                </tr>--}}
{{--                <tr style="height: 45px;">--}}
{{--                    <td>Programming Basics</td>--}}
{{--                    <td>5</td>--}}
{{--                    <td>Case Study Exam</td>--}}
{{--                    <td>8,0</td>--}}
{{--                </tr>--}}
{{--                <tr style="height: 45px;">--}}
{{--                    <td rowspan="3">2</td>--}}
{{--                    <td rowspan="2">Object Oriented Programming</td>--}}
{{--                    <td rowspan="2">10</td>--}}
{{--                    <td>Casestudy</td>--}}
{{--                    <td>6,3</td>--}}
{{--                </tr>--}}
{{--                <tr style="height: 45px;">--}}
{{--                    <td>Project</td>--}}
{{--                    <td>6,0</td>--}}
{{--                </tr>--}}
{{--                <tr style="height: 45px;">--}}
{{--                    <td>Profesional Skills 1</td>--}}
{{--                    <td>2,5</td>--}}
{{--                    <td>Portfolio Exam</td>--}}
{{--                    <td>7,5</td>--}}
{{--                </tr>--}}
{{--                <tr style="height: 45px;">--}}
{{--                    <td rowspan="5">3</td>--}}
{{--                    <td>Framework Project 1</td>--}}
{{--                    <td>5</td>--}}
{{--                    <td>2 Portfolio Exams</td>--}}
{{--                    <td>-</td>--}}
{{--                </tr>--}}
{{--                <tr style="height: 45px;">--}}
{{--                    <td>Framework Development 1</td>--}}
{{--                    <td>5</td>--}}
{{--                    <td>Case study</td>--}}
{{--                    <td>-</td>--}}
{{--                </tr>--}}
{{--                <tr style="height: 45px;">--}}
{{--                    <td>Professional Working Environment</td>--}}
{{--                    <td>2,5</td>--}}
{{--                    <td>Assessment</td>--}}
{{--                    <td>-</td>--}}
{{--                </tr>--}}
{{--                <tr style="height: 45px;">--}}
{{--                    <td rowspan="2">Professional Skills 2</td>--}}
{{--                    <td rowspan="2">2,5</td>--}}
{{--                    <td>Portfolio Exams</td>--}}
{{--                    <td>-</td>--}}
{{--                </tr>--}}
{{--                <tr style="height: 45px;">--}}
{{--                    <td>2 Written Exams</td>--}}
{{--                    <td>-</td>--}}
{{--                </tr>--}}
{{--                <tr style="height: 45px;">--}}
{{--                    <td rowspan="4">4</td>--}}
{{--                    <td>Framework Project 2</td>--}}
{{--                    <td>5</td>--}}
{{--                    <td>Portfolio Exam</td>--}}
{{--                    <td>-</td>--}}
{{--                </tr>--}}
{{--                <tr style="height: 45px;">--}}
{{--                    <td>Framework Development 2</td>--}}
{{--                    <td>5</td>--}}
{{--                    <td>Portfolio Exam</td>--}}
{{--                    <td>-</td>--}}
{{--                </tr>--}}
{{--                <tr style="height: 45px;">--}}
{{--                    <td rowspan="2">Proffesional Skills 3</td>--}}
{{--                    <td rowspan="2">2,5</td>--}}
{{--                    <td>Portfolio Exam</td>--}}
{{--                    <td>-</td>--}}
{{--                </tr>--}}
{{--                <tr style="height: 45px;">--}}
{{--                    <td>2 Written Exams</td>--}}
{{--                    <td>-</td>--}}
{{--                </tr>--}}
{{--                <tr style="height: 45px;">--}}
{{--                    <td rowspan="2">Whenever</td>--}}
{{--                    <td>HZ personality</td>--}}
{{--                    <td>2,5</td>--}}
{{--                    <td>Portfolio</td>--}}
{{--                    <td>-</td>--}}
{{--                </tr>--}}
{{--                <tr style="height: 45px;">--}}
{{--                    <td>IT personality</td>--}}
{{--                    <td>2,5</td>--}}
{{--                    <td>Portfolio</td>--}}
{{--                    <td>-</td>--}}
{{--                </tr>--}}
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
