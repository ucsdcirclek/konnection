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
            <h1 class="title">2018 - 2019 UCSD CKI Board</h1>
            <h1 class="title">"CroBeasts"</h1>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/Michael2.jpg') }}" />
                <p><strong>Michael Christensen</strong></p>
                <p>President</p>
                <p>president@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/Louise2.jpg') }}" />
                <p><strong>Louise Tolentino</strong></p>
                <p>Vice President of Administration</p>
                <p>vpa@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/Braelyn2.jpg') }}" />
                <p><strong>Braelyn Joy Travis</strong></p>
                <p>Vice President of Service</p>
                <p>vps@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/Marne2.jpg') }}" />
                <p><strong>Marne Amoguis</strong></p>
                <p>Secretary</p>
                <p>secretary@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/Kevin2.jpg') }}" />
                <p><strong>Kevin Nguyen</strong></p>
                <p>Treasurer</p>
                <p>treasurer@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/Vivian2.jpg') }}" />
                <p><strong>Vivian Du</strong></p>
                <p>Fundraising</p>
                <p>fundraising@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/Lincoln2.jpg') }}" />
                <p><strong>Lincoln Huynh</strong></p>
                <p>Historian</p>
                <p>historian@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/Tri2.jpg') }}" />
                <p><strong>Tri Tran</strong></p>
                <p>Kiwanis Family</p>
                <p>kfam@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/Vanissa2.jpg') }}" />
                <p><strong>Vanissa Tsang</strong></p>
                <p>Public Relations</p>
                <p>pr@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/maricris2.JPG') }}" />
                <p><strong>Maricris Hernandez</strong></p>
                <p>Member Relations</p>
                <p>mr@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/Justin2.jpg') }}" />
                <p><strong>Justin Palor</strong></p>
                <p>Member Development and Education</p>
                <p>mde@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/Kylie2.jpg') }}" />
                <p><strong>Kylie Tran</strong></p>
                <p>Social</p>
                <p>social@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/Philip2.jpg') }}" />
                <p><strong>Philip Truong</strong></p>
                <p>Fellowship</p>
                <p>fellowship@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/Alyssa2.jpg') }}" />
                <p><strong>Alyssa Lew</strong></p>
                <p>Service</p>
                <p>service@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/Carl2.jpg') }}" />
                <p><strong>Carl Dungca</strong></p>
                <p>Technology</p>
                <p>technology@ucsdcki.org</p>
                <p></p>
            </div>
        </div>
    </div>
@endsection

