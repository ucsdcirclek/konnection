<style>
    @media only screen and (max-width: 500px) {

        .mobile-text {
            font-size: 12px;
        }
        .centered-navigation {
            height: 18%;

        }

    }
</style>

<section class="navigation">
    <div class="nav-container">
        <div class="brand">
            <i class="fas fa-globe-americas" style="color:white"></i> <!-- The icon for the mobile nav bar -->
            <a href="{{ url('/') }}">UCSD Circle K</a>
        </div>
        <nav>
            <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
            <ul class="nav-list">
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>

                <li>
                    <a style="color: white">About</a>
                    <ul class="nav-dropdown">
                        <li><a href="{{ url('about/circlek') }}">Circle K</a></li>
                        <li><a href="{{ url('about/familysystem') }}">Family System</a></li>
                        <li><a href="{{ url('about/gallery') }}">Gallery</a></li>
                        <li><a href="{{ url('about/membership') }}">Membership</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('/events') }}">Calendar</a>
                </li>


                <li>
                    <a style="color: white">Resources</a>
                    <ul class="nav-dropdown">
                        <li><a href="{{ url('/resources') }}">Applications & Forms</a></li>
                        <li><a href="{{ url('/drivers') }}">Driving Reimbursement</a></li>
                        <li><a href="{{url('/MRP') }}">Member Recognition Program</a></li>
                    </ul>

                </li>
                <li>
                    <a href="{{ url('contact') }}">Contact</a>
                </li>
                <li>
                    <a href="{{ url('/confessions') }}">Confessions</a>
                </li>


                @if (! Auth::check())
                    <li>
                        <a style="color: white">Account <i class="fa fa-user"></i></a>
                        <ul class="nav-dropdown">
                            <li class="nav-link"><a href="{{ url('/auth/login') }}">Login</a></li>
                            <li><a href="{{ url('about/membership') }}">Membership</a></li>
                        </ul>
                    </li>
                @else
                    <li>
                    <a style="color: white">Account <i class="fa fa-user"></i></a>
                        <ul class="nav-dropdown">
                            <li><a href="{{ url('about/membership') }}">Membership</a></li>
                            <li><a href="{{ url('settings') }}">View Account</a></li>
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif


            </ul>
        </nav>
    </div>
</section>
