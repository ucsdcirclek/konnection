@extends('pages.admin.layout')

@section('admin-content')
    <div class="wrapper">
        <h2>Current Slides</h2>
        <br/>

        @if(Session::has('message'))
            <p>{{ Session::get('message') }}</p>
        @endif

        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Priority</th>
                    <th>Image</th>
                    <th>Delete</th>
                </tr>
            </thead>
            @foreach($slides as $slide)
                <tr>
                    <td>{{ $slide->title }}</td>
                    <td>{{ $slide->body }}</td>
                    <td>{{ $slide->priority }}</td>
                    <td><a href="{{ asset($slide->image->url()) }}" target="_blank">
                            {{ $slide->image->originalFileName() }}</a>
                    </td>
                    <td>
                        {!! Form::open(['action' => ['SlidesController@delete', $slide->id], 'method' => 'delete']) !!}
                        <button type="submit"><i class="fa fa-close"></i></button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection