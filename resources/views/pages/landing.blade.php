<!DOCTYPE html>
  <html class="no-js" lang="">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Landing | UCSD Circle K</title>
        <meta name="description" content="@yield('description')">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <!-- Font awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Palanquin" rel="stylesheet"> <!-- Body -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet"> <!-- Headings -->
    </head>

    <style>
        p {
            font-family: 'Palanquin', sans-serif;
        }

        button {
            margin: 1% 0;
        }

        img {
            max-width: 100%;
        }

        h1, h2 {
            font-family: 'Raleway', sans-serif;
        }

        div.row {
            padding:5% 0;
        }

        #bottom {
            margin-bottom: 5%;
        }

    </style>

    @section('description')
        Established in 1977, Circle K International at UCSD is a community service organization offering service, social and leadership opportunities.
    @endsection

    <body>

      <div class="jumbotron">
          <h1 class="text-center">UCSD CIRCLE K INTERNATIONAL</h1>
          <h1 class="text-center">2018-2019</h1>
          <h2 class="text-center">To Service and Beyond!</h2>
          <div class="container" align="center">
            <button type="button" class="btn btn-primary btn-lg">First Time Here?</button>
          </div>
          <div class="container" align="center">
              <div class="row">
                  <button type="button" class="btn btn-primary btn-lg">Home</button>
                  <button type="button" class="btn btn-primary btn-lg">Calendar</button>
                  <button type="button" class="btn btn-primary btn-lg">Resources</button>
                  <button type="button" class="btn btn-primary btn-lg">Login</button>
              </div>
          </div>
      </div>

      <div class="container-fluid">
          <h1 class="text-center">A community of leaders</h1>
          <div class="row">
              <div class="col-sm-4" align="center">
                  <i class="fas fa-home fa-5x"></i>
                  <h2>1</h2>
                  <h2>Organization</h2>
              </div>
              <div class="col-sm-4" align="center">
                  <i class="fas fa-globe fa-5x"></i>
                  <h2>13,000+</h2>
                  <h2>Worldwide Members</h2>
              </div>
              <div class="col-sm-4" align="center">
                  <i class="fas fa-hands-helping fa-5x"></i>
                  <h2>199,327+</h2>
                  <h2>Total Service Hours</h2>
              </div>
          </div>
          <div class="container" align="center">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip ex ea commodo consequat.</p>
          </div>
      </div>

    <h1 class="text-center">Our Tenets</h1>
      <div class="container">
          <div class="row">
              <div class="col-sm-4">
                  <img class src="{{ asset('images/Committees/SLSSP/SLSSPThumb17182.jpg') }}" alt="Avatar">
              </div>
              <div class="col-sm-8">
                  <h1 class="display-3">Service</h1>
                  <p class="lead">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                      et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                      aliquip ex ea commodo consequat.
                  </p>
              </div>
          </div>

          <div class="row">
              <div class="col-sm-8" align="right">
                  <h1 class="display-3">Leadership</h1>
                  <p class="lead">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                      et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                      aliquip ex ea commodo consequat.
                  </p>
              </div>
                  <div class="col-sm-4">
                      <img class src="{{ asset('images/Committees/SLSSP/SLSSPThumb17182.jpg') }}" alt="Avatar">
                  </div>
          </div>

          <div class="row">
              <div class="col-sm-4">
                  <img class src="{{ asset('images/Committees/SLSSP/SLSSPThumb17182.jpg') }}" alt="Avatar">
              </div>
              <div class="col-sm-8">
                  <h1 class="display-3">Fellowship</h1>
                  <p class="lead">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                      et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                      aliquip ex ea commodo consequat.
                  </p>
              </div>
          </div>
      </div>

    <div class="container">

    </div>

    <div class="container-fluid" align="center" id="bottom">

        <h1>Become a part of us</h1>
        <button type="button" class="btn btn-primary btn-lg">Get involved</button>
    </div>


    </body>


  </html>