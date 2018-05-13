<style>
    @media only screen and (max-width: 500px) {
        .mobile-text {
            font-size: 12px;
        }
        .centered-navigation {
            height: 18%;
        }
        .modal-content {
            height: 480px;
            width: 80%;
            overflow: auto;
        }

        li.modalTab a {
            padding: 24px 16px;
        }
    }

</style>

<header class="centered-navigation">
    <div class="mobile-text">
      <div class="centered-navigation-wrapper">

        <a href="" class="centered-navigation-menu-button" id="js-mobile-menu">MENU</a>

        <div class="nav">

            <ul class="centered-navigation-menu">

                <li class="nav-link"><a href="{{ url('/') }}">home</a></li>

                <li class="nav-link more"><a href="javascript:void(0)">about</a>
                    <ul class="submenu">
                        <li><a href="{{ url('about/circlek') }}">Circle K</a></li>
                        <!--<li><a href="{{ url('about/division') }}">Division</a></li>-->
                        <li><a href="{{ url('about/club') }}">Club</a></li>
                        <li><a href="{{ url('about/drivers') }}">Drivers</a></li>
                        <li><a href="{{ url('about/membership') }}">Membership</a></li>
                        <li><a target="_blank" href="http://www.kiwanis.org">Kiwanis</a></li>
                        <li><a target="_blank" href="http://www.kiwanisclublajolla.org/">La Jolla Kiwanis</a></li>
                    </ul>
                </li>

                <li class="nav-link"><a href="{{ url('/events') }}">calendar</a></li>
                
                <li class="nav-link"><a href="{{ url('/resources')}}">resources</a></li>

                <li class="nav-link"><a href="{{ url('/bulletin') }}">bulletin</a></li>

                <li class="nav-link"><a href="{{ url('/cerfs/overview') }}">cerfs</a></li>

                <li class="nav-link more"><a href="">district</a>
                    <ul class="submenu">
                        <!--<li><a href="{{ url('about/district') }}">About</a></li>-->
                        <li><a target="_blank" href="http://dcon.cnhcirclek.org/">DCON</a></li>
                        <li><a target="_blank" href="http://ftc.cnhcirclek.org/">FTC</a></li>
                        <li><a target="_blank"
                               href="http://www.cnhcirclek.org/committees/fifun/crazy-kompetition-2017-games-playbook/">CKI
                                South</a></li>
                    </ul>
                </li>

                <li class="nav-link"><a href="{{ url('contact') }}">contact</a></li>
                <li class="nav-link"><a href="{{ url('gallery') }}">gallery</a></li>


                @if (! Auth::check())
                    <li class="nav-link" id="ModalLogin"><a>login</a></li>
                   <!-- <li class="nav-link"><a href="{{ url('/auth/register') }}">register</a></li> -->
                @else
                    <li class="nav-link"><a href="{{ url('settings') }}">account</a></li>
                    <li class="nav-link"><a href="{{ url('/auth/logout') }}">logout</a></li>
                @endif

            </ul>

        </div>

      </div>
    </div>


    <!-- Login button at the top of the page triggers the modal -->

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <ul class="modal-header"> <!-- A navigation tab for the modal -->
                <span class="close">&times;</span> <!-- An exit button for the modal -->
                <li class="modalTab" onclick="openTab('loginForm')"> <!-- Tab items -->
                    <a>Login</a>
                </li>
                <li class="modalTab" onclick="openTab('registerForm')">
                    <a>Register</a>
                </li>
            </ul>
            <div id="login" class="wrapper" style="padding: 5%">


                <!--Login form within the modal content -->
                <div id="loginForm" class="loginTab"> <!--Removed ID to have login box only -->
                    <form role="form" method="POST" action="{{ url('/auth/login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <h3>Account Access</h3>
                        <hr />
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}">
                        <label for="password">Password</label>
                        <input type="password" name="password">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                                <p></p>
                                <input type="checkbox" name="remember"> Take me to calendar
                            </label>
                        </div>
                        <br />
                        <button type="submit" class="button" id="loginButton">Login</button>
                        <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
                    </form>
                </div>

                <div id="registerForm" class="loginTab" style="display:none"> <!--Removed ID so that this div doesn't display as a column -->
                    <div class="wrapper" style="padding: 3%">
                        <h2>Let's get registered!</h2>

                        <p>You'll need to register for an account before being able to sign up for an event! We'll keep your information safe and only use it to give you updates on the events you signed up for!</p>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form role="form" method="POST" action="{{ url('/auth/register') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <label for="username">Username</label>
                            <input type="text" name="username" value="{{ old('username') }}">

                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}">

                            <label for="password">Password</label>
                            <input type="password" name="password">

                            <label for="password_confirm">Password Confirmation</label>
                            <input type="password" name="password_confirmation">

                            <label for="first_name">Phone Number</label>
                            <input type="text" name="phone" value="{{ old('phone') }}">

                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" value="{{ old('first_name') }}">

                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" value="{{ old('last_name') }}">

                            {!! Recaptcha::render() !!}
                            <br />

                            <input type="submit" class="button" value="Register" id="loginButton">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</header>
