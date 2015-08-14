@extends('pages.admin.layout')

@section('title')
    Create Event
@endsection

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
        {!! Form::text('start_time', '', array('placeholder'=>'yyyy-mm-dd hh:mm')) !!}

        <label for="end_time">Event End</label>
        {!! Form::text('end_time', '', array('placeholder'=>'yyyy-mm-dd hh:mm')) !!}

        <label for="open_time">Signup Open</label>
        {!! Form::text('open_time', '', array('placeholder'=>'yyyy-mm-dd hh:mm')) !!}

        <label for="close_time">Signup Close</label>
        {!! Form::text('close_time', '', array('placeholder'=>'yyyy-mm-dd hh:mm')) !!}

        <br/>
        <br/>

        {!! Form::submit('Create', ['class' => 'button']) !!}
        {!! Form::close() !!}
    </div>
@endsection
