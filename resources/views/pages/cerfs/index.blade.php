@extends('layouts.master')

@section('title', 'CERFs')

@section('content')

    @include('layouts.header', array('headerTitle' => 'Club Event Report Forms'))

    @unless($pendingCerfs->isEmpty())
        <div>
            @include('pages.cerfs.partials.cerfselection', ['title' => 'Pending CERFs',
                                                        'message' => 'To the right are CERFs that are pending approval.',
                                                        'cerfs' => $pendingCerfs,
                                                        'color' => 'yellow'])
        </div>
    @else
        <div class="empty-section light-yellow">
            <h3>There are no pending CERFs.</h3>
        </div>
    @endunless

    @unless($approvedCerfs->isEmpty())
        <div class="gray">
            @include('pages.cerfs.partials.cerfselection', ['title' => 'Approved CERFs',
                                                        'message' => 'To the right are CERFs that have been recently approved!',
                                                        'cerfs' => $approvedCerfs,
                                                        'color' => 'green'])
        </div>
    @else
        <div class="empty-section light-green">
            <h3>There have not been any recently approved CERFs.</h3>
        </div>
    @endunless
@endsection