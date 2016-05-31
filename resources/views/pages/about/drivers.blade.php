@extends('layouts.master')

@section('title')
    Drivers
@endsection

@section('content')
    @include('layouts.header', array('headerTitle' => 'Driver Reimbursement Rules'))

    <div class="wrapper">

    <ul>
        <li>All qualified miles will be reimbursed, regardless of the total number of miles driven at the end of the quarter.</li>
        <li>All District and Kiwanis Family events are reimbursed both ways.</li>
        <li>All Service events are reimbursed both ways UNLESS CST TRANSPORTATION IS PROVIDED. Drivers will not be reimbursed
            for events with CST regardless of how many members they drive UNLESS CST VANS ARE FULL.</li>
        <li>Social events will only be reimbursed one way.</li>
        <li>A driver must drive at least one other member in order to qualify for reimbursement, regardless of
            the type of event. This situation should only happen if all other available cars are full or if said
            driver and member are the only two people who signed up for the event.</li>
        <li>Miles driven will be reimbursed at a flat rate of $0.20/mile regardless of the type of event.</li>
        <li>All reimbursement will be distributed at the end of each quarter.</li>
        <li>These new rules will be effective immediately and this quarter shall act as a trial run. These rules are
            subject to modification and members will be notified.</li>
    </ul>
    </div>
@endsection