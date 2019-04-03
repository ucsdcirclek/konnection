@extends('layouts.master')

@section('title')
    ALICE
@endsection

@section('content')

    <div id="background" class="bigbanner"
         style="background-image: url('images/impactteams/team_alice/team_alice.jpg');background-repeat: no-repeat;">
    </div>

    <div class="message-box">
        <div class="title-wrapper">
            <p></p>
            <p></p>
            <h1 class="title">What is ALICE?</h1>
        </div>
        <p> Every single year, around half a million people are diagnosed with Alzheimer’s.
            It remains to be one of the leading causes of death in America. ALICE’s ( Alzheimer’s; Learn. Inform. Care.
            End.) focus is on raising awareness on Alzheimer's Disease and to work with relevant charitable
            organizations in order to raise funds for the people in the San Diego community that are affected by
            this disease.
        </p>

    </div>

    <div class="title-wrapper">
        <h1 class="title">Impact Team Members</h1>
    </div>

    <div id="rows">
        <div id="row1" class="contact-row">
            <div>
                <img id="image1" src="{{ asset('images/impactteams/team_alice/Fray.jpg') }}" />
                <p id="name1"><strong>Alfredo Salmasan</strong></p>
                <p id="title1">Supreme Leader</p>
            </div>
            <div>
                <img id="image4" src="{{ asset('images/impactteams/team_alice/Caitlin.jpg') }}" />
                <p id="name6"><strong>Caitlin Song</strong></p>
                <p id="title6">Co-Internal/Operations Chair</p>
            </div>
            <div>
                <img id="image3" src="{{ asset('images/impactteams/team_alice/Zeven.jpg') }}" />
                <p id="name3"><strong>Zeven Vidmar Barker</strong></p>
                <p id="title3">Co-Internal/Operations Chair</p>
            </div>
        </div>

        <div id="row2" class="contact-row">

            <div>
                <img id="image2" src="{{ asset('images/impactteams/team_alice/Andrea.jpg') }}" />
                <p id="name2"><strong>Andrea Roman</strong></p>
                <p id="title2">Publicity Chair</p>
            </div>

            <div>
                <img id="image6" src="{{ asset('images/impactteams/team_alice/Andrew.jpg') }}" />
                <p id="name5"><strong>Andrew Reddy</strong></p>
                <p id="title5">Logistics Chair</p>
            </div>

            <div>
                <img id="image7" src="{{ asset('images/impactteams/team_alice/Steven.jpg') }}" />
                <p id="name7"><strong>Steven Ong</strong></p>
                <p id="title7">Co-Finance Chair</p>
            </div>

        </div>
        <div id="row3" class="contact-row">
            <div>
                <img id="image5" src="{{ asset('images/impactteams/team_alice/Alina.jpg') }}" />
                <p id="name4"><strong>Alina Luk</strong></p>
                <p id="title4">Co-Finance Chair</p>
            </div>

            <div>
                <img id="image8" src="{{ asset('images/impactteams/team_alice/Christina.jpg') }}" />
                <p id="name8"><strong>Christina Nguyen</strong></p>
                <p id="title8">Co-External/Outreach Chair</p>
            </div>

            <div>
                <img id="image9" src="{{ asset('images/impactteams/team_alice/Kevin.jpg') }}" />
                <p id="name9"><strong>Kevin Cheng</strong></p>
                <p id="title9">Co-External/Outreach Chair</p>
            </div>
        </div>
    </div>

    @endsection