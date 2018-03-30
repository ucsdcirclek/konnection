@extends('layouts.master')

@section('title')
    Member of the Month
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
    @include('layouts.header', array('headerTitle' => 'Member of the Month'))

    <div align="center">
        <div class = "title">
            <font size="23">
                <p><strong>What is Member of the Month?</strong></p>
            </font>
        </div>
        <div class="desc">
            <p> Every month, a dues-paid member is recognized for representing all three tenents of Circle K through more than one
                event. The recognized member is either nominated by a board or general member, then voted on by the board.
                Each board member then donates $1 each month towards a gift for the recognized member.
            </p>
        </div>
    </div>

    <div class="wrapper">
        <div class="title-wrapper">
            @include('layouts.header', array('headerTitle' => 'April 2017'))
        </div>
        <div class="mobile-text">
            <div class ="contact-row">
                <div>
                    <img src="{{ asset('images/halloffame/mr/mom/Julie.jpg') }}" />
                    <p><strong>Julie Shiozaki</strong></p>
                    <p>4th Year</p>
                    <p>Communications</p>
                </div>
            </div>
        </div>

        <div class="title-wrapper">
            @include('layouts.header', array('headerTitle' => 'May 2017'))
        </div>
        <div class="mobile-text">
            <div class ="contact-row">
                <div>
                    <img src="{{ asset('images/halloffame/mr/mom/Sean.jpg') }}" />
                    <p><strong>Sean Lo</strong></p>
                    <p>2nd Year</p>
                    <p>Human Biology</p>
                </div>
            </div>
        </div>

        <div class="title-wrapper">
            @include('layouts.header', array('headerTitle' => 'October 2017'))
        </div>
        <div class="mobile-text">
            <div class ="contact-row">
                <div>
                    <img src="{{ asset('images/halloffame/mr/mom/JoannaT.jpg') }}" />
                    <p><strong>Joanna Troung</strong></p>
                    <p>1st Year</p>
                    <p>Human Biology</p>
                </div>
            </div>
        </div>

        <div class="title-wrapper">
            @include('layouts.header', array('headerTitle' => 'November 2017'))
        </div>
        <div class="mobile-text">
            <div class ="contact-row">
                <div>
                    <img src="{{ asset('images/halloffame/mr/mom/Aaron.jpg') }}" />
                    <p><strong>Aaron Zepeda</strong></p>
                    <p>1st Year</p>
                    <p>Undeclared</p>
                </div>
            </div>
        </div>

        <div class="title-wrapper">
            @include('layouts.header', array('headerTitle' => 'February 2018'))
        </div>
        <div class="mobile-text">
            <div class="contact-row">
                <div>
                    <img src="{{asset('images/halloffame/mr/mom/Stephanie.jpg')}}" />
                    <p><strong>Stephanie Nguyen</strong></p>
                    <p>1st Year</p>
                    <p>Biochemistry</p>
                </div>
            </div>
        </div>

        <div class="title-wrapper">
            @include('layouts.header', array('headerTitle' => 'March 2018'))
        </div>
        <div class="mobile-text">
            <div class="contact-row">
                <div>
                    <img src="{{asset('images/impactteams/teamftk/Vivian.jpg')}}" />
                    <p><strong>Vivian Du</strong></p>
                    <p>2nd Year</p>
                    <p>General Biology</p>
                </div>
            </div>
        </div>
    </div>
@endsection
