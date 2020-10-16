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
            <div class="page"><a href="{{ url('about/circlek/UCSD') }}">UCSD</a></div>
            <hr>
            <div class="page"><a href="{{ url('about/circlek/district') }}">District</a></div>
            <hr>
            <div class="page"><a target="_blank" href="http://www.kiwanis.org">Kiwanis</a></div>
            <hr>
            <div calss="page"><a target="_blank" href="http://www.kiwanisclublajolla.org/">La Jolla Kiwanis</a></div>
            <hr>
            <div><a href="http://resources.cnhcirclek.org/" target="_blank">CNH District Resources</a></div>
            <hr>
            <div><a href="https://www.circlek.org/resources" target="_blank">International Resources</a></div>
        </div>
        <div id="main">
            @yield('about-content')
        </div>
    </div>
@endsection
