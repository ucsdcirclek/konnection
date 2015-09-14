@extends('layouts.basic')

@section('title', 'Registrations for ' . $event->title)

@section('content')
    <h1>Registrations for {{ $event->title }}</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        @foreach($registrations as $registration)
            <tr>
                <td>{{ $registration['name'] }}</td>
                <td>{{ $registration['phone'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection