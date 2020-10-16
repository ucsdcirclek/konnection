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
                    <a href="{{ url('/') }}">home</a>
                </li>

                <li>
                    <a style="color: white">about</a>
                    <ul class="nav-dropdown">
                        <li><a href="{{ url('about/circlek') }}">Circle K</a></li>
                        <li><a href="{{ url('about/familysystem') }}">Family System</a></li>
                        <li><a href="{{ url('about/gallery') }}">Gallery</a></li>
                        <li><a href="{{ url('about/membership') }}">Membership</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('/events') }}">calendar</a>
                </li>


                <li>
                    <a style="color: white">resources</a>
                    <ul class="nav-dropdown">
                        <li><a href="{{ url('/resources') }}">Applications & Forms</a></li>
                        <li><a href="{{ url('/bulletin') }}">Bulletin</a></li>
                        <li><a href="{{ url('/drivers') }}">Driving Reimbursement</a></li>
                        <li><a href="{{url('/MRP') }}">Member Recognition Program</a></li>
                        <li><a href="http://resources.cnhcirclek.org/" target="_blank">CNH District Resources</a></li>
                        <li><a href="https://www.circlek.org/resources" target="_blank">International Resources</a></li>
                        <li><a href="https://bit.ly/2Pft46g" target="_blank">Cheers</a></li>
                    </ul>

                </li>
                <li>
                    <a href="{{ url('contact') }}">contact</a>
                </li>
                <li>
                    <a href="{{ url('/confessions') }}">confessions</a>
                </li>


                @if (! Auth::check())
                    <li>
                        <a style="color: white">account <i class="fa fa-user"></i></a>
                        <ul class="nav-dropdown">
                            <li class="nav-link"><a href="{{ url('/auth/login') }}">login</a></li>
                            <li><a href="{{ url('about/membership') }}">Membership</a></li>
                        </ul>
                    </li>
                @else
                    <li>
                    <a style="color: white">account <i class="fa fa-user"></i></a>
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
