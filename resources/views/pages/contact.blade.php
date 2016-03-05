@extends('layouts.master')

@section('title')
    Contact
@endsection

@section('content')
    @include('layouts.header', array('headerTitle' => 'Contact Us!'))
    <div class="wrapper">
        <div class="title-wrapper">
            <h1 class="title">2015 - 2016 UCSD CKI Board</h1>
            <h1 class="title">"Incrediboard"</h1>
        </div>

        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/joseph.jpg') }}" />
                <p><strong>Joseph Le</strong></p>
                <p>President</p>
                <p>president@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/emilie.jpg') }}" />
                <p><strong>Emilie Shen</strong></p>
                <p>Vice President of Administration</p>
                <p>vpa@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/brad.jpg') }}" />
                <p><strong>Bradley Ventayen</strong></p>
                <p>Vice President of Service</p>
                <p>vps@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/esther.jpg') }}" />
                <p><strong>Esther Wang</strong></p>
                <p>Secretary</p>
                <p>secretary@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/thong.jpg') }}" />
                <p><strong>Thong Pham</strong></p>
                <p>Treasurer</p>
                <p>treasurer@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/sabrina.jpg') }}" />
                <p><strong>Sabrina Lim</strong></p>
                <p>Fundraising</p>
                <p>fundraising@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/vivian.jpg') }}" />
                <p><strong>Vivian Dinh</strong></p>
                <p>Historian</p>
                <p>historian@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/vincent.jpg') }}" />
                <p><strong>Vincent Lim</strong></p>
                <p>Kiwanis Family</p>
                <p>kfam@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/erica.jpg') }}" />
                <p><strong>Erica Kao</strong></p>
                <p>Public Relations</p>
                <p>pr@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/az.jpg') }}" />
                <p><strong>Adrian DeGuzman</strong></p>
                <p>Member Relations</p>
                <p>mr@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/christine.jpg') }}" />
                <p><strong>Christine Vo</strong></p>
                <p>Member Development and Education</p>
                <p>mde@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/bella.jpg') }}" />
                <p><strong>Bella Nguyen</strong></p>
                <p>Social</p>
                <p>social@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/adrian.jpg') }}" />
                <p><strong>Adrian Cruz</strong></p>
                <p>Spirit</p>
                <p>spirit@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/mason.jpg') }}" />
                <p><strong>Mason Zhu</strong></p>
                <p>Service</p>
                <p>service@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/brian.jpg') }}" />
                <p><strong>Brian Tan</strong></p>
                <p>Technology</p>
                <p>technology@ucsdcki.org</p>
            </div>
        </div>
        {{--
        <table>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Email</th>
            </tr>
            <tr>
                <td>Joseph Le</td>
                <td>President</td>
                <td>president@ucsdcki.org</td>
            </tr>
            <tr>
                <td>Emilie Shen</td>
                <td>VP of Administration</td>
                <td>vpa@ucsdcki.org</td>
            </tr>
            <tr>
                <td>Bradley Ventayen</td>
                <td>VP of Service</td>
                <td>vps@ucsdcki.org</td>
            </tr>
            <tr>
                <td>Esther Wang</td>
                <td>Secretary</td>
                <td>secretary@ucsdcki.org</td>
            </tr>
            <tr>
                <td>Thong Pham</td>
                <td>Treasurer</td>
                <td>treasurer@ucsdcki.org</td>
            </tr>
            <tr>
                <td>Sabrina Lim</td>
                <td>Fundraising</td>
                <td>fundraising@ucsdcki.org</td>
            </tr>
            <tr>
                <td>Vivian Dinh</td>
                <td>Historian</td>
                <td>historian@ucsdcki.org</td>
            </tr>
            <tr>
                <td>Vincent Lim</td>
                <td>Kiwanis Family</td>
                <td>kfam@ucsdcki.org</td>
            </tr>
            <tr>
                <td>Erica Kao</td>
                <td>Public Relations</td>
                <td>pr@ucsdcki.org</td>
            </tr>
            <tr>
                <td>Adrian DeGuzman</td>
                <td>Member Relations</td>
                <td>mr@ucsdcki.org</td>
            </tr>
            <tr>
                <td>Christine Vo</td>
                <td>Membership Development & Education</td>
                <td>mde@ucsdcki.org</td>
            </tr>
            <tr>
                <td>Bella Nguyen</td>
                <td>Social Chair</td>
                <td>social@ucsdcki.org</td>
            </tr>
            <tr>
                <td>Adrian Cruz</td>
                <td>Spirit Chair</td>
                <td>spirit@ucsdcki.org</td>
            </tr>
            <tr>
                <td>Brian Tan</td>
                <td>Technology Chair</td>
                <td>technology@ucsdcki.org</td>
            </tr>
        </table>
        --}}
    </div>
@endsection
