@extends('layouts.master')

@section('title')
    Masquerade Ball Committee
@endsection

@section('content')

    <div id="background" class="bigbanner" style="background-image: url('/images/Committees/MBall/MBallCover1819.jpg')">
        <div id="title" class="bigbannertext">
            Masquerade Ball Committee 2018-2019
        </div>
    </div>

    <div class="message-box">
        <div class="title-wrapper">
            <p></p>
            <p></p>
            <h1 class="title">What is Masquerade Ball Committee?</h1>
        </div>
        <p>Masquerade Ball Committee(Mball Committee) is in charge of planning UC San Diego's Circle K's biggest hosted
            event, Masquerade Ball. Masquerade Ball attracts over 800 attendees from all over UCSD and our Cal-Nev-Ha
            district. Over the past two decades, Masquerade Ball have raised thousands of dollars each year for our
            different District Fundraising Initiatives (DFIs).</p>
    </div>

    <div class="title-wrapper">
        <h1 class="title">Committee Members</h1>
    </div>

    <div id="rows">
        <div id="row1" class="contact-row">
            <div>
                <img id="image1" src="{{ asset('images/Committees/MBall/Anh.jpg') }}" />
                <p id="name1"><strong>Anh Vo</strong></p>
                <p id="title1">Masquerade Ball Chair</p>
                <p>mball@ucsdcki.org</p>
            </div>
            <div>
                <img id="image2" src="{{ asset('images/Committees/MBall/WesleyMBall.jpg') }}" />
                <p id="name2"><strong>Wesley Wu</strong></p>
                <p id="title2">Operations Director</p>
                <p>mball.operations@ucsdcki.org</p>
            </div>
            <div>
                <div>
                    <img id="image7" src="{{ asset('images/Committees/MBall/Allyson.jpg') }}" />
                    <p id="name7"><strong>Allyson Luong</strong></p>
                    <p id="title7">DFI Operations Chair</p>
                    <p>mball.operations@ucsdcki.org</p>
                </div>
            </div>
        </div>

        <div id="row2" class="contact-row">
            <div>
                <img id="image4" src="{{ asset('images/Committees/MBall/AlyssaG.jpg') }}" />
                <p id="name4"><strong>Alyssa Granados</strong></p>
                <p id="title4">Creative Director</p>
                <p>mball.creative@ucsdcki.org</p>
            </div>
            <div>
                <img id="image5" src="{{ asset('images/Committees/MBall/WesY.jpg') }}" />
                <p id="name5"><strong>Wes-Yuen</strong></p>
                <p id="title5">Co-Marketing Director</p>
                <p>mball.publicity@ucsdcki.org</p>
            </div>
            <div>
                <img id="image6" src="{{ asset('images/Committees/MBall/AaronZ.jpg') }}" />
                <p id="name6"><strong>Aaron Zepeda</strong></p>
                <p id="title6">Co-Marketing Director</p>
                <p>mball.publicity@ucsdcki.org</p>
            </div>
        </div>

        <div id="row3" class="contact-row">
            <div>
            <img id="image3" src="{{ asset('images/Committees/MBall/Lisa.jpg') }}" />
            <p id="name3"><strong>Lisa Ton</strong></p>
            <p id="title3">Programs Coordinator</p>
            <p>mball.program@ucsdcki.org</p>
            </div>
            <div>
                <img id="image8" src="{{ asset('images/Committees/MBall/Renelle.jpg') }}" />
                <p id="name8"><strong>Renelle Gadon</strong></p>
                <p id="title8">Co-Finance Coordinator</p>
                <p>mball.finance@ucsdcki.org</p>
            </div>
            <div>
                <img id="image9" src="{{ asset('images/Committees/MBall/Elaine.jpg') }}" />
                <p id="name9"><strong>Elaine Dai</strong></p>
                <p id="title9">Co-Finance Coordinator</p>
                <p>mball.finance@ucsdcki.org</p>
            </div>
        </div>
    </div>

    <div class="title-wrapper">
        <h1 class="title">Past Members</h1>
    </div>

    <button class="accordion">2017-2018</button> <!--Create a new accordion for each year -->
    <div class="panel">
        <strong>Masquerade Ball Chair</strong>
        <p>Michelle Cang</p>
        <strong>Administrative</strong>
        <p>Tiffany Nguyen</p>
        <strong>Logisitics</strong>
        <p>Helen Thio</p>
        <strong>Creative Director</strong>
        <p>Alexandra Wei</p>
        <strong>Marketing</strong>
        <p>Chloris Li</p>
        <strong>Programs</strong>
        <p>Diana Thai</p>
        <strong>External Relations</strong>
        <p>Jason Liu</p>
        <strong>Finance</strong>
        <p>Jane Wu</p>
        <p>Hannah Hwang</p>
    </div> <!-- Copy up to this div to create new sections -->

    <button class="accordion">2016-2017</button>
    <div class="panel">
        <strong>Masquerade Ball Chair</strong>
        <p>Joseph Le</p>
        <strong>Operations Coordinator</strong>
        <p>Gene He</p>
        <strong>Publicity Coordinator</strong>
        <p>Emilie Shen</p>
        <strong>Creative Director</strong>
        <p>Esther Wang</p>
        <strong>Finance Coordinator</strong>
        <p>Seth Negron</p>
        <strong>Program Coordinator</strong>
        <p>Aaron Deng</p>
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
