@extends('layouts.master')

@section('title', 'Home')

@section('description')
    Established in 1977, Circle K International at UCSD is a community service organization offering service, social and leadership opportunities.
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

    <div id="social-media-column">
        <div class="facebook-box"><a href="#"><i class="fa fa-2x fa-facebook"></i></a></div>
        <div class="tumblr-box"><a href="#"><i class="fa fa-2x fa-tumblr"></i></a></div>
        <div class="instagram-box"><a href="#"><i class="fa fa-2x fa-instagram"></i></a></div>
        <div class="twitter-box"><a href="#"><i class="fa fa-2x fa-twitter"></i></a></div>
    </div>

    <div id="content">
        <div id="week-view">
            <ul class="week">
                <li class="featured">
                    <h5>Featured</h5>

                    <p class="title">Triton 5K</p>

                    <p class="date">June 6</p>

                    <p class="info">
                      Help out at the annual Triton 5K! The Triton 5K is a 3.1-mile race around campus, ending at the Track and
                      Field stadium where there will be a festival with food vendors, live entertainment, and the annual Junior
                      Triton Run.
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

    </div>
@endsection
