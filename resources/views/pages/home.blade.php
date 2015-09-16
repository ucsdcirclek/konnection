@extends('layouts.master')

@section('title', 'Home')

@section('description')
    Established in 1977, Circle K International at UCSD is a community service organization offering service, social and leadership opportunities.
@endsection

@section('content')
    <div class="slider">
        <div class="empty-content">
            <a href="https://www.facebook.com/events/770936166385069/"><img src="/images/slider/fallrush.jpg"></a>
        </div>
        @foreach($slides as $slide)
        <div style="background: url({{ asset($slide->image->url()) }}); background-position: center; background-size:
                cover">
            <div class="content">
                <div class="text">
                    <h2>{{ $slide->title }}</h2>
                    <br/>
                    <p>
                        {{ $slide->body }}
                    </p>

                    <p>
                        <a target="_blank" href="{{ $slide->link }}">Learn more</a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div id="social-media-column">
        <a href="https://www.facebook.com/ucsdcirclek"><div class="facebook-box"><i class="fa fa-2x fa-facebook"></i></div></a>
        <a href="http://ucsdcirclek.tumblr.com"><div class="tumblr-box"><i class="fa fa-2x fa-tumblr"></i></div></a>
        <a href="https://instagram.com/ucsdcirclek"><div class="instagram-box"><i class="fa fa-2x fa-instagram"></i></div></a>
        <a href="https://twitter.com/ucsdcirclek"><div class="twitter-box"><i class="fa fa-2x fa-twitter"></i></div></a>
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

                    <br/>

                    <p class="center"><a href="/events">Check out some of our events!</a></p>
                </div>

                <div class="links">
                    <div><button><a href="/about/membership">Become a member</a></button></div>
                    <div><button><a href="/auth/login">Login</a></button></div>
                </div>
            </div>
        @endunless

        <div id="week-view">
            <ul class="week">

                <li class="featured">
                    <h5>Featured</h5>

                    <p class="title">{{ $featured->event->title }}</p>

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
