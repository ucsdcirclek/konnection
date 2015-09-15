@extends('layouts.master')

@section('title', $event->title)

{{-- Take description, cut it down, and add ellipses --}}
@section('description', substr(strip_tags($event->description), 0, 156) . '...')

@section('content')
    <div id="event">
        <div id="navigator" style="border-bottom-left-radius: 10px;">
            @foreach($upcoming_events as $day => $events)
                <ul>
                    <h3>{{ $day }}</h3>
                    @foreach($events as $u_event)
                        <li><a href="{{ action('EventsController@show', $u_event->slug) }}">{{ $u_event->title }}</a></li>
                    @endforeach
                </ul>
                <br/>
            @endforeach
            <button>Back to Calendar</button>
        </div>


        <div id="viewport">

            <div class="head">

                <div class="event-info">
                    <h2>{{ $event->title }}</h2>
                    <ul>
                        <li><strong>{{ $event->start_time->setTimezone('America/Los_Angeles')->format('l, F j, Y') }}</strong></li>
                        <li><strong>
                                {{ $event->start_time->setTimezone('America/Los_Angeles')->format('g:ia') }} to {{ $event->end_time->setTimezone('America/Los_Angeles')->format('g:ia') }}
                            </strong></li>
                        @if($event->event_location)
                            <li>{{ $event->event_location }}</li>@endif
                        @if($event->meeting_location)
                            <li>Meet at <strong>{{ $event->meeting_location}}</strong></li>@endif
                    </ul>
                </div>

                {{-- Only allow registration if the event is actually open --}}
                @if($event->isOpen())
                    <div class="signup">
                        {{-- Show guest registration link if not logged in --}}
                        @if(Auth::check())
                            @if(!$event->isRegistered(Auth::id()))
                                <button id="register-btn"><i class="fa fa-check"></i> Signup
                                </button>
                            @else
                                <button id="unregister-btn"><i class="fa fa-close"></i> Signup</button>
                            @endif
                        @else
                            <div class="modal">
                                <label for="guestRegistration">
                                    <div class="btn"><i class="fa fa-check"></i> Guest Signup</div>
                                </label>
                                <input class="modal-state" id="guestRegistration" type="checkbox"/>

                                <div class="modal-window">
                                    <div class="modal-inner">
                                        <label class="modal-close" for="guestRegistration"></label>

                                        <h1>Sign up as a guest</h1>

                                        <p class="intro">We're glad you've decided to check us out! Please leave us with
                                            some
                                            contact
                                            information in case we need to contact you regarding our event!</p>

                                        <p class="body">

                                        <form id="registerGuest">
                                            <label>First Name</label>
                                            <input type="text" name="firstName">
                                            <label>Last Name</label>
                                            <input type="text" name="lastName">
                                            <label>Phone Number</label>
                                            <input type="tel" name="phone">

                                            <button type="submit">
                                                Signup
                                            </button>
                                        </form>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                @endif

            </div>

            <div class="left">
                <div class="description">
                    {!! $event->description !!}
                </div>

                <div class="registrations">
                    <h4>Who's going</h4>
                    <ul>
                        @foreach($event->registrations as $registration)
                            <li class="avatar small">

                                <div class="avatar-wrapper">
                                    <img src="{{ $registration->user->avatar->url() }}">
                                </div>


                                <p class="name">{{ $registration->user->first_name}} {{ $registration->user->last_name }}</p>

                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>


            <div class="right">
                <div class="chair avatar large">
                    <h5>Person of Contact</h5>
                    <br/>

                    <div class="image">

                    </div>

                    @if(is_null($event->chair))
                        <img src="{{ $event->creator->avatar->url() }}">
                        <p class="name">{{ $event->creator->first_name }} {{$event->creator->last_name}}</p>
                        <p class="info">{{ $event->creator->phone }}</p>
                    @else
                        <img src="{{ $event->chair->avatar->url() }}">
                        <p class="name">{{ $event->chair->first_name }} {{$event->chair->last_name}}</p>
                        <p class="info">{{ $event->chair->phone }}</p>
                    @endif

                </div>

                @if(Auth::check())
                    <button id="chair-event-btn" type="button">Chair Event</button>
                @endif

                @if($event->isRegistered(Auth::id()))
                    <div>
                        <h6>Volunteer to be a:</h6>

                        <div class="btn-group">
                            <button id="drive-btn" type="button"><i class="fa fa-car"></i> Driver</button>
                            <br/>
                            <button id="photograph-btn" type="button"><i class="fa fa-camera"></i>
                                Photographer
                            </button>
                            <br/>
                            <button id="write-btn" type="button"><i class="fa fa-pencil"></i> Writer</button>
                        </div>
                    </div>
                @endif

                @if(Auth::check() && (Auth::user()->hasRole('Officer') || Auth::user()->hasRole('Administrator')))
                        <h6>Admin</h6>
                        <div class="btn-group">
                            <a class="button" href="{{ action('EventsController@edit', $event->slug) }}">
                                Edit Event
                            </a>
                            {!! Form::open(['action' => ['EventsController@delete', $event->slug], 'method' =>
                            'delete']) !!}
                            {{ Form::submit('Delete Event') }}
                            {!! Form::close() !!}
                        </div>
                @endif

            </div>

        </div>

    </div>
@endsection
