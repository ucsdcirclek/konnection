<div class="cerf-selection">
    <div class="wrapper">
        <h1>{{ $title  }}</h1>

        <div class="selection-subsection">

            <div class="section-sidebar">
                <p>{{ $message }}</p>
            </div>

            <div class="selection-table">

                @foreach ($cerfs as $cerf)
                    <a href="{{ action('CerfsController@show', [$cerf->id]) }}">
                        <div class="selection-cell {{ $color }}">

                            <div class="avatar small">
                                <img src="{{ $cerf->reporter->avatar->url() }}">
                                <small>Reported by: {{ $cerf->reporter->first_name }}</small>
                            </div>

                            <div class="cerf-description">
                                <p>CERF for: <strong>{{ $cerf->event->title }}</strong></p>
                                <small>Occured on {{ $cerf->event->end_time->setTimezone('America/Los_Angeles')->format('l, F j, Y') }}</small>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>