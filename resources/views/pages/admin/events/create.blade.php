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
        {!! Form::text('start_time', '', array('class'=>'datetime')) !!}

        <label for="end_time">Event End</label>
        {!! Form::text('end_time', '', array('class'=>'datetime')) !!}

        <label for="open_time">Signup Open</label>
        {!! Form::text('open_time', '', array('class'=>'datetime')) !!}

        <label for="close_time">Signup Close</label>
        {!! Form::text('close_time', '', array('class'=>'datetime')) !!}

        <label for="chair_id">Event Chair</label>
        {!! Form::hidden('chair_id', null, array('class' => 'chair-field')) !!}

        <div class="avatar small">
            <p><strong>No chair</strong></p>
            <img src="/avatars/original/missing.png">

            <div><a href=".search-popup" class="user-not-optional search-popup-link button emphasis" data-effect="mfp-move-horizontal">Change</a></div>

            @include('search.search', array('selectClass' => 'chair-select'))
        </div>

        <br/>
        <br/>

        {!! Form::submit('Create', ['class' => 'button']) !!}
        {!! Form::close() !!}
    </div>
@endsection
