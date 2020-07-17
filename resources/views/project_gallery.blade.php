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
        @if($gallery)

            <section class="project-gallery-detail text-center">
                <h1 class="text-center mb-5 ad-black wow bounceInDown">
                    {{$gallery->gallery_description}}
                </h1>


                <div class="row">
                    <div class="col-md-12">
                    <div id="mdb-lightbox-ui"></div>


                    <div class="mdb-lightbox">
                        @foreach(explode('|', $gallery->gallery_images) as $g_image)
                            <figure class="col-lg-4 col-md-6 wow flipInX">
                                <a href="{{asset('/uploads')}}/{{$g_image}}" data-size="1600x1067">
                                    <img alt="picture" src="{{asset('/uploads')}}/{{$g_image}}" class="img-fluid rounded z-depth-1">
                                </a>
                            </figure>
                        @endforeach
                    </div>
                    </div>
                </div>
            </section>
        @endif
    </div>
@endsection
