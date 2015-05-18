@extends('layouts.master')

@section('content')
    <div id="about" class="wrapper">
        <h1>About Circle K</h1><br />
        <div id="sidebar">
            <div class="page"><a href="{{ url('about/circlek/general') }}">General</a></div>
            <hr>
            <div class="page"><a href="{{ url('about/circlek/history') }}">History</a></div>
            <hr>
            <div class="page"><a href="{{ url('about/circlek/structure') }}">Structure</a></div>
            <hr>
            <div class="page"><a href="{{ url('about/circlek/tenets') }}">Tenets</a></div>
        </div>
        <br /><br />
        <div id="main">
            @yield('about-content')
        </div>
    </div>
@endsection