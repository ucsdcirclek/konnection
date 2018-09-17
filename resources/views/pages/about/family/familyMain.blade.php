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

    <script>
        // Tracks current slide image to display
        var slideIndex = 1;
        showSlides(slideIndex);


        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            // Set array of slides
            var slides = document.getElementsByClassName("mySlides");

            // Set the array of dots on bottom of slideshow
            var dots = document.getElementsByClassName("dot");

            // Resets slideIndex to beginning if at final pic
            if (n > slides.length) {slideIndex = 1}

            // Sets slideIndex to final pic if going prev at start pic
            if (n < 1) {slideIndex = slides.length}

            // Displays the images
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            // Displays correct dot corresponding to the slideshow pic
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }

            //Displays current slide image and active dot
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        }
    </script>

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Oct 27, 2018 15:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get todays date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="counter"
            document.getElementById("counter").innerHTML = days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";

            // Message to display once countdown is finished
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("counter").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
@endsection

