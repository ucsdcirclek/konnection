@extends('pages.admin.layout')

@section('admin-content')
    <div class="wrapper create-form">
        <h2>Create a Post</h2>
        <br/>

        {!! Form::open(['action' => 'PostsController@store']) !!}

        <label for="title">Title</label>
        {!! Form::text('title') !!}

        <label for="category_id">Category</label>
        {!! Form::select('category_id', $categories) !!}

        <label for="content">Body</label>
        {!! Form::textarea('content', null, array('class'=>'editor')) !!}

        <br/>
        <br/>

        {!! Form::submit('Create', ['class' => 'button']) !!}
        {!! Form::close() !!}
    </div>
@endsection