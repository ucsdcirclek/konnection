@extends('layouts.master')

@section('title')
    Profile
@endsection

@section('content')

    <div class="profile-row">
        <div>
            <img src="{{ $user->avatar->url() }}" />
            <p> {{$user->first_name . " " . $user->last_name}}</p>
        </div>
        <div>
            <p>MRP status</p>
            <p>You currently have {{$countArray[0]}} service hours!</p>
            <p>{{$countArray[1]}} leadership hours!</p>
            <p>{{$countArray[2]}} fellowship hours!</p>
            <p>{{$countArray[3]}} miles!</p>
            <p>Events</p>
        </div>
        <div>
            <p>testing</p>
        </div>
    </div>



    <div>
        <img src="{{ $user->avatar->url() }}" style="border-radius:50%; width:150px; height:150px;">
    </div>

    <h2>{{ $profile->college  }}</h2>
    <p>{{ $profile->bio }}</p>

@endsection
