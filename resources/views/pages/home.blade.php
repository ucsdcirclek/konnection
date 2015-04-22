@extends('layouts.master')

@section('content')
    <div class="slider">
        <ul>
            <li style="background: url(images/slider/key2college.jpg); background-position: center; background-size: cover;">
                <div class="content">
                    <div class="text">
                        <h2>Key 2 College</h2>
                        <br/>

                        <p>UCSD Circle K International cordially invites you to its annual Key2College, an event for high school
                            students to learn more about the magical world of college here at UC San Diego. You can expect a helpful
                            workshops, tours, performances and cool raffle prizes!</p>

                        <p><a
                                    target="_blank"
                                    href="https://www.facebook.com/events/1759938677564708/">Visit the event page</a></p>
                    </div>
                </div>
            </li>

            <li style="background: url(images/slider/aboard.png); background-position: center; background-size: cover;">
                <div class="content">
                    <div class="text">
                        <h2>Apply for Appointed Board</h2>
                        <br/>

                        <p>Make a difference in the club and an even bigger difference in the community by applying to be on board!
                            As a member of board, the future of our club is in YOUR hands!</p>

                        <p><a
                                    target="_blank"
                                    href="http://bit.ly/ucsdckiaboardapp">Download the application</a></p>
                    </div>
                </div>
            </li>

        </ul>
    </div>

    <div id="content">
        <div id="main">
            <ul class="week">
                <li class="featured">
                    <h5>Featured</h5>

                    <p class="title">Alpha Project Food Distribution</p>

                    <p class="date">February 22</p>

                    <p class="info">
                        The Alpha Project is a nonprofit, human services organization that serves over 4,000 men, women, and
                        children each day. We will assist them by serving dinner to the homeless!
                    </p>
                </li>
                @foreach ($days as $day => $events)
                    <li>
                        <h5>{{$day}}</h5>
                        <ul>
                            @foreach ($events as $event)
                            <li>
                                <p class="title"><a href="#">{{ $event->title }}</a></p>

                                <p class="date">
                                    {{ $event->start_time->format('g:iA \\t\\o ')}}
                                    {{ $event->end_time->format('g:iA') }}
                                </p>
                            </li>
                                @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>

            <h2>Announcements</h2>

            <div id="announcements">
                @foreach ($posts as $post)
                <article>
                    <h3>{{ $post->title }}</h3>

                    <p class="date">{{ $post->created_at->format('l, F n, Y') }}</p>

                    <p>
                        {!! $post->content !!}
                    </p>
                </article>
                @endforeach
            </div>

        </div>

        <div id="sidebar">
            <div>
                @if (Auth::check())
                <h2>Welcome, {{ Auth::user()->first_name }}!</h2>
                @else
                <h2>Welcome!</h2>

                <p>
                    If you have account, please <a href="#">login</a>. If you do not, you are invited to <a
                            href="#">register</a>!
                </p>
                @endif
            </div>
            <button ui-sref="membership" class="pulse-repeat red">Become a Member</button>
            <br/>
            <br/>
            <a class="button red" href="http://bit.ly/ucsdckiaboardapp" target="_blank">Apply for Appointed Board</a>

            <h2 style="margin-top: 10px;">Social Media</h2>

            <div class="social-media">
                <a href="https://facebook.com/ucsdcirclek"><i class="fa fa-3x fa-facebook-square"></i></a>
                <a href="http://instagram.com/ucsdcirclek"><i class="fa fa-3x fa-instagram"></i></a>
                <a href="http://ucsdcirclek.tumblr.com/"><i class="fa fa-3x fa-tumblr-square"></i></a>
            </div>

            <br/>

            <a class="twitter-timeline" href="https://twitter.com/UCSDCircleK" data-widget-id="562119802261495808">Tweets by
                @UCSDCircleK</a>
            <script>!function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + "://platform.twitter.com/widgets.js";
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, "script", "twitter-wjs");</script>
        </div>
    </div>
@endsection
