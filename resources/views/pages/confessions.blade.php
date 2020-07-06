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
     -webkit-overflow-scrolling:touch; 
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



<<<<<<< HEAD

   <div class="wrapper" > 
     <div class="myIframe" > 
          <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd78-0NLUtVLGpGrqD_Aa03ysAaWIpRQJfRbmsMOduXhLPeJA/viewform" style= height:100%;width:100%;></iframe>
      </div> 
       <!-- style= height:800px;width:1000px; -->
  </div> 
=======
    <div class="wrapper">
        <div class="title-wrapper">
          <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd78-0NLUtVLGpGrqD_Aa03ysAaWIpRQJfRbmsMOduXhLPeJA/viewform"
                  style="height:100%;width:100%;min-height:800px;"></iframe>
        </div>
    </div>
>>>>>>> d4e935957fdd4aa4223f797f4ca2cd8d53fb7b45
@endsection
