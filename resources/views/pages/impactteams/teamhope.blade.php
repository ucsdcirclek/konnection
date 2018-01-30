@extends('layouts.master')

@section('title')
    Team Hope
@endsection

@section('content')

    <div id="background" class="bigbanner"
         style="background-image: url('/images/impactteams/teamhope/TeamHopeCover.JPG');background-repeat: no-repeat;">
        <div id="title" class="bigbannertext">
            Team Hope
        </div>
    </div>

    <div class="message-box">
        <div class="title-wrapper">
            <p></p>
            <p></p>
            <h1 class="title">What is Team Hope?</h1>
        </div>
        <p>Team Hope is dedicated to helping the community heal! Our main focus is cancer awareness, but our vision
            exceeds that. Our goals are to volunteer to help those affected by cancer or any other debilitating
            illnesses in any way, fundraise towards the advancement of research in cancer, and to develop stronger
            relationships between members in our club.
        </p>
    </div>

    <div class="title-wrapper">
        <h1 class="title">Impact Team Members</h1>
    </div>

    <div id="rows">
        <div id="row1" class="contact-row">
            <div>
                <img id="image1" src="{{ asset('images/impactteams/teamhope/Shawn.jpg') }}" />
                <p id="name1"><strong>Shawn Copon</strong></p>
                <p id="title1">Impact Team Head</p>
            </div>
            <div>
                <img id="image2" src="{{ asset('images/impactteams/teamhope/Daphne.jpg') }}" />
                <p id="name2"><strong>Daphne Liu</strong></p>
                <p id="title2">Executive Assistant</p>
            </div>
            <div>
                <img id="image3" src="{{ asset('images/impactteams/teamhope/Elaine.jpg') }}" />
                <p id="name3"><strong>Elaine Dai</strong></p>
                <p id="title3">Resource Chair</p>
            </div>
        </div>

        <div id="row2" class="contact-row">

            <div>
                <img id="image4" src="{{ asset('images/impactteams/teamhope/Bill.jpg') }}" />
                <p id="name4"><strong>Bill Hum</strong></p>
                <p id="title4">External Relations Chair</p>
            </div>
            <div>
                <img id="image5" src="{{ asset('images/impactteams/teamhope/Lara.jpg') }}" />
                <p id="name5"><strong>Lara Modder</strong></p>
                <p id="title5">Internal Relations Chair</p>
            </div>
            <div>
                <img id="image6" src="{{ asset('images/impactteams/teamhope/Jovonne.jpg') }}" />
                <p id="name6"><strong>Jovonne Lee</strong></p>
                <p id="title6">Media Chair</p>
            </div>
        </div>
        <div id="row3" class="contact-row">
            <div>
                <img id="image7" src="{{ asset('images/impactteams/teamhope/Carl.jpg') }}" />
                <p id="name7"><strong>Carl Dungca</strong></p>
                <p id="title7">Educational Outreach Chair</p>
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
