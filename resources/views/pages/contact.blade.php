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
            <h1 class="title">2019 - 2020 UCSD CKI Board</h1>
            <h1 class="title">"Boba Milk Team"</h1>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/Kylie.jpg') }}" />
                <p><strong>Kylie Tran</strong></p>
                <p>President</p>
                <p>president@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/Braelyn.jpg') }}" />
                <p><strong>Braelyn Joy Travis</strong></p>
                <p>Vice President of Administration</p>
                <p>vpa@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/Summer.jpg') }}" />
                <p><strong>Summer Joshi</strong></p>
                <p>Vice President of Service</p>
                <p>vps@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/Evan.jpg') }}" />
                <p><strong>Evan Lin</strong></p>
                <p>Secretary</p>
                <p>secretary@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/Steven.jpg') }}" />
                <p><strong>Steven Ong</strong></p>
                <p>Treasurer</p>
                <p>treasurer@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/Kathy.jpg') }}" />
                <p><strong>Kathy Tran</strong></p>
                <p>Fundraising Chair</p>
                <p>fundraising@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/Hanna.jpg') }}" />
                <p><strong>Hanna Lam</strong></p>
                <p>Historian</p>
                <p>historian@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/Miyu.jpg') }}" />
                <p><strong>Miyu Nakajima</strong></p>
                <p>Kiwanis Family Chair</p>
                <p>kfam@ucsdcki.org</p>
            </div>
            <!-- !!--NONE -->
            <div>
                <img src="{{ asset('images/board/Savannah.jpg') }}" />
                <p><strong>Savannah Eljaouhari</strong></p>
                <p>Public Relations</p>
                <p>pr@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/Angela.jpg') }}" />
                <p><strong>Angela Chen</strong></p>
                <p>Member Relations</p>
                <p>mr@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/Ethan.jpg') }}" />
                <p><strong>Ethan Dang</strong></p>
                <p>Member Development and Education</p>
                <p>mde@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/Anees.jpg') }}" />
                <p><strong>Anees Patam</strong></p>
                <p>Spirit-Social Chair</p>
                <p>social@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/Zeven.jpg') }}" />
                <p><strong>Zeven Vidmar-Barker</strong></p>
                <p>Fellowship</p>
                <p>fellowship@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/Brian.jpg') }}" />
                <p><strong>Brian Wang</strong></p>
                <p>Service</p>
                <p>service@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/Felix.jpg') }}" />
                <p><strong>Felix Chu</strong></p>
                <p>Technology</p>
                <p>technology@ucsdcki.org</p>
                <p></p>
            </div>
        </div>
    </div>
@endsection

