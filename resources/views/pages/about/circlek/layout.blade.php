@extends('layouts.master')

@section('content')

    @include('layouts.header', array('headerTitle' => 'Circle K'))

    <div id="about" class="wrapper">
        <div id="sidebar">
            <div class="page"><a href="{{ url('about/circlek') }}">General</a></div>
            <hr>
            <div class="page"><a href="{{ url('about/circlek/structure') }}">Structure</a></div>
            <hr>
            <div class="page"><a href="{{ url('about/circlek/UCSD') }}">UCSD</a></div>
            <hr>
            <div class="page"><a target="_blank" href="http://www.kiwanis.org">Kiwanis</a></div>
            <hr>
            <div calss="page"><a target="_blank" href="http://www.kiwanisclublajolla.org/">La Jolla Kiwanis</a></div>
        </div>
        <div id="main">
            @yield('about-content')
        </div>
    </div>
@endsection
