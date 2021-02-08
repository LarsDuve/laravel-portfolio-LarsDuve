<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css\main.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge"
    >
    <title>Document</title>
</head>
<body>
<header>
    <div class="nav">
        <ul>
            <li><a href="/">Homepage</a></li>
            <li><a href="profile">Profile Page</a></li>
            <li><a href="dashboard">Personal Dashboard</a></li>
            <li><a href="professions">Professions</a></li>
            <li><a href="motivation">My Motivation</a></li>
            <li><a class="active" href="faq">Frequently Asked Questions</a></li>
        </ul>
    </div>
</header>
<div id="box-container-body">
    <div id="box-mid-body">
        <div id="content">
            <h1>Frequently Asked Questions</h1>
                <ul>
                @foreach($faqs as $faq)
                    <li><h3>{{ $faq->question }}</h3><br>
                        {{ $faq->answer }}<br>
                        <a href="{{ $faq->link }}">{{ $faq->link }}</a>
                    </li>

                @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
