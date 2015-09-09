@extends('layouts.master')

@section('title', 'Show CERF')

@section('content')

    @include('pages.cerfs.partials.header')

   <div class="event-summary">
       <div class="wrapper">
           <div class="description">
               <h1><span class="light-emphasis">Showing CERF for: </span>{{ $cerf->event->title }}</h1>

               <p class="half"><strong>Date:</strong> {{ $cerf->event->start_time->setTimezone('America/Los_Angeles')->format('F n, Y') }}</p>
               <p class="half"><strong>Location:</strong> {{ $cerf->event->event_location }}</p>
           </div>

           <div class="chair avatar large">

               <p>Reporter: <strong>{{ $cerf->reporter->first_name . ' ' . $cerf->reporter->last_name }}</strong></p>
               <img src="{{ $cerf->reporter->avatar->url() }}">

           </div>
       </div>
   </div>

    <div class="attendees-listing">
        <div class="wrapper">

            <h3>Home Club Attendance</h3>

            <p>
                <span class="light-emphasis">{{ count($activities) }}</span> {{ ngettext('member', 'members', count($activities)) }} attended for a total of
                <span class="light-emphasis">{{ $service_hours_sum }}</span> service {{ ngettext('hour', 'hours', $service_hours_sum) }},
                <span class="light-emphasis">{{ $admin_hours_sum }}</span> leadership {{ ngettext('hour', 'hours', $admin_hours_sum) }}, and
                <span class="light-emphasis">{{ $social_hours_sum }}</span> fellowship {{ ngettext('hour', 'hours', $social_hours_sum) }}.
            </p>

            <table>
                <tr>
                    <th>Name</th>
                    <th>Service</th>
                    <th>Planning</th>
                    <th>Traveling</th>
                    <th>Leadership</th>
                    <th>Fellowship</th>
                    <th>Mileage</th>
                </tr>

                @foreach($activities as $activity)
                    <tr>
                        <td>{{ $activity->user->first_name . ' ' . $activity->user->last_name }}</td>
                        <td>{{ $activity->service_hours }}</td>
                        <td>{{ $activity->planning_hours }}</td>
                        <td>{{ $activity->traveling_hours }}</td>
                        <td>{{ $activity->admin_hours }}</td>
                        <td>{{ $activity->social_hours }}</td>
                        <td>{{ $activity->mileage }}</td>
                    </tr>
                @endforeach
            </table>

            <div>
                <h3>Kiwanis Attendance</h3>
                @if(!$kiwanisAttendees->isEmpty())
                    <p>
                        <span class="light-emphasis">{{ count($kiwanisAttendees) }}</span>
                        Kiwanis Family {{ ngettext('club', 'clubs', count($kiwanisAttendees)) }} attended the event.
                    </p>

                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Members Attended</th>
                        </tr>
                        @foreach($kiwanisAttendees as $attendee)
                            <tr>
                                <td>{{ $attendee->name  }}</td>
                                <td>{{ $attendee->members_attended }}</td>
                            </tr>
                        @endforeach
                    </table>
                @else
                    <p>No Kiwanis Attendees were present.</p>
                @endif
            </div>
        </div>
    </div>

    <div class="tags-listing">
        <h3>Event Tags</h3>

        <div>
            @if
        </div>
        <div>

        </div>
        <div>

        </div>
        <div>

        </div>
    </div>

@endsection