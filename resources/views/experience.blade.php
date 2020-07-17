@extends('base')

@section('title', 'Work Experience')

@section('content')
    <section class="banner experience-banner">

        <div class="mask rgba-black-strong">
            <h2>
                <span class="banner-icon"><img src="{{asset('images/engineer-80px.png')}}" alt=""></span>
                <br>
                Work Experience
            </h2>
        </div>
    </section>
    <section class="work-experience">
        <div class="container">
            <h1 class="text-center ad-black mb-5 wow fadeInDown">We Have Served At</h1>
            <div class="experience-block">

                @if ($exps)
                    @foreach($exps as $exp)
                        <blockquote class="blockquote ad-bq wow fadeInLeftBig">
                            <div class="company-logo float-left">
                                <img src="{{asset('/uploads')}}/{{$exp->client_logo}}" alt="{{$exp->client_logo}}" class="img-fluid">
                            </div>

                            <div class="exp">
                                <p class="mt-5">{{$exp->exp_description}}</p>
                            </div>
                        </blockquote>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
