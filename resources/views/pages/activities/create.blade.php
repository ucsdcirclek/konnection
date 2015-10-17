@extends('layouts.master')

@section('title', 'Create CERF')

@section('content')

    @include('layouts.header', array('headerTitle' => 'Club Event Report Forms'))

    <div id="member-attendance-section">

        {!! Form::open(['action' => 'ActivitiesController@store']) !!}

        <div class="wrapper">

            @include('errors.errors')

            <h3>Home Club Attendance</h3>

            <p class="section-instructions">
                For each person who attended, fill in the service, planning, traveling, leadership, and fellowship
                hours. Also include drivers in the list of attendees and fill in their mileage <strong>to the
                    event.</strong>
            </p>

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
                            <input class="attendee-field" name="user_id[]" type="hidden" value="{{ $registration->user->id }}">
                            <input name="name[]" type="hidden" value="{{ $registration->user->first_name . ' ' . $registration->user->last_name }}">

                            {{-- <td><div class="avatar small"><img src="{{ $registration->user->avatar->url() }}"></div></td> --}}
                            <td>{{ $registration->user->first_name }} {{ $registration->user->last_name }}</td>

                            <td><input name="service_hours[]" type="number" value="0" step="0.25" min="0"></td>
                            <td><input name="planning_hours[]" type="number" value="0" step="0.25" min="0"></td>
                            <td><input name="traveling_hours[]" type="number" value="0" step="0.25" min="0"></td>
                            <td><input name="admin_hours[]" type="number" value="0" step="0.25" min="0"></td>
                            <td><input name="social_hours[]" type="number" value="0" step="0.25" min="0"></td>
                            <td><input name="mileage[]" type="number" value="0" step="0.25" min="0"></td>

                            <td><a href="#" class="remove-registration-button"><div class="button emphasis"><i class="fa fa-times"></i></div></a></td>
                        </tr>
                    @endforeach
                </table>

            <div><a href=".search-popup" class="user-optional attendee-row search-popup-link button emphasis" data-effect="mfp-move-horizontal">Add Attendee</a></div>

            @include('search.search')

        </div>

        <div class="continue-form">
            <div class="wrapper">
                {!! Form::submit('Continue') !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection