@extends('base')
@section('title','ADESSPL - Gallery')
@section('content')

    <section class="banner gallery-banner">

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
            <h1 class="text-center mb-4 ad-black wow fadeInDown">Projects Lightbox</h1>
            <p class="wow fadeInUp">Check out our works gallery.</p>

            <div class="row">
                @if($galleries)
                    @foreach($galleries as $gallery)
                        <div class=" col-lg-4 col-md-6">
                            <div class="card card-cascade wider mt-2 mb-3 wow jackInTheBox ">

                                <!-- Card image -->

                                <div class="view view-cascade overlay ">
                                    <img class="card-img-top"
                                         src="{{asset('/uploads')}}/{{$gallery->gallery_thumbnail}}"
                                         alt="{{$gallery->gallery_thumbnail}}">
                                    <a href="project_gallery/{{$gallery->id}}">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                                <!-- Card content -->
                                <div class="card-body card-body-cascade text-center">

                                    <!-- Title -->
                                    <h4 class="card-title"><strong>{{$gallery->gallery_description}}</strong></h4>


                                    <!-- Text -->
                                    <a href="project_gallery/{{$gallery->id}}" class="btn btn-rounded ad-orangeGradient font-weight-bold">See
                                        More</a>
                                </div>

                            </div>

                        </div>
                    @endforeach
                @endif

    </div>


    </section>
    </div>


    {{-- Gallery --}}


