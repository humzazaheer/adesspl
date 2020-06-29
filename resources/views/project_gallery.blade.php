@extends('base')

@section('content')

    <section class="banner about-banner">

        <div class="mask rgba-black-strong">

            <h2>
                <span class="banner-icon"><img src="{{asset('images/engineer-80px.png')}}" alt=""></span>
                <br>
                Project Lightbox
            </h2>
        </div>
    </section>
    <div class="container">

        <section class="project-gallery-detail text-center">
            <h1 class="text-center mb-4 ad-black">
                Gallery Title
            </h1>


            <div class="row">
                <div class="col-md-12">

                    <div id="mdb-lightbox-ui"></div>

                    <div class="mdb-lightbox">

                        <figure class="col-lg-4 col-md-6">
                            <a href="{{asset('images/92c9b701-0f3d-42bc-823d-8d66e4c82918.JPG')}}" data-size="1600x1067">
                                <img alt="picture" src="{{asset('images/92c9b701-0f3d-42bc-823d-8d66e4c82918.JPG')}}"
                                     class="img-fluid">

                            </a>
                        </figure>

                        <figure class="col-lg-4 col-md-6">
                            <a href="{{asset('images/92c9b701-0f3d-42bc-823d-8d66e4c82918.JPG')}}" data-size="1600x1067">
                                <img alt="picture" src="{{asset('images/92c9b701-0f3d-42bc-823d-8d66e4c82918.JPG')}}"
                                     class="img-fluid">
                            </a>
                        </figure>

                        <figure class="col-lg-4 col-md-6">
                            <a href="{{asset('images/92c9b701-0f3d-42bc-823d-8d66e4c82918.JPG')}}" data-size="1600x1067">
                                <img alt="picture" src="{{asset('images/92c9b701-0f3d-42bc-823d-8d66e4c82918.JPG')}}"
                                     class="img-fluid">
                            </a>
                        </figure>








                    </div>

                </div>
            </div>

        </section>

    </div>
