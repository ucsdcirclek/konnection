@extends('layouts.master')

@section('title')
    Team Haven
@endsection

@section('content')

    <div id="background" class="bigbanner"
         style="background-image: url('images/impactteams/team_haven/TeamHaven_Thumb.jpg');background-repeat: no-repeat; background-position-y: 38%;">
        <div id="title" class="bigbannertext">
            Team Haven
        </div>
    </div>

    <div class="message-box">
        <div class="title-wrapper">
            <p></p>
            <p></p>
            <h1 class="title">What is Team Haven?</h1>
        </div>
        <p>The goals of Team Haven are to to raise awareness about the issue of domestic violence
            , promote healthy relationships within the community,
            help prevent the spread of domestic violence in our local community, and
            help support the local community’s victims of domestic violence.
        </p>

    </div>

    <div class="title-wrapper">
        <h1 class="title">Impact Team Members</h1>
    </div>

    <div id="rows">
        <div id="row1" class="contact-row">
            <div>
                <img id="image1" src="{{ asset('images/impactteams/team_haven/Ann.jpg') }}" />
                <p id="name1"><strong>Ann Go</strong></p>
                <p id="title1">Impact Team Head</p>
            </div>
            <div>
                <img id="image4" src="{{ asset('images/impactteams/team_haven/Daan.jpg') }}" />
                <p id="name6"><strong>Dan Tran</strong></p>
                <p id="title6">Co-Finance Chair</p>
            </div>
            <div>
                <img id="image3" src="{{ asset('images/impactteams/team_haven/Hanna.jpg') }}" />
                <p id="name3"><strong>Hanna Lam</strong></p>
                <p id="title3">Co-Finanace Chair</p>
            </div>
        </div>

        <div id="row2" class="contact-row">

            <div>
                <img id="image2" src="{{ asset('images/impactteams/team_haven/Nicole.jpg') }}" />
                <p id="name2"><strong>Nicole Ambrioso</strong></p>
                <p id="title2">Operations Chair</p>
            </div>
            
            <div>
                <img id="image6" src="{{ asset('images/impactteams/team_haven/Kathy.jpg') }}" />
                <p id="name5"><strong>Kathy Tran</strong></p>
                <p id="title5">Co-Education/Outreach Chair</p>
            </div>

            <div>
                <img id="image7" src="{{ asset('images/impactteams/team_haven/Fray.jpg') }}" />
                <p id="name7"><strong>Fray Salmasan</strong></p>
                <p id="title7">Co-Education/Outreach Chair</p>
            </div>

        </div>
        <div id="row3" class="contact-row">
            <div>
                <img id="image5" src="{{ asset('images/impactteams/team_haven/Patrick.jpg') }}" />
                <p id="name4"><strong>Patrick Cosare</strong></p>
                <p id="title4">Publicity Chair</p>
            </div>
        </div>
    </div>

    @endsection