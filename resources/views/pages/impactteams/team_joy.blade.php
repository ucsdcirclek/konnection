@extends('layouts.master')

@section('title')
    Team JOY
@endsection

@section('content')

    <div id="background" class="bigbanner"
         style="background-image: url('/images/impactteams/team_joy/group1.png');background-repeat: no-repeat;">
        <div id="title" class="bigbannertext">
            Team Joy
        </div>
    </div>

    <div class="message-box">
        <div class="title-wrapper">
            <p></p>
            <p></p>
            <h1 class="title">What is Team JOY?</h1>
        </div>
        <p> Team JOY, Just Older Youth, is an impact team dedicated to connecting 
            with senior citizens and raising awareness of the problems they face. 
        </p>

    </div>

    <div class="title-wrapper">
        <h1 class="title">Impact Team Members</h1>
    </div>

    <div id="rows">
        <div id="row1" class="contact-row">
            <div>
                <img id="image1" src="{{ asset('images/impactteams/team_joy/kathytran.png') }}" />
                <p id="name1"><strong>Kathy Tran</strong></p>
                <p id="title1">Impact Team Head</p>
            </div>
            <div>
                <img id="image2" src="{{ asset('images/impactteams/team_joy/braelyn.png') }}" />
                <p id="name2"><strong>Braelyn Joy Travis</strong></p>
                <p id="title2">Co-Operations Chair</p>
            </div>
            <div>
                <img id="image3" src="{{ asset('images/impactteams/team_joy/christina.png') }}" />
                <p id="name3"><strong>Christina Nguyen</strong></p>
                <p id="title3">Co-Operations Chair</p>
            </div>
        </div>

        <div id="row2" class="contact-row">

            <div>
                <img id="image4" src="{{ asset('images/impactteams/team_joy/justin.png') }}" />
                <p id="name6"><strong>Justin Kyinn</strong></p>
                <p id="title6">Finance Chair</p>
            </div>

            <div>
                <img id="image5" src="{{ asset('images/impactteams/team_joy/maricris.png') }}" />
                <p id="name4"><strong>Maricris Hernandez</strong></p>
                <p id="title4">Education/Outreach Chair</p>
            </div>
            <div>
                <img id="image6" src="{{ asset('images/impactteams/team_joy/andrea.png') }}" />
                <p id="name5"><strong>Andrea Roman</strong></p>
                <p id="title5">Publicity Chair</p>
            </div>

        </div>
        
    </div>

    <!-- IN DEVELOPMENT (Mini Gallery)
    <div class="message-box">
    <div class="title-wrapper">
        <h1 class="title">Gallery</h1>
    </div>
        <div class="gallery">
            <a target="_blank" href="images/committee.png">
                <img src="images/committee.png" alt="Placeholder">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="images/committee.png">
                <img src="images/committee.png" alt="Placeholder">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="images/committee.png">
                <img src="images/committee.png" alt="Placeholder">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>
    </div>
    -->

@endsection
