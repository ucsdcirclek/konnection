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
            <h1 class="title">2017 - 2018 UCSD CKI Board</h1>
            <h1 class="title">"Kids Next Board"</h1>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/passionfruits/Bradley.jpg') }}" />
                <p><strong>Supereme Leader Overlord</strong></p>
                <p>President</p>
                <p>president@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/passionfruits/John.jpg') }}" />
                <p><strong>Grandpa John</strong></p>
                <p>Vice President of Administration</p>
                <p>vpa@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/passionfruits/Matthew.jpg') }}" />
                <p><strong>Thirsty for Service</strong></p>
                <p>Vice President of Service</p>
                <p>vps@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/passionfruits/Wesley.jpg') }}" />
                <p><strong>Wesles</strong></p>
                <p>Secretary</p>
                <p>secretary@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/passionfruits/Nancy.jpg') }}" />
                <p><strong>Money is my Passion</strong></p>
                <p>Treasurer</p>
                <p>treasurer@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/passionfruits/Anh.jpg') }}" />
                <p><strong>Anhvocado</strong></p>
                <p>Fundraising</p>
                <p>fundraising@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/passionfruits/Poi.jpg') }}" />
                <p><strong>Mushed Taro</strong></p>
                <p>Historian</p>
                <p>historian@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/passionfruits/Michael.jpg') }}" />
                <p><strong>Michael Anthoney Gonzales Christensen</strong></p>
                <p>Kiwanis Family</p>
                <p>kfam@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/passionfruits/Shannon.jpg') }}" />
                <p><strong>Ms.PResident</strong></p>
                <p>Public Relations</p>
                <p>pr@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/passionfruits/Erica.jpg') }}" />
                <p><strong>De Wei to MR</strong></p>
                <p>Member Relations</p>
                <p>mr@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/passionfruits/Louise.jpg') }}" />
                <p><strong>Tol-en-tiny</strong></p>
                <p>Member Development and Education</p>
                <p>mde@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/passionfruits/Don.jpg') }}" />
                <p><strong>FB Game Master</strong></p>
                <p>Social</p>
                <p>social@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/passionfruits/Ryan.jpg') }}" />
                <p><strong>Do it You Won't</strong></p>
                <p>Fellowship</p>
                <p>fellowship@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/passionfruits/Siobhan.jpg') }}" />
                <p><strong>Savage Meme Master</strong></p>
                <p>Service</p>
                <p>service@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/passionfruits/Weijin.jpg') }}" />
                <p><strong>Vertical Angle</strong></p>
                <p>Technology</p>
                <p>technology@ucsdcki.org</p>
                <p></p>
            </div>
        </div>
    </div>
@endsection
