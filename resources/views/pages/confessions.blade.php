@extends('layouts.master')

@section('title')
    Confessions
@endsection

@section('content')
    @include('layouts.header', array('headerTitle' => 'Confessions!'))

    <style>
     p.descr{
         white-space: pre-line;
     }

     p.big{
         line-height: 200%;
     }

    </style>

    <div class="wrapper">
        <div class="title-wrapper">
          <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd78-0NLUtVLGpGrqD_Aa03ysAaWIpRQJfRbmsMOduXhLPeJA/viewform" style="height:800px;width:1000px;"></iframe>
        </div>

    </div>
@endsection
