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
    <link href="{{asset('css/font.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/global.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('fonts/font-awesome/css/all.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/lightslider.min.css')}}" rel="stylesheet" type="text/css">


</head>

<body >


<!-- Header -->

<nav class="navbar navbar-expand-lg navbar-dark transparent fixed-top scrolling-navbar " id="top">
    <div class="container">


        <a class="navbar-brand font-weight-bold" href="/">
            <img src="{{asset('images/logo.png')}}" alt="ADESSPL" class="img-fluid"><br><span class="navbar-brand-text">ADESSPL</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link waves-effect waves-light dropdown-toggle" href="{{url('solutionservice')}}" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Solution & Services</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="{{url('workshop')}}">Workshop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="{{url('experience')}}">Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="{{url('gallery')}}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="{{url('qhse_policy')}}">QHSE Policy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="{{url('about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="{{url('contact')}}">Contact</a>
                </li>

            </ul>

        </div>
    </div>
</nav>

<!-- header -->

@yield('content')
<div id="btnTop" class="fixed-action-btn smooth-scroll" style="bottom: 45px; right: 24px;display: none;">
    <button class="btn-floating btn-large ad-redBtn">
        <i class="fa fa-arrow-up"></i>
    </button>
</div>
<!-- Footer -->
<footer class="page-footer font-small pt-4 mt-5 ">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left ">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-6 col-sm-12 mt-lg-0 mt-3">

                <div class="footer-logo">
                        <img src="{{asset('images/logo.png')}}" alt="ADESSPL" class="img-fluid float-left"><h3 class="footer-logo-text ml-2 mt-1 float-left">Al-Din Engineering <br><span>Solutions & Services <abbr title="Private">PVT.</abbr> <abbr
                                title="Limited">LTD</abbr></span></h3>
                </div>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-lg-none pb-3">

            <!-- Grid column -->
            <div class="col-lg-3 col-sm-6 mb-lg-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">Get in touch</h5>

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
            <div class="col-lg-3 col-sm-6 mb-lg-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">Follow us</h5>

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

