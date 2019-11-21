@extends('layouts.master')

@section('title')
    Member Spotlight
@endsection

<style>
    .desc{
        font-size: 22px;
    }
    .title{
        padding:5px;
    }
</style>

@section('content')
    @include('layouts.header', array('headerTitle' => 'Member Spotlight'))

    <div align="center">

        <div class="desc">
           Twice a month, a dues-paid member is recognized for their hard work and efforts towards service projects
                and/or events. They are nominated by the board or general members, then voted on by the board. The member
                who receives the Member Spotlight Recognition receives Crobie, the Stomach Flu and the club's mascot plush,
                and an journal to document any exciting adventures with Crobie.

        </div>
    </div>

    <div class="wrapper">
        <div class="title-wrapper">
            @include('layouts.header', array('headerTitle' => 'April 2017'))
        </div>
        <div class="mobile-text">
            <div class ="contact-row">
                <div>
                    <img src="{{ asset('images/Committees/SLSSP/Victoria.jpg') }}" />
                    <p><strong>Victoria Vu</strong></p>
                    <p>1st Year</p>
                    <p>Cognitive Science</p>
                </div>
            </div>
        </div>

        <div class="title-wrapper">
            @include('layouts.header', array('headerTitle' => 'May 2017'))
        </div>
        <div class="mobile-text">
            <div class="contact-row">
                <div>
                    <img src="{{ asset('images/Committees/SLSSP/Alyssa.jpg') }}" />
                    <p><strong>Alyssa Lew</strong></p>
                    <p>1st Year</p>
                    <p>General Biology</p>
                </div>
                <div>
                    <img src="{{ asset('images/halloffame/mr/spotlight/Miguel.jpg')}}" />
                    <p><strong>Miguel Gamo</strong></p>
                    <p>3rd Year</p>
                    <p>Environmental Chemistry</p>
                </div>
                <div>
                    <img src="{{ asset('images/halloffame/mr/spotlight/Tammy.jpg')}}" />
                    <p><strong>Tammy De</strong></p>
                    <p>2nd Year</p>
                    <p>Mechanical Engineering</p>
                </div>
            </div>
        </div>

        <div class="title-wrapper">
            @include('layouts.header', array('headerTitle' => 'October 2017'))
        </div>
        <div class="mobile-text">
            <div class="contact-row">
                <div>
                    <img src="{{ asset('images/halloffame/mr/spotlight/Alison.jpg') }}" />
                    <p><strong>Alison Liu</strong></p>
                    <p>1st year</p>
                    <p>Communications</p>
                </div>
                <div>
                    <img src="{{ asset('images/halloffame/mr/spotlight/Andrew.jpg') }}" />
                    <p><strong>Andrew Vu</strong></p>
                    <p>1st Year</p>
                    <p>Biochemistry</p>
                </div>
            </div>
        </div>

        <div class="title-wrapper">
            @include('layouts.header', array('headerTitle' => 'November 2017'))
        </div>
        <div class="mobile-text">
            <div class="contact-row">
                <div>
                    <img src="{{ asset('images/halloffame/mr/spotlight/Wes.jpg') }}" />
                    <p><strong>Wes Yuen</strong></p>
                    <p>4th year</p>
                    <p>Communications</p>
                </div>
                <div>
                    <img src="{{ asset('images/halloffame/mr/spotlight/Braelyn.jpg') }}" />
                    <p><strong>Braelyn Joy</strong></p>
                    <p>1st Year</p>
                    <p>Human Biology</p>
                </div>
            </div>
        </div>

        <div class="title-wrapper">
            @include('layouts.header', array('headerTitle' => 'January 2018'))
        </div>
        <div class="mobile-text">
            <div class="contact-row">
                <div>
                    <img src="{{ asset('images/halloffame/mr/spotlight/Maricris.jpg') }}" />
                    <p><strong>Maricris Hernandez</strong></p>
                    <p>2nd year</p>
                    <p>General Biology - Cell Bio</p>
                </div>
                <div>
                    <img src="{{ asset('images/halloffame/mr/spotlight/Nayeli.jpg') }}" />
                    <p><strong>Nayeli Mota</strong></p>
                    <p>2nd year</p>
                    <p>Language Studies</p>
                </div>
            </div>
        </div>

        <div class="title-wrapper">
            @include('layouts.header', array('headerTitle' => 'February 2018'))
        </div>
        <div class="mobile-text">
            <div class="contact-row">
                <div>
                    <img src="{{asset('images/Committees/SLSSP/Jovonne.jpg')}}" />
                    <p><strong>Jovonne Lee</strong></p>
                    <p>2nd Year</p>
                    <p>Human Biology</p>
                </div>
            </div>
        </div>

        <div class="title-wrapper">
            @include('layouts.header', array('headerTitle' => 'March 2018'))
        </div>
        <div class="mobile-text">
            <div class="contact-row">
                <div>
                    <img src="{{asset('images/impactteams/teampulse/Sally.jpg')}}" />
                    <p><strong>Sally Rong</strong></p>
                    <p>1st Year</p>
                    <p>Political Science</p>
                </div>
                <div>
                    <img src="{{asset('images/halloffame/mr/spotlight/Vanissa.jpg')}}" />
                    <p><strong>Vanissa Tsang</strong></p>
                    <p>2nd Year</p>
                    <p>ESYS - Ecology, Behavior, and Evolution</p>
                </div>
            </div>
        </div>

        <div class="title-wrapper">
            @include('layouts.header', array('headerTitle' => 'May 2019'))
        </div>
        <div class="mobile-text">
            <div class="contact-row">
                <div>
                    <img src="{{asset('images/halloffame/mr/spotlight/Kevin.png')}}" />
                    <p><strong>Kevin Nguyen</strong></p>
                </div>
            </div>
        </div>

        <div class="title-wrapper">
            @include('layouts.header', array('headerTitle' => 'October 2019'))
        </div>
        <div class="mobile-text">
            <div class="contact-row">
                <div>
                    <img src="{{asset('images/halloffame/mr/spotlight/Ramtin.png')}}" />
                    <p><strong>Ramtin Azarbad</strong></p>
                </div>
            </div>
        </div>

        <div class="title-wrapper">
            @include('layouts.header', array('headerTitle' => 'November 2019'))
        </div>
        <div class="mobile-text">
            <div class="contact-row">
                <div>
                    <img src="{{asset('images/halloffame/mr/spotlight/Jose.png')}}" />
                    <p><strong>Jose Tapia Espinosa</strong></p>
                </div>
            </div>
        </div>





    </div>
@endsection
