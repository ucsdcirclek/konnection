@extends('layouts.master')

@section('title')
    Committees
@endsection

@section('content')
    @include('layouts.header', array('headerTitle' => 'Committees'))

    <head>

        <style>
            .commbox{
                background-color: lightgrey;
                padding: 25px;
                margin: 25px;
                height: 18em;
            }
            .textbox {
                padding: 25px;
                float: left;
                width: 66.6%;
                box-sizing: border-box;
            }
            .container {
                position: relative;
                float: left;
                width: 33.3%;
                height: auto;
                margin-bottom: 16px;
                padding: 0 8px;
                border: 3px;
            }
            image {
                display: block;
                max-width: 100%;
                height: auto;
            }
            h3 {
                text-decoration: underline;
            }
            @media only screen and (max-width: 414px) {
                .text {
                    color: white;
                    font-size: 17px;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    -ms-transform: translate(-50%, -50%);
                }
            }
        </style>
    </head>
    <body>

    <div class="wrapper">

        <div class="commbox"> <!-- contains the entire row--> <!-- MBall committee -->
            <div class="container"> <!-- puts the picture in a box-->
                <img class src="{{ asset('images/Committees/MBall/MBallThumb.jpg') }}" alt="Avatar">
            </div>
            <div class="textbox"> <!-- box for adding a description-->
                <a href="{{ url('masquerade') }}">
                    <h3>Masquerade Ball Committee</h3>
                </a>

                <!--<h6 style="color:green">Status: ACTIVE</h6> <!-- use this to specify whether or not the committee is active -->
                
                <!--<h6 style="color:green">Status: ACTIVE</h6>-->
                <!--<h6 style="color:darkcyan">Status: ACCEPTING APPLICATIONS (until 10/31/17)</h6>-->
                <h6 style="color:gray">Status: INACTIVE</h6>

                <p></p>
                <p>The Masquerade Ball Committee works together to host UCSD CKI's largest fundraiser!</p>
                <a href="{{ url('masquerade') }}" style="color:white">
                    <button>Learn more</button>
                </a>
                <a id="disabled" class="button">
                    Apply
                </a>
            </div>
        </div>

        <div class="commbox"> <!-- SLSSP Committee -->
            <div class="container">
                <img class src="{{ asset('images/Committees/SLSSP/SLSSPThumb17182.jpg') }}" alt="Avatar">
            </div>
            <div class="textbox">
                <a href="{{ url('SLSSP') }}">
                    <h3>SLSSP Committee</h3>
                </a>

                <!--<h6 style="color:green">Status: ACTIVE</h6>-->
                <!--<h6 style="color:darkcyan">Status: ACCEPTING APPLICATIONS (until 10/31/17)</h6>-->
                <h6 style="color:gray">Status: INACTIVE</h6>


                <p></p>
                <p>The Single Large Scale Service Project Committee organizes a full day of service that accommodates for
                    the Paradise Division.</p>
                <a href="{{ url('SLSSP') }}">
                    <button>Learn more</button>
                </a>
                
                <!-- Application-->
                <!--href="https://docs.google.com/document/d/1ZpD1nq598Xh73avxwSBJCMTTSbxHKGyS141npbLe3jQ/edit"
                   target="_blank"-->
                
                <a class="button" id="disabled">
                    Apply
                </a>
            </div>
        </div>

        <div class="commbox"> <!-- UCSD CKI Tech Team -->
            <div class="container">
                <img class src="{{ asset('images/Committees/TechTeam/TechThumb.png') }}" alt="Avatar">
            </div>
            <div class="textbox">
                <a href="{{ url('TechTeam') }}">
                    <h3>UCSD CKI Tech Team</h3>
                </a>

                <!--<h6 style="color:green">Status: ACTIVE</h6>-->
                <!--<h6 style="color:darkcyan">Status: ACCEPTING APPLICATIONS (until 10/31/17)</h6>-->
                <h6 style="color:gray">Status: INACTIVE</h6>

                <p></p>
                <p>UCSD CKI's tech team works to maintain and improve the club website.</p>
                <a href={{ url('TechTeam') }}>
                    <button>Learn more</button>
                </a>
                <a id="disabled" class="button">
                    Apply
                </a>
            </div>
        </div>

        <div class="commbox"> <!-- Key2college -->
            <div class="container">
                <img class src="{{ asset('images/Committees/Key2College/K2CThumbtemp.jpg') }}" alt="Avatar">
            </div>
            <div class="textbox">
                <a href="{{ url('Key2College') }}">
                    <h3>Key2College Committee</h3>
                </a>

                <!--<h6 style="color:green">Status: ACTIVE</h6>-->
                <!--<h6 style="color:darkcyan">Status: ACCEPTING APPLICATIONS (until 10/31/17)</h6>-->
                <h6 style="color:gray">Status: INACTIVE</h6>

                <p></p>
                <p>The Key2College Committee at UCSD Circle K organizes a day of workshops, entertainment,
                    and campus tours for incoming college students, with the goal of making the transition into college life fun and easy.
                </p>
                <a href="{{ url('Key2College') }}">
                    <button>Learn more</button>
                </a>
                <a id="disabled" class="button">
                    Apply
                </a>
            </div>
        </div>

        <div class="commbox"> <!-- SAAT Committee -->
            <div class="container">
                <img class src="{{ asset('images/Committees/SAAT/SAATThumb1718.JPG') }}" alt="Avatar">
            </div>
            <div class="textbox">
                <a href="{{ url('SAAT') }}">
                    <h3>UCSD CKI Student Alliance Against Trafficking (SAAT)</h3>
                </a>

                <!--<h6 style="color:green">Status: ACTIVE</h6>-->
                <!--<h6 style="color:darkcyan">Status: ACCEPTING APPLICATIONS (until 10/31/17)</h6>-->
                <h6 style="color:gray">Status: INACTIVE</h6>

                <p></p>
                <p>The SAAT Committee fights to increase awareness on human trafficking through several events.</p>
                <a href="{{ url('SAAT') }}">
                    <button>Learn more</button>
                </a>
                <a class="button" id="disabled">
                    Apply
                </a>
            </div>
        </div>

        <div class="commbox"> <!-- LSFP Committee -->
            <div class="container">
                <img class src="{{ asset('images/Committees/LSFP/LSFP1718Thumb2.jpg') }}" alt="Avatar">
            </div>
            <div class="textbox">
                <a href="{{ url('LSFP') }}">
                    <h3>Large Scale Fundraising Project Committee (LSFP)</h3>
                </a>

                <!--<h6 style="color:green">Status: ACTIVE</h6>-->
                <!--<h6 style="color:darkcyan">Status: ACCEPTING APPLICATIONS (until 10/31/17)</h6>-->
                <h6 style="color:gray">Status: INACTIVE</h6>


                <p></p>
                <p>The LSFP Committee is in charge of hosting a large-scale fundraiser that is aimed towards
                    one of the District Fundraising Initiatives.</p>
                <a href="{{ url('LSFP') }}">
                    <button>Learn more</button>
                </a>
                <a class="button" id="disabled">
                    Apply
                </a>
            </div>
        </div>


    </div>
    </body>

@endsection
