@extends('layouts.master')

@section('title')
    Impact Teams
@endsection

@section('content')
    @include('layouts.header', array('headerTitle' => 'Impact Teams'))

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

    <div align="center">
        <div class = "title">
            <font size="23">
                <p><strong>What is an Impact Team?</strong></p>
            </font>
        </div>
        <div class="desc">
            <p>An impact team is a student-run team that focuses on leadership based service events. Impact teams emphasize learning,
                experimentation, and taking initiatives. The potential of an impact team is high, as it is free from the contraints
                of the Circle K board. In other words, these teams can host events of any size impact within the San Diego area!</p>
        </div>
    </div>

    <body>

    <div class="wrapper">

        @include('layouts.header', array('headerTitle' => '2017-2018 Term'))

        <div class="commbox"> <!-- Team Hope -->
            <div class="container">
                <img class src="{{ asset('images/impactteams/teampulse/TeamPulseThumb.jpg') }}" alt="Avatar">
            </div>
            <div class="textbox">
                <a href="{{ url('TeamPulse') }}">
                    <h3>Team Pulse</h3>
                </a>

                <h6 style="color:green">Status: CURRENT ACTIVE TEAM</h6> <!-- use this to specify if the impact team is the
                 current Impact Team for the quarter-->
                <!--<h6 style="color:gray">Status: COMPLETED</h6>-->

                <p></p>
                <p>Team Pulse's goal is focused on heart disease awareness and prevention.</p>
                <a href="{{ url('TeamPulse') }}">
                    <button>Learn more</button>
                </a>
            </div>
        </div>

        <div class="commbox"> <!-- contains the entire row--> <!-- Team FTK -->
            <div class="container"> <!-- puts the picture in a box-->
                <img class src="{{ asset('images/impactteams/teamftk/FTKThumb.jpg') }}" alt="Avatar">
            </div>
            <div class="textbox"> <!-- box for adding a description-->
                <a href="{{ url('TeamFTK') }}">
                    <h3>Team FTK</h3>
                </a>

                <!--<h6 style="color:green">Status: CURRENT ACTIVE TEAM</h6> <!-- use this to specify if the impact team is the
                 current Impact Team for the quarter-->
                <h6 style="color:gray">Status: COMPLETED</h6>

                <p></p>
                <p>Team FTK’s goal is to work with other charitable organizations and the San Diego community to help
                    alleviate disadvantaged youths' burdens so they are free to pursue the lives they want.
                </p>
                <a href="{{ url('TeamFTK') }}" style="color:white">
                    <button>Learn more</button>
                </a>
            </div>
        </div>

        <div class="commbox"> <!-- Team Hope -->
            <div class="container">
                <img class src="{{ asset('images/impactteams/teamhope/TeamHopeThumb.jpg') }}" alt="Avatar">
            </div>
            <div class="textbox">
                <a href="{{ url('TeamHope') }}">
                    <h3>Team Hope</h3>
                </a>

                <!--<h6 style="color:green">Status: CURRENT ACTIVE TEAM</h6> <!-- use this to specify if the impact team is the
                 current Impact Team for the quarter-->
                <h6 style="color:gray">Status: COMPLETED</h6>

                <p></p>
                <p>Team Hope's goal is raising cancer awareness and helping those affected by cancer or any other
                    debilitating illnesses heal.</p>
                <a href="{{ url('Team Hope') }}">
                    <button>Learn more</button>
                </a>
            </div>
        </div>

        @include('layouts.header', array('headerTitle' => '2016-2017 Term'))

        <div class="commbox"> <!-- Team Smileys -->
            <div class="container">
                <img class src="{{ asset('images/impactteams/teamsmileys/TeamSmileysThumb.jpg') }}" alt="Avatar">
            </div>
            <div class="textbox">
                <a href="{{ url('TeamSmileys') }}">
                    <h3>Team Smileys</h3>
                </a>

                <!--<h6 style="color:green">Status: CURRENT ACTIVE TEAM</h6> <!-- use this to specify if the impact team is the
                  current Impact Team for the quarter-->
                <h6 style="color:gray">Status: COMPLETED</h6>

                <p></p>
                <p>Team Smileys' goal is dedicated to making people happy and improving their mental well being.</p>
                <a href={{ url('TeamSmileys') }}>
                    <button>Learn more</button>
                </a>
            </div>
        </div>

        <div class="commbox"> <!-- Team Tails -->
            <div class="container">
                <img class src="{{ asset('images/impactteams/teamtails/TeamTailsThumb.jpg') }}" alt="Avatar">
            </div>
            <div class="textbox">
                <a href="{{ url('TeamTails') }}">
                    <h3>Team Tails</h3>
                </a>

                <!--<h6 style="color:green">Status: CURRENT ACTIVE TEAM</h6> <!-- use this to specify if the impact team is the
                   current Impact Team for the quarter-->
                <h6 style="color:gray">Status: COMPLETED</h6>

                <p></p>
                <p>Team Tails' goal is to set up reoccurring volunteering events as well as projects with local animal
                    shelter community.
                </p>
                <a href="{{ url('TeamTails') }}">
                    <button>Learn more</button>
                </a>
            </div>
        </div>

        <div class="commbox"> <!-- Green Team -->
            <div class="container">
                <img class src="{{ asset('images/impactteams/greenteam/GreenTeamThumb.jpg') }}" alt="Avatar">
            </div>
            <div class="textbox">
                <a href="{{ url('GreenTeam') }}">
                    <h3>Green Team</h3>
                </a>

                <!--<h6 style="color:green">Status: CURRENT ACTIVE TEAM</h6> <!-- use this to specify if the impact team is the
                    current Impact Team for the quarter-->
                <h6 style="color:gray">Status: COMPLETED</h6>

                <p></p>
                <p>Green Team's goal is to work to instill better attitudes towards environmentalism through invasive plant
                    removal, restoration of native plants, and beautification of natural open spaces throughout San
                    Diego County.</p>
                <a href="{{ url('GreenTeam') }}">
                    <button>Learn more</button>
                </a>
            </div>
        </div>

        <div class="commbox"> <!-- carpevitam -->
            <div class="container">
                <img class src="{{ asset('images/impactteams/carpevitam/CarpeVitamThumb5.jpg') }}" alt="Avatar">
            </div>
            <div class="textbox">
                <a href="{{ url('CarpeVitam') }}">
                    <h3>Carpe Vitam</h3>
                </a>

                <!--<h6 style="color:green">Status: CURRENT ACTIVE TEAM</h6> <!-- use this to specify if the impact team is the
                    current Impact Team for the quarter-->
                <h6 style="color:gray">Status: COMPLETED</h6>

                <p></p>
                <p>Carpe Vitam's goal is to raise awareness for Mental Health Awareness Month as well as providing a
                    slow paced environment to develop the team's leadership skills.
                </p>
                <a href="{{ url('CarpeVitam') }}">
                    <button>Learn more</button>
                </a>
            </div>
        </div>

    </div>
    </body>

@endsection
