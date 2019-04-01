
@extends('layouts.master')

<style>
  .btn-group-admin > a, input, form {
      width: 100%;
      margin-bottom: 1em;
  }

    button.accordion {
        width: 40%;
    }

     i.fa-car, i.fa-camera, i.fa-edit, i.fa-check, i.fa-close {
        display:block;
    }

    @media screen and (max-width:500px) {
        button.accordion {
            width: 100%;
        }
    }
</style>

@section('title', $event->title)

{{-- Take description, cut it down, and add ellipses --}}
@section('description', substr(strip_tags($event->description), 0, 156) . '...')

@section('content')
    <!--<div id="event" style="overflow-x: scroll;">
        <div id="navigator" style="border-bottom-left-radius: 10px; display:none;">
            @foreach($upcoming_events as $day => $events)
                <ul>
                    <h3>{{ $day }}</h3>
                    @foreach($events as $u_event)
                        <li><a href="{{ action('EventsController@show', $u_event->slug) }}">{{ $u_event->title }}</a></li>
                    @endforeach
                </ul>
                <br/>
            @endforeach
            <a href="{{ action('EventsController@index') }}">Back to Calendar</a>
        </div> -->


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
                    @if($event->isRegistered(Auth::id()))
                        <h4 style="color:green;">Signup successful!</h4>
                    @endif
                    <div class="signup">
                        {{-- Show guest registration link if not logged in --}}
                        @if(Auth::check())
                            @if(!$event->isRegistered(Auth::id()))
                                {!! Form::open(array('action' => array('EventRegistrationsController@store', 'slug' => $event->slug, 'id' => 'self'))) !!}
                                {!! Form::button('Sign up <i class="fa fa-check"></i>', array('type' => 'submit', 'id' => 'register-btn')) !!}
                                {!! Form::close() !!}
                            @else
                                {!! Form::open(array('action' => array('EventRegistrationsController@destroy', 'slug' => $event->slug, 'id' => 'self'), 'method' => 'delete')) !!}
                                {!! Form::button('Cancel sign up <i class="fa fa-close"></i>', array('type' => 'submit', 'id' => 'unregister-btn')) !!}
                                {!! Form::close() !!}
                            @endif
                        @else

                            <div class="modal">
                                <label for="guestRegistration">
                                    <div class="btn" id="guestBtn">Guest Signup <i class="fa fa-check"></i></div>
                                </label>
                                <input class="modal-state" id="guestRegistration" type="checkbox"/>

                                <div class="modal-window">
                                    <div class="modal-inner">
                                        <label class="modal-close" for="guestRegistration"></label>

                                        <h1>Sign up as a guest</h1>

                                        <p class="intro">We're glad you've decided to check us out! Please leave us with some contact information in case we need to contact you regarding our event!</p>

                                        {!! Form::open(array('action' => array('GuestRegistrationsController@store', $event->slug))) !!}

                                        {!! Form::label('first_name', 'First Name') !!}
                                        {!! Form::text('first_name') !!}

                                        {!! Form::label('last_name', 'Last Name') !!}
                                        {!! Form::text('last_name') !!}

                                        {!! Form::label('phone', 'Phone') !!}
                                        {!! Form::text('phone') !!}

                                        {!! Form::submit('Submit')  !!}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                @endif
                @if($event->isRegistered(Auth::id()))
                    <div class="eventOptions">
                        <h4>Additional options:</h4>

                        <div class="btn-group-reg">
                            {!! Form::open(array('action' => array('EventRegistrationsController@update', 'slug' => $event->slug, 'id' => 'self'), 'method' => 'patch')) !!}
                            {!! Form::hidden('driver_status', 1) !!}
                            {!! Form::button('Driver <i class="fa fa-car"></i>', array('type' => 'submit', 'id' => 'drive-btn')) !!}
                            {!! Form::close() !!}

                            {!! Form::open(array('action' => array('EventRegistrationsController@update', 'slug' => $event->slug, 'id' => 'self'), 'method' => 'patch')) !!}
                            {!! Form::hidden('photographer_status', 1) !!}
                            {!! Form::button('Photographer <i class="fa fa-camera"></i>', array('type' => 'submit', 'id' => 'photograph-btn')) !!}
                            {!! Form::close() !!}

                            {!! Form::open(array('method' => 'patch', 'action' => array('EventRegistrationsController@update', 'slug' => $event->slug, 'id' => 'self'))) !!}
                            {!! Form::hidden('writer_status', 1) !!}
                            {!! Form::button('Writer <i class="fas fa-edit"></i>', array('type' => 'submit', 'id' => 'write-btn')) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                @endif
                <div class="description">
                    {!! $event->description !!}
                </div>

            </div>

                @include ('errors.errors')

                <div class="chair avatar large">
                    <h5>Person of Contact</h5>
                    <br/>

                    <div class="image">

                    </div>

                    @if(is_null($event->chair))
                        <!-- <img src="{{ $event->creator->avatar->url() }}"> -->
                        <img src="{{ asset('images/Crobeasts/Piranha_square.png') }}">
                        <p class="name">{{ $event->creator->first_name }} {{$event->creator->last_name}}</p>
                        <p class="info">{{ $event->creator->phone }}</p>
                    @else
                        <!-- <img src="{{ $event->chair->avatar->url() }}"> -->
                        <img src="{{ asset('images/Crobeasts/Piranha_square.png') }}">
                        <p class="name">{{ $event->chair->first_name }} {{$event->chair->last_name}}</p>
                        <p class="info">{{ $event->chair->phone }}</p>
                    @endif

                    @if(Auth::check() && (Auth::user()->hasRole('Officer') || Auth::user()->hasRole('Administrator')))

                        <button class="accordion"><h6>Admin event options<i class="fas fa-plus"></i></h6></button>
                        <div class="panel">
                        <div class="btn-group-admin">
                            <a class="button" href="{{ action('EventsController@edit', $event->slug) }}">
                                Edit Event
                            </a>
                            <a class="button" href="{{ action('EventsController@registrations', $event->slug) }}">
                                View Registrations
                            </a>
                            <a class="button" href="{{ action('EventsController@feature', $event->slug) }}">
                                Feature Event
                            </a>
                            <a class="button" href="{{ action('EventsController@cloneCopy', $event->slug) }}">
                                Clone Event
                            </a>
                            {!! Form::open(['action' => ['EventsController@delete', $event->slug], 'method' =>
                            'delete']) !!}
                            {!! Form::submit('Delete Event') !!}
                            {!! Form::close() !!}

                            @if($event->isOpen())
                                {!! Form::model($event, array('action' => array('EventsController@update', $event->slug), 'method' => 'POST')) !!}
                                {!! Form::hidden('close_time', Carbon\Carbon::now()->setTimezone('America/Los_Angeles')) !!}
                                {!! Form::submit('Close sign-ups') !!}
                            @else
                                {!! Form::model($event, array('action' => array('EventsController@update', $event->slug), 'method' => 'POST')) !!}
                                {!! Form::hidden('open_time', Carbon\Carbon::now()->setTimezone('America/Los_Angeles')) !!}
                                {!! Form::submit('Open sign-ups') !!}
                            @endif
                        </div>
                        </div>
                    @endif

                </div>

            <div class="registrations">
                <h4 style="padding-right: 2.5%;">Who's going</h4>
                <ul id="eventRegAvatars">
                    @foreach($event->registrations as $registration)
                        <li class="avatar small">

                            <div class="avatar-wrapper">
                                <!-- <img src="{{ $registration->user->avatar->url() }}"> -->
                                <img src="{{ asset('images/Crobeasts/Piranha_square.png') }}">
                                {{-- Only allows for one type (of driver, photographer, or writer), driver type takes priority --}}
                                <div class="overlay">
                                    @if ($registration->driver_status)
                                        <i class="fa fa-car"></i>
                                    @elseif ($registration->writer_status)
                                        <i class="fa fa-pencil"></i>
                                    @elseif ($registration->photographer_status)
                                        <i class="fa fa-camera"></i>
                                    @endif
                                </div>
                            </div>


                            <p class="nameReg">{{ $registration->user->first_name}} {{ $registration->user->last_name }}</p>

                        </li>
                    @endforeach

                    {{-- Displays guests. --}}
                    @foreach($event->guests as $guestRegistration)
                        <li class="avatar small">
                            <div class="avatar-wrapper">
                                <!-- <img src="/avatars/original/missing.png"/> -->
                                <img src="{{ asset('images/Crobeasts/Piranha_square.png') }}">
                                {{-- Only allows for one type (of driver, photographer, or writer), driver type takes priority --}}
                                <div class="overlay">
                                    @if ($guestRegistration->driver_status)
                                        <i class="fa fa-car"></i>
                                    @endif
                                </div>
                            </div>

                            <p class="nameReg">{{ $guestRegistration->first_name}} {{ $guestRegistration->last_name }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
    </div>
@endsection
