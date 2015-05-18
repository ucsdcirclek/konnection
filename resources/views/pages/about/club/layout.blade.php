@extends('layouts.master')

@section('content')
<div id="about" class="wrapper">
  <h1>About Circle K</h1><br />
  <div id="sidebar">
    <div class="page"><a >General</a></div>
    <hr>
    <div class="page"><a >Board</a></div>
    <hr>
    <div class="page"><a >Structure</a></div>
    <hr>
    <div class="page"><a >Tenets</a></div>
  </div>
  <br /><br />
  <div id="main">
      @yield('about-content')
  </div>
</div>
@endsection

