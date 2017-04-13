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
                <img src="{{ asset('images/board/bradley.jpg') }}" />
                <p><strong>Bradley Ventayen</strong></p>
                <p>President</p>
                <p>president@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/john.jpg') }}" />
                <p><strong>John Shin</strong></p>
                <p>Vice President of Administration</p>
                <p>vpa@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/matthew.jpg') }}" />
                <p><strong>Matthew Kawakami</strong></p>
                <p>Vice President of Service</p>
                <p>vps@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/wesley.jpg') }}" />
                <p><strong>Wesley Wu</strong></p>
                <p>Secretary</p>
                {{--<p>3rd Year</p>
                <p>Communications</p>
                --}}
                <p>secretary@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/nancy.jpg') }}" />
                <p><strong>Nancy Huang</strong></p>
                <p>Treasurer</p>
                <p>treasurer@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/anh.jpg') }}" />
                <p><strong>Anh Vo</strong></p>
                <p>Fundraising</p>
                <p>fundraising@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/poiema.jpg') }}" />
                <p><strong>Poiema Kim</strong></p>
                <p>Historian</p>
                <p>historian@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/michael.jpg') }}" />
                <p><strong>Michael Christensen</strong></p>
                <p>Kiwanis Family</p>
                <p>kfam@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/shannon.jpg') }}" />
                <p><strong>Shannon Lee</strong></p>
                <p>Public Relations</p>
                <p>pr@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/erica.jpg') }}" />
                <p><strong>Erica Wei</strong></p>
                <p>Member Relations</p>
                <p>mr@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/louise.jpg') }}" />
                <p><strong>Louise Tolentino</strong></p>
                <p>Member Development and Education</p>
                <p>mde@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/don.jpg') }}" />
                <p><strong>Don Tran</strong></p>
                <p>Social</p>
                <p>social@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/ryan.jpg') }}" />
                <p><strong>Ryan Luong</strong></p>
                <p>Fellowship</p>
                <p>fellowship@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/siobhan.jpg') }}" />
                <p><strong>Siobhán Lin-Nugent</strong></p>
                <p>Service</p>
                <p>service@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/weijin.jpg') }}" />
                <p><strong>Weijin Xu</strong></p>
                <p>Technology</p>
                <p>technology@ucsdcki.org</p>
                <p></p>
            </div>
        </div>
    </div>
@endsection
