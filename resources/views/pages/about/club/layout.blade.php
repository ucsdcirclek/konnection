@extends('layouts.master')

@section('content')
<div id="about" class="wrapper">
  <h1>About Circle K</h1><br />
  <div id="sidebar">
    <div class="page"><a href="{{ url('about/club') }}">General</a></div>
    <hr>

    {{--
    <div class="page"><a href="{{ url('about/club/board') }}">Board</a></div>
    <hr>
    --}}

    <div class="page"><a href="{{ url('about/club/causes') }}">Causes</a></div>
    <hr>
    <div class="page"><a href="{{ url('about/club/tenets') }}">Tenets</a></div>
  </div>
  <br /><br />
  <div id="main">
      @yield('about-content')
  </div>
</div>
@endsection
