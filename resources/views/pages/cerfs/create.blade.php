@extends('layouts.master')

@section('title', 'Create CERF')

@section('content')

    @include('layouts.header', array('headerTitle' => 'Club Event Report Forms'))

    {!! Form::open(['action' => 'CerfsController@store']) !!}

        @include('errors.errors')

        @include('pages.cerfs.partials.eventsummary')

        @include('pages.cerfs.partials.fundraising')

        @include('pages.cerfs.partials.commentary')

    <div class="continue-form">
       <div class="wrapper">
           {!! Form::submit('Continue') !!}
           {!! Form::close() !!}
       </div>
    </div>

@endsection