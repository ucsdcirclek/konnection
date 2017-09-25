@extends('layouts.master')

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    <div id="social-media-column">
        <a href="https://www.facebook.com/ucsdcirclek"><div class="facebook-box"><i class="fa fa-2x fa-facebook"></i></div></a>
        <a href="http://ucsdcirclek.tumblr.com"><div class="tumblr-box"><i class="fa fa-2x fa-tumblr"></i></div></a>
        <a href="https://instagram.com/ucsdcirclek"><div class="instagram-box"><i class="fa fa-2x fa-instagram"></i></div></a>
        <a href="https://twitter.com/ucsdcirclek"><div class="twitter-box"><i class="fa fa-2x fa-twitter"></i></div></a>
        <a href="https://www.snapchat.com/add/ucsdcirclek"><div class="snapchat-box"><i class="fa fa-2x fa-snapchat-ghost" style="font-size:36px"></i></div></a>

    </div>

    <div id="content">

        @unless(Auth::check())
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
                    <div><a class="button" href="/about/membership">Become a member</a></div>
                    <div><a class="button" href="/auth/login">Login</a></div>

                </div>
            </div>
        @endunless

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
@endsection
