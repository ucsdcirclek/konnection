@extends('layouts.master')

@section('content')

    @include('layouts.header', array('headerTitle' => 'About Our Club'))

    <div id="about" class="wrapper">
      <div id="sidebar">
        <div class="page"><a href="{{ url('about/club') }}">General</a></div>
        <hr>
        <div class="page"><a href="{{ url('about/club/causes') }}">Causes</a></div>
        <hr>
        <!--<div class="page"><a href="{{ url('about/club/tenets') }}">Tenets</a></div>-->
      </div>
      <div id="main">
          @yield('about-content')
      </div>
    </div>
@endsection
