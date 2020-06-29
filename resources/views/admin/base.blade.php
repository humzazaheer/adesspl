<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/global.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/admin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/mdb.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/fonts/font-awesome/css/all.css')}}">
    <link href="{{asset('css/font.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/animate.css')}}">
    <link href="{{asset('css/lightslider.min.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <aside class="navbar-expand bg-white position-fixed py-5 animate__animated animate__faster" id="nav">
        <div class="container-fluid">
            <div class="navbar-brand admin_logo m-auto px-5 font-weight-bold">
                <img src="{{asset('images/logo.png')}}" alt="ADESSPL" class="img-fluid w-75 m-auto"><br><span class="navbar-brand-text d-table m-auto">ADESSPL</span>
            </div>
            <ul class="list-unstyled mt-5">
                <li class="nav-item waves-effect">
                    <a class="nav-link ad-black" href="{{url('/admin')}}"><i class="fad fa-tachometer mr-2"></i> Dashboard</a>
                </li>
                <li class="nav-item waves-effect {{Request::path()==='/admin/clients'?'active':''}}"><a class="nav-link ad-black" href="{{url('/admin/clients')}}"><i class="fad fa-users mr-2"></i> Clients</a></li>
                <li class="nav-item waves-effect {{Request::path()==='/admin/gallery'?'active':''}}"><a class="nav-link ad-black" href="{{url('/admin/gallery')}}"><i class="fad fa-images mr-2"></i> Gallery</a></li>
                <li class="nav-item waves-effect {{Request::path()==='/admin/experience'?'active':''}}"><a class="nav-link ad-black" href="{{url('/admin/experience')}}"><i class="fad fa-tasks mr-2"></i> Work Experience</a></li>
            </ul>

        </div>
    </aside>


    <nav class="navbar py-3 position-sticky bg-white w-100" id="nav">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button">
                <i class="fas fa-bars toggler-icon toggler-icon-white"></i>
            </button>
            <div class="justify-content-end">
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link btn ad-orangeGradient" href="/"><i class="fas fa-globe"></i> Visit Website</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <main>
            @yield('content')
        </main>

    </div>


    <div class="body-overlay position-fixed"></div>

    <!--        javascript      -->

    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/fontawesome.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/datatables.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/mdb-datatables.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/lightslider.min.js')}}"></script>
</body>

</html>
