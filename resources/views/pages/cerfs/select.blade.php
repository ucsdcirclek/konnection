@extends('layouts.master')

@section('title', 'Choose Event')

@section('content')
    <div id="cerf-header">
        <h1>Club Event Report Forms</h1>
    </div>

    <div class="wrapper">

        <ul>
            @foreach ($events_without_cerfs as $event)
                <li>{{ $event->id}}</li>
            @endforeach
        </ul>

        <div id="event-section">
            <p><strong>Pick an event!</strong> The events to the right are events that do not have a CERF filled out yet.</p>

            <div id="event-table">

            </div>
        </div>
    </div>

@endsection