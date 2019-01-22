@extends('layouts.master')

@section('title')
    Family
@endsection

@section('content')
    @include('layouts.header', array('headerTitle' => 'Family System'))

    <!-----------------------Slideshow-------------------------->

    <div class="famSlideshowContainer">
        <!-- Full-width images with number and caption text -->
        <div style="text-align: center; margin: 5%;">

            <div class="mySlides fade">
                <img class="famSlideImg" src="<?= asset('images/family/famHeads.jpg') ?>">
                <div class="famSlideText">Family Heads 2017-2018</div>
            </div>

            <div class="mySlides fade">
                <img class="famSlideImg" src="<?= asset('images/family/gAang.jpg') ?>">
                <div class="famSlideText">GAang GAang</div>
            </div>

            <div class="mySlides fade">
                <img class="famSlideImg" src="<?= asset('images/family/hood.jpg') ?>">
                <div class="famSlideText">Hundred Acre Hood</div>
            </div>

            <div class="mySlides fade">
                <img class="famSlideImg" src="<?= asset('images/family/koopaTroopa.jpg') ?>">
                <div class="famSlideText">Koopa Troopa</div>
            </div>

            <div class="mySlides fade">
                <img class="famSlideImg" src="<?= asset('images/family/tbt.jpg') ?>">
                <div class="famSlideText">#TBT</div>
            </div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>


    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="famSlidedot" onclick="currentSlide(1)"></span>
        <span class="famSlideDot" onclick="currentSlide(2)"></span>
        <span class="famSlideDot" onclick="currentSlide(3)"></span>
        <span class="famSlideDot" onclick="currentSlide(4)"></span>
        <span class="famSlideDot" onclick="currentSlide(5)"></span>
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

      <div class="famCountdown coloredTile">
          <h1>Countdown to family reveal:</h1>
          <h2 id="counter"></h2>
          <div align="center">
              <a class="button" id="disabled">Sign up for NMI now!<br><br>(Coming Soon)</a>
          </div>
      </div>

        <div class="title-wrapper">
            <h1 class="title">2017-2018 Families<br> Theme: Blast to the Past</h1>
        </div>

    <h4 style="text-align:center;">
        Individual family pages coming soon!
    </h4>

    <div class="wrapper">
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
    </div>
@endsection

