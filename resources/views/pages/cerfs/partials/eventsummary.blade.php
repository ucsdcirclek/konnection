<div id="event-summary">

    {!! Form::hidden('event_id', $event->id) !!}

    <div class="wrapper">

        <div class="description">
            <h1><span class="light-emphasis">Creating CERF for: </span>{{ $event->title }}</h1>

            <p class="half"><strong>Date:</strong> {{ $event->start_time->setTimezone('America/Los_Angeles')->format('F n, Y') }}</p>
            <p class="half"><strong>Location:</strong> {{ $event->event_location }}</p>
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