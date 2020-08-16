@extends('base')

@section('content')

    <section class="banner  infrastructure-banner">

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
            <h1 class="mb-5 ad-black wow fadeInDown">Infrastructure & MEP</h1>

{{--    Infrastructure services     --}}

            <h4 class="wow fadeInUp">Infrastructure Services</h4>
            <div class="row mt-5 ">
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card text-center waves-effect wow flipInX">
                        <img class="card-img-top building-img" src="{{asset('images/solution&services/infrastructure/building.png')}}" alt="">
                        <div class="card-body">
                            <br>
                            <h5 class="font-weight-normal">Commercial & Residential Buildings</h5>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card text-center waves-effect wow flipInX">
                        <img class="card-img-top generator-img" src="{{asset('images/solution&services/infrastructure/generator.png')}}" alt="">
                        <div class="card-body">
                            <br>
                            <h5 class="font-weight-normal">
                                Power Generation Works
                            </h5>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card text-center waves-effect wow flipInX">
                        <img class="card-img-top water-plant-img" src="{{asset('images/solution&services/infrastructure/water-plant.png')}}" alt="">
                        <div class="card-body">
                            <br>
                            <h5 class="font-weight-normal">
                                Water Treatment Plants
                            </h5>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card text-center waves-effect wow flipInX">
                        <img class="card-img-top building-manage-img" src="{{asset('images/solution&services/infrastructure/building-manage.png')}}" alt="">
                        <div class="card-body">
                            <br>
                            <h5 class="font-weight-normal">Building Management Systems</h5>


                        </div>
                    </div>
                </div>


            </div>



{{--MEP Services--}}
            <h4  class="mt-5 mb-5 wow fadeInUp">MEP Services</h4>
            <div class="row mt-5 mep-row mep">

                <div class="col-md-6 col-xl-4 mb-4">
                    <div class="card text-center waves-effect wow flipInX">
                        <img class="card-img-top building-img" src="{{asset('images/solution&services/infrastructure/fire-protection.png')}}" alt="">
                        <div class="card-body">
                            <br>
                            <h5 class="font-weight-normal">
                                Fire Protection and Security
                            </h5>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mb-4">
                    <div class="card text-center waves-effect wow flipInX">
                        <img class="card-img-top " src="{{asset('images/solution&services/infrastructure/ibms.png')}}" alt="">
                        <div class="card-body">
                            <br>
                            <h5 class="font-weight-normal">
                                Integrated Building Management Systems (IBMS)
                            </h5>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mb-4">
                    <div class="card text-center waves-effect wow flipInX">
                        <img class="card-img-top water-plant-img" src="{{asset('images/solution&services/infrastructure/ozone.png')}}" alt="">
                        <div class="card-body">
                            <br>
                            <h5 class="font-weight-normal">
                                Indoor air quality and Ozone systems
                            </h5>

                        </div>
                    </div>
                </div>



                <div class="col-md-6 col-xl-4  mep-col d-block mb-4 mx-auto">
                    <div class="card text-center waves-effect wow flipInX">
                        <img class="card-img-top water-plant-img" src="{{asset('images/solution&services/infrastructure/electrical.png')}}" alt="">
                        <br><br>
                        <div class="card-body">

                            <h5 class="font-weight-normal">
                                Electricals and Instrumentation

                            </h5>


                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mb-4 mep-col m-auto d-block">
                    <div class="card text-center waves-effect wow flipInX">
                        <img class="card-img-top water-plant-img" src="{{asset('images/solution&services/infrastructure/mechanical-jobs.png')}}" alt="">
                        <div class="card-body">
                            <h5 class="font-weight-normal">
                                 Heating, Ventilation, Air Conditioning & Refrigeration
                            </h5>

                        </div>
                    </div>
                </div>

            </div>



{{--     Images    --}}

            <div class="row mb-4 mt-5">
                <div class="col-lg-12 overhauling-img">
                    <div class="waves-light waves-effect waves-light wow zoomIn">
                        <img src="{{asset('images/solution&services/infrastructure/infrastructure3.jpg')}}" class="img-fluid z-depth-1 w-100 rounded">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mb-4 overhauling-img">
                    <div class="waves-light waves-effect waves-light wow zoomIn">
                        <img src="{{asset('images/solution&services/infrastructure/infrastructure1.jpg')}}" class="img-fluid z-depth-1 w-100 rounded">
                    </div>
                </div>
                <div class="col-lg-6 overhauling-img">
                    <div class="waves-light waves-effect waves-light wow zoomIn">
                        <img src="{{asset('images/solution&services/infrastructure/infrastructure2.jpg')}}" class="img-fluid z-depth-1 w-100 rounded">
                    </div>
                </div>
            </div>



        </section>
    </div>
