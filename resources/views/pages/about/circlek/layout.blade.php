@extends('layouts.master')

@section('content')
    <div id="about" class="wrapper">
        <h1>About Circle K</h1><br />
        <div id="sidebar">
            <div class="page"><a ui-sref="circlek.general">General</a></div>
            <hr>
            <div class="page"><a ui-sref="circlek.history">History</a></div>
            <hr>
            <div class="page"><a ui-sref="circlek.structure">Structure</a></div>
            <hr>
            <div class="page"><a ui-sref="circlek.tenets">Tenets</a></div>
        </div>
        <br /><br />
        <div id="main">
            @yield('about-content')
        </div>
    </div>
@endsection