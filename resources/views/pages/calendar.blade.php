@extends('layouts.master')

@section('title', 'Calendar')

@section('description')
    UCSD Circle K offers more than 10 events each week consisting of community service opportunities as well as social and professional development activities.
@endsection

@section('content')

    @include('layouts.header', array('headerTitle' => 'Calendar'))

    <style>
        @media only screen and (max-width: 500px) { /* Makes the calendar categories look good on mobile */

            #legend .types-table div {
                display: inline-block;
                width: 33%;
                padding: 0;
            }

            .calendar .fc-day-header { /* Makes calendar days look good on mobile */
                overflow: hidden;
                padding-left: 2px;

            }
        }

        .calendar .fc-left h2 {
            color: #4A3F81;
        }

        .calendar .fc-day-header {
            background-color: #4A3F81;
        }
    </style>

  <div class="mobile-text">
    <div id="legend">
        <div class="types-table">

            @foreach($types as $name)
                <div>
                    <strong>{{ $name }}</strong>
                </div>
            @endforeach
        </div>
    </div>

    <div class="calendar"></div>
  </div>
@endsection
