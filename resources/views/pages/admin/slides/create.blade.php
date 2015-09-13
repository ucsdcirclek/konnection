@extends('pages.admin.layout')

@section('admin-content')
    <div class="wrapper create-form">
        <h2>Create a Slide</h2>
        <br/>

        {!! Form::open(['action' => 'SlidesController@store', 'files' => true]) !!}

        <label for="title">Title</label>
        {!! Form::text('title') !!}

        <label for="body">Body</label>
        {!! Form::textarea('body', null, array('class'=>'editor')) !!}

        <label for="link">Link</label>
        {!! Form::url('link') !!}

        <label for="priority">Priority</label>
        {!! Form::number('priority') !!}

        <label for="image">Image</label>
        {!! Form::file('image') !!}

        <br/>
        <br/>

        {!! Form::submit('Create', ['class' => 'button']) !!}
        {!! Form::close() !!}
    </div>
@endsection