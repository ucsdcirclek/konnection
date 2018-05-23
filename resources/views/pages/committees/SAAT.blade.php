@extends('layouts.master')

@section('title')
    SAAT Committee
@endsection

@section('content')

    <div id="background" class="bigbanner"
         style="background-image: url('/images/Committees/SAAT/SAATCover17182.jpg');background-repeat: no-repeat;">
        <div id="title" class="bigbannertext">
            SAAT Committee 2017-2018
        </div>
    </div>

    <div class="message-box">
        <div class="title-wrapper">
            <p></p>
            <p></p>
            <h1 class="title">What is SAAT Committee?</h1>
        </div>
        <p>The Student Alliance Against Trafficking committee (SAAT) is in charge of hosting a Human Trafficking
            Awareness week on campus to increase visibility of this issue and equip peers to identify and protect
            against human trafficking in their communities. SAAT is part of a national network of student activists
            to combat human trafficking by amplifying awareness, encouraging advocacy and deterring related behaviors
            that contribute to human trafficking in the United States.
        </p>
    </div>

    <div class="title-wrapper">
        <h1 class="title">Committee Members</h1>
    </div>

            <div id="rows">
                <div id="row1" class="contact-row">
                    <div>
                        <img id="image1" src="{{ asset('images/Committees/SAAT/Shannon.jpg') }}" />
                        <p id="name1"><strong>Shannon Lee</strong></p>
                        <p id="title1">SAAT Co-Chair</p>
                    </div>
                    <div>
                        <img id="image2" src="{{ asset('images/Committees/SAAT/Wesley.jpg') }}" />
                        <p id="name2"><strong>Wesley Wu</strong></p>
                        <p id="title2">SAAT Co-Chair</p>
                    </div>
                    <div>
                        <img id="image3" src="{{ asset('images/Committees/SAAT/Marne.jpg') }}" />
                        <p id="name3"><strong>Marné Amoguis</strong></p>
                        <p id="title3">Logisitics Chair</p>
                    </div>
                </div>

                <div id="row2" class="contact-row">
                    <div>
                        <img id="image4" src="{{ asset('images/Committees/SAAT/Kevin.jpg') }}" />
                        <p id="name4"><strong>Kevin Nguyen</strong></p>
                        <p id="title4">Co-Donations Chair</p>
                    </div>
                    <div>
                        <img id="image5" src="{{ asset('images/Committees/SAAT/Ming.jpg') }}" />
                        <p id="name5"><strong>Minghua Ong</strong></p>
                        <p id="title5">Co-Donations Chair</p>
                    </div>
                    <div>
                        <img id="image6" src="{{ asset('images/Committees/SAAT/Maricris.jpg') }}" />
                        <p id="name6"><strong>Maricris Hernandez</strong></p>
                        <p id="title6">Co-Education Chair</p>
                    </div>
                </div>
                <div id="row3" class="contact-row">
                    <div>
                        <img id="image7" src="{{ asset('images/Committees/SAAT/Tamara.jpg') }}" />
                        <p id="name7"><strong>Tamara Kawa</strong></p>
                        <p id="title7">Co-Education Chair</p>
                    </div>
                    <div>
                        <img id="image8" src="{{ asset('images/Committees/SAAT/Stephanie.jpg') }}" />
                        <p id="name8"><strong>Stephanie Nguyen</strong></p>
                        <p id="title8">Public Relations Chair</p>
                    </div>
                </div>
            </div>

            <div class="title-wrapper">
                <h1 class="title">Past Members</h1>
            </div>

            <button class="accordion">2016-2017</button> <!--Create a new accordion for each year -->
            <div class="panel">
                <strong>SAAT Co-Chairs</strong>
                <p>Jane Wu</p>
                <p>Hannah Hwang</p>
                <strong>Co-Logistics Chairs</strong>
                <p>Wesley Wu</p>
                <p>Kenneth Truong</p>
                <strong>Publicity Chair</strong>
                <p>Samarth Aggarwal</p>
                <strong>Donations Chair</strong>
                <p>Vivian Sheen</p>
                <strong>Co-Event Chairs</strong>
                <p>Nancy Huang</p>
                <p>Siobhán Lin-Nugent</p>
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
