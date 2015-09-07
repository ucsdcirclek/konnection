@extends('layouts.master')

@section('title', 'Create CERF')

@section('content')

    <div id="cerf-header">
        <h1>Club Event Report Forms</h1>
    </div>

    {!! Form::open(['action' => 'CerfsController@store']) !!}

    @if (count($errors) > 0)
        <div class="wrapper">
            <div class="flash-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

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