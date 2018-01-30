@extends('layouts.master')

@section('title')
    LSFP Committee
@endsection

@section('content')

    <div id="background" class="bigbanner"
         style="background-image: url('/images/Committees/LSFP/LSFPCover1718.jpg');background-repeat: no-repeat;">
        <div id="title" class="bigbannertext">
            LSFP Committee 2017-2018
        </div>
    </div>

    <div class="message-box">
        <div class="title-wrapper">
            <p></p>
            <p></p>
            <h1 class="title">What is LSFP Committee?</h1>
        </div>
        <p>Large Scale Fundraising Project Committee (LSFP) is in charge of hosting a large-scale fundraiser that
            is aimed towards one of the District Fundraising Initiative.
        </p>

        <p>
            2017-2018 LSFP Committee hosted a divisional service auction with a theme that revolved around
            "The Greatest Showman". The proceeds for this large-scale fundraiser went towards Kiwanis Family House
            and 20% of the proceeds went towards helping Hawaii Circle K clubs get to District Events.
        </p>
    </div>

    <div class="title-wrapper">
        <h1 class="title">Committee Members</h1>
    </div>

            <div id="rows">
                <div id="row1" class="contact-row">
                    <div>
                        <img id="image1" src="{{ asset('images/Committees/LSFP/Anh.jpg') }}" />
                        <p id="name1"><strong>Anh Vo</strong></p>
                        <p id="title1">LSFP Committee Head</p>
                    </div>
                    <div>
                        <img id="image2" src="{{ asset('images/Committees/TechTeam/Weijin.jpg') }}" />
                        <p id="name2"><strong>Weijin Xu</strong></p>
                        <p id="title2">Executive Assistant</p>
                    </div>
                    <div>
                        <img id="image3" src="{{ asset('images/Committees/LSFP/Erica.jpg') }}" />
                        <p id="name3"><strong>Erica Wei</strong></p>
                        <p id="title3">External Outreach Chair</p>
                    </div>
                </div>

                <div id="row2" class="contact-row">
                    <div>
                        <img id="image4" src="{{ asset('images/Committees/LSFP/Phillip.jpg') }}" />
                        <p id="name4"><strong>Phillip Truong</strong></p>
                        <p id="title4">Internal Outreach Chair</p>
                    </div>
                    <div>
                        <img id="image5" src="{{ asset('images/Committees/LSFP/Nicole.jpg') }}" />
                        <p id="name5"><strong>Nicole Ambrosio</strong></p>
                        <p id="title5">Operations Chair</p>
                    </div>
                    <div>
                        <img id="image6" src="{{ asset('images/Committees/LSFP/Vanissa.jpg') }}" />
                        <p id="name6"><strong>Vanissa Tsang</strong></p>
                        <p id="title6">Public Relations Chair</p>
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
