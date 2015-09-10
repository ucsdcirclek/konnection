@extends('layouts.master')

@section('title', 'Create CERF')

@section('content')

    @include('layouts.header', array('headerTitle' => 'Club Event Report Forms'))

    <div id="event-tags-section">
        @include('errors.errors')

        {!! Form::open(['action' => 'TagsController@store']) !!}

        <div class="wrapper">
            <h3>Event Tags</h3>

            <p class="section-instructions">
                All Circle K events fall into one of three categories: service, administration, and/or social. These
                three categories correspond to our three tenets: service, leadership, and fellowship. Depending on the
                nature of the event, members who attend the event can get service hours, administrative hours, social
                hours, or a combination of the three.
            </p>

            <div class="tags-table">
                <div class="tags-table-header">
                    <h4>Service</h4>

                    <small>
                        Any service event that receives service hours should be tagged as CO, but depending on the
                        nature of the event, the event can be tagged with the other service tags.
                    </small>
                </div>

                @foreach ($service_tags as $tag)
                    <div class="tags-content-row">
                        <div>{!! Form::checkbox('service_tags[]', $tag->abbreviation) !!}</div>
                        <div><p>{{ $tag->name }} ({{ $tag->abbreviation }})</p></div>
                        <div><p>{{ $tag->description }}</p></div>
                    </div>
                @endforeach
            </div>

            <div class="tags-table">
                <div class="tags-table-header">
                    <h4>Leadership</h4>

                    <small>
                        Any event related to the operation of the club should be tagged as AD. Examples of
                        administrative events include – but are not limited to - attending meetings (e.g.) board
                        meetings, committee meetings, Kiwanis meetings, tabling, and workshops.
                    </small>
                </div>

                @foreach ($admin_tags as $tag)
                    <div class="tags-content-row">
                        <div>{!! Form::checkbox('admin_tags[]', $tag->abbreviation) !!}</div>
                        <div><p>{{ $tag->name }} ({{ $tag->abbreviation }})</p></div>
                        <div><p>{{ $tag->description }}</p></div>
                    </div>
                @endforeach
            </div>

            <div class="tags-table">
                <div class="tags-table-header">
                    <h4>Fellowship</h4>

                    <small>
                        Any event in which club members are socially interacting with each other should be tagged as
                        SE. A social event promotes the morale of its members so it is usually tagged as MD; however,
                        remember that although all SE events are MD tagged, not all MD events are SE tagged (e.g.
                        workshops).
                    </small>
                </div>

                @foreach ($social_tags as $tag)
                    <div class="tags-content-row">
                        <div>{!! Form::checkbox('social_tags[]', $tag->abbreviation) !!}</div>
                        <div><p>{{ $tag->name }} ({{ $tag->abbreviation }})</p></div>
                        <div><p>{{ $tag->description }}</p></div>
                    </div>
                @endforeach
            </div>

            <div class="tags-table">
                <div class="tags-table-header">
                    <h4>Miscellaneous</h4>

                    <small>
                        Miscellaneous tags are supplementary. Remember that all events have to fall in one of the above
                        three categories before getting a supplementary tag.
                    </small>
                </div>

                @foreach ($misc_tags as $tag)
                    <div class="tags-content-row">
                        <div>{!! Form::checkbox('misc_tags[]', $tag->abbreviation) !!}</div>
                        <div><p>{{ $tag->name }} ({{ $tag->abbreviation }})</p></div>
                        <div><p>{{ $tag->description }}</p></div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="continue-form">
            <div class="wrapper">
                {!! Form::submit('Continue') !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
