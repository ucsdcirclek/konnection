@extends('layouts.master')

@section('title')
    SLSSP Committee
@endsection

@section('content')

    <div id="background" class="bigbanner" style="background-image: url('/images/Committees/SLSSP/SLSSPCover1718.jpg')">
        <div id="title" class="bigbannertext">
            SLSSP Committee 2017-2018
        </div>
    </div>

    <div class="message-box">
        <div class="title-wrapper">
            <p></p>
            <p></p>
            <h1 class="title">What is SLSSP Committee?</h1>
        </div>
        <p>The Single Large-Scale Service Project committee (SLSSP) is in charge of organizing and planning a one-day
            event in which members of UCSD Circle K and Paradise Division participate in multiple service projects to
            make a positive impact on the community. The purposes of SLSSP are to strengthen the service community within
            Circle K, expand the impact that UCSD Circle K has on its community, and promote leadership-based service
            within Circle K Committee.</p>
    </div>

    <div class="title-wrapper">
        <h1 class="title">Committee Members</h1>
    </div>

            <div id="rows">
                <div id="row1" class="contact-row">
                    <div>
                        <img id="image1" src="{{ asset('images/Committees/SLSSP/Matthew2.jpg') }}" />
                        <p id="name1"><strong>Matthew Kawakami</strong></p>
                        <p id="title1">SLSSP Committee Head</p>
                    </div>
                    <div>
                        <img id="image2" src="{{ asset('images/Committees/SLSSP/Siobhan2.jpg') }}" />
                        <p id="name2"><strong>Siobhán Lin-Nugent</strong></p>
                        <p id="title2">Executive Assistant</p>
                    </div>
                    <div>
                        <img id="image3" src="{{ asset('images/Committees/SLSSP/Alyssa.jpg') }}" />
                        <p id="name3"><strong>Alyssa Lew</strong></p>
                        <p id="title3">Operations Co-Chair</p>
                    </div>
                </div>
                <div id="row2" class="contact-row">
                    <div>
                        <img id="image4" src="{{ asset('images/Committees/SLSSP/Angela.jpg') }}" />
                        <p id="name4"><strong>Angela Pham</strong></p>
                        <p id="title4">Operations Co-Chair</p>
                    </div>
                    <div>
                        <img id="image5" src="{{ asset('images/Committees/SLSSP/Brent.jpg') }}" />
                        <p id="name5"><strong>Brent Min</strong></p>
                        <p id="title5">Recreations Co-Chair</p>
                    </div>
                    <div>
                        <img id="image6" src="{{ asset('images/Committees/SLSSP/Meghan.jpg') }}" />
                        <p id="name6"><strong>Meghan Hernandez</strong></p>
                        <p id="title6">Recreations Co-Chair</p>
                    </div>
                </div>

                <div id="row3" class="contact-row">
                    <div>
                        <img id="image7" src="{{ asset('images/Committees/SLSSP/Jovonne.jpg') }}" />
                        <p id="name7"><strong>Jovonne Lee</strong></p>
                        <p id="title7">DSI Ambassador</p>
                    </div>
                    <div>
                        <img id="image8" src="{{ asset('images/Committees/SLSSP/Victoria.jpg') }}" />
                        <p id="name8"><strong>Victoria Vu</strong></p>
                        <p id="title8">Public Relations Chair </p>
                    </div>
                    <div>
                        <img id="image9" src="{{ asset('images/Committees/SLSSP/Andrew.jpg') }}" />
                        <p id="name9"><strong>Andrew Vu</strong></p>
                        <p id="title9">Finance Co-Chair</p>
                    </div>
                </div>
                <div id="row4" class="contact-row">
                    <div>
                        <img id="image10" src="{{ asset('images/Committees/SLSSP/Jolene.jpg') }}" />
                        <p id="name10"><strong>Jolene Leung</strong></p>
                        <p id="title10">Finance Co-Chair</p>
                    </div>
                </div>
            </div>

    <div class="title-wrapper">
        <h1 class="title">Past Members</h1>
    </div>

    <button class="accordion">2016-2017</button> <!--Create a new accordion for each year -->
    <div class="panel">
        <strong>SLSSP Committee Head</strong>
        <p>Chloris Li</p>
        <strong>Executive Assistant</strong>
        <p>Hannah Hwang</p>
        <strong>External Operations Chair</strong>
        <p>Wendy Zhang</p>
        <strong>Internal Operations Chair</strong>
        <p>Joanna Lam</p>
        <strong>Recreations Co-Chairs</strong>
        <p>Kenneth Truong</p>
        <p>Matthew Kawakami</p>
        <strong>DSI Ambassador</strong>
        <p>Justin Wu</p>
        <strong>Finance Chair</strong>
        <p>Anh Vo</p>
        <strong>Public Relations Co-Chairs</strong>
        <p>Nancy Huang</p>
        <p>Shannon Lee</p>
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
