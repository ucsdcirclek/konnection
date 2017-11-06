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
            <a href="https://docs.google.com/document/d/1cs5xAeWIoc7rNTWlZ0ei3-dtrZ3EVIE0Ok_a5KY9NVU/edit"
               target="_blank">Key2College Application</a>
        </h4>
        <p> Apply for the Key2College committee! (Due on <font color="red">Tuesday, November 7th, 2017 11:59pm</font>)
        </p>

        <HR>
        <h4>
            <a href="https://docs.google.com/document/d/1ZpD1nq598Xh73avxwSBJCMTTSbxHKGyS141npbLe3jQ/edit"
               target="_blank">SLSSP Application</a>
        </h4>
        <p> Apply for the SLSSP committee! (Due on <font color="red">Monday, November 13th, 2017 11:59pm</font>)
        </p>

        <HR>
        <h4>
            <a href="https://bit.ly/ckiyearbookcommittee1718"
               target="_blank">Yearbook Committee Application</a>
        </h4>
        <p> Apply for the Yearbook committee! (Due on <font color="red">Monday, November 27th, 2017 11:59pm</font>)
        </p>
        <br/>

        <h3><center>Forms</h3></center>
        <br/>


        <div style="height:425px;width:100%;border:1px solid #ccc;overflow:auto;padding:1em">

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
                <a href="http://bit.ly/2q5pptN" target="_blank">Member Hosted Workshop</a>
            </h4>
            <p> Want to host your own workshop? Apply here!
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
