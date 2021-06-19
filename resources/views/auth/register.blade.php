@extends('layout')


@section('content')
    <form action="{{ route('auth.create') }}" method="POST">
        @csrf

        @if(Session::get('succes'))
            {{ Session::get('succes') }}
        @endif

        @if(Session::get('fail'))
            {{ Session::get('fail') }}
        @endif

        <h4>User register</h4>
        <hr>
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter full name" value="{{ old('name') }}">
        <span>@error('name'){{ $message }} @enderror</span>

        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Enter email" value="{{ old('email') }}">
        <span>@error('email'){{ $message }} @enderror</span>

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter password">
        <span>@error('password'){{ $message }} @enderror</span>

        <button type="submit">Register</button>
        <br>
        <a href="login">I already have an account!</a>
    </form>

@endsection
