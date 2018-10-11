@extends('layouts.master')

@section('title')
    Resources
@endsection

@section('content')
    @include('layouts.header', array('headerTitle' => 'Member Resources'))

    <!-- TODO: Add this line after the category's line break when over 4 items. Also remove first's <HR>
    <div style="height:425px;width:100%;border:1px solid #ccc;overflow:auto;padding:1em"> -->

    <div class="wrapper">
        <h3><center>Applications</h3></center>
        <br/>
        <HR>
        <h4>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfdRhGeUtIXZ8I3tbiWcxmyX34WG1enXThVdFRCf9WlBe736A/viewform" target="_blank">Membership Application</a>
        </h4>
        <p> Apply to be a UCSD Circle K member! </p>

        <HR>

        <h4>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfZ7Sq_3aCn4SUIfEWy_GPELfJYSIUzLQN8xedkn9feql5C9A/viewform" target="_blank">Big/Little Applications</a>
        </h4>
        <p>Do you want to serve as a mentor/mentee for your fellow Circle K members? Here is your opportunity!</p>
        <p>NOTE: You must be <strong>dues-paid</strong> and have completed <strong>2 service</strong> and <strong>2 social</strong> events this quarter to apply.</p>

        <HR>

        <h4>
            <a href="https://docs.google.com/forms/d/1EKOqM_D8SCpstbgNjjUN7eM30TfWwK4kPL1rB3cjVyE/viewform?edit_requested=true" target="_blank">FA18 Media Assistant</a>
        </h4>
        <p>Interested in what behind-the-scenes are like in advertising for CKI this quarter? Have ideas on innovation for
            how we promote on social media? Then apply to be PR Media Assistant! This is a learning experience, so no previous experience is needed!</p>

        <HR>

        <h4>
            <a href="https://docs.google.com/forms/d/1hJ_O7YoZE3gEJEFyM-zDL6TfmoDbu3pHY1rDgDXWtmo/viewform?edit_requested=true" target="_blank">FA18 Newsletter Assistant</a>
        </h4>
        <p>Work with our Historian and PR Chair to help design the newsletter this quarter!</p>

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

        <br/>

        <h3><center>Forms</h3></center>
        <br/>


        <div style="height:425px;width:100%;border:1px solid #ccc;overflow:auto;padding:1em">

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

    </div>

@endsection


