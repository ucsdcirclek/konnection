@extends('layouts.master')

@section('title')
    MRP
@endsection

@section('content')
    @include('layouts.header', array('headerTitle' => 'Membership Recognition Program'))
    <h2>MRP Requirements</h2> <!-- TODO Add tooltips and CSS-->

    <table>
        <tr>
            <th>Category</th>
            <th>Bronze</th>
            <th>Silver</th>
            <th>Gold</th>
            <th>Platinum</th>
        </tr>
        <tr>
            <td>Service Hours</td>
            <td>50</td>
            <td>80</td>
            <td>130</td>
            <td>200</td>
        </tr>
        <tr>
            <td>Dues Paid</td>
            <td><i class="fas fa-check"></i></td>
            <td><i class="fas fa-check"></i></td>
            <td><i class="fas fa-check"></i></td>
            <td><i class="fas fa-check"></i></td>
        </tr>
        <td>Additional Requirements</td>
        <td>5</td>
        <td>6</td>
        <td>8</td>
        <td>11</td>
        </tr>
        <tr>
            <td>Socials (SE)</td>
            <td>3</td>
            <td>4</td>
            <td>6</td>
            <td>9</td>
        </tr>
        <tr>
            <td>MD&amp;E Events (MD)</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
        </tr>
        <tr>
            <td>Fundraisers (FR)</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
        </tr>
        <tr>
            <td>Alumni (AL)</td>
            <td>1</td>
            <td>1</td>
            <td>2</td>
            <td>2</td>
        </tr>
        <tr>
            <td>Kiwanis Family (KF)</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
        </tr>
        <tr>
            <td>Interclub (IN)</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
        </tr>
        <tr>
            <td>Divisional Events (DV)</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
        </tr>
        <tr>
            <td>District Events (DE)</td>
            <td>1</td>
            <td>2</td>
            <td>2</td>
            <td>3</td>
        </tr>
        <tr>
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
        <tr>
            <td>Webinars Attended (WB)</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
        </tr>
        <tr>
            <td>Chaired Events</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
        </tr>
        <tr>
            <td>Host Workshop or Webinar</td>
            <td><i class="fas fa-check"></i></td>
            <td><i class="fas fa-check"></i></td>
            <td><i class="fas fa-check"></i></td>
            <td><i class="fas fa-check"></i></td>
        </tr>
        <tr>
            <td>Club Committee Member</td>
            <td><i class="fas fa-check"></i></td>
            <td><i class="fas fa-check"></i></td>
            <td><i class="fas fa-check"></i></td>
            <td><i class="fas fa-check"></i></td>
        </tr>
    </table>
@endsection