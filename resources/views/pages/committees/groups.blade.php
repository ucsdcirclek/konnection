@extends('layouts.master')

<head>
    <style>
        .member-row {
            padding: 6px;
            display: -ms-flexbox;
            display: block; }
        .member-row div {
            margin: 5px;
            text-align: center;+
        -ms-flex: 1;
            flex: 1;
            background-color: #FFFFFF;
            border-radius: 0.1875em; }
        .member-row div img {
            padding: 10px;
            width: 175px;
            height: 175px;
            border-radius: 50%; }
        .member-row p {
            font-size: 45;
            margin: 0; }
        .member-row p:last-child {
            margin-bottom: 10px }
    </style>
</head>


@section('title')
    Committees and Impact Teams
@endsection

@section('content')

    <div class="member-row2">
        <div class="container">
            <a href="{{ url('committees') }}">
                <div>
                    <img src="https://fontmeme.com/permalink/171126/d2144e535be590650ff53ee9a6ac9a70.png"
                         alt="fancy-fonts" border="0" class="image">
                </div>
            </a>
        </div>
            <hr>
        <div class="container">
            <a href="{{ url('impactteams') }}">
                <div>
                    <img src="https://fontmeme.com/permalink/171126/e5e44f35540b6864c7e45f638f2ceb9f.png"
                         alt="fancy-fonts" border="0" class="image">
                </div>
            </a>
        </div>
    </div>
@endsection
