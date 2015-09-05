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

    <div id="event-tags-section">
        <div class="wrapper">
            <h3>Event Tags</h3>

            <p class="section-instructions">
                All Circle K events fall into one of three categories: service, administration, and/or social. These
                three categories correspond to our three tenets: service, leadership, and fellowship. Depending on the
                nature of the event, members who attend the event can get service hours, administrative hours, social
                hours, or a combination of the three.
            </p>

            <div class="tags-table">
                <div class="tags-table-header">
                    <h4>Service</h4>

                    <small>
                        Any service event that receives service hours should be tagged as CO, but depending on the
                        nature of the event, the event can be tagged with the other service tags.
                    </small>
                </div>

                @foreach ($service_tags as $tag)
                    <div class="tags-content-row">
                        <div>{!! Form::checkbox('service_tags[]', $tag->abbreviation) !!}</div>
                        <div><p>{{ $tag->name }} ({{ $tag->abbreviation }})</p></div>
                        <div><p>{{ $tag->description }}</p></div>
                    </div>
                @endforeach
            </div>

            <div class="tags-table">
                <div class="tags-table-header">
                    <h4>Leadership</h4>

                    <small>
                        Any event related to the operation of the club should be tagged as AD. Examples of
                        administrative events include – but are not limited to - attending meetings (e.g.) board
                        meetings, committee meetings, Kiwanis meetings, tabling, and workshops.
                    </small>
                </div>

                @foreach ($admin_tags as $tag)
                    <div class="tags-content-row">
                        <div>{!! Form::checkbox('admin_tags[]', $tag->abbreviation) !!}</div>
                        <div><p>{{ $tag->name }} ({{ $tag->abbreviation }})</p></div>
                        <div><p>{{ $tag->description }}</p></div>
                    </div>
                @endforeach
            </div>

            <div class="tags-table">
                <div class="tags-table-header">
                    <h4>Fellowship</h4>

                    <small>
                        Any event in which club members are socially interacting with each other should be tagged as
                        SE. A social event promotes the morale of its members so it is usually tagged as MD; however,
                        remember that although all SE events are MD tagged, not all MD events are SE tagged (e.g.
                        workshops).
                    </small>
                </div>

                @foreach ($social_tags as $tag)
                    <div class="tags-content-row">
                        <div>{!! Form::checkbox('social_tags[]', $tag->abbreviation) !!}</div>
                        <div><p>{{ $tag->name }} ({{ $tag->abbreviation }})</p></div>
                        <div><p>{{ $tag->description }}</p></div>
                    </div>
                @endforeach
            </div>

            <div class="tags-table">
                <div class="tags-table-header">
                    <h4>Miscellaneous</h4>

                    <small>
                        Miscellaneous tags are supplementary. Remember that all events have to fall in one of the above
                        three categories before getting a supplementary tag.
                    </small>
                </div>

                @foreach ($misc_tags as $tag)
                    <div class="tags-content-row">
                        <div>{!! Form::checkbox('misc_tags[]', $tag->abbreviation) !!}</div>
                        <div><p>{{ $tag->name }} ({{ $tag->abbreviation }})</p></div>
                        <div><p>{{ $tag->description }}</p></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

   <div id="submit-cerf-section">
       <div class="wrapper">
           {!! Form::submit('Submit CERF') !!}
           {!! Form::close() !!}
       </div>
   </div>

@endsection