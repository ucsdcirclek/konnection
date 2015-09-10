@extends('layouts.master')

@section('title', 'Calendar')

@section('description')
    UCSD Circle K offers more than 10 events each week consisting of community service opportunities as well as social and professional development activities.
@endsection

@section('content')
    @include('layouts.header', array('headerTitle' => 'Calendar'))

    <div class="calendar"></div>
@endsection