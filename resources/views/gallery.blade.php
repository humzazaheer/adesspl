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

        <section class="gallery text-center">
            <h1 class="text-center mb-4 ad-black">Projects Lightbox</h1>
            <p>Check out our works gallery.</p>

            <div class="row">
                <div class=" col-lg-4 col-md-6">
                    <div class="card card-cascade wider mt-2 mb-3 ">

                        <!-- Card image -->

                        <div class="view view-cascade overlay">
                            <img class="card-img-top" src="http://127.0.0.1:8000/images/92c9b701-0f3d-42bc-823d-8d66e4c82918.JPG" alt="Card image cap">
                            <a href="project_gallery">
                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">

                            <!-- Title -->
                            <h4 class="card-title"><strong>Project Title</strong></h4>


                            <!-- Text -->
                            <a href="project_gallery" class="btn btn-rounded ad-orangeGradient font-weight-bold">See More</a>
                        </div>

                    </div>

                </div>
                <div class=" col-lg-4 col-md-6">
                    <div class="card card-cascade wider mt-2 mb-3 ">

                        <!-- Card image -->

                        <div class="view view-cascade overlay">
                            <img class="card-img-top" src="http://127.0.0.1:8000/images/92c9b701-0f3d-42bc-823d-8d66e4c82918.JPG" alt="Card image cap">
                            <a href="project_gallery">
                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">

                            <!-- Title -->
                            <h4 class="card-title"><strong>Project Title</strong></h4>


                            <!-- Text -->
                            <a href="project_gallery" class="btn btn-rounded ad-orangeGradient font-weight-bold">See More</a>
                        </div>

                    </div>

                </div>
                <div class=" col-lg-4 col-md-6">
                    <div class="card card-cascade wider mt-2 mb-3 ">

                        <!-- Card image -->

                        <div class="view view-cascade overlay">
                            <img class="card-img-top" src="http://127.0.0.1:8000/images/92c9b701-0f3d-42bc-823d-8d66e4c82918.JPG" alt="Card image cap">
                            <a href="project_gallery">
                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">

                            <!-- Title -->
                            <h4 class="card-title"><strong>Project Title</strong></h4>


                            <!-- Text -->
                            <a href="project_gallery" class="btn btn-rounded ad-orangeGradient font-weight-bold">See More</a>
                        </div>

                    </div>

                </div>
            </div>


        </section>
    </div>


    {{-- Gallery --}}


