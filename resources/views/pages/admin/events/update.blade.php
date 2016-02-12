@extends('pages.admin.layout')

@section('title')
    Update Event
@endsection

@section('admin-content')
    <div id="event-create" class="wrapper">
        <h2>Update an Event</h2>
        <br/>

        {!! Form::model($event, ['action' => ['EventsController@update', $event->slug]]) !!}

        <label for="title">Title</label>
        {!! Form::text('title') !!}

        <label for="description">Description</label>
        {!! Form::textarea('description', $event->description, array('class'=>'editor')) !!}

        <label for="event_location">Event Location</label>
        {!! Form::text('event_location') !!}

        <label for="meeting_location">Meeting Location</label>
        {!! Form::text('meeting_location') !!}

        <label for="start_time">Event Start</label>
        {!! Form::text('start_time', $event->start_time->format('l, F j, Y g:i A'), array('class'=>'datetime')) !!}

        <label for="end_time">Event End</label>
        {!! Form::text('end_time', $event->end_time->format('l, F j, Y g:i A'), array('class'=>'datetime')) !!}

        <label for="open_time">Signup Open</label>
        {!! Form::text('open_time', Carbon\Carbon::now()->setTimezone('America/Los_Angeles')->format('l, F j, Y g:i A'), array('class'=>'datetime')) !!}

        <label for="close_time">Signup Close</label>
        {!! Form::text('close_time', $event->close_time->format('l, F j, Y g:i A'), array('class'=>'datetime')) !!}

        <label for="type_id">What kind of event is this?</label>
        <ul>
            <li>{!! Form::radio('type_id', 1) !!} Service</li>
            <li>{!! Form::radio('type_id', 2) !!} Social</li>
            <li>{!! Form::radio('type_id', 3) !!} Committee</li>
            <li>{!! Form::radio('type_id', 4) !!} Kiwanis</li>
            <li>{!! Form::radio('type_id', 5) !!} Fundraising</li>
            <li>{!! Form::radio('type_id', 6) !!} Division/District</li>
        </ul>

        <br/>
        <br/>

        {!! Form::submit('Update', ['class' => 'button']) !!}
        {!! Form::close() !!}
    </div>
@endsection
