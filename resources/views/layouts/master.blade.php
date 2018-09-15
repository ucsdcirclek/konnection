<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') | UCSD Circle K</title>
    <meta name="description" content="@yield('description')">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.4/slick-theme.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/1.2.7/css/froala_editor.min.css">
    <link rel="stylesheet" href="{{ elixir("css/main.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor/jquery.datetimepicker.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor/popup.css') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<div id="main">

    {{-- Header --}}

    {{-- Navigation bar --}}
    @include('layouts.navbar')

    @include('layouts.admin')

    <div id="header-image">
        <!--<h1><img alt="UCSD Circle K" src="{{ asset('images/2017-18banner.jpg') }}"></h1> -->
            <a href="https://www.youtube.com/user/ucsdcirclek" target="_blank">
            <video muted="" id="video" autoplay="autoplay" loop="loop" style="width:100%;">
                <source src="{{ asset('images/website-loop.mp4') }}" type="video/mp4">
            </video>
            </a>
    </div>
    {{-- End Header --}}

    <div id="container">
        @yield('content')
    </div>

    @include('layouts.footer')
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
{{--<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>--}}
<script src="{{ asset('js/vendor/moment.min.js') }}"></script>
<script src="{{ asset('js/vendor/moment-timezone-with-data-2010-2020.min.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/1.2.8/js/froala_editor.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/1.2.8/js/plugins/char_counter.min.js"></script>
<script src="{{ elixir('js/main.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.datetimepicker.js') }}"></script>
<script src="{{ asset('js/vendor/popup.min.js') }}"></script>

<script>
    if (document.location.hostname.indexOf("ucsdcki.org") != -1 || document.location.hostname.indexOf("www.ucsdcki.org") != -1) {
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-49573028-1', 'auto');
        ga('send', 'pageview');
    }
</script>

</body>
</html>
