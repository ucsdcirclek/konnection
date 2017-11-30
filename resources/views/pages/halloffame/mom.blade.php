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
            @include('layouts.header', array('headerTitle' => 'October'))
        </div>
        <div class="mobile-text">
            <div class ="contact-row">
                <div>
                    <img src="{{ asset('images/halloffame/mr/mom/JoannaT.jpg') }}" />
                    <p><strong>Joanna Troung</strong></p>
                    <p>1st year</p>
                    <p>Human Biology</p>
                </div>
            </div>
        </div>

        <div class="title-wrapper">
            @include('layouts.header', array('headerTitle' => 'November'))
        </div>
        <div class="mobile-text">
            <div class ="contact-row">
                <div>
                    <img src="{{ asset('images/halloffame/mr/mom/Aaron.jpg') }}" />
                    <p><strong>Aaron Zepeda</strong></p>
                    <p>1st year</p>
                    <p>Undeclared</p>
                </div>
            </div>
        </div>
    </div>
@endsection
