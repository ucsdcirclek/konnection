@extends('layouts.master')

@section('title')
    Team Smileys
@endsection

@section('content')

    <div id="background" class="bigbanner"
         style="background-image: url('/images/impactteams/teamsmileys/TeamSmileysCover.jpg');background-repeat: no-repeat;">
        <div id="title" class="bigbannertext">
            Team Smileys
        </div>
    </div>

    <div class="message-box">
        <div class="title-wrapper">
            <p></p>
            <p></p>
            <h1 class="title">What is Team Smileys?</h1>
        </div>
        <p>Team Smileys' goal is dedicated to making people happy and improving their mental well being. Whether that be
            through science, psychology, random acts of kindness or anything we can think of! We also fulfil our
            goal by creating positive social environments with social events and making cards for loved ones.
        </p>
    </div>

    <div class="title-wrapper">
        <h1 class="title">Impact Team Members</h1>
    </div>

    <div id="rows">
        <div id="row1" class="contact-row">
            <div>
                <img id="image1" src="{{ asset('images/impactteams/teamsmileys/Bradley.jpg') }}" />
                <p id="name1"><strong>Bradley Ventayen</strong></p>
                <p id="title1">Impact Team Head</p>
            </div>
            <div>
                <img id="image2" src="{{ asset('images/impactteams/teamsmileys/Bill.jpg') }}" />
                <p id="name2"><strong>Bill Hum</strong></p>
                <p id="title2">Administrative Chair</p>
            </div>
            <div>
                <img id="image3" src="{{ asset('images/impactteams/teamsmileys/Poi.jpg') }}" />
                <p id="name3"><strong>Poiema Kim</strong></p>
                <p id="title3">Publicity Chair</p>
            </div>
        </div>

        <div id="row2" class="contact-row">

            <div>
                <img id="image4" src="{{ asset('images/impactteams/teamsmileys/Helen.jpg') }}" />
                <p id="name4"><strong>Helen Thio</strong></p>
                <p id="title4">Resource Chair</p>
            </div>
            <div>
                <img id="image5" src="{{ asset('images/impactteams/teamsmileys/Shawn.jpg') }}" />
                <p id="name5"><strong>Shawn Copon</strong></p>
                <p id="title5">Kiwanis Chair</p>
            </div>
            <div>
                <img id="image6" src="{{ asset('images/impactteams/teamsmileys/Jesse.jpg') }}" />
                <p id="name6"><strong>Jesse Kim</strong></p>
                <p id="title6">Educational Chair</p>
            </div>
        </div>
        <div id="row3" class="contact-row">
            <div>
                <img id="image7" src="{{ asset('images/impactteams/teamsmileys/Arnel.jpg') }}" />
                <p id="name7"><strong>Arnel Padilla</strong></p>
                <p id="title7">Circle K Chair</p>
            </div>
            <div>
                <img id="image8" src="{{ asset('images/impactteams/teamsmileys/Carl.jpg') }}" />
                <p id="name8"><strong>Carl Dungca</strong></p>
                <p id="title8">Connections Chair</p>
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

