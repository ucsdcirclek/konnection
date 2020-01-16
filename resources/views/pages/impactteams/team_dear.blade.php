@extends('layouts.master')

@section('title')
    Team JOY
@endsection

@section('content')

    <div id="background" class="bigbanner"
         style="content: url('/images/impactteams/team_dear/group.jpg');    ">
    </div>

    <div class="message-box">
        <div class="title-wrapper">
            <p></p>
            <p></p>
            <h1 class="title">What is Team DEAR?</h1>
        </div>
        <p> Team DEAR (Diabetes Education and Awareness Raising) is an impact team created to educate the UCSD community about the condition, 
            raise funds for JDRF (Juvenile Diabetes Research Foundation), and promote and practice healthy lifestyle choices.
        </p>

    </div>

    <div class="title-wrapper">
        <h1 class="title">Impact Team Members</h1>
    </div>

    <div id="rows">
        <div id="row1" class="contact-row">
            <div>
                <img id="image1" src="{{ asset('images/impactteams/team_dear/Dan.jpg') }}" />
                <p id="name1"><strong>Dan Tran</strong></p>
                <p id="title1">Impact Team Lead</p>
            </div>
            <div>
                <img id="image2" src="{{ asset('images/impactteams/team_dear/Vivian.jpg') }}" />
                <p id="name2"><strong>Vivian Du</strong></p>
                <p id="title2">Co-Outreach Chair </p>
            </div>
            <div>
                <img id="image3" src="{{ asset('images/impactteams/team_dear/Amy.jpg') }}" />
                <p id="name3"><strong>Amy Tang</strong></p>
                <p id="title3">Co-Outreach Chair</p>
            </div>
        </div>

        <div id="row2" class="contact-row">

            <div>
                <img id="image4" src="{{ asset('images/impactteams/team_dear/Zeenah.jpg') }}" />
                <p id="name6"><strong>Zeenah Iskander</strong></p>
                <p id="title6"> Finance/Publicity Chair</p>
            </div>

            <div>
                <img id="image5" src="{{ asset('images/impactteams/team_dear/Giovanny.jpg') }}" />
                <p id="name4"><strong>Giovanny Patino</strong></p>
                <p id="title4">Operations Chair</p>
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
