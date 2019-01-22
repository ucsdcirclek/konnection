@extends('layouts.master')

@section('title')
    Gallery
@endsection

@section('content')
    @include('layouts.header', array('headerTitle' => 'Welcome to the Gallery!'))
    <div id="Introduction">

        <!--Changes Needed: Turn pictures into hyperlinks. Change pictures.-->

        <p></p>
        <div class="center">
            <div class="header">
                <p>"Sometimes you will never know the value of a <strong>moment</strong> until it becomes a <strong>memory</strong>."</p>
                <p>- Theodor Seuss Geisel</p>
            </div>
            <h2>2017-2018 Yearly Recap</h2>
            <p>Look back on a year of service, leadership, and fellowship</p>
        </div>
        <p></p>
        <div class="center">
            <iframe width="100%" height="600" src="https://www.youtube.com/embed/GAK95gmbTyE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <p></p>

            <div class="title-wrapper">
                @include('layouts.header', array('headerTitle' => 'Newsletters'))
            </div>
            <p>Read personal accounts of our events from our members!</p>
            <p style="line-height: 2px"><strong>(Full screen for best experience)</strong></p>
            <br/>
            <h3>Winter 2018</h3>
            <iframe src="https://e.issuu.com/anonymous-embed.html?u=ucsdckinewsletter&d=su_18_newsletter" width="100%" height="500" frameborder="0" allowfullscreen="true"></iframe>

            <br/>
            <h2>Photo Archive</h2>
        <p><strong>Revisit</strong> memories from <strong>current</strong> and <strong>previous</strong> years!</p>
        </div>
    </div>

        <div class="center">
            <a target="_blank" href="https://www.flickr.com/photos/ucsdckigallery/albums" style="color:white">
                <button>Spring 2017 (Flickr Album)</button></a>
            <a target="_blank" href="https://drive.google.com/drive/u/1/folders/12PjqPRyRPLRGc2MHYW1kLk1IXerwNLlL" style="color:white">
                <button>Google Drive 2018-2019</button></a>
            <a target="_blank" href="https://www.youtube.com/watch?v=nZR4B8V0R2o&list=PLauQJNb_35oy9ZCA15GqgYgiyTp2Gv1bo" style="color:white">
                <button>2018-2019 Weekly Recap Videos</button></a>
        </div>

    <p></p>

    <head>

        <style>

            @media only screen and (max-width: 500px) {
                .header{
                    background-image: url('/images/calmsky.jpg') !important;
                    position: center !important;
                    border-radius: 25px !important;
                    width: 440px !important;
                    border: 5px solid skyblue !important;
                    padding: 15px !important;
                    margin: 15px !important;
                    font-size: 150% !important;
                    line-height: 90% !important;
                    color: white !important;
                }
            }

            .header{
                background-image: url('/images/calmsky.jpg');
                position: center;
                border-radius: 25px;
                width: 1025px;
                border: 5px solid skyblue;
                padding: 15px;
                margin: 25px;
                font-size: 150%;
                line-height: 80%;
                color: white;
            }
            .center {
                text-align: center;
            }

            .btn-group{
                margin: 0 auto;
                left:20%;
                position:relative;
                target-new:tab;
            }

            .container {
                position: relative;
                float: left;
                width: 33.3%;
                margin-bottom: 16px;
                padding: 0 8px;
            }
            .image {
                display: table;
                width: 100%;
                height: auto;
            }
            .overlay {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                height: 100%;
                width: 100%;
                opacity: 0;
                transition: .5s ease;
                background-color: #00071d;
            }
            .container:hover .overlay {
                opacity: .85;
            }
            .text {
                color: white;
                font-size: 35px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
            }

        </style>
@endsection
