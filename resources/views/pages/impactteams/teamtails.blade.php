@extends('layouts.master')

@section('title')
    Team Tails
@endsection

@section('content')

    <div id="background" class="bigbanner"
         style="background-image: url('/images/impactteams/teamtails/TeamTailsCover.jpg');background-repeat: no-repeat;">
        <div id="title" class="bigbannertext">
            Team Tails
        </div>
    </div>

    <div class="message-box">
        <div class="title-wrapper">
            <p></p>
            <p></p>
            <h1 class="title">What is Team Tails?</h1>
        </div>
        <p>Team Tails' goal is to set up reoccurring volunteering events as well as projects with local animal shelter
            community. We held large service one day events assisting adoption efforts and, most importantly, helping
            and playing with animals in need!
        </p>
    </div>

    <div class="title-wrapper">
        <h1 class="title">Impact Team Members</h1>
    </div>

    <div id="rows">
        <div id="row1" class="contact-row">
            <div>
                <img id="image1" src="{{ asset('images/impactteams/teamtails/Taylor.jpg') }}" />
                <p id="name1"><strong>Taylor Tang</strong></p>
                <p id="title1">Impact Team Head</p>
            </div>
            <div>
                <img id="image2" src="{{ asset('images/impactteams/teamtails/Julie.jpg') }}" />
                <p id="name2"><strong>Julie Shiozaki</strong></p>
                <p id="title2">Executive Assistant</p>
            </div>
            <div>
                <img id="image3" src="{{ asset('images/impactteams/teamtails/Robert.jpg') }}" />
                <p id="name3"><strong>Robert Nguyen</strong></p>
                <p id="title3">Executive Assistant</p>
            </div>
        </div>

        <div id="row2" class="contact-row">

            <div>
                <img id="image4" src="{{ asset('images/impactteams/teamtails/Jay.jpg') }}" />
                <p id="name4"><strong>Jay Wang</strong></p>
                <p id="title4">Logistics Chair</p>
            </div>
            <div>
                <img id="image5" src="{{ asset('images/impactteams/teamtails/Emika.jpg') }}" />
                <p id="name5"><strong>Emika Nishi</strong></p>
                <p id="title5">Publicity Chair</p>
            </div>
            <div>
                <img id="image6" src="{{ asset('images/impactteams/teamtails/Cindy.jpg') }}" />
                <p id="name6"><strong>Cindy Sou</strong></p>
                <p id="title6">Educational Chair</p>
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

