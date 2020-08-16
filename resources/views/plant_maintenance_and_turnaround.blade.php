@extends('base')

@section('content')

    <section class="banner  plant-maintenance-banner">

        <div class="mask rgba-black-strong">

            <h2>
                <span class="banner-icon"><img src="{{asset('images/engineer-80px.png')}}" alt=""></span>
                <br>

                Solution & Services
            </h2>
        </div>
    </section>
    <div class="container">
        <section class="ss-section mt-5 text-center">
            <h1 class="text-center mb-5 ad-black wow fadeInDown">Plant Maintenance & Turnaround</h1>
            <p class="mb-5 wow fadeInUp"><strong>ADSSPL</strong> management team possesses vast experience of plan, manage, execute large number of turnaround
                and maintenance contracts for power, (LNG) Liquefied Natural Gas, refining and petrochemical facilities.
            </p>

            <div class="row mb-4">
                <div class="col-lg-12 plant-img">
                    <div class="waves-light wow zoomIn">
                        <img src="{{asset('images/solution&services/plant-maintenance/plant1.jpg')}}"
                             class="img-fluid w-100 rounded"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 plant-img">
                    <div class="waves-light  wow zoomIn">
                        <img src="{{asset('images/solution&services/plant-maintenance/plant2.jpg')}}"
                             class="img-fluid rounded"/>
                    </div>
                </div>
                <div class="col-lg-6 plant-img">
                    <div class="waves-light  wow zoomIn">

                        <img src="{{asset('images/solution&services/plant-maintenance/plant3.jpg')}}"
                             class="img-fluid  z-depth-1 rounded"/>
                    </div>
                </div>
            </div>

        </section>
    </div>
