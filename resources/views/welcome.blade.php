@extends('layout')


@section('content')
            <h1>Welcome to my homepage</h1>
            <div>
                <h2>Why I chose this study on this school</h2>
                <ul>
                    <li>The HBO level suits me because I like being given more responsibility and plan for myself when I start working or finish a lesson.</li>
                    <li>The study programme suits my personality because i have had a lot of experi&euml;nce working together in groups on projects for different companies.</li>
                </ul>
            </div>
            <img src="img/HZ_beeldmerk_400x400.png" width="170" height="170">
            <img src="img/HZ middelburg.jpg" height="190" style="margin-left: 30px;">
            <ul>
                @foreach($articles as $article)
                    <hr style="height:1px;width:75%;border-width:0;color:black;background-color:#808080;text-align:right;margin-left:-1%">
                    <li style="list-style-type:none">
                        <h3><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h3>
                        <p>{{ $article->excerpt }}</p>
                    </li>
                @endforeach
            </ul>
@endsection

