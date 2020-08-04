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
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css">


</head>

<body>


<!-- Header -->

<nav class="navbar navbar-expand-lg navbar-dark transparent fixed-top scrolling-navbar " id="top">
    <div class="container">


        <a class="navbar-brand font-weight-bold" href="/">
            <img src="{{asset('images/logo.png')}}" alt="ADESSPL" class="img-fluid"><br><span class="navbar-brand-text">ADESSPL</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""><i class="fas fa-bars custom-toggler-icon "></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light {{Request::path()==='/'?'nav-active':''}}"
                       href="{{url('/')}}">Home</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light {{Request::path()==='workshop'?'nav-active':''}}"
                       href="{{url('workshop')}}">Workshop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light {{Request::path()==='experience'?'nav-active':''}}"
                       href="{{url('experience')}}">Experience</a>
                </li>
                <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link dropdown-toggle ss-link" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Solutions & Services
                        <span class="sr-only">(current)</span>
                    </a>
                    <div class="dropdown-menu  mega-menu v-2 z-depth-1 indigo py-5 px-3 ss-dropdown"
                         aria-labelledby="navbarDropdownMenuLink2">
                        <div class="row">
                            <div class="col-md-4 col-xl-4 sub-menu mb-xl-0 mb-4 pl-5">

                                <ul class="list-unstyled">
                                    <li>
                                        <a class="menu-item pl-0" href="{{url('turnkey_epc_project')}}">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>
                                            Turnkey EPC Project & Solutions
                                        </a>
                                    </li>
                                    <li>
                                        <a class="menu-item pl-0" href="{{url('fabrication_and_plant_eraction')}}">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>
                                            Fabrication & Plant Eraction
                                        </a>
                                    </li>
                                    <li>
                                        <a class="menu-item pl-0"
                                           href="{{url('installation_and_commissioning_of_plant_machinery')}}">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>
                                            Installation & Commissioning of Plant Machinery
                                        </a>
                                    </li>
                                    <li>
                                        <a class="menu-item pl-0" href="{{url('o_m_services')}}">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>
                                            O&M Services
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-md-4 col-xl-4 sub-menu mb-xl-0 mb-4">

                                <ul class="list-unstyled">
                                    <li>
                                        <a class="menu-item pl-0" href="{{url('manufacturing_of_machine_element')}}">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>
                                            Manufacturing of Machine Element
                                        </a>
                                    </li>

                                    <li>
                                        <a class="menu-item pl-0"
                                           href="{{url('overhauling_of_diesel_engine_and_parts')}}">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>
                                            Overhauling of Diesel Engine & Parts
                                        </a>
                                    </li>
                                    <li>
                                        <a class="menu-item pl-0" href="{{url('design_engineering')}}">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>
                                            Design Engineering
                                        </a>
                                    </li>
                                    <li>
                                        <a class="menu-item pl-0" href="{{url('project_management_consultancy')}}">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>
                                            Project Management Consultancy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-xl-4 sub-menu mb-md-0 mb-xl-0 mb-4 pr-5">

                                <ul class="list-unstyled">
                                    <li>
                                        <a class="menu-item pl-0" href="{{url('plant_maintenance_and_turnaround')}}">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>
                                            Plant Maintenance & Turnaround
                                        </a>
                                    </li>

                                    <li>
                                        <a class="menu-item pl-0" href="{{url('infrastructure_and_mep')}}">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>
                                            Infrastructure & MEP
                                        </a>
                                    </li>
                                    <li>
                                        <a class="menu-item pl-0" href="{{url('manpower_supply')}}">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>
                                            Manpower Supply
                                        </a>
                                    </li>
                                    <li>
                                        <a class="menu-item pl-0" href="{{url('equipment_on_rent')}}">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>
                                            Equipment on Rent
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light {{Request::path()==='gallery'?'nav-active':''}}"
                       href="{{url('gallery')}}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light {{Request::path()==='qhse'?'nav-active':''}}"
                       href="{{url('qhse')}}">QHSE Policy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light {{Request::path()==='career'?'nav-active':''}}"
                       href="{{url('career')}}">Career</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light {{Request::path()==='about'?'nav-active':''}}"
                       href="{{url('about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light {{Request::path()==='contact'?'nav-active':''}}"
                       href="{{url('contact')}}">Contact</a>
                </li>

            </ul>

        </div>
    </div>
</nav>

<!-- header -->

@yield('content')
<div class="fixed-action-btn smooth-scroll" style="bottom: 45px; right: 24px;">
    <button id="btnTop" class="btn-floating btn-large ad-redBtn">
        <i class="fa fa-arrow-up"></i>
    </button>
</div>
<!-- Footer -->
<footer class="page-footer font-small pt-4 mt-5 ">

    <!-- Footer Links -->
    <div class="container-fluid  text-md-left ">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-5 col-sm-12 mt-lg-0 mt-3">
                <a href="/" class="d-block">
                    <div class="footer-logo">

                        <div class="footer-logo navbar-brand float-left"><img src="{{asset('images/logo.png')}}"
                                                                              alt="ADESSPL"
                                                                              class="img-fluid float-left">
                            <br>
                            <span class="navbar-brand-text">ADESSPL</span>
                        </div>
                        <h3 class="footer-logo-text ml-2 mt-1 float-left">Al-Din Engineering <br><span>Solutions & Services <abbr
                                    title="Private">PVT.</abbr> <abbr
                                    title="Limited">LTD</abbr></span>
                        </h3>

                    </div>
                </a>
                <br><br><br><br>
                <p class="footer-intro  text-white-50">
                    ADESSPL is an engineering services, manufacturing and construction company op­erating in Pakistan.
                    We are in the business of delivering client-specific solutions for projects related to Energy,
                    Infrastructure and Other Process industry.
                </p>


            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-lg-none pb-3">

            <!-- Grid column -->
            <div class="col-lg-4 col-sm-6 mb-lg-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">Get in touch</h5>
                <ul class="text-lg-left list-unstyled mt-4">
                    <li>
                        <h6 class="mb-2 text-white-50"><i class="fas fa-map-marker-alt pr-2 text-white-50"></i>Address
                        </h6>
                        <p class="footer-address text-white-50"> Office # 6, 7th
                            Floor, Goldmine Plaza, Ferozpur Road, Lahore, Punjab, Pakistan، Ichhra Lahore, Punjab 54600
                        </p>
                    </li>
                    <li>
                        <h6 class="mb-2 text-white-50"><i class="fas fa-phone pr-2 text-white-50"></i>Office Phone</h6>
                        <p class="text-white-50"> +01 234 567 89</p>
                    </li>
                    <li>
                        <h6 class="mb-2 text-white-50"><i class="fas fa-envelope pr-2 text-white-50"></i>Email</h6>
                        <p class="text-white-50"> contact@example.com</p>
                    </li>
                </ul>


            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-3 col-sm-6 mb-lg-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">Follow us</h5>

                <ul class="list-unstyled footer-social-icons">
                    <li>
                        <a href="http://www.facebook.com/ADESSPL"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="http://www.linkedin.com/company/al-din-engineering-solutions-&-services-pvt.-ltd.?report%2Esuccess=KJ_KkFGTDCfMt-A7wV3Fn9Yvgwr02Kd6AZHGx4bQCDiP6-2rfP2oxyVoEQiPrcAQ7Bf"><i
                                class="fab fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCtzWjVzXEvRSfCQhcncMZNA"><i
                                class="fab fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="http://www.twitter.com/ADESSPL"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="skype:aldinengineering?"><i class="fab fa-skype"></i></a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© {{date('Y')}} Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> ADESSPL</a>
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
<script type="text/javascript" src="{{asset('js/wow.js')}}"></script>




</body>
</html>

