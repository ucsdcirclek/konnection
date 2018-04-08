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
            <a href="https://ucsdcki.typeform.com/to/yDt69X" target="_blank">Membership Application</a>
        </h4>
        <p> Apply to be a UCSD Circle K member! </p>

        <HR>

        <h4>
            <a href="https://docs.google.com/document/d/1QYm_EymGutshxR8oY1JavcuC380VqHVdpCt0zbOgQPM/edit" target="_blank"> Masquerade Ball Committee Application (2018)</a>
        </h4>
        <p> Help plan our annual Masquerade Ball, UCSD Circle K's largest fundraiser! Due on <font color="red">Tuesday, April 10th by 11:59 p.m
            </font> </p>


        <HR>

        <h4>
            <a href="https://goo.gl/forms/QQavNpWedRLsBYHf1" target="_blank"> Tech Team Application (2018-2019)</a>
        </h4>
        <p>Work behind the scenes by developing new features for the UCSD CKI official website! Due on <font color="red">Wednesday, April 18th by 11:59 p.m
            </font> </p>


        <HR>

        <h4>
            <a href="https://files.slack.com/files-pri/T48N4GHC7-F91QG4TQA/download/prager_s_mentorship_program_circle_k_version.docx" download >
                Kiwanis Mentorship Application</a>
        </h4>
        <p> Are you interested in applying for a Kiwanis member to help you advance in your field of career?
            Fill out an application today and hand it into our President! </p>


        <br/>

        <h3><center>Forms</h3></center>
        <br/>


        <div style="height:425px;width:100%;border:1px solid #ccc;overflow:auto;padding:1em">

            <h4>
                <a href=" http://bit.ly/2018-2019ucsdckitheme" target="_blank">Club Theme Suggestions</a>
            </h4>
            <p> Have an idea for our org’s new theme? Submit them through our form for a chance to have it printed into our new
                T-Shirts, Yearbook, and Scrapbook! <font color="red">Friday, April 20th by 11:59 p.m
                </font>
            </p>

            <HR>

            <h4>
                <a href="http://bit.ly/2zptFJo" target="_blank">Website Feature Survey Form</a>
            </h4>
            <p> Let our Tech Team know which website feature you would like to be implemented first or suggest a
                feature you would like to see on our website!
            </p>

            <HR>
            <h4>
                <a href="http://bit.ly/2hlfGO0" target="_blank">New Member Install Feedback Form</a>
            </h4>
            <p> Now that NMI is over. Tell us what you liked/disliked about 2017-18's New Member Install!
            </p>

            <HR>
            <h4>
                <a href="http://bit.ly/Newsletter1718" target="_blank">Newsletter Submission Form</a>
            </h4>
            <p> Share your thoughts about events for the UCSD CKI Newsletter!
            </p>

            <HR>
            <h4>
                <a href="http://bit.ly/ckireimbursements1718" target="_blank">Reimbursement Form</a>
            </h4>
            <p> Go here for reimbursement requests. Make sure to follow all the steps!
            </p>

            <HR>
            <h4>
                <a href="http://bit.ly/2ygHMRD" target="_blank">Budget Form</a>
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
                <a href="http://bit.ly/2q5pptN" target="_blank">Social Suggestions</a>
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

