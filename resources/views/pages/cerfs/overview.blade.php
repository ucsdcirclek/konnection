@extends('layouts.master')

@section('title', 'Choose Event')

@section('content')
    <div id="cerf-header">
        <h1>Club Event Report Forms</h1>
    </div>

    <div id="cerf-selection">
        <div class="wrapper">

            <div id="event-section">

                <div class="section-sidebar">
                    <p><strong>Pick an event!</strong> The events to the right are events that do not have a CERF filled out yet.</p>
                </div>

                <div id="event-table">

                    @foreach ($events_without_cerfs as $event)
                        <a href="{{ action('CerfsController@select', [$event->id]) }}">
                            <div class="event-cell">


                                <div class="avatar small">
                                    <img src="{{ $event->creator->avatar->url() }}">
                                    <small>Event created by {{ $event->creator->first_name }}</small>
                                </div>

                                <div class="cerf-description">
                                    <p><strong>{{ $event->title }}</strong></p>
                                    <p>{{ $event->end_time->setTimezone('America/Los_Angeles')->format('l, F j, Y') }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection