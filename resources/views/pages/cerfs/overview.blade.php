@extends('layouts.master')

@section('title', 'Choose Event')

@section('content')

    @include('pages.cerfs.partials.header')

    <div class="cerf-selection light-gray">
        <div class="wrapper">
            <h1>Recent Events</h1>

            <div class="selection-subsection">

                <div class="section-sidebar">
                    <p><strong>Pick an event!</strong> The events to the right are events that do not have a CERF filled out yet.</p>
                </div>

                <div class="selection-table">

                    @foreach ($eventsWithoutCerfs as $event)
                        <a href="{{ action('CerfsController@select', [$event->id]) }}">
                            <div class="selection-cell green">

                                <div class="avatar small">

                                    @if (is_null($event->chair))
                                        <img src="{{ $event->creator->avatar->url() }}">
                                        <small>Event created by {{ $event->creator->first_name }}</small>
                                    @else
                                        <img src="{{ $event->chair->avatar->url() }}">
                                        <small><strong>Event chair: </strong>{{ $event->chair->first_name }}</small>
                                    @endif

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

    @unless($userCerfs ->isEmpty())
        <div class="gray">
            @include('pages.cerfs.partials.cerfselection', ['title' => 'Pending CERFs',
                                                    'message' => 'To the right are your CERFs that are pending approval.',
                                                    'cerfs' => $userCerfs,
                                                    'color' => 'yellow'])
        </div>
    @else
        <div class="empty-section light-yellow">
            <h3>You have not written any CERFs.</h3>
        </div>
    @endunless
@endsection