@extends('base')

@section('title', 'Work Experience')

@section('content')
    <section class="banner experience-banner">

        <div class="mask rgba-black-strong">

            <h2>
                <span class="banner-icon"><i class="fad fa-cogs  text-warning" ></i></span>
                <br><br>
                Work Experience
            </h2>
        </div>
    </section>
    <section class="work-experience">
        <div class="container">
            <h1 class="text-center ad-black mb-5">We Have Served At</h1>
            <div class="experience-block">


                    <blockquote class="blockquote ad-bq">
                        <div class="company-logo float-left">
                            <img src="{{asset('images/logo.png')}}" alt="" class="img-fluid">
                        </div>

                        <div class="exp">
                            <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        </div>
                    </blockquote>

            </div>
        </div>
    </section>
@endsection
