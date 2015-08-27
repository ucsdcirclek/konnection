@extends('layouts.master')

@section('title', 'Create CERF')

@section('content')

    <div id="cerf-header">
        <h1>Club Event Report Forms</h1>
    </div>

    <div id="event-summary">
        <div class="wrapper">

            <div class="description">
                <h1>{{ $event->title }}</h1>

                <p class="half"><strong>Date:</strong> {{ $event->start_time->setTimezone('America/Los_Angeles')->format('F n, Y') }}</p>
                <p class="half"><strong>Location:</strong> {{ $event->event_location }}</p>
            </div>

            <div class="chair avatar large">

                @if (is_null($chair))
                    <p><strong>No chair</strong></p>

                    <img src="/avatars/original/missing.png">
                @else
                    <p><strong>Chair:</strong></p>
                    <p>{{ $chair->first_name }}</p>

                    <img src="{{ $chair->avatar->url() }}">
                @endif

                <div><a href="#search-popup" class="search-popup-link button emphasis" data-effect="mfp-move-horizontal">Change</a></div>

                @include('pages.cerfs.search')

            </div>
        </div>
    </div>

@endsection