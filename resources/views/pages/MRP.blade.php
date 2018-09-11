@extends('layouts.master')

@section('title')
    MRP
@endsection

<style>
    .col1:first-child {
        text-align: left;
    }

</style>

@section('content')
    @include('layouts.header', array('headerTitle' => 'Membership Recognition Program'))

    <div class="wrapper">
        <h2>General Information</h2>
        <p>The Membership Recognition Program (MRP) is the largest way we recognize members from all over the California-Nevada-Hawai’i
            district. It recognizes members who have shown dedication in our three tenets: service, leadership, and fellowship.
            Members are recognized at the district level during Fall Training Conference and District Convention.
        </p>
        <p>
            MRP recipients will be recognized at GBMs and certain UCSD CKI events.
        </p>
        <p>
            In order to achieve an <strong>MRP ranking</strong>, you need to be <strong>dues-paid</strong>, reach a specific
            number of <strong>service hours</strong>, and complete a specific number of <strong>tags</strong>.
        </p>
        <h2>Requirements</h2>
        <table class="MRP_req">
            <tr class="MRP_category">
                <th>Category</th>
                <th></th>
                <th>Bronze</th>
                <th>Silver</th>
                <th>Gold</th>
                <th>Platinum<i class="fas fa-trophy"></i></th>
            </tr>
            <tr class="col1 tHighlight">
                <td><strong>Service Hours</strong></td>
                <td><i class="fas fa-info-circle tooltip"><span class="tooltiptext"> All community service hours completed
                            by dues-paid members between March 1, 2018, to February 28, 2019.</span></i></td>
                <td>50</td>
                <td>80</td>
                <td>130</td>
                <td>200</td>
            </tr>
            <tr class="col1 tHighlight">
                <td><strong>Dues Paid</strong></td>
                <td><i class="fas fa-info-circle tooltip"><span class="tooltiptext">Dues cost $45 for 2018-2019 membership.
                            See membership page for more deails</span></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr class="col1 tHighlight">
                <td><strong>Additional</strong></td>
                <td><i class="fas fa-info-circle tooltip"><span class="tooltiptext">Complete the specified number of requirements
                            listed below to complete this category.</span></i></td>
                <td>5</td>
                <td>6</td>
                <td>8</td>
                <td>11</td>
            </tr>
            <tr class="col1">
                <td>Socials (SE)</td>
                <td><i class="fas fa-info-circle tooltip"><span class="tooltiptext">Any type of event that fosters fellowship
                            within your club or with other members from the Kiwanis Family. Examples include club dinners,
                            recreational activities, etc.</span></i></td>
                <td>3</td>
                <td>4</td>
                <td>6</td>
                <td>9</td>
            </tr>
            <tr class="col1">
                <td>MD&amp;E Events (MD)</td>
                <td><i class="fas fa-info-circle tooltip"><span class="tooltiptext">Any event that help in the recruitment,
                            retention, development, and education of new and old members. Examples include tabling, workshops, etc.</span></i></td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
            </tr>
            <tr class="col1">
                <td>Fundraisers (FR)</td>
                <td><i class="fas fa-info-circle tooltip"><span class="tooltiptext">An event that raises money for either
                            your club (non-administrative funds) or for a charitable organization.</span></i></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr class="col1">
                <td>Alumni (AL)</td>
                <td><i class="fas fa-info-circle tooltip"><span class="tooltiptext">An event in which two members from a Circle
                            K club and at least two alumni (graduates) are present.</span></i></td>
                <td>1</td>
                <td>1</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr class="col1">
                <td>Kiwanis Family (KF)</td>
                <td><i class="fas fa-info-circle tooltip"><span class="tooltiptext">A Kiwanis Family event with at least
                            two members present from your Circle K club and at least two members present from another non-Circle
                            K Kiwanis Family club (ex. Key Club, Kiwanis).</span></i></td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
            </tr>
            <tr class="col1">
                <td>Interclub (IN)</td>
                <td><i class="fas fa-info-circle tooltip"><span class="tooltiptext">An interclub is any event hosted by
                            another Kiwanis Family club, including Circle K.</span></i></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr class="col1">
                <td>Divisional Events (DV)</td>
                <td><i class="fas fa-info-circle tooltip"><span class="tooltiptext">An in-person event hosted for your home
                            Division, which is usually hosted by the respective Lieutenant Governor (and Divisional Board).</span></i></td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
            </tr>
            <tr class="col1">
                <td>District Events (DE)</td>
                <td><i class="fas fa-info-circle tooltip"><span class="tooltiptext">An event hosted by and for the District
                            (ex. Fall Training Conference).</span></i></td>
                <td>1</td>
                <td>2</td>
                <td>2</td>
                <td>3</td>
            </tr>
            <tr class="col1">
                <td>International Events (INT)</td>
                <td><i class="fas fa-info-circle tooltip"><span class="tooltiptext">An event held throughout all of Circle K International.
                            Events that can fulfill this tag are CKIx and Leadership Academy.</span></i></td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>Articles Submitted</td>
                <td><i class="fas fa-info-circle tooltip"><span class="tooltiptext">An article or video submitted at the
                            club, divisional, district, or international level (ex: club and divisional newsletters).</span></i></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr class="col1">
                <td>Webinars Attended (WB)</td>
                <td><i class="fas fa-info-circle tooltip"><span class="tooltiptext">A workshop that is broadcasted online
                            on the Club, Division, District, or International level.</span></i></td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
            </tr>
            <tr class="col1">
                <td>Chaired Events</td>
                <td><i class="fas fa-info-circle tooltip"><span class="tooltiptext">Serve as the chair, or contact person, for a particular event.</span></i></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr class="col1">
                <td>Host Workshop or Webinar</td>
                <td><i class="fas fa-info-circle tooltip"><span class="tooltiptext">Host or co-host a workshop or
                            webinar at a district, divisional, or club-hosted workshop. </span></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr class="col1">
                <td>Club Committee Member</td>
                <td><i class="fas fa-info-circle tooltip"><span class="tooltiptext"> Involvement in any committee within
                            the club, division, district, or international level.</span></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
        </table>

        <h2>Crobie Levels</h2>
        <table class="MRP_req">
            <tr class="MRP_category">
                <th>Level</th>
                <th>Nano</th>
                <th>Micro</th>
                <th>Macro</th>
                <th>Mega</th>
            </tr>
            <tr class="col1">
                <td>Service Hours</td>
                <td>25</td>
                <td>50</td>
                <td>75</td>
                <td>100</td>
            </tr>
        </table>
    </div>
@endsection