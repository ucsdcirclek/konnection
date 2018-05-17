@extends('layouts.master')

@section('title')
    Tech Team
@endsection

@section('content')
    <style>
        /* Style the buttons that are used to open and close the accordion panel */
        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            text-align: center;
            border: none;
            outline: none;
            transition: 0.4s;
        }

        /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
        .active, .accordion:hover {
            background-color: #ccc;
        }

        /* Style the accordion panel. Note: hidden by default */
        .panel {
            padding: 0 18px;
            background-color: white;
            display: none;
            overflow: hidden;
        }
    </style>

    <div id="background" class="bigbanner"
         style="background-image: url('/images/Committees/TechTeam/TTCover.jpg');background-repeat: no-repeat;">
        <div id="title" class="bigbannertext">
            Tech Team 2017-2018
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

            <div id="rows">
                <div id="row1" class="contact-row">
                    <div>
                        <img id="image1" src="{{ asset('images/Committees/TechTeam/Weijin.jpg') }}" />
                        <p id="name1"><strong>Carl Dungca</strong></p>
                        <p id="title1">Tech Team Committee Head</p>
                    </div>
                    <div>
                        <img id="image2" src="{{ asset('images/Committees/TechTeam/Carl.jpg') }}" />
                        <p id="name2"><strong>Helen Thio</strong></p>
                        <p id="title2">Designer</p>
                    </div>
                    <div>
                        <img id="image3" src="{{ asset('images/Committees/TechTeam/Ryan.jpg') }}" />
                        <p id="name3"><strong>Levi Friley</strong></p>
                        <p id="title3">Content Developer</p>
                    </div>
                </div>

                <div id="row2" class="contact-row">
                    <div>
                        <img id="image4" src="{{ asset('images/Committees/TechTeam/Samarth.jpg') }}" />
                        <p id="name4"><strong>Angel Obie</strong></p>
                        <p id="title4">Feature Developer</p>
                    </div>
                    <div>
                        <img id="image5" src="{{ asset('images/Committees/TechTeam/Stefanie.jpg') }}" />
                        <p id="name5"><strong>Johnny Luong</strong></p>
                        <p id="title5">Back-end Developer</p>
                    </div>
                    <div>
                        <img id="image6" src="{{ asset('images/Committees/TechTeam/Jay.jpg') }}" />
                        <p id="name6"><strong>Jay Wang</strong></p>
                        <p id="title6">Developer</p>
                    </div>
                </div>
                <div id="row3" class="contact-row">
                    <div>
                        <img id="image7" src="{{ asset('images/Committees/TechTeam/Jane.jpg') }}" />
                        <p id="name7"><strong>Jane Wu</strong></p>
                        <p id="title7">Developer</p>
                    </div>
                </div>
            </div>

<div class="title-wrapper">
    <h1 class="title">Past Members</h1>
</div>

    <button class="accordion">2017-2018</button>
    <div class="panel">
        <strong>Tech Team Committee Head</strong>
        <p>Weijin Xu</p>
        <ul></u><strong>Developers</strong></ul>
          <li>Carl Dungca</li>
          <li>Ryan Lemon</li>
          <li>Jay Wang</li>
          <li>Samarth Aggarwal</li>
          <li>Jane Wu</li>
          <li>Stephanie Tonnu</li>

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

    <script>
        //For practice, try to do this from scratch when implementing to other pages
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                /* Toggle between adding and removing the "active" class,
                 to highlight the button that controls the panel */
                this.classList.toggle("active");

                /* Toggle between hiding and showing the active panel */
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>

@endsection
