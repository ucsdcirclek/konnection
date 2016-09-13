<header class="centered-navigation">
    <div class="centered-navigation-wrapper">

        <a href="" class="centered-navigation-menu-button" id="js-mobile-menu">MENU</a>

        <div class="nav">

            <ul class="centered-navigation-menu">

                <li class="nav-link"><a href="{{ url('/') }}">home</a></li>

                <li class="nav-link more"><a href="javascript:void(0)">about</a>
                    <ul class="submenu">
                        <li><a href="{{ url('about/circlek') }}">Circle K</a></li>
                        <li><a href="{{ url('about/division') }}">Division</a></li>
                        <li><a href="{{ url('about/club') }}">Club</a></li>
                        <li><a href="{{ url('about/drivers') }}">Drivers</a></li>
                        <li><a target="_blank" href="http://www.kiwanis.org">Kiwanis</a></li>
                        <li><a target="_blank" href="http://www.kiwanisclublajolla.org/">La Jolla Kiwanis</a></li>
                    </ul>
                </li>

                <li class="nav-link"><a href="{{ url('/events') }}">calendar</a></li>

                <li class="nav-link"><a href="{{ url('/bulletin') }}">bulletin</a></li>

                <li class="nav-link"><a href="{{ url('/cerfs/overview') }}">cerfs</a></li>

                <li class="nav-link more"><a href="">district</a>
                    <ul class="submenu">
                        <li><a href="{{ url('about/district') }}">About</a></li>
                        <li><a target="_blank" href="http://dcon.cnhcirclek.org/">DCON</a></li>
                        <li><a target="_blank" href="http://ftc.cnhcirclek.org/">FTC</a></li>
                        <li><a target="_blank"
                               href="http://www.cnhcirclek.org/event/7-crazy_kompetition_for_infants_south/">CKI
                                South</a></li>
                    </ul>
                </li>

                <li class="nav-link"><a href="{{ url('contact') }}">contact</a></li>

                @if (! Auth::check())
                    <li class="nav-link"><a href="{{ url('/auth/login') }}">login</a></li>
                    <li class="nav-link"><a href="{{ url('/auth/register') }}">register</a></li>
                @else
                    <li class="nav-link"><a href="{{ url('settings') }}">account</a></li>
                    <li class="nav-link"><a href="{{ url('/auth/logout') }}">logout</a></li>
                @endif

            </ul>

        </div>

    </div>
</header>