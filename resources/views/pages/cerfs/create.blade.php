@extends('layouts.master')

@section('title', 'Create CERF')

@section('content')

    <div id="cerf-header">
        <h1>Club Event Report Forms</h1>
    </div>

    <div class="wrapper">
        <h1>{{ $event->title }}</h1>
    </div>

@endsection