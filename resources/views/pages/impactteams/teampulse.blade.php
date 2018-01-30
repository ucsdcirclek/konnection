@extends('layouts.master')

@section('title')
    Team Pulse
@endsection

@section('content')

    <div id="background" class="bigbanner"
         style="background-image: url('/images/impactteams/teampulse/TeamPulseCover2.jpg');background-repeat: no-repeat;">
        <div id="title" class="bigbannertext">
            Team Pulse
        </div>
    </div>

    <div class="message-box">
        <div class="title-wrapper">
            <p></p>
            <p></p>
            <h1 class="title">What is Team Pulse?</h1>
        </div>
        <p>Team Pulse's goal focused on heart disease awareness and prevention. Heart disease
            is one of the leading causes of death in the world, and February is American Heart Month. Our team is
            committed to supporting this focus through having fundraisers, community service events, and awareness
            presentations.
        </p>
    </div>

    <div class="title-wrapper">
        <h1 class="title">Impact Team Members</h1>
    </div>

    <div id="rows">
        <div id="row1" class="contact-row">
            <div>
                <img id="image1" src="{{ asset('images/impactteams/teamftk/Kevin.jpg') }}" />
                <p id="name1"><strong>Kevin Nguyen</strong></p>
                <p id="title1">Impact Team Co-Head</p>
            </div>
            <div>
                <img id="image2" src="{{ asset('images/impactteams/teamftk/Vivian.jpg') }}" />
                <p id="name2"><strong>Vivian Du</strong></p>
                <p id="title2">Impact Team Co-Head</p>
            </div>
            <div>
                <img id="image3" src="{{ asset('images/impactteams/teamftk/Fray.jpg') }}" />
                <p id="name3"><strong>Fray Salmasan</strong></p>
                <p id="title3">Logisitcs Chair</p>
            </div>
        </div>

        <div id="row2" class="contact-row">

            <div>
                <img id="image4" src="{{ asset('images/impactteams/teampulse/Sally.jpg') }}" />
                <p id="name4"><strong>Sally Rong</strong></p>
                <p id="title4">Operations Chair</p>
            </div>
            <div>
                <img id="image5" src="{{ asset('images/impactteams/teampulse/Ann.jpg') }}" />
                <p id="name5"><strong>Ann Go</strong></p>
                <p id="title5">Publicity Chair</p>
            </div>
            <div>
                <img id="image6" src="{{ asset('images/impactteams/teampulse/Kelly.jpg') }}" />
                <p id="name6"><strong>Kelly Lumaquin</strong></p>
                <p id="title6">Outreach Chair</p>
            </div>
        </div>
        <div id="row3" class="contact-row">
            <div>
                <img id="image7" src="{{ asset('images/impactteams/teampulse/Annie.jpg') }}" />
                <p id="name7"><strong>Annie Chea</strong></p>
                <p id="title7">Finance Co-Chair</p>
            </div>
            <div>
                <img id="image8" src="{{ asset('images/impactteams/teampulse/Kylie.jpg') }}" />
                <p id="name8"><strong>Kylie tran</strong></p>
                <p id="title8">Finance Co-Chair</p>
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
