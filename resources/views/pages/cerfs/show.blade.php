@extends('layouts.master')

@section('title', 'Show CERF')

@section('content')

    @include('layouts.header', array('headerTitle' => 'Club Event Report Forms'))

   <div class="event-summary">
       <div class="wrapper">
           <div class="description">
               <h1><span class="light-emphasis">Showing CERF for: </span>{{ $cerf->event->title }}</h1>

               <p class="half"><strong>Date:</strong> {{ $cerf->event->start_time->setTimezone('America/Los_Angeles')->format('F j, Y') }}</p>
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
                <span class="light-emphasis">{{ $serviceHoursSum }}</span> service {{ ngettext('hour', 'hours', $serviceHoursSum) }},
                <span class="light-emphasis">{{ $adminHoursSum }}</span> leadership {{ ngettext('hour', 'hours', $adminHoursSum) }}, and
                <span class="light-emphasis">{{ $socialHoursSum }}</span> fellowship {{ ngettext('hour', 'hours', $socialHoursSum) }}.
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
                        <td>{{ $activity->name }}</td>
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
        <div class="wrapper">
            <h3>Event Tags</h3>

            @foreach($tagCategories as $categoryName => $categoryTags)
                <div class="category">
                    <h4>{{ $categoryName }}</h4>
                    @if (empty($categoryTags))
                        <p>There are no {{ $categoryName }} tags.</p>
                    @else
                        <ul>
                            @foreach($categoryTags as $tag)
                                <li>{{ $tag }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            @endforeach

        </div>
    </div>

    <div class="drivers-listing">
        <div class="wrapper">
            <h3>Driving Info</h3>
            <p>
                Based on the attendance records, there were <span class="light-emphasis">{{ count($drivers) }}</span> {{ ngettext('driver', 'drivers', count($drivers)) }}
                for a total of <span class="light-emphasis">{{ array_sum($drivers) }}</span> {{ ngettext('mile', 'miles', array_sum($drivers)) }} to the event.
            </p>

            @unless (empty($drivers))
                <table>
                    <tr>
                        <th>Driver Name</th>
                        <th>Mileage to Event</th>
                    </tr>
                        @foreach($drivers as $driverName => $numMiles)
                            <tr>
                                <td>{{ $driverName }}</td>
                                <td>{{ $numMiles }}</td>
                            </tr>
                    @endforeach
                </table>
            @endunless
        </div>
    </div>

    <div class="fundraising-listing">
        <div class="wrapper">
            <h3>Fundraising</h3>

            @if($cerf->amount_raised === 0 && $cerf->amount_spent === 0 && $cerf->net_profit === 0)
                <p>There is no fundraising info for this event.</p>
            @else
                <p>
                    <span class="light-emphasis">${{ $cerf->amount_spent }}</span> was spent and
                    <span class="light-emphasis">${{ $cerf->amount_raised }}</span> was raised, with
                    <span class="light-emphasis">${{ $cerf->net_profit }}</span> net profit.
                </p>
            @endif
        </div>
    </div>

    <div class="comment-listing">
        <div class="wrapper">
            <h3>Commentary</h3>

            @if(trim($cerf->summary))
                <p><strong>Event Summary: </strong>{{ $cerf->summary }}</p>
            @endif

            @if(trim($cerf->strengths))
                <p><strong>Strengths: </strong>{{ $cerf->strengths }}</p>
            @endif

            @if(trim($cerf->weaknesses))
                <p><strong>Weaknesses: </strong>{{ $cerf->weaknesses }}</p>
            @endif

            @if(trim($cerf->reflection))
                <p><strong>What would you do differently if you did this event again? </strong>{{ $cerf->reflection }}</p>
            @endif
        </div>
    </div>

    @if(Auth::check() && (Auth::user()->hasRole('Officer') || Auth::user()->hasRole('Administrator')) && !$cerf->approved)
        <div class="admin-cerf-show">
            <div>
                <button class="emphasis"><a href="{{ action('CerfsController@approve', ['id' => $cerf->id]) }}">Approve CERF</a></button>
            </div>

            <div>
                <div class="danger">
                    {!! Form::open(['method' => 'DELETE', 'route' => ['cerfs.destroy', $cerf->id]]) !!}
                    {!! Form::submit('Reject CERF', ['class' => 'danger']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    @endif

    <div class="continue-form">
        <div class="wrapper">
            <a href="/cerfs/overview"><div class="button emphasis">Back to CERFs Overview</div></a>
        </div>
    </div>
@endsection