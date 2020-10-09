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
          <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd78-0NLUtVLGpGrqD_Aa03ysAaWIpRQJfRbmsMOduXhLPeJA/viewform"
                  style="height:100%;width:100%;min-height:800px;"></iframe>
        </div>
    </div>
    <div class="wrapper">
        <div class="title-wrapper">
          <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdmDXFaPcWjtOGIJsb3GSrHloy5IwgYDW5r5_30CJQkKHbpUg/viewform"
                  style="height:100%;width:100%;min-height:800px;"></iframe>
        </div>
    </div>
@endsection
