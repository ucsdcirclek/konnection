@extends('layouts.master')

@section('title')
    Team FTK
@endsection

@section('content')

    <div id="background" class="bigbanner"
         style="background-image: url('/images/impactteams/teamftk/FTKCover3.jpg');background-repeat: no-repeat;">
        <div id="title" class="bigbannertext">
            Team For The Kids (FTK)
        </div>
    </div>

    <div class="message-box">
        <div class="title-wrapper">
            <p></p>
            <p></p>
            <h1 class="title">What is Team FTK?</h1>
        </div>
        <p>There are many children and young adults growing up in San Diego in circumstances that make it harder for
            them to get an education, find work, or even fit in with the other kids.   Foster youth, homeless youth,
            kids from low income families, and first-generation college hopefuls may not have a very strong support
            system, and all face different challenges that make it harder for them to have a higher standard of living
            in the future.
        </p>

        <p>
            Team FTK’s goal is to work with other charitable organizations and the San Diego community to help alleviate
            some of their burdens so that the disadvantaged youth are free to pursue the lives they want.
        </p>
    </div>

    <div class="title-wrapper">
        <h1 class="title">Impact Team Members</h1>
    </div>

            <div id="rows">
                <div id="row1" class="contact-row">
                    <div>
                        <img id="image1" src="{{ asset('images/impactteams/teamftk/Joanna.jpg') }}" />
                        <p id="name1"><strong>Joanna Lam</strong></p>
                        <p id="title1">Impact Team Head</p>
                    </div>
                    <div>
                        <img id="image2" src="{{ asset('images/impactteams/teamftk/Maricris.jpg') }}" />
                        <p id="name2"><strong>Maricris Hernandez</strong></p>
                        <p id="title2">Logistics Chair</p>
                    </div>
                    <div>
                        <img id="image3" src="{{ asset('images/impactteams/teamftk/Ryan.jpg') }}" />
                        <p id="name3"><strong>Ryan Manalastas</strong></p>
                        <p id="title3">Operations Chair</p>
                    </div>
                </div>

                <div id="row2" class="contact-row">

                    <div>
                        <img id="image4" src="{{ asset('images/impactteams/teamftk/Fray.jpg') }}" />
                        <p id="name4"><strong>Fray Salmasan</strong></p>
                        <p id="title4">Publicity Chair</p>
                    </div>
                    <div>
                        <img id="image5" src="{{ asset('images/impactteams/teamftk/Erin.jpg') }}" />
                        <p id="name5"><strong>Erin Mascarina</strong></p>
                        <p id="title5">Co-Finance Chair</p>
                    </div>
                    <div>
                        <img id="image6" src="{{ asset('images/impactteams/teamftk/Kevin.jpg') }}" />
                        <p id="name6"><strong>Kevin Nguyen</strong></p>
                        <p id="title6">Co-Finance Chair</p>
                    </div>
                </div>
                <div id="row3" class="contact-row">
                    <div>
                        <img id="image7" src="{{ asset('images/impactteams/teamftk/Vivian.jpg') }}" />
                        <p id="name7"><strong>Vivian Vu</strong></p>
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
