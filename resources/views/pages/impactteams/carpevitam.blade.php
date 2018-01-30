@extends('layouts.master')

@section('title')
    Carpe Vitam
@endsection

@section('content')

    <div id="background" class="bigbanner"
         style="background-image: url('/images/impactteams/carpevitam/CarpeVitamCover.jpg');background-repeat: no-repeat;">
        <div id="title" class="bigbannertext">
            Carpe Vitam
        </div>
    </div>

    <div class="message-box">
        <div class="title-wrapper">
            <p></p>
            <p></p>
            <h1 class="title">What is Carpe Vitam?</h1>
        </div>
        <p>Carpe Vitam's goal is to raise awareness for Mental Health Awareness Month as well as
            providing a slow paced environment to develop the team's leadership skills.
        </p>
    </div>

    <div class="title-wrapper">
        <h1 class="title">Impact Team Members</h1>
    </div>

    <div id="rows">
        <div id="row1" class="contact-row">
            <div>
                <img id="image1" src="{{ asset('images/impactteams/carpevitam/Melody.jpg') }}" />
                <p id="name1"><strong>Melody Azani</strong></p>
                <p id="title1">Impact Team Head</p>
            </div>
            <div>
                <img id="image2" src="{{ asset('images/impactteams/carpevitam/Joanna.jpg') }}" />
                <p id="name2"><strong>Joanna Lam</strong></p>
                <p id="title2">Logistics Chair</p>
            </div>
            <div>
                <img id="image3" src="{{ asset('images/impactteams/carpevitam/Lillia.jpg') }}" />
                <p id="name3"><strong>Lillia Lee</strong></p>
                <p id="title3">Public Relations Chair</p>
            </div>
        </div>

        <div id="row2" class="contact-row">
            <div>
                <img id="image4" src="{{ asset('images/impactteams/carpevitam/Alexandra.jpg') }}" />
                <p id="name4"><strong>Alexandra Wei</strong></p>
                <p id="title4">Donations Chair</p>
            </div>
            <div>
                <img id="image5" src="{{ asset('images/impactteams/carpevitam/Susan.jpg') }}" />
                <p id="name5"><strong>Susan Sun</strong></p>
                <p id="title5">Talent and Artwork Chair</p>
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

