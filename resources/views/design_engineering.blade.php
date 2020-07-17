@extends('base')

@section('content')

    <section class="banner  design-engineeirng-banner">

        <div class="mask rgba-black-strong">

            <h2>
                <span class="banner-icon"><img src="{{asset('images/engineer-80px.png')}}" alt=""></span>
                <br>
                Solution & Services
            </h2>
        </div>
    </section>
    <div class="container text-center">
        <section class="ss-section mt-5">
            <h1 class="text-center mb-5 ad-black wow fadeInDown">Design Engneeirng</h1>

            <p class="mb-5 wow fadeInUp">
                ADESSPL team is well focused and vibrant work force of professionals having cross industry
                experience. Using advance technology, ADESSPL provides engineering solutions involving
                technology evaluation and feasibility studies, Front End Engineering & Design package,
                steady state & dynamic simulation, advanced process control & optimizing as well as detailed
                engineering service comprising of piping, machinery & equipment, civil & structural,
                electrical, instrumentation and control design.

            </p>

            <div class="row">
                <div class="col-lg-4 design-engineering-img">
                    <div class="waves-light z-depth-1 wow zoomIn">
                        <img src="{{asset('images/solution&services/design-engineering/design-engineering1.jpg')}}"
                             class="img-fluid  rounded"/>
                        </div>
                </div>

                <div class="col-lg-4 design-engineering-img wow zoomIn">
                    <div class="waves-light z-depth-1">
                        <img src="{{asset('images/solution&services/design-engineering/design-engineering2.jpg')}}"
                             class="img-fluid  rounded"/>
                    </div>
                </div>

                <div class="col-lg-4 design-engineering-img wow zoomIn">
                    <div class="waves-light z-depth-1">
                        <img src="{{asset('images/solution&services/design-engineering/design-engineering3.jpg')}}"
                             class="img-fluid rounded"/>
                    </div>
                </div>

            </div>
        </section>
    </div>
