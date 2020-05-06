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
            <h1 class="title">2020 - 2021 UCSD CKI Board</h1>
            <h1 class="title">"We Bare Board"</h1>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/Evan2.0.jpg') }}" />
                <p><strong>Evan Lin</strong></p>
                <p>President</p>
                <p>president@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
 	    	<div>
                <img src="{{ asset('images/board/Fongers.jpg') }}" />
                <p><strong>Justin Fong</strong></p>
                <p>Vice President of Administration</p>
                <p>vpa@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/Ramtin.jpg') }}" />
                <p><strong>Ramtin Azarbad</strong></p>
                <p>Vice President of Service</p>
                <p>vps@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/Danielle.jpg') }}" />
                <p><strong>Danielle Lee</strong></p>
                <p>Secretary</p>
                <p>secretary@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/Juicy.jpg') }}" />
                <p><strong>Justin Luc</strong></p>
                <p>Treasurer</p>
                <p>treasurer@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/EmilyC.jpg') }}" />
                <p><strong>Emily Chiew</strong></p>
                <p>Fundraising Chair</p>
                <p>fundraising@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/Ruthie.jpg') }}" />
                <p><strong>Ruthie Navarra</strong></p>
                <p>Kiwanis Family Chair</p>
                <p>kfam@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/Shannon.jpg') }}" />
                <p><strong>Shannon Lo</strong></p>
                <p>Public Relations</p>
                <p>pr@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/Christina.jpg') }}" />
                <p><strong>Christina Tang</strong></p>
                <p>Member Relations</p>
                <p>mr@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/EmilyK.jpg') }}" />
                <p><strong>Emily Kim</strong></p>
                <p>Member Development and Education</p>
                <p>mde@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/An.jpg') }}" />
                <p><strong>An Nguyen</strong></p>
                <p>Fellowship</p>
                <p>fellowship@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/Blanchie.jpg') }}" />
                <p><strong>Blanchie Lui</strong></p>
                <p>Service</p>
                <p>service@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/Jerome.jpg') }}" />
                <p><strong>Jerome Lam</strong></p>
                <p>Technology</p>
                <p>technology@ucsdcki.org</p>
                <p></p>
            </div>
        </div>
    </div>
@endsection

