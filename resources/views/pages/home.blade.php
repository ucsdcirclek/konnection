@extends('layouts.master')

@section('title')
    Home
@endsection

@section('content')
    <div class="slider">

      <div style="background: url(images/slider/spammusubi.jpg); background-position: center; background-size: cover">
          <div class="content">
              <div class="text">
                <h2>Spam Musubi Fundraiser</h2>
                <br/>
                <p>
                  Come help out at our quarterly spam musubi fundraiser! The fundraiser will be held Monday through
                  Thursday of finals week, and tasks include setting up, cooking, delivering, and cleaning up.
                </p>

                <p>
                  <a target="_blank" href="http://ucsdcki.org/events/super-study-spam-musubi-fundraiser">Visit the event page</a>
                </p>
              </div>
          </div>
      </div>

      <div style="background: url(images/slider/tech_team.png); background-position: right; background-size: contain; background-repeat: no-repeat; background-color: white; ">
            <div class="content">
                <div class="text">
                    <h2>Tech Team Applications</h2>
                    <br/>
                    <p>
                      Have some great ideas on how to improve this website? Looking to develop real-world technical skills? Join
                      the Tech Team! The Tech Team works to improve the visual elements and enhance the user experience of the
                      site. Prior experience is preferred.
                    </p>

                    <p>
                      <a target="_blank" href="http://bit.ly/UCSDCKITechTeamApp">Tech Team Application</a>
                    </p>
                </div>
            </div>
        </div>

    </div>

    <div id="content">
        <div id="main">
            <ul class="week">
                <li class="featured">
                    <h5>Featured</h5>

                    <p class="title">Triton 5K</p>

                    <p class="date">June 6</p>

                    <p class="info">
                      Help out at the annual Triton 5K! The Triton 5K is a 3.1-mile race around campus, ending at the Track and
                      Field stadium where there will be a festival with food vendors, live entertainment, and the annual Junior
                      Trition Run.
                    </p>
                </li>
                @foreach ($days as $day => $events)
                    <li>
                        <h5>{{$day}}</h5>
                        <ul>
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
                        </ul>
                    </li>
                @endforeach
            </ul>

            <h2>Announcements</h2>

            <div id="announcements">
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
            <a class="button red" href="{{ url('about/membership') }}">Become a Member</a>
            <br/>
            <br/>
            <a class="button red" href="http://bit.ly/UCSDCKITechTeamApp" target="_blank">Apply for the Tech Team</a>

            <h2 style="margin-top: 10px;">Social Media</h2>

            <div class="social-media">
                <a href="https://facebook.com/ucsdcirclek"><i class="fa fa-3x fa-facebook-square"></i></a>
                <a href="http://instagram.com/ucsdcirclek"><i class="fa fa-3x fa-instagram"></i></a>
                <a href="http://ucsdcirclek.tumblr.com/"><i class="fa fa-3x fa-tumblr-square"></i></a>
            </div>

            <br/>

            <a class="twitter-timeline" href="https://twitter.com/UCSDCircleK" data-widget-id="562119802261495808">Tweets
                by
                @UCSDCircleK</a>
            <script>!function (d, s, id) {
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
