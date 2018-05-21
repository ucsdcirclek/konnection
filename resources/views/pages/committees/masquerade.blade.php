@extends('layouts.master')

@section('title')
    Masquerade Ball Committee
@endsection

<script>
    var r3 = 1;
    function change1617()
    {
        document.getElementById('background').style.backgroundImage="url('/images/Committees/MBall/MballCover16172.jpg')";
        document.getElementById('title').innerHTML = "Masquerade Ball Committee 2016-2017";

        var row3 = document.getElementById("row3");
        var jason = row3.getElementsByTagName("div")[0];
        var jane = row3.getElementsByTagName("div")[1];
        var hannah = row3.getElementsByTagName("div")[2];
        if(r3 == 1) {
            row3.removeChild(jason);
            row3.removeChild(jane);
            row3.removeChild(hannah);
            r3 = 0;
        }
        document.getElementById('image1').src="{{ asset('images/Committees/MBall/Joseph.jpg') }}";
        document.getElementById('image2').src="{{ asset('images/Committees/MBall/Gene.jpg') }}";
        document.getElementById('image3').src="{{ asset('images/Committees/MBall/Emilie.jpg') }}";
        document.getElementById('image4').src="{{ asset('images/Committees/MBall/Esther.jpg') }}";
        document.getElementById('image5').src="{{ asset('images/Committees/MBall/Seth.jpg') }}";
        document.getElementById('image6').src="{{ asset('images/Committees/MBall/Aaron.jpg') }}";
        document.getElementById('name1').innerHTML = "Joseph Le";
        document.getElementById('name2').innerHTML = "Gene He";
        document.getElementById('name3').innerHTML = "Emilie Shen";
        document.getElementById('name4').innerHTML = "Esther Wang";
        document.getElementById('name5').innerHTML = "Seth Negron";
        document.getElementById('name6').innerHTML = "Aaron Deng";
        document.getElementById('title2').innerHTML = "Operations Coordinator";
        document.getElementById('title3').innerHTML = "Publicity Coordinator";
        document.getElementById('title5').innerHTML = "Finance Coordinator";
        document.getElementById('title6').innerHTML = "Program Coordinator";
        var name1 = document.getElementById('name1');
        var name2 = document.getElementById('name2');
        var name3 = document.getElementById('name3');
        var name4 = document.getElementById('name4');
        var name5 = document.getElementById('name5');
        var name6 = document.getElementById('name6');
        name1.style.fontWeight="bold";
        name2.style.fontWeight="bold";
        name3.style.fontWeight="bold";
        name4.style.fontWeight="bold";
        name5.style.fontWeight="bold";
        name6.style.fontWeight="bold";
    }
    function change1718() {

        document.getElementById('background').style.backgroundImage="url('/images/Committees/MBall/MballCover17182.jpg')";
        document.getElementById('title').innerHTML = "Masquerade Ball Committee 2017-2018";

        document.getElementById('image1').src = "{{ asset('images/Committees/MBall/Michelle.jpg') }}";
        document.getElementById('image2').src = "{{ asset('images/Committees/MBall/Tiffany.jpg') }}";
        document.getElementById('image3').src = "{{ asset('images/Committees/MBall/Helen.jpg') }}";
        document.getElementById('image4').src = "{{ asset('images/Committees/MBall/Alexandra.jpg') }}";
        document.getElementById('image5').src = "{{ asset('images/Committees/MBall/Chloris.jpg') }}";
        document.getElementById('image6').src = "{{ asset('images/Committees/MBall/Diana.jpg') }}";
        document.getElementById('name1').innerHTML = "Michelle Cang";
        document.getElementById('name2').innerHTML = "Tiffany Ngyuen";
        document.getElementById('name3').innerHTML = "Helen Thio";
        document.getElementById('name4').innerHTML = "Alexandra Wei";
        document.getElementById('name5').innerHTML = "Chloris Li";
        document.getElementById('name6').innerHTML = "Diana Thai";
        document.getElementById('title2').innerHTML = "Administrative";
        document.getElementById('title3').innerHTML = "Logisitics";
        document.getElementById('title5').innerHTML = "Marketing";
        document.getElementById('title6').innerHTML = "Programs";
        var name1 = document.getElementById('name1');
        var name2 = document.getElementById('name2');
        var name3 = document.getElementById('name3');
        var name4 = document.getElementById('name4');
        var name5 = document.getElementById('name5');
        var name6 = document.getElementById('name6');
        name1.style.fontWeight = "bold";
        name2.style.fontWeight = "bold";
        name3.style.fontWeight = "bold";
        name4.style.fontWeight = "bold";
        name5.style.fontWeight = "bold";
        name6.style.fontWeight = "bold";
        if (r3 == 0) {
            var row3 = document.getElementById("row3");
            var newdiv1 = document.createElement("div");
            var newpic1 = document.createElement("img");
            var newname1 = document.createElement("p");
            var newtitle1 = document.createElement("p");
            newpic1.src = "{{ asset('images/Committees/MBall/Jason.jpg') }}";
            newname1.innerHTML = "Jason Liu";
            newtitle1.innerHTML = "External Relations";
            row3.appendChild(newdiv1);
            newdiv1.appendChild(newpic1);
            newdiv1.appendChild(newname1);
            newdiv1.appendChild(newtitle1);
            var newdiv2 = document.createElement("div");
            var newpic2 = document.createElement("img");
            var newname2 = document.createElement("p");
            var newtitle2 = document.createElement("p");
            newpic2.src = "{{ asset('images/Committees/MBall/Jane.jpg') }}";
            newname2.innerHTML = "Jane Wu";
            newtitle2.innerHTML = "Finance";
            row3.appendChild(newdiv2);
            newdiv2.appendChild(newpic2);
            newdiv2.appendChild(newname2);
            newdiv2.appendChild(newtitle2);
            var newdiv3 = document.createElement("div");
            var newpic3 = document.createElement("img");
            var newname3 = document.createElement("p");
            var newtitle3 = document.createElement("p");
            newpic3.src = "{{ asset('images/Committees/MBall/Hannah.jpg') }}";
            newname3.innerHTML = "Hannah Hwang";
            newtitle3.innerHTML = "Finance";
            row3.appendChild(newdiv3);
            newdiv3.appendChild(newpic3);
            newdiv3.appendChild(newname3);
            newdiv3.appendChild(newtitle3);
            newname1.style.fontWeight = "bold";
            newname2.style.fontWeight = "bold";
            newname3.style.fontWeight = "bold";
            r3 = 1;
        }
    }
</script>



@section('content')

    <div id="background" class="bigbanner" style="background-image: url('/images/Committees/MBall/MBallCover1819.jpg')">
        <div id="title" class="bigbannertext">
            Masquerade Ball Committee 2018-2019
        </div>
    </div>

    <div class="message-box">
        <div class="title-wrapper">
            <p></p>
            <p></p>
            <h1 class="title">What is Masquerade Ball Committee?</h1>
        </div>
        <p>Masquerade Ball Committee(Mball Committee) is in charge of planning UC San Diego's Circle K's biggest hosted
            event, Masquerade Ball. Masquerade Ball attracts over 800 attendees from all over UCSD and our Cal-Nev-Ha
            district. Over the past two decades, Masquerade Ball have raised thousands of dollars each year for our
            different District Fundraising Initiatives (DFIs).</p>
    </div>

    <div class="title-wrapper">
        <h1 class="title">Committee Members</h1>
    </div>

    <!--<center>
        <div class="btn-group">
            <button onclick="change1718()">2017-2018</button>
            <button onclick="change1617()">2016-2017</button>
        </div>
        <center> -->

    <div id="rows">
        <div id="row1" class="contact-row">
            <div>
                <img id="image1" src="{{ asset('images/Committees/MBall/Anh.jpg') }}" />
                <p id="name1"><strong>Anh Vo</strong></p>
                <p id="title1">Masquerade Ball Chair</p>
                <p>mball@ucsdcki.org</p>
            </div>
            <div>
                <img id="image2" src="{{ asset('images/Committees/MBall/WesleyMBall.jpg') }}" />
                <p id="name2"><strong>Wesley Wu</strong></p>
                <p id="title2">Operations Director</p>
                <p>mball.operations@ucsdcki.org</p>
            </div>
            <div>
                <img id="image3" src="{{ asset('images/Committees/MBall/Lisa.jpg') }}" />
                <p id="name3"><strong>Lisa Ton</strong></p>
                <p id="title3">Programs Coordinator</p>
                <p>mball.program@ucsdcki.org</p>
            </div>
        </div>

        <div id="row2" class="contact-row">
            <div>
                <img id="image4" src="{{ asset('images/Committees/MBall/AlyssaG.jpg') }}" />
                <p id="name4"><strong>Alyssa Granados</strong></p>
                <p id="title4">Creative Director</p>
                <p>mball.creative@ucsdcki.org</p>
            </div>
            <div>
                <img id="image5" src="{{ asset('images/Committees/MBall/WesY.jpg') }}" />
                <p id="name5"><strong>Wes-Yuen</strong></p>
                <p id="title5">Co-Marketing Director</p>
                <p>mball.publicity@ucsdcki.org</p>
            </div>
            <div>
                <img id="image6" src="{{ asset('images/Committees/MBall/AaronZ.jpg') }}" />
                <p id="name6"><strong>Aaron Zepeda</strong></p>
                <p id="title6">Co-Marketing Director</p>
                <p>mball.publicity@ucsdcki.org</p>
            </div>
        </div>

        <div id="row3" class="contact-row">
            <div>
                <img id="image7" src="{{ asset('images/Committees/MBall/Allyson.jpg') }}" />
                <p id="name7"><strong>Allyson Luong</strong></p>
                <p id="title7">DFI Operations Chair</p>
                <p>mball.operations@ucsdcki.org</p>
            </div>
            <div>
                <img id="image8" src="{{ asset('images/Committees/MBall/Renelle.jpg') }}" />
                <p id="name8"><strong>Renelle Gadon</strong></p>
                <p id="title8">Co-Finance Coordinator</p>
                <p>mball.finance@ucsdcki.org</p>
            </div>
            <div>
                <img id="image9" src="{{ asset('images/Committees/MBall/Elaine.jpg') }}" />
                <p id="name9"><strong>Elaine Dai</strong></p>
                <p id="title9">Co-Finance Coordinator</p>
                <p>mball.finance@ucsdcki.org</p>
            </div>
        </div>
    </div>


            <!--<div id="rows">
                <div id="row1" class="contact-row">
                    <div>
                        <img id="image1" src="{{ asset('images/Committees/MBall/Michelle.jpg') }}" />
                        <p id="name1"><strong>Michelle Cang</strong></p>
                        <p id="title1">Masquerade Ball Chair</p>
                    </div>
                    <div>
                        <img id="image2" src="{{ asset('images/Committees/MBall/Tiffany.jpg') }}" />
                        <p id="name2"><strong>Tiffany Nguyen</strong></p>
                        <p id="title2">Administrative</p>
                    </div>
                    <div>
                        <img id="image3" src="{{ asset('images/Committees/MBall/Helen.jpg') }}" />
                        <p id="name3"><strong>Helen Thio</strong></p>
                        <p id="title3">Logisitics</p>
                    </div>
                </div>

                <div id="row2" class="contact-row">
                    <div>
                        <img id="image4" src="{{ asset('images/Committees/MBall/Alexandra.jpg') }}" />
                        <p id="name4"><strong>Alexandra Wei</strong></p>
                        <p id="title4">Creative Director</p>
                    </div>
                    <div>
                        <img id="image5" src="{{ asset('images/Committees/MBall/Chloris.jpg') }}" />
                        <p id="name5"><strong>Chloris Li</strong></p>
                        <p id="title5">Marketing</p>
                    </div>
                    <div>
                        <img id="image6" src="{{ asset('images/Committees/MBall/Diana.jpg') }}" />
                        <p id="name6"><strong>Diana Thai</strong></p>
                        <p id="title6">Programs</p>
                    </div>
                </div>

                <div id="row3" class="contact-row">
                    <div>
                        <img id="image7" src="{{ asset('images/Committees/MBall/Jason.jpg') }}" />
                        <p id="name7"><strong>Jason Liu</strong></p>
                        <p id="title7">External Relations</p>
                    </div>
                    <div>
                        <img id="image8" src="{{ asset('images/Committees/MBall/Jane.jpg') }}" />
                        <p id="name8"><strong>Jane Wu</strong></p>
                        <p id="title8">Finance</p>
                    </div>
                    <div>
                        <img id="image9" src="{{ asset('images/Committees/MBall/Hannah.jpg') }}" />
                        <p id="name9"><strong>Hannah Hwang</strong></p>
                        <p id="title9">Finance</p>
                    </div>
                </div>
            </div> -->

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
