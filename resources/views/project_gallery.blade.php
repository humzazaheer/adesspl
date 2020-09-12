@extends('base')
@section('title','ADESSPL - Project Lightbox')
@section('content')

    <section class="banner gallery-banner">

        <div class="mask rgba-black-strong">

            <h2>
                <span class="banner-icon"><img src="{{asset('images/engineer-80px.png')}}" alt=""></span>
                <br>
                Project Lightbox
            </h2>
        </div>
    </section>
    <div class="container">
        <section class="gallery-section">
        @if($gallery)
            <h1 class="text-center mb-5 ad-black wow fadeInDown">
                {{$gallery->gallery_description}}
            </h1>
        <div class="row">

                <!-- Grid row -->
                <div class="tile-gallery " id="gallery">

                    @foreach(explode('|', $gallery->gallery_images) as $g_image)

                        <div class="mb-3 pics rounded">

                            <img  alt="picture" src="{{asset('/uploads')}}/{{$g_image}}"
                                 class="img-fluid rounded z-depth-1 wow flipInX">
                        </div>
                    @endforeach


                </div>
            <div class="mx-auto my-5">
                <a href="{{url('gallery')}}" class="btn ad-orangeGradient" ><i class="fas fa-arrow-left"></i> Back To Lightbox</a>
            </div>

        </div>
        @endif
        </section>
    </div>
@endsection
