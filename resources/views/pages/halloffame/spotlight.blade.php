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
        <div class = "title">
            <font size="23">
                <p><strong>What is Member Spotlight?</strong></p>
            </font>
        </div>
        <div class="desc">
            <p> Twice a month, a dues-paid member is recognized for their hard work and efforts towards service projects
                and/or events. They are nominated by the board or general members, then voted on by the board. The member
                who receives the Member Spotlight Recognition receives Crobie, the Stomach Flu and the club's mascot plush,
                and an journal to document any exciting adventures with Crobie.
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
    </div>
@endsection
