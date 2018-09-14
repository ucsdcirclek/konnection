@extends('layouts.master')

@section('title')
    Membership
@endsection

@section('content')

    @include('layouts.header', array('headerTitle' => 'Membership'))

    <div class="wrapper" align="center">
        <h1 id="guideHeader">Not sure where to start?</h1>

        <div class="guestColumn">
            <h2>Service and Chill</h2>
            <p>Whether you're looking for a fun way to meet people on a day off or a community to serve, we've got you covered
                with a variety of social and service events for you to try out!
            <br>
            <br>
                <strong>Select a calendar event and click "guest signup" to try out our events!</strong>
            </p>
            <a href="{{ url('masquerade') }}">
                <button>Calendar</button>
            </a>
        </div>
        <div class="guestColumn">
            <h2>Meet us at our GBMs</h2>
            <p>Check out our general body meetings to find out more about our community. Interact with new and old members, participate
                in challenges, win prizes, and get updates on what we have planned!
            <br>
            <br>
                <strong>GBMs occur every monday at 8pm. Weekly GBM locations will be posted on our Facebook page.</strong>
            </p>
            <a href="{{ url('masquerade') }}">
                <button>Social Media</button>
            </a>
        </div>

        <div class="coloredTile">
            <h2>Ready to join?</h2>
            <h4>Becoming an official member is as easy as 1-2-3</h4>

            <div class="membershipRow">
                <div>
                    <i class="fas fa-file-signature"></i>
                    <h4>Application</h4>
                    <p>Follow the link below to fill out our online application.</p>
                    <a href="{{ url('masquerade') }}">
                        <button class="cardBtn">Apply</button>
                    </a>
                </div>
                <div>
                    <i class="fas fa-box"></i>
                    <h4>Membership Dues</h4>
                    <p>Dues cost $45 for the 2018-2019 school year. You will receive numerous benefits such as free rides to events, a free t-shirt,
                    and the opportunity to be sorted into a family!
                    </p>
                    <a href="{{ url('masquerade') }}">
                        <button class="cardBtn">Pay Dues</button>
                    </a>
                </div>
                <div>
                    <i class="fas fa-shuttle-van"></i>
                    <h4>CST</h4>
                    <p>Community Service Transportation (CST) will provide free rides to all our service events in the San Diego area. Just fill out their form and
                    you're ready to go!</p>
                    <a href="{{ url('masquerade') }}">
                        <button class="cardBtn">CST Page</button>
                    </a>
                </div>
            </div>
        </div>

        <h2>Website account</h2>
        <h4>Sign up for events in just a few clicks!</h4>

    </div>

    <!--<div id="about" class="wrapper">
        <h1>Become a Member</h1><br />
        <p>We're really excited that you've decided to become a part of UCSD Circle K! To become a member,
            you only need to follow these simple steps:</p>

        <h2>Step 1: Complete the Membership Form!</h2>
        <p>We'll need some basic information about you as well as some interesting points about you to sort you into a
         family this year. Just fill out this form and submit it!</p>

            <a class="button" target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSfdRhGeUtIXZ8I3tbiWcxmyX34WG1enXThVdFRCf9WlBe736A/viewform">Membership Application</a>

        <br />

        <h2>Step 2: Submit your Dues!</h2>
        <p>Membership for the year costs only $45.
            <strong>Turn this amount in check (payable to UCSD Circle K)/cash/Venmo (UCSDCircleK).</strong>
            Some of the benefits you'll receive are:</p>
       <!-- <p>Membership for spring quarter is <strong>completely free!</strong></p>
        <p>All dues paid members will recieve:</p>

       <ul>
            <li>A free club t-shirt</li>
            <li>Free lunch on Fridays at Kiwanis Luncheon</li>
            <li>Free rides to all events</li>
            <li>The opportunity to be sorted into a family!</li>
        </ul>

        <h2>Step 3: Submit the Above!</h2>
        <p>That's it! You just need to submit the membership form along with your dues and you are an official,
            dues paid member of UCSD Circle K! Your membership form and dues are due at the Week 3 GBM if you'd like to be
            sorted into a family by the New Member Installation.</p>

        <h2>Step 4: Register for CST!</h2>
        <p>A lot of our service events are held off campus, and we use CST (Community Service Transportation)
            to shuttle members to and from events! Look out for a presentation at the Week 3 GBM or click below for information!</p>

            <a class="button" target="_blank" href="https://students.ucsd.edu/student-life/involvement/community/local-ongoing-service/cstvans/orientation.html">CST Page</a>

    </div> -->

@endsection
