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
            <p>MRP status - TBD</p>
            <p>You have completed:</p>
            <p>{{$countArray[0]}} service hours!</p>
            <p>{{$countArray[1]}} leadership hours!</p>
            <p>{{$countArray[2]}} fellowship hours!</p>
            <p>and have driven {{$countArray[3]}} miles!</p>
            <p>Events</p>
        </div>
        <div>

            @foreach ($events as $name)
                <p>{{$name->title}}</p>
            @endforeach


        </div>
    </div>


@endsection
