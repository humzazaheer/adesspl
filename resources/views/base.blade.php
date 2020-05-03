<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/global.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('fonts/font-awesome/css/all.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/lightslider.min.css')}}" rel="stylesheet" type="text/css">



</head>

<body>


    <!-- Header -->

    <nav class="navbar navbar-expand-lg navbar-dark transparent fixed-top scrolling-navbar ">
    	<div class="container">


        <a class="navbar-brand text-danger font-weight-bold" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                   <a class="nav-link waves-effect waves-light" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="/solutionservice">Solution & Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="/workshop">Workshop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="#">QHSE Policy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="/contact">Contact</a>
                </li>

            </ul>

        </div>
    		</div>
    </nav>

<!-- header -->

@yield('content')

    <!-- Footer -->
    <footer class="page-footer font-small pt-4 mt-5 ">

      <!-- Footer Links -->
      <div class="container-fluid text-center text-md-left ">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-6 mt-md-0 mt-3">

            <!-- Content -->
            <h5 class="text-uppercase">Footer Content</h5>
            <p>Here you can use rows and columns to organize your footer content.</p>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none pb-3">

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Footer Links -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->




        {{--javascript files--}}
        <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/lightslider.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
        </body>
</html>

