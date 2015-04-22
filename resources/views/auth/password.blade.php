@extends('layouts.master')

@section('content')
    <div class="wrapper">
        <h2>Reset Password</h2>
        <hr/>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

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

        <form role="form" method="POST" action="{{ url('/password/email') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <label for="email">E-Mail Address</label>
            <input type="email" name="email" value="{{ old('email') }}">

            <button type="submit" class="btn btn-primary">
                Send Password Reset Link
            </button>
        </form>
    </div>
@endsection
