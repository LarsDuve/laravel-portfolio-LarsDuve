@extends('layout')


@section('content')
    <h1>Frequently Asked Questions </h1>
    <h4><a style="text-decoration: none; color: darkblue" href="/faqs/create">Add Faq <span>&#10010;</span></a></h4>
    <ul>
        @foreach($faqs as $faq)
            <li><h3>{{ $faq->question }} <a style="text-decoration: none; color: darkblue" href="/faqs/{{ $faq->id }}/edit"><span>&#9998;</span></a></h3>
                {{ $faq->answer }}<br>
                <a href="{{ $faq->link }}" target="_blank">{{ $faq->link }}</a>
            </li>
        @endforeach
    </ul>
@endsection
