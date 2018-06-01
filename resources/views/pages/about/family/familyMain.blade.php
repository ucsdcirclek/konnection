@extends('layouts.master')

@section('title')
    Families
@endsection

@section('content')

    <ul>
        <li><a href="{{ url('familysystem/family1') }}">Koopa Troopa</a></li>
        <li><a href="{{ url('familysystem/family2') }}">GAang GAang</a></li>
        <li><a href="{{ url('familysystem/family3') }}">#TBT</a></li>
        <li><a href="{{ url('familysystem/family4') }}">Hundred Acre HOOD</a></li>
    </ul>

@endsection

