<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') | UCSD Circle K</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.4/slick-theme.min.css"/>
    <link rel="stylesheet" href="{{ elixir("css/main.css") }}">
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div id="main">
    {{-- Header --}}
    <header class="centered-navigation">
        <div class="centered-navigation-wrapper">

            <a href="" class="centered-navigation-menu-button" id="js-mobile-menu">MENU</a>

            <div class="nav">
                <div id="corner-left"></div>
                <ul class="centered-navigation-menu">
                    <li class="nav-link"><a href="{{ url('/') }}">home</a></li>
                    <li class="nav-link more"><a href="javascript:void(0)">about</a>
                        <ul class="submenu">
                            <li><a href="{{ url('about/circlek') }}">Circle K</a></li>
                            <li><a href="{{ url('about/division') }}">Division</a></li>
                            <li><a href="{{ url('about/club') }}">Club</a></li>
                        </ul>
                    </li>
                    <li class="nav-link"><a href="{{ url('/calendar') }}">calendar</a></li>
                    <li class="nav-link more"><a href="">district</a>
                        <ul class="submenu">
                            <li><a href="{{ url('about/district') }}">About</a></li>
                            <li><a target="_blank" href="http://dcon.cnhcirclek.org/">DCON</a></li>
                            <li><a target="_blank" href="http://ftc.cnhcirclek.org/">FTC</a></li>
                            <li><a target="_blank" href="http://www.cnhcirclek.org/event/7-crazy_kompetition_for_infants_south/">CKI
                                    South</a></li>
                        </ul>
                    </li>
                    <li class="nav-link more"><a target="_blank" href="http://www.kiwanis.org/">kiwanis</a>
                        <ul class="submenu">
                            <li><a target="_blank" href="http://www.kiwanisclublajolla.org/">La Jolla Kiwanis</a></li>
                            <li><a target="_blank" href="http://www.sdsucirclek.com">SDSU Circle K</a></li>
                        </ul>
                    </li>
                    <li class="nav-link"><a href="">contact</a></li>
                    @if (! Auth::check())
                    <li class="nav-link"><a href="{{ url('/auth/login') }}">login</a></li>
                    <li class="nav-link"><a href="{{ url('/auth/register') }}">register</a></li>
                    @else
                    <li class="nav-link"><a href="">settings</a></li>
                    @endif
                </ul>
                <div id="corner-right"></div>
            </div>

        </div>
    </header>

    <div id="header-image">
        <h1><img alt="UCSD Circle K" src="{{ asset('images/header.jpg') }}"></h1>
    </div>
    {{-- End Header --}}

    <div id="container">
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer>
        <div id="logos">
            <div class="logo">
                <a target="_blank" href="http://circlek.org"><img src="{{ asset('images/logos/cki.png') }}"></a>
            </div>
            <div class="logo">
                <a target="_blank" href="http://cnhcirclek.org"><img src="{{ asset('images/logos/cnh.png') }}"></a>
            </div>
            <div class="logo">
                <a target="_blank" href="http://paradise.cnhcirclek.org/"><img src="{{ asset('images/logos/paradise.png') }}"></a>
            </div>
        </div>

        <p>© 2014-2015 UC San Diego Circle K International.</p>

        <p id="credits">Designed and developed by Joseph Le with contributions from Jamie Santos, John Gamboa,
            Michael Mullen, and Alex Tang. Assets by Jamie Santos.</p>
    </footer>
    {{-- End Footer --}}
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
{{--<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
<script src="{{ elixir('js/main.js') }}"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
//    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
//            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
//        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
//        e.src='https://www.google-analytics.com/analytics.js';
//        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
//    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>

</body>
</html>