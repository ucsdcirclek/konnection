<div class="event-summary">

    <div class="wrapper">
        @if(session()->has('hidden'))
            <div class="flash-notice">
                <p>
                    You are creating a CERF for an event that will not be
                    on the calendar. This CERF is only for administrative
                    purposes.
                </p>
            </div>
        @endif

        <div class="description">
            @if(session()->has('hidden'))
                <h1><span class="light-emphasis">Creating CERF for: </span></h1>
                <h3>{!! Form::text('title', null, array('placeholder' => 'Event name goes here!')) !!}</h3>

                <div>
                    <label for="event_location">Event Location</label>
                    {!! Form::text('event_location') !!}
                </div>

                <div class="half">
                    <label for="start_time">Event Start</label>
                    {!! Form::text('start_time', '', array('class' => 'datetime')) !!}
                </div>

                <div class="half">
                    <label for="end_time">Event End</label>
                    {!! Form::text('end_time', '', array('class' => 'datetime')) !!}
                </div>
            @else
                {!! Form::hidden('event_id', $event->id) !!}

                <h1><span class="light-emphasis">Creating CERF for: </span>{{ $event->title }}</h1>

                <p class="half"><strong>Date:</strong> {{ $event->start_time->setTimezone('America/Los_Angeles')->format('F n, Y') }}</p>
                <p class="half"><strong>Location:</strong> {{ $event->event_location }}</p>
            @endif
        </div>

        <div class="chair avatar large">

            @if (is_null($chair))
                {!! Form::hidden('chair_id', null, array('class' => 'chair-field')) !!}
                <p><strong>No chair</strong></p>

                <img src="/avatars/original/missing.png">
            @else
                {!! Form::hidden('chair_id', $chair->id, array('class' => 'chair-field')) !!}
                <p><strong>Chair: </strong>{{ $chair->first_name }}</p>

                <img src="{{ $chair->avatar->url() }}">
            @endif

            <div><a href=".search-popup" class="user-not-optional search-popup-link button emphasis" data-effect="mfp-move-horizontal">Change</a></div>

            @include('search.search')

        </div>
    </div>
</div>