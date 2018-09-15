@extends('layouts.master')

@section('title')
    Membership
@endsection

<style>
    .fa-check {
        color: green
    }

     td:first-child {
        text-align: left;
    }

    th:first-child {
        text-align:left;
    }
</style>

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
            <a href="{{ url('/events') }}" target="_blank">
                <button class="guestBtn">Calendar</button>
            </a>
        </div>
        <div class="guestColumn">
            <h2>Meet us at our GBMs</h2>
            <p>Check out our general body meetings to find out more about our community. Interact with new and old members, participate
                in challenges, win prizes, and get updates on what we have planned!
            <br>
            <br>
                <strong>GBMs occur every Monday at 8pm. Weekly GBM locations will be posted on our Facebook page.</strong>
            </p>
            <a href="https://www.facebook.com/groups/ucsdcki/?fb_dtsg_ag=Adz1EgK7XA76Cj2-JuHh7NGADg6YkNoSdC6Fi-_c2StWYQ%3AAdwftY_gwFHRQPeeCnjzN98F0dbW8ya3FcDm9J0ZbTW7OA"
            target="_blank">
                <button class="guestBtn">Social Media</button>
            </a>
        </div>

        <div class="coloredTile">
            <h2>Ready to join?</h2>
            <h4>Becoming an official member is as easy as 1-2-3</h4>

            <div class="membershipRow">
                <div>
                    <i class="fas fa-file-signature"></i>
                    <h4>Application</h4>
                    <p>Follow the link below to fill out our online application. The information will be used to sort you into a <strong>family!</strong></p>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfdRhGeUtIXZ8I3tbiWcxmyX34WG1enXThVdFRCf9WlBe736A/viewform" target="_blank">
                        <button class="cardBtn">Apply</button>
                    </a>
                </div>
                <div>
                    <i class="fas fa-box"></i>
                    <h4>Membership Dues</h4>
                    <p>Dues cost $45 for the 2018-2019 school year. Pay by cash, check to UCSD Circle K, or venmo @UCSDCircleK. <strong>Dues must be paid by our week 3 GBM</strong>
                        to be sorted into a family at new member install.
                    </p>
                    <a href="https://venmo.com/UCSDCircleK" target="_blank">
                        <button class="cardBtn">Venmo Page</button>
                    </a>
                </div>
                <div>
                    <i class="fas fa-shuttle-van"></i>
                    <h4>CST</h4>
                    <p>Community Service Transportation (CST) will provide free rides to all our service events in the San Diego area. Just fill out their form and
                    you're ready to go!</p>
                    <a href="https://students.ucsd.edu/student-life/involvement/community/local-ongoing-service/cstvans/orientation.html" target="_blank">
                        <button class="cardBtn">CST Page</button>
                    </a>
                </div>
            </div>
            <h4 id="memPerks">Official members of UCSD Circle K will be sorted into a family, be able to join committees, earn awards, access free rides to all events, eat free lunch
            at Kiwanis Luncheon, have a big or little, access district events, and run for board!</h4>
        </div>

        <h2>Website account</h2>
        <h4>Your online guide to UCSD Circle K!</h4>

        <table>
            <tr>
                <th>Benefits</th>
                <th>Guest</th>
                <th>Registered User<i class="fas fa-star" style="padding-left:2%;"></i></th>
            </tr>
            <tr>
                <td>Sign up for events</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td>One-click event sign-up</td>
                <td><i class="fas fa-close"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td>One-click remove sign up</td>
                <td><i class="fas fa-close"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td>Save your contact information</td>
                <td><i class="fas fa-close"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td>View all your upcoming events</td>
                <td><i class="fas fa-close"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td>Track your MRP hours and status</td>
                <td><i class="fas fa-close"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr>
                <td>Change contact information</td>
                <td><i class="fas fa-close"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
        </table>

        <a href="{{ url('/auth/register') }}" target="_blank">
            <button>Register for an account</button>
        </a>

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
