@extends('layouts.master')

@section('title')
    Contact
@endsection

@section('content')
    @include('layouts.header', array('headerTitle' => 'Family System'))

    <style>
     p.descr{
         white-space: pre-line;
     }

     p.big{
         line-height: 200%;
     }

    </style>
    
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

    <div class="wrapper">
        <div class="title-wrapper">
            <h1 class="title">A Home Away From Home</h1>
	</div>




   <div class="member-row" style="width: 100% %">



                                <div id="slideshow">
                                    <div>
                                        <img src="https://i.imgur.com/iH9URcZ.jpg" />
                                    </div>
                                    <div>
                                        <img src="https://i.imgur.com/bqJ06og.jpg" />
                                    </div>
                                    <div>
                                        <img src=" https://i.imgur.com/12kbu7K.jpg" />
                                    </div>
                                    <div>
                                        <img src=" https://i.imgur.com/WMKkTnr.jpg  " />
                                    </div>
				</div>

</div>
	
<br>
<br>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis semper nisi, vel posuere tellus. Nunc consectetur libero eu erat consequat, eget congue tortor hendrerit. Maecenas vitae ullamcorper ex. Mauris faucibus neque ut tellus faucibus, in dictum sem efficitur. Etiam consectetur vulputate arcu mattis placerat. Integer placerat mi sit amet iaculis euismod. Aliquam dapibus lacus sit amet turpis lacinia, nec rutrum nisi rhoncus. Pellentesque luctus quis risus a euismod. Vivamus a quam tempor, consectetur purus id, gravida tortor. Vivamus a justo eu ligula tristique pretium ut ut ex. Proin ac gravida ligula, eget auctor mi. Integer vel massa tincidunt, congue lectus sed, semper ex. Fusce tincidunt risus vel faucibus mattis. Aliquam ut arcu lacinia, placerat ex pellentesque, vehicula risus. Morbi congue nec tellus ut elementum. Suspendisse interdum odio non feugiat luctus.

Vestibulum lobortis rutrum sem, eu pellentesque purus facilisis sit amet. Pellentesque dui sapien, scelerisque ut erat sed, suscipit consequat tellus. Proin justo mi, varius quis rhoncus et, aliquam a ipsum. Vestibulum et ipsum placerat, consectetur orci eu, sollicitudin ex. Morbi blandit est nec sodales sagittis. Vivamus euismod egestas arcu, id mollis orci porttitor eleifend. Praesent leo enim, laoreet quis ullamcorper id, eleifend eu diam. Vestibulum sed lorem egestas, accumsan nunc vel, mollis orci.
</p>

<br>
<br>

        <div class="title-wrapper">
            <h1 class="title">2018-2019 Families Theme: Blast to the Past</h1>
	</div>




<div class="contact-row">
            <div>
                <img src="https://i.imgur.com/oOEaEqe.png" />
                <p><strong>Koopa Troopa</strong></p>
            </div>
            <div>
                <img src="https://i.imgur.com/oOEaEqe.png" />
                <p><strong>GAang GAang</strong></p>
            </div>
      </div>
        <div class="contact-row">
            <div>
                <img src="https://i.imgur.com/oOEaEqe.png" />
                <p><strong>#TBT</strong></p>
            </div>
            <div>
                <img src=" https://i.imgur.com/oOEaEqe.png   " />
                <p><strong>Hundred Acre Hood</strong></p>
            </div>
           
        </div>








<div align="center">
<br><br>
<a class="button" href="">APPLY NOW!</a>
<br><br><br></div>



<div align="center">


<iframe src="http://free.timeanddate.com/countdown/i6exmpj7/n137/cf100/cm0/cu4/ct0/cs0/ca0/co1/cr0/ss0/cac000/cpc000/pct/tcfff/fs200/szw448/szh189/tatFamily%20Reveal%20Countdown/tac000/tptTime%20since%20Event%20started%20in/tpc000/iso2018-11-14T00:00:00" allowTransparency="true" frameborder="0" width="448" height="189"></iframe>
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
    Families
@endsection

