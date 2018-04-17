@extends('layouts.master')

@section('title')
    Team Paws
@endsection

@section('content')

    <div id="background" class="bigbanner"
         style="background-image: url('/images/impactteams/team_paws/Paws_Cover.png');background-repeat: no-repeat;">
        <div id="title" class="bigbannertext">
            Team Paws
        </div>
    </div>

    <div class="message-box">
        <div class="title-wrapper">
            <p></p>
            <p></p>
            <h1 class="title">What is Team Paws?</h1>
        </div>
        <p>Team Paws is an impact team dedicated to volunteering at animal shelters and helping dogs in need! Keep your eye out for
            future events!
        </p>

    </div>

    <div class="title-wrapper">
        <h1 class="title">Impact Team Members</h1>
    </div>

    <div id="rows">
        <div id="row1" class="contact-row">
            <div>
                <img id="image1" src="{{ asset('images/impactteams/team_paws/Kylie.jpg') }}" />
                <p id="name1"><strong>Kylie Tran</strong></p>
                <p id="title1">Impact Team Head</p>
            </div>
            <div>
                <img id="image2" src="{{ asset('images/impactteams/team_paws/Minghua.jpg') }}" />
                <p id="name2"><strong>Minghua Ong</strong></p>
                <p id="title2">Impact Team Head</p>
            </div>
            <div>
                <img id="image3" src="{{ asset('images/impactteams/team_paws/Alyssa.jpg') }}" />
                <p id="name3"><strong>Alyssa Granados</strong></p>
                <p id="title3">Co-Finanace Chair</p>
            </div>
        </div>

        <div id="row2" class="contact-row">

            <div>
                <img id="image4" src="{{ asset('images/impactteams/team_paws/Kelly.jpg') }}" />
                <p id="name6"><strong>Kelly Lumaquin</strong></p>
                <p id="title6">Co-Finance Chair</p>
            </div>

            <div>
                <img id="image5" src="{{ asset('images/impactteams/team_paws/Hanna.png') }}" />
                <p id="name4"><strong>Hanna Lam</strong></p>
                <p id="title4">Education Chair</p>
            </div>
            <div>
                <img id="image6" src="{{ asset('images/impactteams/team_paws/Kathy.jpg') }}" />
                <p id="name5"><strong>Kathy Tran</strong></p>
                <p id="title5">Operations Chair</p>
            </div>

        </div>
        <div id="row3" class="contact-row">
            <div>
                <img id="image7" src="{{ asset('images/impactteams/team_paws/Nessa.jpg') }}" />
                <p id="name7"><strong>Nessa Vu</strong></p>
                <p id="title7">Publicity Chair</p>
            </div>
            <div>
                <img id="image8" src="{{ asset('images/impactteams/team_paws/Shannon.png') }}" />
                <p id="name7"><strong>Shannon Lee</strong></p>
                <p id="title7">Outreach Chair</p>
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
