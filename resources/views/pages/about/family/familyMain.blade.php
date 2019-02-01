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
                <img class="famSlideImg" src="<?= asset('images/family/famHeads18.jpg') ?>">
                <div class="famSlideText">Family Heads 2018-2019</div>
            </div>

            <div class="mySlides fade">
                <img class="famSlideImg" src="<?= asset('images/family/falcons.jpg') ?>">
                <div class="famSlideText">Millennial Falcons</div>
            </div>

            <div class="mySlides fade">
                <img class="famSlideImg" src="<?= asset('images/family/echo.jpg') ?>">
                <div class="famSlideText">E.C.H.O</div>
            </div>

            <div class="mySlides fade">
                <img class="famSlideImg" src="<?= asset('images/family/rocket.jpg') ?>">
                <div class="famSlideText">Team Rocket</div>
            </div>

            <div class="mySlides fade">
                <img class="famSlideImg" src="<?= asset('images/family/groot.jpg') ?>">
                <div class="famSlideText">I am Groot</div>
            </div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>


    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="famSlideDot active" onclick="currentSlide(1)"></span>
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
          <h2>Revisit New Member Install!</h2>
          <!--<h2 id="counter"></h2> -->
          <div align="center">
              <a class="button" href="https://drive.google.com/drive/folders/11lETpAwawk_FnPtoLeEe_Yc4aNKDxFKz" target="_blank" style="background-color:#1D1335">Photo Album</a>
          </div>
      </div>

    <!--

        <div class="title-wrapper">
            <h1 class="title">2018-2019 Families<br> Theme: Galaxy</h1>
        </div>

    <h4 style="text-align:center;">
        Individual family pages coming soon!
    </h4>

    <div class="wrapper">
        <div class="contact-row">
            <div>
                <img src="<?= asset('images/family/falcons.jpg') ?>">
                <h4><strong>Millennial Falcons</strong></h4>
            </div>
            <div>
                <img src="<?= asset('images/family/echo.jpg') ?>">
                <h4><strong>E.C.H.O</strong></h4>
            </div>
        </div>

        <div class="contact-row">
            <div>
                <img src="<?= asset('images/family/rocket.jpg') ?>">
                <h4><strong>Team Rocket</strong></h4>
            </div>
            <div>
                <img src="<?= asset('images/family/groot.jpg') ?>">
                <h4><strong>I am Groot</strong></h4>
            </div>
        </div>
    </div>

    -->
@endsection

