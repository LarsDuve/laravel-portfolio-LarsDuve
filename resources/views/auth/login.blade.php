@extends('layout')


@section('content')
   <form action="{{ route('auth.check') }}" method="POST">
       @csrf

       @if(Session::get('fail'))
           {{ Session::get('fail') }}
       @endif

       <h4>User login</h4>
       <hr>
       <label for="email">Email</label>
       <input type="text" name="email" placeholder="Enter email" value="{{ old('email') }}">
       <span>@error('email'){{ $message }} @enderror</span>


       <label for="password">Password</label>
       <input type="password" name="password" placeholder="Enter password">
       <span>@error('password'){{ $message }} @enderror</span>

       <label for="">Remember Me</label>
       <input type="checkbox" name="remember_me" value="1">

       <button type="submit">Login</button>
       <br>
       <a href="register">Create new account now!</a>
   </form>

@endsection
