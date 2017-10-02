@extends('layouts.master')

@section('title', 'Calendar')

@section('description')
    UCSD Circle K offers more than 10 events each week consisting of community service opportunities as well as social and professional development activities.
@endsection

<style>
    @media only screen and (max-width: 500px) {
        .mobile-text {
            font-size: 12px;
        }

        .mobile-text h2 {
            font-size: 14px;
        }
    }
</style>

@section('content')

    @include('layouts.header', array('headerTitle' => 'Calendar'))

  <div class="mobile-text">
    <div id="legend">
        <div class="types-table">

            @foreach($types as $name)
                <div>
                    <strong>{{ $name }}</strong>
                </div>
            @endforeach
        </div>
    </div>

    <div class="calendar"></div>
  </div>
@endsection
