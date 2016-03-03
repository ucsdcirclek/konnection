@extends('layouts.master')

@section('content')

    @include('layouts.header', array('headerTitle' => 'About Circle K'))

    <div id="about" class="wrapper">
        <div id="sidebar">
            <div class="page"><a href="{{ url('about/circlek') }}">General</a></div>
            <hr>
            <div class="page"><a href="{{ url('about/circlek/history') }}">History</a></div>
            <hr>
            <div class="page"><a href="{{ url('about/circlek/structure') }}">Structure</a></div>
            <hr>
            <div class="page"><a href="{{ url('about/circlek/tenets') }}">Tenets</a></div>
        </div>
        <div id="main">
            @yield('about-content')
        </div>
    </div>
@endsection
