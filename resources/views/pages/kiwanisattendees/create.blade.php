@extends('layouts.master')

@section('title', 'Create CERF')

@section('content')

    <div id="kiwanis-attendance-section">

        {!! Form::open(['action' => 'KiwanisAttendeesController@store']) !!}

        <div class="wrapper">
            <h3>Kiwanis Club Attendance</h3>

            <p class="section-instructions">
                List each Kiwanis Family Club present, and for each club list the number of members who attended.
            </p>

            <table>
                <tr>
                    <th>Name of Kiwanis Family Club</th>
                    <th>Number of Members</th>
                </tr>
            </table>

            <td><a href="#" class="add-kiwanis-attendee-button"><div class="button emphasis">Add Kiwanis Attendee</div></a></td>
        </div>

        <div class="continue-form">
            <div class="wrapper">
                {!! Form::submit('Submit') !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection