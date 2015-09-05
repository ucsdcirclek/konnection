@extends('layouts.master')

@section('title', 'Create CERF')

@section('content')

    <div id="cerf-header">
        <h1>Club Event Report Forms</h1>
    </div>

    {!! Form::open(['action' => 'CerfsController@store']) !!}

    <div id="event-summary">

        {!! Form::hidden('event_id', $event->id) !!}
        {!! Form::hidden('chair_id', null, array('class' => 'chair-field')) !!}

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

                <div><a href=".search-popup" class="user-not-optional search-popup-link button emphasis" data-effect="mfp-move-horizontal">Change</a></div>

                @include('search.search')

            </div>
        </div>
    </div>

    <div id="member-attendance-section">

        <div class="wrapper">
            <h3>Home Club Attendance</h3>

            <p class="section-instructions">
                For each person who attended, fill in the service, planning, traveling, leadership, and fellowship
                hours. Also include drivers in the list of attendees and fill in their mileage <strong>to the
                event.</strong>
            </p>

            @if (!$registrations->isEmpty())
                <table id="attendance-table">
                    <tr>
                        <th>Name</th>
                        <th>Service</th>
                        <th>Planning</th>
                        <th>Traveling</th>
                        <th>Leadership</th>
                        <th>Fellowship</th>
                        <th>Mileage</th>
                    </tr>

                    @foreach($registrations as $registration)
                        <tr>
                            <input class="attendee-field" name="attendee_id[]" type="hidden" value="{{ $registration->user->id }}">

                            {{-- <td><div class="avatar small"><img src="{{ $registration->user->avatar->url() }}"></div></td> --}}
                            <td>{{ $registration->user->first_name }} {{ $registration->user->last_name }}</td>

                            <td><input name="service_hours[{{ $registration->user->id }}]" type="number" value="0"></td>
                            <td><input name="planning_hours[{{ $registration->user->id }}]" type="number" value="0"></td>
                            <td><input name="traveling_hours[{{ $registration->user->id }}]" type="number" value="0"></td>
                            <td><input name="admin_hours[{{ $registration->user->id }}]" type="number" value="0"></td>
                            <td><input name="social_hours[{{ $registration->user->id }}]" type="number" value="0"></td>
                            <td><input name="mileage[{{ $registration->user->id }}]" type="number" value="0"></td>

                            <td><a href="#" class="remove-registration-button"><div class="button emphasis"><i class="fa fa-times"></i></div></a></td>
                        </tr>
                    @endforeach
                </table>
            @endif

            <div><a href=".search-popup" class="user-optional attendee-row search-popup-link button emphasis" data-effect="mfp-move-horizontal">Add Attendee</a></div>

        </div>
    </div>

    {!! Form::submit('Submit CERF') !!}
    {!! Form::close() !!}

@endsection