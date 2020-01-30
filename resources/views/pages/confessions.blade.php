@extends('layouts.master')

@section('title')
    Confessions
@endsection

@section('content')
    @include('layouts.header', array('headerTitle' => 'Confessions!'))

  <!--   -->
<style>
  .myIframe {
     position: relative;
     padding-bottom: 65.25%;
     padding-top: 30px;
     height: 0;
     overflow: auto; 
     -webkit-overflow-scrolling:touch; //<<--- THIS IS THE KEY 
     border: solid black 1px;
} 
.myIframe iframe {
     position: absolute;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
}
</style>




   <div class="wrapper" > 
     <div class="myIframe" > 
          <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd78-0NLUtVLGpGrqD_Aa03ysAaWIpRQJfRbmsMOduXhLPeJA/viewform" style= height:100%;width:100%;></iframe>
      </div> 
       <!-- style= height:800px;width:1000px; -->
  </div> 
@endsection
