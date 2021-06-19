<!DOCTYPE html>
<html>
<head>
{{--    <title>Homepage</title>--}}
    <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>

<body>
<header>
    <div class="nav">
        <ul>
            <li><a class="{{ Request::path() === '/' ? 'active' : '' }}" href="/">Homepage</a></li>
            <li><a class="{{ Request::path() === 'profile' ? 'active' : '' }}" href="/profile">Profile Page</a></li>
            <li><a class="{{ Request::path() === 'dashboard' ? 'active' : '' }}" href="/dashboard">Personal Dashboard</a></li>
            <li><a class="{{ Request::path() === 'articles' ? 'active' : '' }}" href="/articles">Articles</a></li>
            <li><a class="{{ Request::path() === 'motivation' ? 'active' : '' }}" href="/motivation">My Motivation</a></li>
            <li><a class="{{ Request::path() === 'faqs' ? 'active' : '' }}" href="/faqs">Frequently Asked Questions</a></li>
        </ul>


    </div>

</header>
<div id="box-container-body">
    <div id="box-mid-body">
        <div id="content">
                @yield ('content')
            <br><br>
            <p> </p>

        </div>
    </div>
</div>
</body>

<!--started on 30/08/2020-->
</html>
