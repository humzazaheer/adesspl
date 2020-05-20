@extends('base')

@section('content')

    <section class="banner about-banner">

        <div class="mask rgba-black-strong">

            <h2>
                <span class="banner-icon"><img src="{{asset('images/engineer-80px.png')}}" alt=""></span>
                <br>
                Gallery
            </h2>
        </div>
    </section>
    <div class="container">

        <section class="project-gallery text-center">
            <h1 class="text-center mb-4 ad-black">Projects Lightbox</h1>
            <p>Check out our works gallery.</p>

            <div class="row">




                <figure class="col-md-4  view">
                    <a href="{{url('/project_gallery')}}" data-size="1600x1067">
                        <img src="{{asset('images/umr.JPG')}}"
                             alt="placeholder"
                             class="img-fluid  ">
                    </a>

                </figure>

                <figure class="col-md-4 view overlay  ">
                    <a href="{{url('/project_gallery')}}" data-size="1600x1067">
                        <img src="{{asset('images/umr.JPG')}}"
                             alt="placeholder"
                             class="img-fluid"
                        >
                    </a>
                </figure> <figure class="col-md-4 view overlay  ">
                    <a href="{{url('/project_gallery')}}" data-size="1600x1067">
                        <img src="{{asset('images/umr.JPG')}}"
                             alt="placeholder"
                             class="img-fluid"
                        >
                    </a>
                </figure> <figure class="col-md-4 view overlay  ">
                    <a href="{{url('/project_gallery')}}" data-size="1600x1067">
                        <img src="{{asset('images/umr.JPG')}}"
                             alt="placeholder"
                             class="img-fluid"
                        >
                    </a>
                </figure> <figure class="col-md-4 view overlay  ">
                    <a href="{{url('/project_gallery')}}" data-size="1600x1067">
                        <img src="{{asset('images/umr.JPG')}}"
                             alt="placeholder"
                             class="img-fluid"
                        >
                    </a>
                </figure> <figure class="col-md-4 view overlay  ">
                    <a href="{{url('/project_gallery')}}" data-size="1600x1067">
                        <img src="{{asset('images/umr.JPG')}}"
                             alt="placeholder"
                             class="img-fluid"
                        >
                    </a>
                </figure>
                </div>

        </section>
    </div>


    {{-- Gallery --}}


