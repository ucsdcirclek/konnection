@extends('layouts.master')

@section('title')
    Hall of Fame
@endsection

@section('content')
    <div class="member-row2">

        <a href="{{ url('mom') }}">
            <div class="container">
            <img src="https://fontmeme.com/permalink/171126/1f9f638f093c130cda56b366bf8864ae.png" alt="fancy-fonts"
                 border="0" class="image">
            </div>
        </a>
        <hr style="height: 3px">
        <a href="{{url('spotlight')}}">
            <div class="container">
                <img src="https://fontmeme.com/permalink/171126/bb699f346bec919bc37d5b2e467ca185.png" alt="fancy-fonts"
                     border="0" class="image">
            </div>
        </a>
        <hr style="height: 3px">
        <a href="{{ url('sof') }}">
            <div class="container">
                <img src="https://fontmeme.com/permalink/171126/b1ab8963591c23686f3af1912c58895d.png" alt="fancy-fonts"
                     border="0" class="image">
            </div>
        </a>
    </div>

    @endsection
