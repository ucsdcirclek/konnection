@extends('layouts.master')

@section('title')
    Contact
@endsection

@section('content')
    @include('layouts.header', array('headerTitle' => 'Contact Us!'))

    <style>
     p.descr{
         white-space: pre-line;
     }

     p.big{
         line-height: 200%;
     }

    </style>

    <div class="wrapper">
        <div class="title-wrapper">
            <!-- <h1 class="title">2018 - 2019 UCSD CKI Board</h1> -->
            <h1 class="title">SUPER SMASH BOARD!!!!</h1>
        </div>
        <div class="contact-row">
            <div>
                <!-- <img src="{{ asset('images/board/Michael2.jpg') }}" /> -->
                <img src="{{ asset('images/Crobeasts/Piranha_square.png') }}">
                <p><strong>Christina</strong></p>
                <p>President</p>
                <p>president@ucsdcki.org</p>
            </div>
            <div>
                <!-- <img src="{{ asset('images/board/Louise2.jpg') }}" /> -->
                <img src="{{ asset('images/Crobeasts/Piranha_square.png') }}">
                <p><strong>Board Mom</strong></p>
                <p>Vice President of Administration</p>
                <p>vpa@ucsdcki.org</p>
            </div>
            <div>
                <!-- <img src="{{ asset('images/board/Braelyn2.jpg') }}" /> -->
                <img src="{{ asset('images/Crobeasts/Piranha_square.png') }}">
                <p><strong>OVT</strong></p>
                <p>Vice President of Service</p>
                <p>vps@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <!-- <img src="{{ asset('images/board/Marne2.jpg') }}" /> -->
                <img src="{{ asset('images/Crobeasts/Piranha_square.png') }}">
                <p><strong>WHOLESOME Queen</strong></p>
                <p>Secretary</p>
                <p>secretary@ucsdcki.org</p>
            </div>
            <div>
                <!-- <img src="{{ asset('images/board/Kevin2.jpg') }}" /> -->
                <img src="{{ asset('images/Crobeasts/Piranha_square.png') }}">
                <p><strong>musubeep</strong></p>
                <p>Treasurer</p>
                <p>treasurer@ucsdcki.org</p>
            </div>
            <div>
                <!-- <img src="{{ asset('images/board/Vivian2.jpg') }}" /> -->
                <img src="{{ asset('images/Crobeasts/Piranha_square.png') }}">
                <p><strong>Red Riding Hood</strong></p>
                <p>Fundraising</p>
                <p>fundraising@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <!-- <img src="{{ asset('images/board/Lincoln2.jpg') }}" /> -->
                <img src="{{ asset('images/Crobeasts/Piranha_square.png') }}">
                <p><strong>a lost cause</strong></p>
                <p>Historian</p>
                <p>historian@ucsdcki.org</p>
            </div>
            <div>
                <!-- <img src="{{ asset('images/board/Tri2.jpg') }}" /> -->
                <img src="{{ asset('images/Crobeasts/Piranha_square.png') }}">
                <p><strong>Christina</strong></p>
                <p>Kiwanis Family</p>
                <p>kfam@ucsdcki.org</p>
            </div>
            <div>
                <!-- <img src="{{ asset('images/board/Vanissa2.jpg') }}" /> -->
                <img src="{{ asset('images/Crobeasts/Piranha_square.png') }}">
                <p><strong>First Lord of CKI</strong></p>
                <p>Public Relations</p>
                <p>pr@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <!-- <img src="{{ asset('images/board/Maricris2.jpg') }}" /> -->
                <img src="{{ asset('images/Crobeasts/Piranha_square.png') }}">
                <p><strong>Marijesus</strong></p>
                <p>Member Relations</p>
                <p>mr@ucsdcki.org</p>
            </div>
            <div>
                <!-- <img src="{{ asset('images/board/Justin2.jpg') }}" /> -->
                <img src="{{ asset('images/Crobeasts/Piranha_square.png') }}">
                <p><strong>Justin (Pa)Lores</strong></p>
                <p>Member Development and Education</p>
                <p>mde@ucsdcki.org</p>
            </div>
            <div>
                <!-- <img src="{{ asset('images/board/Kylie2.jpg') }}" /> -->
                <img src="{{ asset('images/Crobeasts/Piranha_square.png') }}">
                <p><strong>DADDY SHARK</strong></p>
                <p>Social</p>
                <p>social@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <!-- <img src="{{ asset('images/board/Phillip2.jpg') }}" /> -->
                <img src="{{ asset('images/Crobeasts/Piranha_square.png') }}">
                <p><strong>Mr Fellowship Captain Man Boss Sir</strong></p>
                <p>Fellowship</p>
                <p>fellowship@ucsdcki.org</p>
            </div>
            <div>
                <!-- <img src="{{ asset('images/board/Alyssa2.jpg') }}" /> -->
                <img src="{{ asset('images/Crobeasts/Piranha_square.png') }}">
                <p><strong>In Lew of Service</strong></p>
                <p>Service</p>
                <p>service@ucsdcki.org</p>
            </div>
            <div>
                <!-- <img src="{{ asset('images/board/Carl2.jpg') }}" /> -->
                <img src="{{ asset('images/Crobeasts/Piranha_square.png') }}">
                <p><strong>ProTECHtor</strong></p>
                <p>Technology</p>
                <p>technology@ucsdcki.org</p>
                <p></p>
            </div>
        </div>
    </div>
@endsection

