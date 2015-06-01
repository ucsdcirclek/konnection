@extends('layouts.master')

@section('title')
    Membership
@endsection

@section('content')
    <div id="about" class="wrapper">
        <h1>Become a Member</h1><br />
        <p>We're really excited that you've decided to become a part of UCSD Circle K! To become a member,
            you only need to follow these simple steps:</p>

        <h2>Step 1: Complete the Membership Form</h2>
        <p>We'll need some basic information about you as well as some interesting points about you to sort you into one
            of the three families this year. Just download the form, fill it out and turn it in!</p>
        <a class="button" target="_blank" href="/api/uploads/Membership%20Form%202014-2015.pdf">Download the Form</a>

        <br />

        <h2>Step 2: Submit your Dues</h2>
        <p>Membership for the year costs only $40.
            <strong>Turn this amount in check/cash along with your membership form.</strong>
            Some of the benefits you'll receive are:</p>
        <ul>
            <li>A free club t-shirt</li>
            <li>Free lunch on Fridays at Kiwanis Luncheon</li>
            <li>Free rides to all events</li>
            <li>You get to be sorted into a family!</li>
        </ul>

        <h2>Step 3: Submit the Above!</h2>
        <p>That's it! You just need to submit the membership form along with your dues and you are an official,
            dues paid member of UCSD Circle K! Your membership form and dues are due at the Week 3 GBM if you'd like to be
            sorted into a family by the New Member Installation.</p>

    </div>

@endsection
