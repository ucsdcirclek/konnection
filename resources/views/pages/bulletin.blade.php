@extends('layouts.master')

@section('title', 'Bulletin')

@section('content')

    @include('layouts.header', array('headerTitle' => 'Service Bulletin'))

    <div id="bulletin" class="wrapper">
        <p>
            <strong>Welcome to the service bulletin!</strong> This bulletin is
            a way to promote service events that cannot be placed on the
            calendar since events listed on the bulletin typically require the
            help of individuals rather than groups. These opportunities may
            require an application or orientation process, and are usually very
            interesting!
        </p>

        @if ($posts->isEmpty())
            <div class="empty-section">
                <h3>Unfortunately, there aren't any bulletin posts. Check back later!</h3>
            </div>
        @else
            <div class="announcements">
                @foreach ($posts as $post)
                    <article>
                        <h3 class="light-emphasis">{{ $post->title }}</h3>

                        <p class="date">{{ $post->created_at->setTimezone('America/Los_Angeles')->format('l, F j, Y') }}</p>

                        <p>
                            {!! $post->content !!}
                        </p>
                    </article>
                @endforeach
            </div>
        @endif
    </div>
@endsection