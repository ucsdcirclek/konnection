@extends('layouts.master')

@section('title', 'Create CERF')

@section('content')

    <div id="cerf-header">
        <h1>Club Event Report Forms</h1>
    </div>

    {!! Form::open(['action' => 'CerfsController@store']) !!}

    @include('pages.cerfs.partials.eventsummary')

    @include('pages.cerfs.partials.memberattendance')

    @include('pages.cerfs.partials.eventtags')

    @include('pages.cerfs.partials.kiwanisattendance')

    @include('pages.cerfs.partials.fundraising')

    @include('pages.cerfs.partials.commentary')

   <div id="submit-cerf-section">
       <div class="wrapper">
           {!! Form::submit('Submit CERF') !!}
           {!! Form::close() !!}
       </div>
   </div>

@endsection