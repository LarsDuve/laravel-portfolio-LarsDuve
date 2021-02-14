@extends('layout')


@section('content')
            <h1>Frequently Asked Questions</h1>
            <ul>
                @foreach($faqs as $faq)
                    <li><h3>{{ $faq->question }}</h3>
                        {{ $faq->answer }}<br>
                        <a href="{{ $faq->link }}" target="_blank">{{ $faq->link }}</a>
                    </li>
                @endforeach
            </ul>
@endsection
