@extends('layouts.master')

@section('title')
    SLSSP Committee
@endsection

<script>
    var r3 = 1;
    function change1617()
    {
        document.getElementById('background').style.backgroundImage="url('/images/Committees/SLSSP/SLSSPCover1617.jpg')";
        document.getElementById('title').innerHTML = "SLSSP Committee 2016-2017";

        document.getElementById('image1').src="{{ asset('images/Committees/SLSSP/Chloris.jpg') }}";
        document.getElementById('image2').src="{{ asset('images/Committees/SLSSP/Hannah.jpg') }}";
        document.getElementById('image3').src="{{ asset('images/Committees/SLSSP/Wendy.jpg') }}";
        document.getElementById('image4').src="{{ asset('images/Committees/SLSSP/Joanna.jpg') }}";
        document.getElementById('image5').src="{{ asset('images/Committees/SLSSP/Kenneth.jpg') }}";
        document.getElementById('image6').src="{{ asset('images/Committees/SLSSP/Matthew.jpg') }}";
        document.getElementById('image7').src="{{ asset('images/Committees/SLSSP/Justin.jpg') }}";
        document.getElementById('image8').src="{{ asset('images/Committees/SLSSP/Anh.jpg') }}";
        document.getElementById('image9').src="{{ asset('images/Committees/SLSSP/Nancy.jpg') }}";
        document.getElementById('image10').src="{{ asset('images/Committees/SLSSP/Shannon.jpg') }}";
        document.getElementById('name1').innerHTML = "Chloris Li";
        document.getElementById('name2').innerHTML = "Hannah Hwang";
        document.getElementById('name3').innerHTML = "Wendy Zang";
        document.getElementById('name4').innerHTML = "Joanna Lam";
        document.getElementById('name5').innerHTML = "Kenneth Truong";
        document.getElementById('name6').innerHTML = "Matthew Kawakami";
        document.getElementById('name7').innerHTML = "Justin Wu";
        document.getElementById('name8').innerHTML = "Anh Vo";
        document.getElementById('name9').innerHTML = "Nancy Huang";
        document.getElementById('name10').innerHTML = "Shannon Lee";

        document.getElementById('title3').innerHTML = "External Operations Chair";
        document.getElementById('title4').innerHTML = "Internal Operations Chair";
        document.getElementById('title8').innerHTML = "Finance Chair";
        document.getElementById('title9').innerHTML = "Public Relations Co-Chair";
        document.getElementById('title10').innerHTML = "Public Relations Co-Chair";

        document.getElementById('name1').style.fontWeight="bold";
        document.getElementById('name2').style.fontWeight="bold";
        document.getElementById('name3').style.fontWeight="bold";
        document.getElementById('name4').style.fontWeight="bold";
        document.getElementById('name5').style.fontWeight="bold";
        document.getElementById('name6').style.fontWeight="bold";
        document.getElementById('name7').style.fontWeight="bold";
        document.getElementById('name8').style.fontWeight="bold";
        document.getElementById('name9').style.fontWeight="bold";
        document.getElementById('name10').style.fontWeight="bold";


    }
    function change1718() {

        document.getElementById('background').style.backgroundImage="url('/images/Committees/SLSSP/SLSSPCovertemp2.jpg')";
        document.getElementById('title').innerHTML = "SLSSP Committee 2017-2018";


        document.getElementById('image1').src = "{{ asset('images/board/matthew.jpg') }}";
        document.getElementById('image2').src = "{{ asset('images/board/siobhan.jpg') }}";
        document.getElementById('image3').src = "{{ asset('images/Committees/SLSSP/Alyssa.jpg') }}";
        document.getElementById('image4').src = "{{ asset('images/Committees/SLSSP/Angela.jpg') }}";
        document.getElementById('image5').src = "{{ asset('images/Committees/SLSSP/Brent.jpg') }}";
        document.getElementById('image6').src = "{{ asset('images/Committees/SLSSP/Meghan.jpg') }}";
        document.getElementById('image7').src = "{{ asset('images/Committees/SLSSP/Jovonne.jpg') }}";
        document.getElementById('image8').src = "{{ asset('images/Committees/SLSSP/Victoria.jpg') }}";
        document.getElementById('image9').src = "{{ asset('images/Committees/SLSSP/Andrew.jpg') }}";
        document.getElementById('image10').src = "{{ asset('images/Committees/SLSSP/Jolene.jpg') }}";

        document.getElementById('name1').innerHTML = "Matthew Kawakami";
        document.getElementById('name2').innerHTML = "Siobhán Lin-Nugent";
        document.getElementById('name3').innerHTML = "Alyssa Lew";
        document.getElementById('name4').innerHTML = "Angela Pham";
        document.getElementById('name5').innerHTML = "Brent Min";
        document.getElementById('name6').innerHTML = "Meghan Hernandez";
        document.getElementById('name7').innerHTML = "Jovonne Lee";
        document.getElementById('name8').innerHTML = "Victoria Vu";
        document.getElementById('name9').innerHTML = "Andrew Vu";
        document.getElementById('name10').innerHTML = "Jolene Leung";

        document.getElementById('title3').innerHTML = "Operations Co-Chair";
        document.getElementById('title4').innerHTML = "Operations Co-Chair";
        document.getElementById('title8').innerHTML = "Public Relations Chair";
        document.getElementById('title9').innerHTML = "Finance Co-Chair";
        document.getElementById('title10').innerHTML = "Finance Co-Chair";

        document.getElementById('name1').style.fontWeight="bold";
        document.getElementById('name2').style.fontWeight="bold";
        document.getElementById('name3').style.fontWeight="bold";
        document.getElementById('name4').style.fontWeight="bold";
        document.getElementById('name5').style.fontWeight="bold";
        document.getElementById('name6').style.fontWeight="bold";
        document.getElementById('name7').style.fontWeight="bold";
        document.getElementById('name8').style.fontWeight="bold";
        document.getElementById('name9').style.fontWeight="bold";
        document.getElementById('name10').style.fontWeight="bold";

    }
</script>



@section('content')

    <div id="background" class="bigbanner" style="background-image: url('/images/Committees/SLSSP/SLSSPCovertemp2.jpg')">
        <div id="title" class="bigbannertext">
            SLSSP Committee 2017-2018
        </div>
    </div>

    <div class="message-box">
        <div class="title-wrapper">
            <p></p>
            <p></p>
            <h1 class="title">What is SLSSP Committee?</h1>
        </div>
        <p>The Single Large-Scale Service Project committee (SLSSP) is in charge of organizing and planning a one-day
            event in which members of UCSD Circle K and Paradise Division participate in multiple service projects to
            make a positive impact on the community. The purposes of SLSSP are to strengthen the service community within
            Circle K, expand the impact that UCSD Circle K has on its community, and promote leadership-based service
            within Circle K Committee.</p>
    </div>

    <div class="title-wrapper">
        <h1 class="title">Committee Members</h1>
    </div>

    <center>
        <div class="btn-group">
            <button onclick="change1718()">2017-2018</button>
            <button onclick="change1617()">2016-2017</button>
        </div>
        <center>


            <div id="rows">
                <div id="row1" class="contact-row">
                    <div>
                        <img id="image1" src="{{ asset('images/board/matthew.jpg') }}" />
                        <p id="name1"><strong>Matthew Kawakami</strong></p>
                        <p id="title1">SLSSP Committee Head</p>
                    </div>
                    <div>
                        <img id="image2" src="{{ asset('images/board/siobhan.jpg') }}" />
                        <p id="name2"><strong>Siobhán Lin-Nugent</strong></p>
                        <p id="title2">Executive Assistant</p>
                    </div>
                    <div>
                        <img id="image3" src="{{ asset('images/Committees/SLSSP/Alyssa.jpg') }}" />
                        <p id="name3"><strong>Alyssa Lew</strong></p>
                        <p id="title3">Operations Co-Chair</p>
                    </div>
                </div>
                <div id="row2" class="contact-row">
                    <div>
                        <img id="image4" src="{{ asset('images/Committees/SLSSP/Angela.jpg') }}" />
                        <p id="name4"><strong>Angela Pham</strong></p>
                        <p id="title4">Operations Co-Chair</p>
                    </div>
                    <div>
                        <img id="image5" src="{{ asset('images/Committees/SLSSP/Brent.jpg') }}" />
                        <p id="name5"><strong>Brent Min</strong></p>
                        <p id="title5">Recreations Co-Chair</p>
                    </div>
                    <div>
                        <img id="image6" src="{{ asset('images/Committees/SLSSP/Meghan.jpg') }}" />
                        <p id="name6"><strong>Meghan Hernandez</strong></p>
                        <p id="title6">Recreations Co-Chair</p>
                    </div>
                </div>

                <div id="row3" class="contact-row">
                    <div>
                        <img id="image7" src="{{ asset('images/Committees/SLSSP/Jovonne.jpg') }}" />
                        <p id="name7"><strong>Jovonne Lee</strong></p>
                        <p id="title7">DSI Ambassador</p>
                    </div>
                    <div>
                        <img id="image8" src="{{ asset('images/Committees/SLSSP/Victoria.jpg') }}" />
                        <p id="name8"><strong>Victoria Vu</strong></p>
                        <p id="title8">Public Relations Chair </p>
                    </div>
                    <div>
                        <img id="image9" src="{{ asset('images/Committees/SLSSP/Andrew.jpg') }}" />
                        <p id="name9"><strong>Andrew Vu</strong></p>
                        <p id="title9">Finance Co-Chair</p>
                    </div>
                </div>
                <div id="row4" class="contact-row">
                    <div>
                        <img id="image10" src="{{ asset('images/Committees/SLSSP/Jolene.jpg') }}" />
                        <p id="name10"><strong>Jolene Leung</strong></p>
                        <p id="title10">Finance Co-Chair</p>
                    </div>
                </div>
            </div>

            <!-- IN DEVELOPMENT (Mini Gallery)
            <div class="message-box">
            <div class="title-wrapper">
                <h1 class="title">Gallery</h1>
            </div>
                <div class="gallery">
                    <a target="_blank" href="images/committee.png">
                        <img src="images/committee.png" alt="Placeholder">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>
                <div class="gallery">
                    <a target="_blank" href="images/committee.png">
                        <img src="images/committee.png" alt="Placeholder">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>
                <div class="gallery">
                    <a target="_blank" href="images/committee.png">
                        <img src="images/committee.png" alt="Placeholder">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>
            </div>
            -->

@endsection
