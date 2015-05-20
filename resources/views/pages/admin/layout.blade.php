@extends('layouts.master')

@section('content')
    <div class="navigator">
        <div class="selections">
            <h3>Posts</h3>
            <ul>
                <li><a href="">Create Post</a></li>
            </ul>

            <h3>Events</h3>
            <ul>
                <li><a href="{{ action('EventsController@create') }}">Create Event</a></li>
            </ul>
        </div>

        <div class="viewport">
            @yield('admin-content')
        </div>

    </div>
@endsection