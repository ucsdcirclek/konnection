@extends('layouts.master')

@section('title')
    Families
@endsection

@section('content')

    <ul>
        <li><a href="{{ url('familysystem/family1') }}">Koopa Troopa</a></li>
        <li><a href="{{ url('familysystem/family2') }}">GAang GAang</a></li>
        <li><a href="{{ url('familysystem/family3') }}">#TBT</a></li>
        <li><a href="{{ url('familysystem/family4') }}">Hundred Acre HOOD</a></li>
    </ul>

    <!-----------------------Slideshow-------------------------->

    <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
        <div style="text-align: center">
            <div class="mySlides fade">
                <div class="numbertext">1 / 4</div>
                <img src="<?= asset('images/family/BlessUp.jpg') ?>" style="width:100%">
                <div class="text">Bless Up</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 4</div>
                <img src="<?= asset('images/family/Experiment858.jpg') ?>" style="width:100%">
                <div class="text">Experiment 858</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 4</div>
                <img src="<?= asset('images/family/SquirtleSquad.jpg') ?>"  style="width:100%">
                <div class="text">Squirtle Squad</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 4</div>
                <img src="<?= asset('images/family/Tumbleweed.jpg') ?>"  style="width:100%">
                <div class="text">Tumbleweed</div>
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

    <style>
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
            color: white;
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
            font-size: 40px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
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


    <!-----------------------Countdown Timer-------------------------->

    <div class="countdown">
        <h1>The Countdown</h1>
        <p id="counter"></p>
    </div>

    <style>
        .countdown {
            text-align: center;
        }
    </style>

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

