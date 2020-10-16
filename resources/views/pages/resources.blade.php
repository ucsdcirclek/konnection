@extends('layouts.master')

@section('title')
    Resources
@endsection

@section('content')
    @include('layouts.header', array('headerTitle' => 'Member Resources'))

    <!-- TODO: Add this line after the category's line break when over 4 items. Also remove first's <HR>
    <div style="height:425px;width:100%;border:1px solid #ccc;overflow:auto;padding:1em"> -->

    <div class="wrapper">
        <h3>Applications</h3>
        <br/>
        <HR>
        <h4>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdQKFtTjYOs6yOsqtHAEMbHIOt3V3NrYWLm41V6Xyk0nE7vyw/viewform?usp=sf_link" target="_blank">Membership Application</a>
        </h4>
        <p> Apply to be a UCSD Circle K member! </p>

        <HR>

    <!--    <h4>
            <a target="_blank">Big/Little Applications</a>
        </h4>
        <p>Do you want to serve as a mentor/mentee for your fellow Circle K members? Here is your opportunity!</p>
        <p>NOTE: You must be <strong>dues-paid</strong> and have completed <strong>2 service</strong> and <strong>2 social</strong> events this quarter to apply.</p>
        <p>Deadline is October 25th at 11:59 PM</p>
    </div> -->
<!--
        <HR>

        <h4>
        <a href="https://docs.google.com/document/d/1UR_zKl9Caxv8mDEdYCfmO2e9EMLttKuQStC3_j430XM/edit" target="_blank">Student Alliance Against Trafficking</a>
        </h4>
        <p>The Student Alliance Against Human Trafficking (SAAT) is a committee formed with the intention of increasing
            the visibility of human trafficking and educating our peers on the warning signs to better protect themselves and their community.</p>

        <HR>

        <h4>
            <a href="https://docs.google.com/document/d/1CneMojp7rqBN-tmzLCkCfoItfmEM7e3OsOr3tppK3w4/edit" target="_blank">Impact Team Head</a>
        </h4>
        <p>Impact Teams are independent service committees that are led by a general member, the Team Head. The Team Head
            has the opportunity plan a project that makes a difference with an issue he/she is passionate about.</p>
        <p>Apply if you would like to take this great leadership opportunity!</p>

        <HR>

        <h4>
            <a href="https://docs.google.com/document/d/1LBvdhU4-DnObX4sEdKNzYOxBHlapgNmt9_tgDyhiBVU/edit" target="_blank">Single
                Large Scale Service Project Committee (SLSSP)</a>
        </h4>
        <p>Be part of the team that organizes a full day of service projects to make a change in our community! This year's District Service
        Initiative (DSI) is "helping those with disabilities".</p>

        <HR>

        <h4>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLScCfsTk9Ot4Fmng1huXeLUZROoE3YubxDwkcwpXaLmnow-cTQ/viewform" target="_blank">Historian's Executive Assistant</a>
        </h4>
        <p>Wanna get involved with our Quarterly Newsletter, Yearbook, and Scrapbook? Apply to be a HEA and let your creative side take charge!!</p>

        <HR>

        <!--<h4>
            <a href="https://files.slack.com/files-pri/T48N4GHC7-F91QG4TQA/download/prager_s_mentorship_program_circle_k_version.docx" download >
                Kiwanis Mentorship Application</a>
        </h4>
        <p> Are you interested in applying for a Kiwanis member to help you advance in your field of career?
            Fill out an application today and hand it into our President! </p>
-->
<!--
        <br/>

        <h3><center>Forms</h3></center>
        <br/>


        <div style="height:425px;width:100%;border:1px solid #ccc;overflow:auto;padding:1em">

            <h4>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScnyEghSWUo0iKsWfaw8eQ84-5TRZu_DQVg722oH6zfNuenPw/viewform"
                   target="_blank">MBall Song Requests</a>
            </h4>
            <p>We will consider ALL songs, artists, and genres! (Classics included). Our DJs will do their best to incorporate the songs to  create a great mix!! </p>

            <HR>

            <h4>
                <a href="https://docs.google.com/spreadsheets/d/13wW9-xV0fRAQNcFqks-JQHPq3sO9a40IHEevtf0s8BM/edit#gid=0"
                   target="_blank">MBall Tabling and Chalking</a>
            </h4>
            <p> Volunteer to help the masquerade ball committee promote their event. Tabling and chalking will occur every weekday until the event. </p>

            <HR>

            <h4>
                <a href="https://docs.google.com/forms/d/1GW38xAg7P9tedr7EdNzyy7AW6-tfy8hRGuDzcA1HDIk/viewform?edit_requested=true"
                   target="_blank">MBall Housing Form</a>
            </h4>
            <p>We need volunteers to help house Masquerade Ball attendees. Sign up your space here!</p>

            <HR>

            <h4>
                <a href="https://docs.google.com/forms/d/1t3lPOPPHFZPBoXraInyiyoWO3JZUyP5BOozHfJRGCXU/viewform?edit_requested=true"
                   target="_blank">MBall Volunteering</a>
            </h4>
            <p>Interested in volunteering to help Masquerade Ball run smoothly? Let us know here!</p>

            <HR>

            <h4>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSch42sKUmBaASD1jRwc1Z1mqk4a9G2nSqQwZNalqmF_5Z6iUg/viewform"
                   target="_blank">Service Survey</a>
            </h4>
            <p> Do you want to see specific service events? Want to let me know when you are available to do service?
                Please fill out this survey! It is completely anonymous and will be used to improve future service events! </p>

            <HR>

            <h4>
                <a href="https://docs.google.com/document/d/1l5J_qNS9473Q3GCA0oT9CxVOfTmBryaBQbs71FYmHVs/edit?usp=sharing"
                   target="_blank">Cheers</a>
            </h4>
            <p>S-, U-P-E-R, superstar is what you are! Find the words to all of our spirit cheers here!</p>

            <HR>

            <h4>
                <a href="http://bit.ly/ckigbm1819 "
                   target="_blank">GBM Suggestions</a>
            </h4>
            <p> Do you have any interesting ideas for GBM activities? Request them here.</p>

            <HR>

            <h4>
                <a href="https://docs.google.com/forms/d/1csqMo8m7QdEY3VDEG4gWWYa46EXXATNQlzp0u9ak7Rs/viewform?edit_requested=true"
                   target="_blank">Weekly recap song requests</a>
            </h4>
            <p> Would you like to request a song for our weekly GBM recap videos? Now is your chance!</p>

            <HR>
            <h4>
                <a href="http://bit.ly/Newsletter1718" target="_blank">Newsletter Submission Form</a>
            </h4>
            <p> Share your thoughts about events for the UCSD CKI Newsletter!
            </p>

            <HR>
            <h4>
                <a href="http://bit.ly/ucsdckireimburse2018" target="_blank">Reimbursement Form</a>
            </h4>
            <p> Go here for reimbursement requests. Make sure to follow all the steps!
            </p>

            <HR>
            <h4>
                <a href="https://docs.google.com/document/d/1g0B0QbJ0n4rfwBC1xr9fcMpc9-zuWySCFz7Hj92dd0o/edit?usp=sharing"
                   target="_blank">Budget Form</a>
            </h4>
            <p> Go here for budget requests. Make sure to follow all the steps!
            </p>

            <HR>
            <h4>
                <a href="http://bit.ly/mhf1718" target="_blank">Fundraiser Suggestions</a>
            </h4>
            <p> Have an awesome fundraising idea? Let us know here!
            </p>

            <HR>
            <h4>
                <a href="http://bit.ly/ucsdckisocial" target="_blank">Social Suggestions</a>
            </h4>
            <p> Got any fun ideas for a social? Let us know here!
            </p>

            <HR>
            <h4>
                <a href="http://bit.ly/2q5pptN" target="_blank">Website Suggestions</a>
            </h4>
            <p> Any ideas you want to see on our website? Let us know here!
            </p>
        </div>

    </div> -->

@endsection
