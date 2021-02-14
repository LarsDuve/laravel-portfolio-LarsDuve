@extends('layout')


@section('content')

{{--    @foreach($articles as $article)--}}
{{--        <h3><a href="/articles/{{ $article->id }}" style="text-decoration: none">{{ $article->title }}</a>      {{ $article->updated_at }}</h3>--}}
{{--        <p>{{ $article->excerpt }}</p>--}}
{{--    @endforeach--}}
            <h1>Articles</h1>
            <p>Here are a bunch of companies that I researched on their way of working in the IT branch:</p>
            <a href="https://www.veracode.com/" target="_blank"><h2>Veracode</h2></a>
            <p>Veracode is a cybersecurity company that tests the security off clients their software and help fix flaws that are found.<br>
                A few of the IT roles in this company are IT security specialist, Software engineer and Data scientist.<br>
                The method that Veracode uses is called DevOps. It is a method where you start with a plan and then you are in a loop until the customer is satisfied.<br>
                <img src="https://miro.medium.com/max/2800/0*n57zykBMdOdmUg7C.png" width="300px" alt="DevOps">
            </p>
            <a href="https://www.bostondynamics.com/" target="_blank"><h2>Boston Dynamics</h2></a>
            <p>
                Boston Dynamics is a world leading robotics company in advanced mobility and intelligence robots.<br>
                A few of the IT roles in this company are Software engineer and IT technician.<br>
                Boston dynamics use their own invented techniques where I could not find any information on, but they say it allows them to build walking machines of any size, shape, actuator style or powerplant.<br><br>
                <img src="https://www.bostondynamics.com/sites/default/files/2019-09/spot-sm.png" width="260px" alt="Boston Dynamics Robot">
            </p>
            <a href="https://www.labela.nl/" target="_blank"><h2>Label A</h2></a>
            <p>
                Label A is a company that creates innovative technical solutions and build complex digital ecosystems for customers.<br>
                A few of the IT roles in this company are Mobile developer, User experience designer and Front- and Back-end developers.<br>
                Label A uses Agile which is the same method of working as taught on the HZ. It is a very effective method because you write down everything you plan to do and can dynamically ad and remove steps.<br>
                <img src="https://cms.labela.nl/media/images/Model_-_New_-_6.2e16d0ba.fill-756x506.png" width="400px" alt="Label A work process">
            </p>
            <a href="https://www.yoursurprise.nl/" target="_blank"><h2>YourSurprise</h2></a>
            <p>
                YourSurprise is a website on which you can select a present for someone and put a custom design on it which you can then buy.<br>
                A few of the IT roles in this company are Web developer and User experience designer.<br>
                YourSurprise also uses Agile which is the same method of working as taught on the HZ. It is a very effective method because you write down everything you plan to do and can dynamically ad and remove steps.<br>
                <img src="https://static.yoursurprise.com/resourcebase/files/449/899624.jpg" width="300px" alt="YourSurprise mug">
            </p>
            <a href="https://www.macaw.nl/" target="_blank"><h2>Macaw</h2></a>
            <p>
                Macaw helps other companies solve their IT problems whatever those may be, from implementing and maintaining technology to helping with your strategic plans, design, adoption, further development and optimization.<br>
                A few of the IT roles in this company are Data engineer, IT Director and Software engineer.<br>
                Macaw also uses Agile which is the same method of working as taught on the HZ. It is a very effective method because you write down everything you plan to do and can dynamically ad and remove steps.<br>
                <img src="https://www.macaw.nl/app/uploads/macaw.jpg.png" width="200" alt="Macaw">
            </p>
@endsection
