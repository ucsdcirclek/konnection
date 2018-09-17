@extends('layouts.master')

@section('title')
    Contact
@endsection

    <style>
     p.descr{
         white-space: pre-line;
     }

     p.big{
         line-height: 200%;
     }

     .countdown {
         text-align: center;
     }

     * {
         box-sizing:border-box
     }

     /* Slideshow container */
     .slideshow-container {
         max-width: 1000px;
         position: relative;
         margin: auto;
     }

     /* Hide the images by default */
     .mySlides {
         display: none;
     }

     /* Next & previous buttons */
     .prev, .next {
         cursor: pointer;
         position: absolute;
         top: 50%;
         width: auto;
         margin-top: -22px;
         padding: 16px;
         color: black;
         font-weight: bold;
         font-size: 18px;
         transition: 0.6s ease;
         border-radius: 0 3px 3px 0;
     }

     /* Position the "next button" to the right */
     .next {
         right: 0;
         border-radius: 3px 0 0 3px;
     }

     /* On hover, add a black background color with a little bit see-through */
     .prev:hover, .next:hover {
         background-color: rgba(0,0,0,0.8);
     }

     /* Caption text */
     .text {
         color: #f2f2f2;
         font-size: 1.5em;
         padding: 8px 12px;
         position: absolute;
         bottom: 8px;
         width: 60%;
         left: 20%;
         text-align: center;
         background-color: #4A3F81;
     }

     /* Number text (1/4 etc) */
     .numbertext {
         color: #f2f2f2;
         font-size: 18px;
         padding: 8px 12px;
         position: absolute;
         top: 0;
     }

     /* The dots/bullets/indicators */
     .dot {
         cursor: pointer;
         height: 15px;
         width: 15px;
         margin: 0 2px;
         background-color: #bbb;
         border-radius: 50%;
         display: inline-block;
         transition: background-color 0.6s ease;
     }

     .active, .dot:hover {
         background-color: #717171;
     }

     /* Fading animation */
     .fade {
         -webkit-animation-name: fade;
         -webkit-animation-duration: 1.5s;
         animation-name: fade;
         animation-duration: 1.5s;
     }

     @-webkit-keyframes fade {
         from {opacity: .4}
         to {opacity: 1}
     }

     @keyframes fade {
         from {opacity: .4}
         to {opacity: 1}
     }
    </style>

@section('content')
    @include('layouts.header', array('headerTitle' => 'Family System'))

    <div class="title-wrapper">
        <h1 class="title">A Home Away From Home</h1>
    </div>

    <!-----------------------Slideshow-------------------------->

    <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
        <div style="text-align: center">

            <div class="mySlides fade">
                <img src="<?= asset('images/family/famHeads.jpg') ?>"  style="width:60%">
                <div class="text">Family Heads 2017-2018</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= asset('images/family/gAang.jpg') ?>" style="width:60%">
                <div class="text">GAang GAang</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= asset('images/family/hood.jpg') ?>" style="width:60%">
                <div class="text">Hundred Acre Hood</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= asset('images/family/koopaTroopa.jpg') ?>"  style="width:60%">
                <div class="text">Koopa Troopa</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= asset('images/family/tbt.jpg') ?>"  style="width:60%">
                <div class="text">#TBT</div>
            </div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>


    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>

    <!-----------------------Countdown Timer-------------------------->

    <div class="countdown">
        <h1>Countdown to New Member Install</h1>
        <h2 id="counter"></h2>
    </div>

  <div class="wrapper">
	
    <br>
    <br>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis semper nisi, vel posuere tellus. Nunc consectetur
        libero eu erat consequat, eget congue tortor hendrerit. Maecenas vitae ullamcorper ex. Mauris faucibus neque ut tellus
        faucibus, in dictum sem efficitur. Etiam consectetur vulputate arcu mattis placerat. Integer placerat mi sit amet iaculis
        euismod. Aliquam dapibus lacus sit amet turpis lacinia, nec rutrum nisi rhoncus. Pellentesque luctus quis risus a euismod.
        Vivamus a quam tempor, consectetur purus id, gravida tortor. Vivamus a justo eu ligula tristique pretium ut ut ex.
        Proin ac gravida ligula, eget auctor mi. Integer vel massa tincidunt, congue lectus sed, semper ex. Fusce tincidunt
        risus vel faucibus mattis. Aliquam ut arcu lacinia, placerat ex pellentesque, vehicula risus. Morbi congue nec tellus
        ut elementum. Suspendisse interdum odio non feugiat luctus.

    Vestibulum lobortis rutrum sem, eu pellentesque purus facilisis sit amet. Pellentesque dui sapien, scelerisque ut erat sed,
        suscipit consequat tellus. Proin justo mi, varius quis rhoncus et, aliquam a ipsum. Vestibulum et ipsum placerat, consectetur
        orci eu, sollicitudin ex. Morbi blandit est nec sodales sagittis. Vivamus euismod egestas arcu, id mollis orci porttitor eleifend.
        Praesent leo enim, laoreet quis ullamcorper id, eleifend eu diam. Vestibulum sed lorem egestas, accumsan nunc vel, mollis orci.
    </p>

    <br>
    <br>

            <div class="title-wrapper">
                <h1 class="title">2018-2019 Families Theme: Blast to the Past</h1>
            </div>

    <div class="contact-row">
        <div>
            <img src="https://i.imgur.com/oOEaEqe.png" />
            <a href="{{ url('familysystem/family1') }}"><p><strong>Koopa Troopa</strong></p></a>
        </div>
        <div>
            <img src="https://i.imgur.com/oOEaEqe.png" />
            <a href="{{ url('familysystem/family2') }}"><p><strong>GAang GAang</strong></p></a>
        </div>
    </div>

    <div class="contact-row">
        <div>
            <img src="https://i.imgur.com/oOEaEqe.png" />
            <a href="{{ url('familysystem/family3') }}"><p><strong>#TBT</strong></p></a>
        </div>
        <div>
            <img src=" https://i.imgur.com/oOEaEqe.png   " />
            <a href="{{ url('familysystem/family4') }}"><p><strong>Hundred Acre Hood</strong></p></a>
        </div>
    </div>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis semper nisi, vel posuere tellus. Nunc consectetur
          libero eu erat consequat, eget congue tortor hendrerit. Maecenas vitae ullamcorper ex. Mauris faucibus neque ut tellus
          faucibus, in dictum sem efficitur. Etiam consectetur vulputate arcu mattis placerat. Integer placerat mi sit amet iaculis
          euismod. Aliquam dapibus lacus sit amet turpis lacinia, nec rutrum nisi rhoncus. Pellentesque luctus quis risus a euismod.
      </p>

    <div align="center">
        <br><br>
        <a class="button" href="">APPLY NOW!</a>
        <br><br><br></div>
        <div align="center">
    </div>

    <div class="title-wrapper">
        <h1 class="title">Benefits:</h1>
    </div>


    <div class="contact-row">
        <div>
            <img src="https://i.imgur.com/oOEaEqe.png" />
        </div>
        <div>
            <img src="https://i.imgur.com/oOEaEqe.png" />
        </div>
        <div>
            <img src="https://i.imgur.com/oOEaEqe.png" />
        </div>
    </div>

    </div>
@endsection

