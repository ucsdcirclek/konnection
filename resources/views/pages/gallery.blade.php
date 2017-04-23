@extends('layouts.master')

@section('title')
    Gallery
@endsection

<style>
    body, html {
        height: 100%;
        margin: 0;
    }

    .bgimg {
        background-image: url('/images/collage.jpg');
        height:100%;
        background-position: center bottom;
        background-size: contain;
        position: relative;
        font-family: "Courier New", Courier, monospace;
        font-size: 25px;
    }

    .middle {
        position: absolute;
        top:50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    n{
        color: yellow;
        -webkit-text-fill-color: yellow; /* Will override color (regardless of order) */
        -webkit-text-stroke-width: 1px;
        -webkit-text-stroke-color: black;
        font-size: 200%;
    }
    hr {
        margin: auto;
        width: 0%;
    }

    p{
        color: skyblue;
        -webkit-text-fill-color: skyblue; /* Will override color (regardless of order) */
        -webkit-text-stroke-width: 1px;
        -webkit-text-stroke-color: black;
        font-size: 150%;
    }
</style>

@section('content')
    @include('layouts.header', array('headerTitle' => 'Welcome to the UCSD CKI Gallery!'))
    <div class="bgimg">
        <body>
        <div class="middle">
            <n><strong>COMING SOON!</strong></n>
            <hr>
            <p><strong>Revisit your favorite memory with the new upcoming gallery page!</strong></p>
        </div>
        </body>
    </div>
@endsection
