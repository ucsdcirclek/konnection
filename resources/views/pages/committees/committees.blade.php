@extends('layouts.master')

@section('title')
    Committees
@endsection

@section('content')
    @include('layouts.header', array('headerTitle' => 'Committees'))

        <div class="commbox"> <!-- contains the entire row--> <!-- MBall committee -->
            <div class="picture_container"> <!-- puts the picture in a box-->
                <img class src="{{ asset('images/Committees/MBall/MBallCover1819.jpg') }}" alt="Avatar">
            </div>
            <div class="textbox"> <!-- box for adding a description-->
                <!-- <a href="{{ url('masquerade') }}"></a> -->
                    <h2>Masquerade Ball Committee</h2>

                <!--<h6 style="color:green">Status: ACTIVE</h6> <!-- use this to specify whether or not the committee is active -->
                
                <h6 style="color:gray">Status: INACTIVE</h6>
                <!--<h6 style="color:darkcyan">Status: ACCEPTING APPLICATIONS (until 10/31/17)</h6>-->
                <!--<h6 style="color:gray">Status: INACTIVE</h6>-->

                <p></p>
                <p>The Masquerade Ball Committee works together to host UCSD CKI's largest fundraiser!</p>
                <!-- <a href="{{ url('masquerade') }}" style="color:white">  </a>-->
                <a id="disabled" class="button">
                    Learn More
                </a>   

                <a id="disabled" class="button">
                    Apply
                </a>
            </div>
        </div>

        <div class="commbox"> <!-- SLSSP Committee -->
            <div class="picture_container">
                <img class src="{{ asset('images/Committees/SLSSP/SLSSPThumb17182.jpg') }}" alt="Avatar">
            </div>
            <div class="textbox">
               <!-- <a href="{{ url('SLSSP') }}"></a> -->
                    <h2>SLSSP Committee</h2>

                <!--<h6 style="color:green">Status: ACTIVE</h6>-->
                <h6 style="color:gray">Status: INACTIVE</h6>
                <!--<h6 style="color:gray">Status: INACTIVE</h6> -->


                <p></p>
                <p>The Single Large Scale Service Project Committee organizes a full day of service that accommodates for
                    the Paradise Division.</p>
               <!-- <a href="{{ url('SLSSP') }}"></a> -->
                   
               <a id="disabled" class="button">
                    Learn More
                </a>  
                
                <!-- Application-->
                <!--href="https://docs.google.com/document/d/1ZpD1nq598Xh73avxwSBJCMTTSbxHKGyS141npbLe3jQ/edit"
                   target="_blank"-->
                
                <a id="disabled" class="button">
                    Apply
                </a>
            </div>
        </div>

        <div class="commbox"> <!-- UCSD CKI Tech Team -->
            <div class="picture_container">
                <img class src="{{ asset('images/Committees/TechTeam/TTCover2.jpg') }}" alt="Avatar">
            </div>
            <div class="textbox">
              <!--  <a href="{{ url('TechTeam') }}"></a> -->
                    <h2>UCSD CKI Tech Team</h2>

                <h6 style="color:green">Status: ACTIVE</h6>
               <!-- <h6 style="color:darkcyan">Status: ACCEPTING APPLICATIONS (until 4/18/18)</h6> -->
                <!-- <h6 style="color:gray">Status: INACTIVE</h6> -->

                <p></p>
                <p>UCSD CKI's tech team works to maintain and improve the club website.</p>
              <!--  <a href={{ url('TechTeam') }}></a> -->
              <a id="disabled" class="button">
                    Learn More
                </a>  
                
                <a id="disabled" class="button">
                    Apply
                </a>
            </div>
        </div>

        <div class="commbox"> <!-- Key2college -->
            <div class="picture_container">
                <img class src="{{ asset('images/Committees/Key2College/K2CThumb1718.jpg') }}" alt="Avatar">
            </div>
            <div class="textbox">
              <!--  <a href="{{ url('Key2College') }}"></a> -->
                    <h2>Key2College Committee</h2>

                <!--<h6 style="color:green">Status: ACTIVE</h6>-->
                <!--<h6 style="color:darkcyan">Status: ACCEPTING APPLICATIONS (until 10/31/17)</h6>-->
                <h6 style="color:green">Status: ACTIVE</h6>

                <p></p>
                <p>The Key2College Committee at UCSD Circle K organizes a day of workshops, entertainment,
                    and campus tours for incoming college students, with the goal of making the transition into college life fun and easy.
                </p>
             <!--   <a href="{{ url('Key2College') }}"></a> -->
             <a id="disabled" class="button">
                    Learn More
                </a>  
                
                <a id="disabled" class="button">
                    Apply
                </a>
            </div>
        </div>

        <div class="commbox"> <!-- SAAT Committee -->
            <div class="picture_container">
                <img class src="{{ asset('images/Committees/SAAT/SAATThumb1718.JPG') }}" alt="Avatar">
            </div>
            <div class="textbox">
               <!-- <a href="{{ url('SAAT') }}"></a> -->
                    <h2>UCSD CKI Student Alliance Against Trafficking (SAAT)</h2>

                <!--<h6 style="color:green">Status: ACTIVE</h6>-->
                <h6 style="color:green">Status: ACTIVE</h6>
                <!--<h6 style="color:gray">Status: INACTIVE</h6> -->

                <p></p>
                <p>The SAAT Committee fights to increase awareness on human trafficking through several events.</p>
               <!-- <a href="{{ url('SAAT') }}"></a> -->
               <a id="disabled" class="button">
                    Learn More
                </a>  
                <a id="disabled" class="button">
                    Apply
                </a>
            </div>
        </div>

        <div class="commbox"> <!-- LSFP Committee -->
            <div class="picture_container">
                <img class src="{{ asset('images/Committees/LSFP/LSFP1718Thumb2.jpg') }}" alt="Avatar">
            </div>
            <div class="textbox">
               <!-- <a href="{{ url('LSFP') }}"></a> -->
                    <h2>Large Scale Fundraising Project Committee (LSFP)</h2>

                <!--<h6 style="color:green">Status: ACTIVE</h6>-->
                <!--<h6 style="color:darkcyan">Status: ACCEPTING APPLICATIONS (until 10/31/17)</h6>-->
                <h6 style="color:green">Status: ACTIVE</h6>


                <p></p>
                <p>The LSFP Committee is in charge of hosting a large-scale fundraiser that is aimed towards
                    the District Fundraising Initiatives.</p>
               <!-- <a href="{{ url('LSFP') }}"></a> -->
               <a id="disabled" class="button">
                    Learn More 
                </a>
                <a class="button" id="disabled">
                    Apply
                </a>
            </div>
        </div>

@endsection
