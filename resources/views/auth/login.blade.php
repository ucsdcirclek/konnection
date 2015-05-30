@extends('layouts.master')

@section('title')
    Login
@endsection

@section('content')
    <div id="login" class="wrapper">
        <div id="login-form">
            <form role="form" method="POST" action="{{ url('/auth/login') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h3>Login</h3>
                <hr />
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
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ old('email') }}">
                <label for="password">Password</label>
                <input type="password" name="password">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
                <br />
                <button type="submit" class="button">Login</button>
                <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
            </form>
        </div>

        <div id="register">
            <h3>Not a member? Join us!</h3>
            <br />
            <p>
                CKI (Circle K International) is an organization at the collegiate and university levels. The main focus of CKI is to promote community service, leadership development, as well as fellowship and friendship. Registering allows you to easily sign up for
                events with just one click! However, you also not have to be an official member to come out to many of our events!
            </p>
            <a class="button" href="{{ url('/auth/register') }}">Register</a>
            <a class="button" href="{{ url('/') }}">Learn More</a>
        </div>
    </div>
@endsection
