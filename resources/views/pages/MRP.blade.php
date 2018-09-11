@extends('layouts.master')

@section('title')
    MRP
@endsection

<style>

</style>

@section('content')
    @include('layouts.header', array('headerTitle' => 'Membership Recognition Program'))
    <!-- TODO Add tooltips and CSS-->

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
                <th>Bronze</th>
                <th>Silver</th>
                <th>Gold</th>
                <th>Platinum</th>
            </tr>
            <tr class="col1 tHighlight">
                <td><strong>Service Hours<i class="fas fa-info-circle tooltip"><span class="tooltiptext">Hello</span></i></strong></td>
                <td>50</td>
                <td>80</td>
                <td>130</td>
                <td>200</td>
            </tr>
            <tr class="col1 tHighlight">
                <td><strong>Dues Paid</strong><i class="fas fa-info-circle tooltip"><span class="tooltiptext">Hello</span></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr class="col1 tHighlight">
                <td><strong>Additional</strong><i class="fas fa-info-circle"></i></td>
                <td>5</td>
                <td>6</td>
                <td>8</td>
                <td>11</td>
            </tr>
            <tr class="col1">
                <td>Socials (SE) <i class="fas fa-info-circle"></i></td>
                <td>3</td>
                <td>4</td>
                <td>6</td>
                <td>9</td>
            </tr>
            <tr class="col1">
                <td>MD&amp;E Events (MD) <i class="fas fa-info-circle"></i></td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
            </tr>
            <tr class="col1">
                <td>Fundraisers (FR) <i class="fas fa-info-circle"></i></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr class="col1">
                <td>Alumni (AL) <i class="fas fa-info-circle"></i></td>
                <td>1</td>
                <td>1</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr class="col1">
                <td>Kiwanis Family (KF) <i class="fas fa-info-circle"></i></td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
            </tr>
            <tr class="col1">
                <td>Interclub (IN) <i class="fas fa-info-circle"></i></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr class="col1">
                <td>Divisional Events (DV) <i class="fas fa-info-circle"></i></td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
            </tr>
            <tr class="col1">
                <td>District Events (DE) <i class="fas fa-info-circle"></i></td>
                <td>1</td>
                <td>2</td>
                <td>2</td>
                <td>3</td>
            </tr>
            <tr class="col1">
                <td>International Events (INT) <i class="fas fa-info-circle"></i></td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>Articles Submitted <i class="fas fa-info-circle"></i></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr class="col1">
                <td>Webinars Attended (WB) <i class="fas fa-info-circle"></i></td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
            </tr>
            <tr class="col1">
                <td>Chaired Events <i class="fas fa-info-circle"></i></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr class="col1">
                <td>Host Workshop or Webinar <i class="fas fa-info-circle"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr class="col1">
                <td>Club Committee Member <i class="fas fa-info-circle"></i></td>
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