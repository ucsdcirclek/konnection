@extends('layouts.master')

@section('title')
    MRP
@endsection

@section('content')
    @include('layouts.header', array('headerTitle' => 'Membership Recognition Program'))
    <!-- TODO Add tooltips and CSS-->

    <div class="wrapper">
        <h2>Requirements</h2>
        <table class="MRP_req">
            <tr class="MRP_category">
                <th>Category</th>
                <th>Bronze</th>
                <th>Silver</th>
                <th>Gold</th>
                <th>Platinum</th>
            </tr>
            <tr class="col1">
                <td>Service Hours</td>
                <td>50</td>
                <td>80</td>
                <td>130</td>
                <td>200</td>
            </tr>
            <tr class="col1">
                <td>Dues Paid</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr class="col1">
                <td>Additional Requirements</td>
                <td>5</td>
                <td>6</td>
                <td>8</td>
                <td>11</td>
            </tr>
            <tr class="col1">
                <td>Socials (SE)</td>
                <td>3</td>
                <td>4</td>
                <td>6</td>
                <td>9</td>
            </tr>
            <tr class="col1">
                <td>MD&amp;E Events (MD)</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
            </tr>
            <tr class="col1">
                <td>Fundraisers (FR)</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr class="col1">
                <td>Alumni (AL)</td>
                <td>1</td>
                <td>1</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr class="col1">
                <td>Kiwanis Family (KF)</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
            </tr>
            <tr class="col1">
                <td>Interclub (IN)</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr class="col1">
                <td>Divisional Events (DV)</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
            </tr>
            <tr class="col1">
                <td>District Events (DE)</td>
                <td>1</td>
                <td>2</td>
                <td>2</td>
                <td>3</td>
            </tr>
            <tr class="col1">
                <td>International Events (INT)</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>Articles Submitted</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr class="col1">
                <td>Webinars Attended (WB)</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
            </tr>
            <tr class="col1">
                <td>Chaired Events</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr class="col1">
                <td>Host Workshop or Webinar</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
            <tr class="col1">
                <td>Club Committee Member</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="fas fa-check"></i></td>
            </tr>
        </table>
    </div>
@endsection