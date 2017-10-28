@extends('layouts.master')

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
       /*CSS for Mball Timer Countdown*/
       .bgimg {
            padding-top: 8px;
            position: relative;
            color: white;
            font-family: "Courier New", Courier, monospace;
        }

        .middle {
            position: absolute;
            top: 95%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            font-size:50px;
            width: 100%;
            text-shadow:
                    -1px -1px 0 #000,
                    1px -1px 0 #000,
                    -1px 1px 0 #000,
                    1px 1px 0 #000;
        }
    </style>
    
    <script>
        // Set the Mball count down date
        var countDownDate = new Date("Nov 19, 2017 00:30:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get todays date and time
            var now = new Date().getTime();

            // Find the distance between now an the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in an element with id="demo"
            document.getElementById("timer").innerHTML = days + " days " + hours + " hours "
                + minutes + " min " + seconds + " sec ";

            document.getElementById("timer").style.fontWeight = "900";

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("timer").innerHTML = "Mball Time!";
            }
        }, 1000);
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    
</head>

@section('title', 'Home')

@section('description')
    Established in 1977, Circle K International at UCSD is a community service organization offering service, social and leadership opportunities.
@endsection

@section('content')
    <div class="slider">
        @foreach($slides as $slide)
            @if (empty($slide->title) || empty($slide->body))
                <div class="slider-content">
                    <a href="{{ $slide->link }}"><img src="{{ asset($slide->image->url()) }}"></a>
                </div>
            @else
                <div class="slider-content">
                    <div class="text">
                        <h3>{{ $slide->title }}</h3>
                        <p>{{ $slide->body }}</p>
                    </div>
                    <a href="{{ $slide->link }}"><img src="{{ asset($slide->image->url()) }}"></a>
                </div>
            @endif
        @endforeach
    </div>

    <div class="hidden">
        <div id="social-media-column">
          <a href="https://www.facebook.com/ucsdcirclek"><div class="facebook-box"><i class="fa fa-2x fa-facebook"></i></div></a>
          <a href="http://ucsdcirclek.tumblr.com"><div class="tumblr-box"><i class="fa fa-2x fa-tumblr"></i></div></a>
          <a href="https://instagram.com/ucsdcirclek"><div class="instagram-box"><i class="fa fa-2x fa-instagram"></i></div></a>
          <a href="https://twitter.com/ucsdcirclek"><div class="twitter-box"><i class="fa fa-2x fa-twitter"></i></div></a>
          <a href="https://www.snapchat.com/add/ucsdcirclek"><div class="snapchat-box"><i class="fa fa-2x fa-snapchat-ghost" style="font-size:36px"></i></div></a>
        </div>
    </div>

    <div id="content">

      <div class="mobile-text">
        @if(!Auth::check())
            <div id="welcome-view">
                <div class="text">
                    <h3>Welcome to UCSD Circle K!</h3>

                    <p>
                        Circle K International is the <strong>largest service organization in the world</strong>, with
                        over <span class="light-emphasis">13,000</span> members worldwide who have served a total of
                        <span class="light-emphasis">199,327</span> hours of service.
                    </p>

                    <p class="center"><a href="/events">Check out some of our events!</a></p>
                    <p class="center"><a href="https://www.joomag.com/magazine/the-crobie-contagion-issue-07/0121090001465955949?short" target="_blank">Check out our newsletters!</a></p>
                </div>

                <div class="links">
                    <div><a class="button" href="/auth/register">Register an account on the website!</a></div>
                    <div><a class="button" href="/auth/login">Login</a></div>

                </div>
            </div>
          </div>
          @else
          <div id="welcome-view">
                <div class="text">
                    <p class="center">Haven't filled out a membership application yet? Fill one out right here!</p>
                </div>
                <div class="links">
                    <div><a class="button" href="/about/membership">Membership</a></div>
                </div>
            </div>
        @endif
        
        <!--
        <div class="center">
            <div class="mobile-text">
                <h2 style="text-align: center;padding-top: 3%">2016-2017 Term Recap Video</h2>
                <p style="text-align: center;">Look back on a year of service, leadership, and fellowship!</p>
            </div>
            <div class="videoWrapper">
                <div style="position:relative;height:0;padding-bottom:47.25%;text-align: center">
                    <iframe width="800" height="480"
                            src="https://www.youtube.com/embed/oDkApQZZgFU?">
                    </iframe>
                </div>
            </div>
        </div>
        -->
        
        @include('layouts.header', array('headerTitle' => 'Featured Members'))
        <!--Need to change width back when Committees page are done-->
            <div class="member-row" style="width: 100%">
                <div class="container">
                    <div>
                        <a href="{{ url('halloffame') }}">
                            <div class="image">
                                <div id="slideshow">
                            <div>
                                <img src="{{ asset('images/halloffame/mr/spotlight/Alison.jpg') }}" />
                            </div>
                            <div>
                                <img src="{{ asset('images/halloffame/mr/spotlight/Andrew.jpg') }}" />
                            </div>
                            <div>
                                <img src="{{ asset('images/halloffame/mr/sof/Justin_D.jpg') }}" />
                            </div>
                            <div>
                                <img src="{{ asset('images/halloffame/mr/sof/Kenneth.jpg') }}" />
                            </div>
                        </div>
                        <img src="https://fontmeme.com/permalink/171025/927b61dc4298ddf8c584ba4d5530972f.png" alt="fancy-fonts" border="0">
                    </div>
                </a>
                    </div>
                </div>

                <!--<div class="container">
                    <div>
                        <a href="{{ url('halloffame') }}">
                            <div class="image">
                                <div id="slideshow2">
                                    <div>
                                        <img src="{{ asset('images/Committees/MBall/MBallThumb.jpg') }}" />
                                    </div>
                                    <div>
                                        <img src="{{ asset('images/Committees/SLSSP/SLSSP.jpg') }}" />
                                    </div>
                                    <div>
                                        <img src="{{ asset('images/Committees/Key2College/K2CThumb.jpg') }}"/>
                                    </div>
                                    <div>
                                        <img src="{{ asset('images/Committees/SAAT/SAATThumb.jpg') }}" />
                                    </div>
                                    <div>
                                        <img src="{{ asset('images/Committees/TechTeam/TechThumb.png') }}" />
                                    </div>
                                </div>
                                <img src="https://fontmeme.com/permalink/171028/7fe5e29300cd6b7cbb723edbc71adcc0.png"
                                     alt="fancy-fonts" border="0">
                            </div>
                    </div>
                </div>
                -->
            </div>
        
        <a target="_blank" href="http://mball2017.weebly.com/tickets.html">
                <div class="bgimg">
                    <img src="{{asset('images/MballGraphic_Large.jpg')}}"/></a>
                        <div class="middle">
                            <div class="mobile-text-timer">
                                <p id="timer"></p>
                            </div>
                        </div>
                </div>

      <div class="mobile-text">
        <div id="week-view">
            <ul class="week">

                <li class="featured">
                    <h5>Featured</h5>

                    <p class="title">
                        <a href="{{ action('EventsController@show', $featured->event->slug) }}">
                            {{ $featured->event->title }}
                        </a>
                    </p>

                    <p class="date">{{ $featured->event->start_time->format('F j') }}</p>

                    <p class="info">
                      {{ $featured->summary }}
                    </p>
                </li>
                @foreach ($upcoming as $day => $events)
                    <li>
                        <h5>{{$day}}</h5>
                        <ul>
                            @if ($events)
                                @foreach ($events as $event)
                                    <li>
                                        <p class="title">
                                            <a href="{{ action('EventsController@show', $event->slug) }}">
                                                {{ $event->title }}
                                            </a>
                                        </p>

                                        <p class="date">
                                            {{ $event->start_time->setTimezone('America/Los_Angeles')->format('g:iA \\t\\o ')}}
                                            {{ $event->end_time->setTimezone('America/Los_Angeles')->format('g:iA') }}
                                        </p>
                                    </li>
                                @endforeach
                            @else
                                <li>
                                    <p class="title">No events!</p>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
      </div>  

      <div class="mobile-text">
        <div id="announcements-view">
            <div><h2>Announcements</h2></div>

            <div class="announcements">
                @foreach ($posts as $post)
                    <article>
                        <h3>{{ $post->title }}</h3>

                        <p class="date">{{ $post->created_at->setTimezone('America/Los_Angeles')->format('l, F n, Y') }}</p>

                        <p>
                            {!! $post->content !!}
                        </p>
                    </article>
                @endforeach
          </div>
        </div>
      </div>
    </div>
@endsection
