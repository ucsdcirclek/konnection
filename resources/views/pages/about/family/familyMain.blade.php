@extends('layouts.master')

@section('title')
    Family
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
         width: 100%;
         border-radius:0;
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
         color: #4A3F81;
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
         background-color: #BDB3DB;
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
         background-color: #4A3F81;
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

    <!-----------------------Slideshow-------------------------->

    <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
        <div style="text-align: center; margin: 5%;">

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
        <span class="dot" onclick="currentSlide(5)"></span>
    </div>


    <div class="wrapper">
        <div class="title-wrapper">
            <h1 class="title">A Home Away From Home</h1>
        </div>
        <p>
            The family system is one of the most successful member-retention programs in UCSD Circle K. The family system creates
            opportunities for club members to make new friends and memories with others. Family members will be paired based on their
            responses on their membership application, allowing for extra compatibility.
        </p>
        <p>
            Families in UCSD Circle K hold socials, inter-family competitions, service events, have their own cheers, and much more!
            Find out which family you will be sorted into at this year's New Member Install!
        </p>
    </div>

    <!-----------------------Countdown Timer-------------------------->

      <div class="countdown coloredTile">
          <h1>Countdown to family reveal:</h1>
          <h2 id="counter"></h2>
          <div align="center">
              <a class="button" id="disabled">Sign up for NMI now!<br><br>(Coming Soon)</a>
          </div>
      </div>

            <div class="title-wrapper">
                <h1 class="title">2018-2019 Families<br> Theme: Blast to the Past</h1>
            </div>

    <div class="contact-row">
        <div>
            <img src="<?= asset('images/family/ktHeads.jpg') ?>">
            <h4><strong>Koopa Troopa</strong></h4>
        </div>
        <div>
            <img src="<?= asset('images/family/ggHeads.jpg') ?>">
            <h4><strong>GAang GAang</strong></h4>
        </div>
    </div>

    <div class="contact-row">
        <div>
            <img src="<?= asset('images/family/tbtHeads.jpg') ?>">
           <h4><strong>#TBT</strong></h4>
        </div>
        <div>
            <img src="<?= asset('images/family/hoodHeads.jpg') ?>">
            <h4><strong>Hundred Acre Hood</strong></h4>
        </div>
    </div>

      <p style="text-align:center;">
          Individual family pages coming soon!
      </p>
@endsection

