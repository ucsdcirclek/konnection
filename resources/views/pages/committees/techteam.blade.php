@extends('layouts.master')

@section('title')
    Tech Team
@endsection

@section('content')

    <div id="background" class="bigbanner"
         style="background-image: url('/images/Committees/TechTeam/TTCover2.jpg');background-repeat: no-repeat;">
        <div id="title" class="bigbannertext">
            Tech Team 2018-2019
        </div>
    </div>

    <div class="message-box">
        <div class="title-wrapper">
            <p></p>
            <p></p>
            <h1 class="title">What is Tech Team?</h1>
        </div>
        <p>Tech Team is responsible for updating and improving UCSD Circle K's website by implementing new features and
            exploring new ways to enhance the efficiency and utility of the site. Tech team works to build teamwork
            skills and industry experience by working in a small web development team, developing your technical skills
            and giving you a valuable project to display on your resume and portfolio.
        </p>
    </div>

    <div class="title-wrapper">
        <h1 class="title">Committee Members</h1>
    </div>


    <div id="row1" class="contact-row">
        <div>
            <img id="image1" src="{{ asset('images/board/Carl2.jpg') }}" />
            <p id="name1"><strong>Carl Dungca</strong></p>
            <p id="title1">Tech Team Lead</p>
        </div>
        <div>
            <img id="image2" src="{{ asset('images/Committees/MBall/Helen.jpg') }}" />
            <p id="name2"><strong>Helen Thio</strong></p>
            <p id="title2">Designer</p>
        </div>
        <div>
            <img id="image3" src="{{ asset('images/Committees/TechTeam/Levi.jpg') }}" />
            <p id="name3"><strong>Levi Friley</strong></p>
            <p id="title3">Content Developer</p>
        </div>
    </div>

    <div id="row2" class="contact-row">
        <div>
            <img id="image4" src="{{ asset('images/Committees/TechTeam/Angel.jpg') }}" />
            <p id="name4"><strong>Angel Obie</strong></p>
            <p id="title4">Feature Developer</p>
        </div>
        <div>
            <img id="image5" src="{{ asset('images/Committees/TechTeam/Johnny.jpg') }}" />
            <p id="name5"><strong>Johnny Luong</strong></p>
            <p id="title5">Back-end Developer</p>
        </div>

    </div>

<div class="title-wrapper">
    <h1 class="title">Past Members</h1>
</div>

    <button class="accordion">2017-2018</button> <!--Create a new accordion for each year -->
    <div class="panel">
        <strong>Tech Team Committee Head</strong>
        <p>Weijin Xu</p>
        <strong>Developers</strong>
          <p>Carl Dungca</p>
          <p>Ryan Lemon</p>
          <p>Jay Wang</p>
          <p>Samarth Aggarwal</p>
          <p>Jane Wu</p>
          <p>Stephanie Tonnu</p>

    </div> <!-- Copy up to this div to create new sections -->

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
