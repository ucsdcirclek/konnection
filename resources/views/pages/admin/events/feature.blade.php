@extends('pages.admin.layout')

@section('title')
    Feature Event
@endsection

@section('admin-content')
    <div id="event-feature" class="wrapper">
        <h2>Feature an Event</h2>
        <br/>

        {!! Form::open(['action' => ['EventsController@saveFeaturedEvent', $event->slug]]) !!}

        {!! Form::hidden('event', $event->id) !!}

        <label for="event-title">Event Title</label>
        {!! Form::text('event-title', $event->title, ['disabled']) !!}

        <label for="summary">Summary <small>160 characters max</small></label>
        {!! Form::textarea('summary', null, array('id'=> 'featuredEventEditor')) !!}

        <br/>
        <br/>

        {!! Form::submit('Save', ['class' => 'button']) !!}
        {!! Form::close() !!}
    </div>
@endsection
