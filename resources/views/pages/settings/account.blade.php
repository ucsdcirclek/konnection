@extends('layouts.master')

@section('title')
    Settings
@endsection

@section('content')
    <div id="settings" class="wrapper">
        <h2>Account Settings</h2>
        @if (count($errors) > 0)
            <div class="flash-alert">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (Session::has('message'))
            <div class="flash-success">
                {{ Session::get('message') }}
            </div>
        @endif

        {!! \Form::model($user, ['action' => 'UsersController@update', 'files' => true]) !!}

        <label for="username">Username</label>
        {!! \Form::text('username', $user->username, ['disabled']) !!}

        <label for="email">Email</label>
        {!! \Form::email('email') !!}

        <label for="password">New Password</label>
        {!! \Form::password('password', null) !!}

        <label for="password_confirmation">Password Confirmation</label>
        {!! \Form::password('password_confirmation', null) !!}

        <label for="first_name">First Name</label>
        {!! \Form::text('first_name') !!}

        <label for="last_name">Last Name</label>
        {!! \Form::text('last_name') !!}

        <label for="avatar">Avatar</label>
        {!! \Form::file('avatar') !!}

        {!! \Form::submit('Save Settings', ['class' => 'button']) !!}

        {!! \Form::close() !!}
    </div>
@endsection
