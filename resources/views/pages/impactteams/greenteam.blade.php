@extends('layouts.master')

@section('title')
    Green Team
@endsection

@section('content')

    <div id="background" class="bigbanner"
         style="background-image: url('/images/impactteams/greenteam/GreenTeamCover.jpg');background-repeat: no-repeat;">
        <div id="title" class="bigbannertext">
            Green Team
        </div>
    </div>

    <div class="message-box">
        <div class="title-wrapper">
            <p></p>
            <p></p>
            <h1 class="title">What is Green Team?</h1>
        </div>
        <p>"Every creature is better alive than dead, men and moose and pine trees, and he who understands it aright
            will rather preserve its life than destroy it." -David Thoreau
        </p>
        <p>
            Nature is all around us, in the air we breath,  in the eucalyptus groves around campus, in the ocean beside
            our school. There are over 2 million species of plants and animals that co-exist with us on this planet,
            however, urban development is negatively impacting and destroying countless species per day. Through Green
            San Diego, we aimed to teach our members and community about the importance of environmental protection.
        </p>

        <p>
            San Diego is known as a biodiversity hot spot. Not only is it a coastal area, but it also has canyons,
            mountains and river valleys. Green team worked to instill better attitudes towards environmentalism
            through invasive plant removal, restoration of native plants, and beautification of natural open spaces
            throughout San Diego County.
        </p>
    </div>

    <div class="title-wrapper">
        <h1 class="title">Impact Team Members</h1>
    </div>

    <div id="rows">
        <div id="row1" class="contact-row">
            <div>
                <img id="image1" src="{{ asset('images/impactteams/greenteam/Victoria.jpg') }}" />
                <p id="name1"><strong>Victoria Ortiz</strong></p>
                <p id="title1">Impact Team Head</p>
            </div>
            <div>
                <img id="image2" src="{{ asset('images/impactteams/greenteam/Julie.jpg') }}" />
                <p id="name2"><strong>Julie Shiozaki</strong></p>
                <p id="title2">Executive Assistant</p>
            </div>
            <div>
                <img id="image3" src="{{ asset('images/impactteams/greenteam/Alvaro.jpg') }}" />
                <p id="name3"><strong>Alvaro Mejia</strong></p>
                <p id="title3">Publicity Chair</p>
            </div>
        </div>

        <div id="row2" class="contact-row">
            <div>
                <img id="image4" src="{{ asset('images/impactteams/greenteam/John.jpg') }}" />
                <p id="name4"><strong>John Daniel Domine</strong></p>
                <p id="title4">External Relations Chair</p>
            </div>
            <div>
                <img id="image5" src="{{ asset('images/impactteams/greenteam/Alan.jpg') }}" />
                <p id="name5"><strong>Alan Bui</strong></p>
                <p id="title5">Volunteer Hospitality Chair</p>
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

