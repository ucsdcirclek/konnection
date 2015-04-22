@extends('layouts.master')

@section('content')
    <div class="wrapper">
        <h2>Reset Password</h2>
        <hr/>

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

        <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="token" value="{{ $token }}">

            <label for="email">E-Mail Address</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">

            <label for="password">Password</label>
            <input type="password" class="form-control" name="password">

            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation">

            <button type="submit" class="btn btn-primary">
                Reset Password
            </button>
        </form>
    </div>
@endsection
