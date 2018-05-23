@extends('layouts.master')

@section('title')
    Key2College Committee
@endsection

@section('content')

    <div id="background" class="bigbanner"
         style="background-image: url('/images/Committees/Key2College/K2CCover1718.jpg');background-repeat: no-repeat;">
        <div id="title" class="bigbannertext">
            Key2College Committee 2017-2018
        </div>
    </div>

    <div class="message-box">
        <div class="title-wrapper">
            <p></p>
            <p></p>
            <h1 class="title">What is Key2College Committee?</h1>
        </div>
        <p>The Key2College Committee at UCSD Circle K organizes a day of workshops, entertainment, and campus tours for
            incoming college students, with the goal of making the transition into college life fun and easy. Key2College
            Committee also organizes a similar event called Key2Life for college students that prepares them for life
            beyond college.</p>
    </div>

    <div class="title-wrapper">
        <h1 class="title">Committee Members</h1>
    </div>

            <div id="rows">
                <div id="row1" class="contact-row">
                    <div>
                        <img id="image1" src="{{ asset('images/Committees/Key2College/Michael1718.jpg') }}" />
                        <p id="name1"><strong>Michael Christenson</strong></p>
                        <p id="title1">Key2College Committee Head</p>
                    </div>
                    <div>
                        <img id="image2" src="{{ asset('images/Committees/Key2College/Donaji.jpg') }}" />
                        <p id="name2"><strong>Donaji Rodriguez</strong></p>
                        <p id="title2">Logisitcs Chair</p>
                    </div>
                    <div>
                        <img id="image3" src="{{ asset('images/Committees/Key2College/Joanna.jpg') }}" />
                        <p id="name3"><strong>Joanna Truong</strong></p>
                        <p id="title3">Programs Chair</p>
                    </div>
                </div>

                <div id="row2" class="contact-row">
                    <div>
                        <img id="image4" src="{{ asset('images/Committees/Key2College/Rowan.jpg') }}" />
                        <p id="name4"><strong>Rowan Ustoy</strong></p>
                        <p id="title4">Donations Chair</p>
                    </div>
                    <div>
                        <img id="image5" src="{{ asset('images/Committees/Key2College/Justin.jpg') }}" />
                        <p id="name5"><strong>Justin Palor</strong></p>
                        <p id="title5">Publicity Chair</p>
                    </div>
                    <div>
                        <img id="image6" src="{{ asset('images/Committees/Key2College/Aaron.jpg') }}" />
                        <p id="name6"><strong>Aaron Zepeda</strong></p>
                        <p id="title6">Key2Life Chair</p>
                    </div>
                </div>
                <div id="row3" class="contact-row">
                    <div>
                        <img id="image7" src="{{ asset('images/Committees/Key2College/JustinD.jpg') }}" />
                        <p id="name7"><strong>Justin Duong</strong></p>
                        <p id="title7">Entertainment Chair</p>
                    </div>
                </div>
            </div>

            <div class="title-wrapper">
                <h1 class="title">Past Members</h1>
            </div>

            <button class="accordion">2016-2017</button> <!--Create a new accordion for each year -->
            <div class="panel">
                <strong>Key2College Committee Head</strong>
                <p>Jennifer Truong</p>
                <strong>Co-Logistics Chairs</strong>
                <p>Louise Tolentino</p>
                <p>Stephanie Tonnu</p>
                <strong>Programs Chair</strong>
                <p>Michael Christensen</p>
                <strong>Publicity Chair</strong>
                <p>Ariel Codilla</p>
                <strong>Key2Life Chair</strong>
                <p>Erica Wei</p>
                <strong>Entertainment Chair</strong>
                <p>Don Tran</p>
                <strong>Donations Chair</strong>
                <p>Nancy Huang</p>
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
