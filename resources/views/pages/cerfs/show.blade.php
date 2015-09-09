@extends('layouts.master')

@section('title', 'Show CERF')

@section('content')

    <h1>Showing CERF of {{ $cerf->event->title }}</h1>

@endsection