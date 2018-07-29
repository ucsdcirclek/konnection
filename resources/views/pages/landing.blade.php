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
    </head>

    @section('description')
        Established in 1977, Circle K International at UCSD is a community service organization offering service, social and leadership opportunities.
    @endsection

    <body>

      <div class="jumbotron">
          <h1 class="text-center">UCSD Circle K International</h1>
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
          <h1 class="text-center">Who are we?</h1>
          <div class="row">
              <div class="col-sm-4" align="center">
                  <i class="fas fa-home"></i>
                  <h2>1</h2>
                  <h2>Organization</h2>
              </div>
              <div class="col-sm-4" align="center">
                  <i class="fas fa-globe"></i>
                  <h2>13,000+</h2>
                  <h2>Worldwide Members</h2>
              </div>
              <div class="col-sm-4" align="center">
                  <i class="fas fa-hands-helping"></i>
                  <h2>199,327+</h2>
                  <h2>Total Service Hours</h2>
              </div>
          </div>
          <div class="container" align="center">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip ex ea commodo consequat.</p>
          </div>
      </div>

      <div class="container">
        <img src="{{ asset('images/Committees/SAAT/SAATCover17182.jpg') }}" />
      </div>

    <h1 class="text-center">What does UCSD CKI do?</h1>

    <div class="container">
        <div class="row">
            <div class="col-sm-4" align="center">
                <button type="button" class="btn btn-primary btn-lg">Service</button>
            </div>
            <div class="col-sm-4" align="center">
                <button type="button" class="btn btn-primary btn-lg">Leadership</button>
            </div>
            <div class="col-sm-4" align="center">
                <button type="button" class="btn btn-primary btn-lg">Fellowship</button>
            </div>
        </div>
    </div>

    <div class="container-fluid" align="center">
        <h1>Join our community</h1>
        <button type="button" class="btn btn-primary btn-lg">Get involved</button>
    </div>


    </body>


  </html>