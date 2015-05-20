@extends('pages.admin.layout')

@section('admin-content')
    <div id="event-create" class="wrapper">
        <h2>Create an Event</h2>
        <br/>

        {!! Form::open(['action' => 'EventsController@store']) !!}

        <label for="title">Title</label>
        {!! Form::text('title') !!}

        <label for="description">Description</label>
        {!! Form::textarea('description', null, array('class'=>'editor')) !!}

        <label for="event_location">Event Location</label>
        {!! Form::text('event_location') !!}

        <label for="meeting_location">Meeting Location</label>
        {!! Form::text('meeting_location') !!}

        <label for="start_time">Event Start</label>
        {!! Form::date('start_time') !!}

        <label for="end_time">Event End</label>
        {!! Form::date('end_time') !!}

        <label for="open_time">Signup Open</label>
        {!! Form::date('open_time') !!}

        <label for="close_time">Signup Close</label>
        {!! Form::date('close_time') !!}

        <br/>
        <br/>

        {!! Form::submit('Create', ['class' => 'button']) !!}
        {!! Form::close() !!}
    </div>
@endsection