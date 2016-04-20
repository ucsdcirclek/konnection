@extends('layouts.master')

@section('title')
    Contact
@endsection

@section('content')
    @include('layouts.header', array('headerTitle' => 'Contact Us!'))

    <div class="wrapper">
        <div class="title-wrapper">
            <h1 class="title">2016 - 2017 UCSD CKI Board</h1>
            <h1 class="title">"Billboard Hot 15"</h1>
        </div>

        -
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/sabrina.jpg') }}" />
                <p><strong>Sabrina Lim</strong> aka "Savage Cabbage"</p>
                <p>President</p>
                <p>president@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/vincent.jpg') }}" />
                <p><strong>Vincent Lim</strong></p>
                <p>Vice President of Administration</p>
                <p>vpa@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/chloris.jpg') }}" />
                <p><strong>Chloris Li</strong></p>
                <p>Vice President of Service</p>
                <p>vps@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/susan.jpg') }}" />
                <p><strong>Susan Sun</strong></p>
                <p>Secretary</p>
                <p>secretary@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/jason.jpg') }}" />
                <p><strong>Jason Liu</strong></p>
                <p>Treasurer</p>
                <p>treasurer@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/michelle.jpg') }}" />
                <p><strong>Michelle Cang</strong></p>
                <p>Fundraising</p>
                <p>fundraising@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/tiffany.jpg') }}" />
                <p><strong>Tiffany Nguyen</strong></p>
                <p>Historian</p>
                <p>historian@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/jennifer.jpg') }}" />
                <p><strong>Jennifer Truong</strong></p>
                <p>Kiwanis Family</p>
                <p>kfam@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/jane.jpg') }}" />
                <p><strong>Jane Wu</strong></p>
                <p>Public Relations</p>
                <p>pr@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/mason.jpg') }}" />
                <p><strong>Mason Zhu</strong></p>
                <p>Member Relations</p>
                <p>mr@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/john.jpg') }}" />
                <p><strong>John Shin</strong></p>
                <p>Member Development and Education</p>
                <p>mde@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/diana.jpg') }}" />
                <p><strong>Diana Thai</strong></p>
                <p>Social</p>
                <p>social@ucsdcki.org</p>
            </div>
        </div>
        <div class="contact-row">
            <div>
                <img src="{{ asset('images/board/michael.jpg') }}" />
                <p><strong>Michael Lindarto</strong></p>
                <p>Fellowship</p>
                <p>fellowship@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/hannah.jpg') }}" />
                <p><strong>Hannah Hwang</strong></p>
                <p>Service</p>
                <p>service@ucsdcki.org</p>
            </div>
            <div>
                <img src="{{ asset('images/board/reggie.jpg') }}" />
                <p><strong>Reggie Wu</strong></p>
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
                <td>Sabrina Lim</td>
                <td>President</td>
                <td>president@ucsdcki.org</td>
            </tr>
            <tr>
                <td>Vincent Lim</td>
                <td>VP of Administration</td>
                <td>vpa@ucsdcki.org</td>
            </tr>
            <tr>
                <td>Chloris Li</td>
                <td>VP of Service</td>
                <td>vps@ucsdcki.org</td>
            </tr>
            <tr>
                <td>Susan Sun</td>
                <td>Secretary</td>
                <td>secretary@ucsdcki.org</td>
            </tr>
            <tr>
                <td>Jason Liu</td>
                <td>Treasurer</td>
                <td>treasurer@ucsdcki.org</td>
            </tr>
            <tr>
                <td>Michelle Cang</td>
                <td>Fundraising</td>
                <td>fundraising@ucsdcki.org</td>
            </tr>
            <tr>
                <td>Tiffany Nguyen</td>
                <td>Historian</td>
                <td>historian@ucsdcki.org</td>
            </tr>
            <tr>
                <td>Jennifer Truong</td>
                <td>Kiwanis Family</td>
                <td>kfam@ucsdcki.org</td>
            </tr>
            <tr>
                <td>Jane Wu</td>
                <td>Public Relations</td>
                <td>pr@ucsdcki.org</td>
            </tr>
            <tr>
                <td>Mason Zhu</td>
                <td>Member Relations</td>
                <td>mr@ucsdcki.org</td>
            </tr>
            <tr>
                <td>John Shin</td>
                <td>Membership Development & Education</td>
                <td>mde@ucsdcki.org</td>
            </tr>
            <tr>
                <td>Diana Thai</td>
                <td>Social Chair</td>
                <td>social@ucsdcki.org</td>
            </tr>
            <tr>
                <td>Michael Lindarto</td>
                <td>Fellowship Chair</td>
                <td>fellowship@ucsdcki.org</td>
            </tr>
            <tr>
                <td>Hannah Hwang</td>
                <td>Service Chair</td>
                <td>service@ucsdcki.org</td>
            </tr>
            <tr>
                <td>Reggie Wu</td>
                <td>Technology Chair</td>
                <td>technology@ucsdcki.org</td>
            </tr>
        </table>
        --}}
    </div>
@endsection
