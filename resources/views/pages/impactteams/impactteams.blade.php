@extends('layouts.master')

@section('title')
    Impact Teams
@endsection

@section('content')
    @include('layouts.header', array('headerTitle' => 'Impact Teams'))

    <div align="center">
        <div class="desc">
            <p>An impact team is a student-run team that focuses on leadership based service events. Impact teams emphasize learning,
                experimentation, and taking initiatives. The potential of an impact team is high, as it is free from the contraints
                of the Circle K board. In other words, these teams can host events of any size impact within the San Diego area!</p>
        </div>
    </div>

    <body>

    <div class="wrapper">

        @include('layouts.header', array('headerTitle' => '2018-2019 Term'))

        <div class="commbox">
            <div class="picture_container">
                <img class src="{{ asset('images/impactteams/team_alice/team_alice.jpg') }}" alt="Avatar">
            </div>
            <div class="textbox">
                <a href="{{ url('ALICE') }}">
                    <h2>ALICE</h2>
                </a>

                <!-- <h6 style="color:gray">Status: CURRENT ACTIVE TEAM</h6> <!-- use this to specify if the impact team is the
                  current Impact Team for the quarter-->
                <h6 style="color:gray">Status: COMPLETED</h6>

                <p></p>
                <p>ALICE’s ( Alzheimer’s; Learn. Inform. Care. End.) focus is on raising awareness on Alzheimer's Disease.</p>
                <a href="{{ url('ALICE') }}">
                    <button>Learn more</button>
                </a>
            </div>
        </div>

        <div class="commbox">
            <div class="picture_container">
                <img class src="{{ asset('images/impactteams/team_haven/TeamHaven_Thumb.jpg') }}" alt="Avatar">
            </div>
            <div class="textbox">
                <a href="{{ url('Team_Haven') }}">
                    <h2>Team Haven</h2>
                </a>

               <!-- <h6 style="color:gray">Status: CURRENT ACTIVE TEAM</h6> <!-- use this to specify if the impact team is the
                 current Impact Team for the quarter-->
                <h6 style="color:gray">Status: COMPLETED</h6>

                <p></p>
                <p>Team Haven is focused on spreading awareness on domestic violence, as well as educating the local community!</p>
                <a href="{{ url('Team_Haven') }}">
                    <button>Learn more</button>
                </a>
            </div>
        </div>

        <div class="commbox">
            <div class="picture_container">
                <img class src="{{ asset('images/impactteams/team_paws/Paws_Thumb.png') }}" alt="Avatar">
            </div>
            <div class="textbox">
                <a href="{{ url('Team_Paws') }}">
                    <h2>Team Paws</h2>
                </a>

                <h6 style="color:gray">Status: COMPLETED</h6>

                <p></p>
                <p>Team Paws focuses on the health and well being of dogs as well as education in pet care.  </p>
                <a href="{{ url('Team_Paws') }}">
                    <button>Learn more</button>
                </a>
            </div>
        </div>


        @include('layouts.header', array('headerTitle' => '2017-2018 Term'))

        <div class="commbox">
            <div class="picture_container">
                <img class src="{{ asset('images/impactteams/teampulse/TeamPulseThumb.jpg') }}" alt="Avatar">
            </div>
            <div class="textbox">
                <a href="{{ url('TeamPulse') }}">
                    <h2>Team Pulse</h2>
                </a>

                <h6 style="color:gray">Status: COMPLETED</h6>

                <p></p>
                <p>Team Pulse's goal is focused on heart disease awareness and prevention.</p>
                <a href="{{ url('TeamPulse') }}">
                    <button>Learn more</button>
                </a>
            </div>
        </div>

        <div class="commbox"> <!-- contains the entire row--> <!-- Team FTK -->
            <div class="picture_container"> <!-- puts the picture in a box-->
                <img class src="{{ asset('images/impactteams/teamftk/FTKThumb.jpg') }}" alt="Avatar">
            </div>
            <div class="textbox"> <!-- box for adding a description-->
                <a href="{{ url('TeamFTK') }}">
                    <h2>Team FTK</h2>
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
            <div class="picture_container">
                <img class src="{{ asset('images/impactteams/teamhope/TeamHopeThumb.jpg') }}" alt="Avatar">
            </div>
            <div class="textbox">
                <a href="{{ url('TeamHope') }}">
                    <h2>Team Hope</h2>
                </a>

                <!--<h6 style="color:green">Status: CURRENT ACTIVE TEAM</h6> <!-- use this to specify if the impact team is the
                 current Impact Team for the quarter-->
                <h6 style="color:gray">Status: COMPLETED</h6>

                <p></p>
                <p>Team Hope's goal is raising cancer awareness and helping those affected by cancer or any other
                    debilitating illnesses heal.</p>
                <a href="{{ url('TeamHope') }}">
                    <button>Learn more</button>
                </a>
            </div>
        </div>

        @include('layouts.header', array('headerTitle' => '2016-2017 Term'))

        <div class="commbox"> <!-- Team Smileys -->
            <div class="picture_container">
                <img class src="{{ asset('images/impactteams/teamsmileys/TeamSmileysThumb.jpg') }}" alt="Avatar">
            </div>
            <div class="textbox">
                <a href="{{ url('TeamSmileys') }}">
                    <h2>Team Smileys</h2>
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
            <div class="picture_container">
                <img class src="{{ asset('images/impactteams/teamtails/TeamTailsThumb.jpg') }}" alt="Avatar">
            </div>
            <div class="textbox">
                <a href="{{ url('TeamTails') }}">
                    <h2>Team Tails</h2>
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
            <div class="picture_container">
                <img class src="{{ asset('images/impactteams/greenteam/GreenTeamThumb.jpg') }}" alt="Avatar">
            </div>
            <div class="textbox">
                <a href="{{ url('GreenTeam') }}">
                    <h2>Green Team</h2>
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
            <div class="picture_container">
                <img class src="{{ asset('images/impactteams/carpevitam/CarpeVitamThumb5.jpg') }}" alt="Avatar">
            </div>
            <div class="textbox">
                <a href="{{ url('CarpeVitam') }}">
                    <h2>Carpe Vitam</h2>
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
