@extends('layouts.master')

@section('title')
    Register
@endsection

@section('content')
    <div class="wrapper">
        <h2>Let's get registered!</h2>

        <p>You'll need to register for an account before being able to sign up for an event! We'll keep your information safe and only use it to give you updates on the events you signed up for!</p>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form role="form" method="POST" action="{{ url('/auth/register') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <label for="username">Username</label>
            <input type="text" name="username" value="{{ old('username') }}">

            <label for="email">Email</label>
            <input type="email" name="email" value="{{ old('email') }}">

            <label for="password">Password</label>
            <input type="password" name="password">

            <label for="password_confirm">Password Confirmation</label>
            <input type="password" name="password_confirmation">

            <label for="first_name">Phone Number</label>
            <input type="text" name="phone" value="{{ old('phone') }}">

            <label for="first_name">First Name</label>
            <input type="text" name="first_name" value="{{ old('first_name') }}">

            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" value="{{ old('last_name') }}">

            <input type="submit" class="button" value="Register">
        </form>
    </div>
@endsection
