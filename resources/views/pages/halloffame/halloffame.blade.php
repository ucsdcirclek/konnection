@extends('layouts.master')

@section('title')
    Hall of Fame
@endsection

@section('content')
    <div class="member-row2">
    <!--

        <a href="{{ url('mom') }}">
            <div>
                <p><strong>Member of the Month</strong></p>
            </div>
        </a>
-->
        <a href="{{url('spotlight')}}">
            <div class="container">
                <img src="https://fontmeme.com/permalink/171025/2b4fb9b5cca3b7d6595e48f5999e8efd.png" alt="fancy-fonts"
                     border="0" class="image">
            </div>
        </a>
        <hr style="height: 3px">
        <a href="{{ url('sof') }}">
            <div class="container">
                <img src="https://fontmeme.com/permalink/171025/40e1872e881133d406175c766ddef39c.png" alt="fancy-fonts"
                     border="0" class="image">
            </div>
        </a>
    </div>

    @endsection
