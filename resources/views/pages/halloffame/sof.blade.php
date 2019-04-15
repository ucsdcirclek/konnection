@extends('layouts.master')

@section('title')
    Staff of Fellowship
@endsection

<style>
    .desc{
        font-size: 22px;
    }
    .title{
        padding:5px;
        font-size: 23px;
    }
</style>

@section('content')
    @include('layouts.header', array('headerTitle' => 'Staff of Fellowship'))

    <div align="center">

        <div class="desc">
            Started by alumni, Mike Mullen, the Staff of Fellowship recognizes a dues-paid member twice a month for
                their hard work and dedication towards the fellowship tenent. Like the Member Spotlight, members are
                nominated by board or general members, then voted on by the board. The member who receives this
                recognition is honored with an actual staff where they can sharpie their name alongside others who were
                also recognized.
        </div>
    </div>


    <div class="wrapper">
        <div class="title-wrapper">
            @include('layouts.header', array('headerTitle' => 'April 2017'))
        </div>
        <div class="mobile-text">
            <div class="contact-row">
                <div>
                    <img src="{{asset('images/halloffame/mr/sof/PatrickL.jpg')}}" />
                    <p><strong>Patrick Lee</strong></p>
                    <p>1st Year</p>
                    <p>Computer Engineering</p>
                </div>
            </div>
        </div>

        <div class="title-wrapper">
            @include('layouts.header', array('headerTitle' => 'May 2017'))
        </div>
        <div class="mobile-text">
            <div class="contact-row">
                <div>
                    <img src="{{asset('images/impactteams/teamftk/Fray.jpg')}}" />
                    <p><strong>Fray Salmasan</strong></p>
                    <p>1st Year</p>
                    <p>General Biology</p>
                </div>
                <div>
                    <img src="{{asset('images/halloffame/mr/sof/Jack.jpg')}}" />
                    <p><strong>Jack Wang</strong></p>
                    <p>3rd Year</p>
                    <p>Management Science</p>
                </div>
            </div>
        </div>

        <div class="title-wrapper">
            @include('layouts.header', array('headerTitle' => 'October 2017'))
        </div>
        <div class="mobile-text">
            <div class ="contact-row">
                <div>
                    <img src="{{ asset('images/halloffame/mr/sof/Kenneth.jpg') }}" />
                    <p><strong>Kenneth Truong</strong></p>
                    <p>3rd Year</p>
                    <p>Cognitive Science</p>
                </div>
                <div>
                    <img src="{{ asset('images/halloffame/mr/sof/Justin_D.jpg') }}" />
                    <p><strong>Justin Duong</strong></p>
                    <p>1st Year</p>
                    <p>Oceanic and Atomospheric Sciences</p>
                </div>
            </div>
        </div>

        <div class="title-wrapper">
            @include('layouts.header', array('headerTitle' => 'November 2017'))
        </div>
        <div class="mobile-text">
            <div class ="contact-row">
                <div>
                    <img src="{{ asset('images/halloffame/mr/sof/Riku.jpg') }}" />
                    <p><strong>Riku Tajima</strong></p>
                    <p>3rd Year</p>
                    <p>Sociology</p>
                </div>
                <div>
                    <img src="{{ asset('images/halloffame/mr/sof/Patrick.jpg') }}" />
                    <p><strong>Patrick Cosare</strong></p>
                    <p>3rd Year</p>
                    <p>General Biology</p>
                </div>
            </div>
        </div>

        <div class="title-wrapper">
            @include('layouts.header', array('headerTitle' => 'January 2018'))
        </div>
        <div class="mobile-text">
            <div class ="contact-row">
                <div>
                    <img src="{{ asset('images/halloffame/mr/sof/Phillip.jpg') }}" />
                    <p><strong>Phillip Truong</strong></p>
                    <p>1st Year</p>
                    <p>Mechanical Engineering</p>
                </div>
                <div>
                    <img src="{{ asset('images/halloffame/mr/sof/Hanna.jpg') }}" />
                    <p><strong>Hanna Lam</strong></p>
                    <p>1st Year</p>
                    <p>Psychology </p>
                </div>
                <div>
                    <img src="{{ asset('images/impactteams/teampulse/Kylie.jpg') }}" />
                    <p><strong>Kylie Tran</strong></p>
                    <p>1st Year</p>
                    <p>Human Biology</p>
                </div>
            </div>
        </div>

        <div class="title-wrapper">
            @include('layouts.header', array('headerTitle' => 'February 2018'))
        </div>
        <div class="mobile-text">
            <div class="contact-row">
                <div>
                    <img src="{{asset('images/Committees/SAAT/Ming.jpg')}}" />
                    <p><strong>Minghua Ong</strong></p>
                    <p>1st Year</p>
                    <p>Bioengineering</p>
                </div>
            </div>
        </div>

        <div class="title-wrapper">
            @include('layouts.header', array('headerTitle' => 'March 2018'))
        </div>
        <div class="mobile-text">
            <div class="contact-row">
                <div>
                    <img src="{{asset('images/Committees/SAAT/Marne.jpg')}}" />
                    <p><strong>Marné Amoguis</strong></p>
                    <p>1st Year</p>
                    <p>International Business</p>
                </div>
            </div>
        </div>

    </div>

    @endsection
