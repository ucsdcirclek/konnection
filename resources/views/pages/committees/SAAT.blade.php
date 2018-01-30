@extends('layouts.master')

@section('title')
    SAAT Committee
@endsection

<script>
    var r3 = 0;
    function change1617()
    {
        document.getElementById('background').style.backgroundImage="url('/images/Committees/SAAT/SAATCovertemp.jpg')";
        document.getElementById('title').innerHTML = "SAAT Committee 2016-2017";


        document.getElementById('image1').src="{{ asset('images/Committees/SAAT/Jane.jpg') }}";
        document.getElementById('image2').src="{{ asset('images/Committees/SAAT/Hannah.jpg') }}";
        document.getElementById('image3').src="{{ asset('images/board/wesley.jpg') }}";
        document.getElementById('image4').src="{{ asset('images/Committees/SAAT/Kenneth.jpg') }}";
        document.getElementById('image5').src="{{ asset('images/Committees/SAAT/Samarth.jpg') }}";
        document.getElementById('image6').src="{{ asset('images/Committees/SAAT/Vivian.jpg') }}";
        document.getElementById('image7').src="{{ asset('images/Committees/SAAT/Nancy.jpg') }}";
        document.getElementById('image8').src="{{ asset('images/Committees/SAAT/Siobhan.jpg') }}";

        document.getElementById('name1').innerHTML = "Jane Wu";
        document.getElementById('name2').innerHTML = "Hannah Hwang";
        document.getElementById('name3').innerHTML = "Wesley Wu";
        document.getElementById('name4').innerHTML = "Kenneth Truong";
        document.getElementById('name5').innerHTML = "Samarth Aggarwal";
        document.getElementById('name6').innerHTML = "Vivian Sheen";
        document.getElementById('name7').innerHTML = "Nancy Huang";
        document.getElementById('name8').innerHTML = "Siobhán Lin-Nugent";

        document.getElementById('title3').innerHTML = "Co-Logistics Chair";
        document.getElementById('title4').innerHTML = "Co-Logistics Chair";
        document.getElementById('title5').innerHTML = "Publicity Chair";
        document.getElementById('title6').innerHTML = "Donations Chair";
        document.getElementById('title7').innerHTML = "Co-Event Chair";
        document.getElementById('title8').innerHTML = "Co-Event Chair";

        var name1 = document.getElementById('name1');
        var name2 = document.getElementById('name2');
        var name3 = document.getElementById('name3');
        var name4 = document.getElementById('name4');
        var name5 = document.getElementById('name5');
        var name6 = document.getElementById('name6');
        var name7 = document.getElementById('name7');
        var name8 = document.getElementById('name8');

        name1.style.fontWeight="bold";
        name2.style.fontWeight="bold";
        name3.style.fontWeight="bold";
        name4.style.fontWeight="bold";
        name5.style.fontWeight="bold";
        name6.style.fontWeight="bold";
        name7.style.fontWeight="bold";
        name8.style.fontWeight="bold";

    }
    function change1718() {

        var row3 = document.getElementById("row3");
        var nancy = row3.getElementsByTagName("div")[0];
        var siobhan = row3.getElementsByTagName("div")[1];
        if(r3 == 1) {
            row3.removeChild(nancy);
            row3.removeChild(siobhan);
            r3 = 0;
        }

        document.getElementById('background').style.backgroundImage="url('/images/Committees/SAAT/SAATCover1718.jpg')";
        document.getElementById('title').innerHTML = "SAAT Committee 2017-2018";

        document.getElementById('image1').src = "{{ asset('images/Committees/SAAT/Shannon.jpg') }}";
        document.getElementById('image2').src = "{{ asset('images/Committees/SAAT/Wesley.jpg') }}";
        document.getElementById('image3').src = "{{ asset('images/Committees/SAAT/Marne.jpg') }}";
        document.getElementById('image4').src = "{{ asset('images/Committees/SAAT/Kevin.jpg') }}";
        document.getElementById('image5').src = "{{ asset('images/Committees/SAAT/Ming.jpg') }}";
        document.getElementById('image6').src = "{{ asset('images/Committees/SAAT/Maricris.jpg') }}";
        document.getElementById('image7').src = "{{ asset('images/Committees/SAAT/Tamara.jpg') }}";
        document.getElementById('image8').src = "{{ asset('images/Committees/SAAT/Stephanie.jpg') }}";

        document.getElementById('name1').innerHTML = "Shannon Lee";
        document.getElementById('name2').innerHTML = "Wesley Wu";
        document.getElementById('name3').innerHTML = "Marné Amoguis";
        document.getElementById('name4').innerHTML = "Kevin Nguyen";
        document.getElementById('name5').innerHTML = "Minghua Ong";
        document.getElementById('name6').innerHTML = "Maricris Hernandez";
        document.getElementById('name7').innerHTML = "Tamara Kawa";
        document.getElementById('name8').innerHTML = "Stephanie Nguyen";

        document.getElementById('title3').innerHTML = "Logistics Chair";
        document.getElementById('title4').innerHTML = "Co-Donations Chair";
        document.getElementById('title5').innerHTML = "Co-Donations Chair";
        document.getElementById('title6').innerHTML = "Co-Education Chair";
        document.getElementById('title7').innerHTML = "Co-Education Chair";
        document.getElementById('title8').innerHTML = "Public Relations Chair";

        var name1 = document.getElementById('name1');
        var name2 = document.getElementById('name2');
        var name3 = document.getElementById('name3');
        var name4 = document.getElementById('name4');
        var name5 = document.getElementById('name5');
        var name6 = document.getElementById('name6');
        var name7 = document.getElementById('name7');
        var name8 = document.getElementById('name8');


        name1.style.fontWeight = "bold";
        name2.style.fontWeight = "bold";
        name3.style.fontWeight = "bold";
        name4.style.fontWeight = "bold";
        name5.style.fontWeight = "bold";
        name6.style.fontWeight = "bold";
        name7.style.fontWeight = "bold";
        name8.style.fontWeight = "bold";



    }
</script>



@section('content')

    <div id="background" class="bigbanner"
         style="background-image: url('/images/committees/SAAT/SAATCover1718.jpg');background-repeat: no-repeat;">
        <div id="title" class="bigbannertext">
            Key2College Committee 2017-2018
        </div>
    </div>

    <div class="message-box">
        <div class="title-wrapper">
            <p></p>
            <p></p>
            <h1 class="title">What is SAAT Committee?</h1>
        </div>
        <p>The Student Alliance Against Trafficking committee (SAAT) is in charge of hosting a Human Trafficking
            Awareness week on campus to increase visibility of this issue and equip peers to identify and protect
            against human trafficking in their communities. SAAT is part of a national network of student activists
            to combat human trafficking by amplifying awareness, encouraging advocacy and deterring related behaviors
            that contribute to human trafficking in the United States.
        </p>
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
                        <img id="image1" src="{{ asset('images/Committees/SAAT/Shannon.jpg') }}" />
                        <p id="name1"><strong>Shannon Lee</strong></p>
                        <p id="title1">SAAT Co-Chair</p>
                    </div>
                    <div>
                        <img id="image2" src="{{ asset('images/Committees/SAAT/Wesley.jpg') }}" />
                        <p id="name2"><strong>Wesley Wu</strong></p>
                        <p id="title2">SAAT Co-Chair</p>
                    </div>
                    <div>
                        <img id="image3" src="{{ asset('images/Committees/SAAT/Marne.jpg') }}" />
                        <p id="name3"><strong>Marné Amoguis</strong></p>
                        <p id="title3">Logisitics Chair</p>
                    </div>
                </div>

                <div id="row2" class="contact-row">
                    <div>
                        <img id="image4" src="{{ asset('images/Committees/SAAT/Kevin.jpg') }}" />
                        <p id="name4"><strong>Kevin Nguyen</strong></p>
                        <p id="title4">Co-Donations Chair</p>
                    </div>
                    <div>
                        <img id="image5" src="{{ asset('images/Committees/SAAT/Ming.jpg') }}" />
                        <p id="name5"><strong>Minghua Ong</strong></p>
                        <p id="title5">Co-Donations Chair</p>
                    </div>
                    <div>
                        <img id="image6" src="{{ asset('images/Committees/SAAT/Maricris.jpg') }}" />
                        <p id="name6"><strong>Maricris Hernandez</strong></p>
                        <p id="title6">Co-Education Chair</p>
                    </div>
                </div>
                <div id="row3" class="contact-row">
                    <div>
                        <img id="image7" src="{{ asset('images/Committees/SAAT/Tamara.jpg') }}" />
                        <p id="name7"><strong>Tamara Kawa</strong></p>
                        <p id="title7">Co-Education Chair</p>
                    </div>
                    <div>
                        <img id="image8" src="{{ asset('images/Committees/SAAT/Stephanie.jpg') }}" />
                        <p id="name8"><strong>Stephanie Nguyen</strong></p>
                        <p id="title8">Public Relations Chair</p>
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
