@extends('layouts.master')

@section('title')
    Key2College Committee
@endsection

<script>
    var r3 = 0;
    function change1617()
    {
        document.getElementById('background').style.backgroundImage="url('/images/Committees/Key2College/K2CCover.jpg')";
        document.getElementById('title').innerHTML = "Key2College Committee 2016-2017";

        if (r3 == 0) {
            var row3 = document.getElementById("row3");
            var newdiv1 = document.createElement("div");
            var newpic1 = document.createElement("img");
            var newname1 = document.createElement("p");
            var newtitle1 = document.createElement("p");
            newpic1.src = "{{ asset('images/Committees/Key2College/Nancy.jpg') }}";
            newname1.innerHTML = "Nancy Huang";
            newtitle1.innerHTML = "Donations Chair";
            row3.appendChild(newdiv1);
            newdiv1.appendChild(newpic1);
            newdiv1.appendChild(newname1);
            newdiv1.appendChild(newtitle1);
            newname1.style.fontWeight = "bold";
            r3 = 1;
        }

        document.getElementById('image1').src="{{ asset('images/Committees/Key2College/Jennifer.jpg') }}";
        document.getElementById('image2').src="{{ asset('images/Committees/Key2College/Louise.jpg') }}";
        document.getElementById('image3').src="{{ asset('images/Committees/Key2College/Stefanie.jpg') }}";
        document.getElementById('image4').src="{{ asset('images/Committees/Key2College/Michael.jpg') }}";
        document.getElementById('image5').src="{{ asset('images/Committees/Key2College/Ariel.jpg') }}";
        document.getElementById('image6').src="{{ asset('images/Committees/Key2College/Erica.jpg') }}";
        document.getElementById('image7').src="{{ asset('images/Committees/Key2College/Don.jpg') }}";
        document.getElementById('name1').innerHTML = "Jennifer Truong";
        document.getElementById('name2').innerHTML = "Louise Tolentino";
        document.getElementById('name3').innerHTML = "Stefanie Tonnu";
        document.getElementById('name4').innerHTML = "Michael Christenson";
        document.getElementById('name5').innerHTML = "Ariel Codilla";
        document.getElementById('name6').innerHTML = "Erica Wei";
        document.getElementById('name7').innerHTML = "Don Tran";
        document.getElementById('title2').innerHTML = "Co-Logistics Chair";
        document.getElementById('title3').innerHTML = "Co-Logistics Chair";
        document.getElementById('title4').innerHTML = "Programs Chair";
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
        var nancy = row3.getElementsByTagName("div")[1];
        if(r3 == 1) {
            row3.removeChild(nancy);
            r3 = 0;
        }

        document.getElementById('background').style.backgroundImage="url('/images/Committees/Key2College/K2CCovertemp.jpg')";
        document.getElementById('title').innerHTML = "Key2College Committee 2017-2018";

        document.getElementById('image1').src = "{{ asset('images/board/michael.jpg') }}";
        document.getElementById('image2').src = "{{ asset('images/Committees/Key2College/Donaji.jpg') }}";
        document.getElementById('image3').src = "{{ asset('images/halloffame/mr/mom/JoannaT.jpg') }}";
        document.getElementById('image4').src = "{{ asset('images/Committees/Key2College/Rowan.jpg') }}";
        document.getElementById('image5').src = "{{ asset('images/Committees/Key2College/Justin.jpg') }}";
        document.getElementById('image6').src = "{{ asset('images/halloffame/mr/mom/Aaron.jpg') }}";
        document.getElementById('image7').src = "{{ asset('images/Committees/Key2College/JustinD.jpg') }}";
        document.getElementById('name1').innerHTML = "Michael Christenson";
        document.getElementById('name2').innerHTML = "Donaji Rodriguez";
        document.getElementById('name3').innerHTML = "Joanna Truong";
        document.getElementById('name4').innerHTML = "Rowan Ustoy";
        document.getElementById('name5').innerHTML = "Justin Palor";
        document.getElementById('name6').innerHTML = "Aaron Zependa";
        document.getElementById('name7').innerHTML = "Justin Duong";
        document.getElementById('title2').innerHTML = "Logistics Chair";
        document.getElementById('title3').innerHTML = "Programs Chair";
        document.getElementById('title4').innerHTML = "Donations Chair";
        var name1 = document.getElementById('name1');
        var name2 = document.getElementById('name2');
        var name3 = document.getElementById('name3');
        var name4 = document.getElementById('name4');
        var name5 = document.getElementById('name5');
        var name6 = document.getElementById('name6');
        var name7 = document.getElementById('name7');

        name1.style.fontWeight = "bold";
        name2.style.fontWeight = "bold";
        name3.style.fontWeight = "bold";
        name4.style.fontWeight = "bold";
        name5.style.fontWeight = "bold";
        name6.style.fontWeight = "bold";
        name7.style.fontWeight = "bold";


    }
</script>



@section('content')

    <div id="background" class="bigbanner"
         style="background-image: url('/images/Committees/Key2College/K2CCovertemp.jpg');background-repeat: no-repeat;">
        <div id="title" class="bigbannertext">
            Key2College Committee 2017-2018
        </div>
    </div>

    <div class="message-box">
        <div class="title-wrapper">
            <p></p>
            <p></p>
            <h1 class="title">What is Key2College Committee?</h1>
        </div>
        <p>The Key2College Committee at UCSD Circle K organizes a day of workshops, entertainment, and campus tours for
            incoming college students, with the goal of making the transition into college life fun and easy. Key2College
            Committee also organizes a similar event called Key2Life for college students that prepares them for life
            beyond college.</p>
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
                        <img id="image1" src="{{ asset('images/board/michael.jpg') }}" />
                        <p id="name1"><strong>Michael Christenson</strong></p>
                        <p id="title1">Key2College Committee Head</p>
                    </div>
                    <div>
                        <img id="image2" src="{{ asset('images/Committees/Key2College/Donaji.jpg') }}" />
                        <p id="name2"><strong>Donaji Rodriguez</strong></p>
                        <p id="title2">Logisitcs Chair</p>
                    </div>
                    <div>
                        <img id="image3" src="{{ asset('images/halloffame/mr/mom/JoannaT.jpg') }}" />
                        <p id="name3"><strong>Joanna Truong</strong></p>
                        <p id="title3">Programs Chair</p>
                    </div>
                </div>

                <div id="row2" class="contact-row">
                    <div>
                        <img id="image4" src="{{ asset('images/Committees/Key2College/Rowan.jpg') }}" />
                        <p id="name4"><strong>Rowan Ustoy</strong></p>
                        <p id="title4">Donations Chair</p>
                    </div>
                    <div>
                        <img id="image5" src="{{ asset('images/Committees/Key2College/Justin.jpg') }}" />
                        <p id="name5"><strong>Justin Palor</strong></p>
                        <p id="title5">Publicity Chair</p>
                    </div>
                    <div>
                        <img id="image6" src="{{ asset('images/halloffame/mr/mom/Aaron.jpg') }}" />
                        <p id="name6"><strong>Aaron Zepeda</strong></p>
                        <p id="title6">Key2Life Chair</p>
                    </div>
                </div>
                <div id="row3" class="contact-row">
                    <div>
                        <img id="image7" src="{{ asset('images/Committees/Key2College/JustinD.jpg') }}" />
                        <p id="name7"><strong>Justin Duong</strong></p>
                        <p id="title7">Entertainment Chair</p>
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
