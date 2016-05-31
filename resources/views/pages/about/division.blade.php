@extends('layouts.master')

@section('title')
    Division
@endsection

@section('content')
    @include('layouts.header', array('headerTitle' => 'About Our Division'))

    <div class="wrapper">
        <p>
            UCSD Circle K is a part of <strong>Paradise Division</strong>, one of the eight divisions in Cal-Nev-Ha (see District tab). Our current Lieutenant Governor is San Diego State University's <strong>Gerald Biando</strong>. Our division
            comprises	seven schools that range in location from California to Hawaii. Paradise Division's mascots are a <strong>toucan and a pineapple</strong>.
        </p>
        <h3>Paradise Clubs</h3>
        <ul>
            <li>Palomar College</li>
            <li>Grossmont College </li>
            <li>California State University San Marcos </li>
            <li>Hawaii Pacific University </li>
            <li><a href="http://www.sdsucirclek.com/">San Diego State University </a></li>
            <li>University of California, San Diego </li>
            <li>University of Hawaii, Hilo </li>
            <li>University of Hawaii, Manoa</li>
        </ul>
    </div>
@endsection