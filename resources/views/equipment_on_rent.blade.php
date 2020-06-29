@extends('base')

@section('content')

    <section class="banner  equipment-on-rent-banner">

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
            <h1 class="text-center mb-5 ad-black">Equipment On Rent</h1>
            <h5>All mechanical equipment</h5>


            <div class="row mt-5 mep-row">

                <div class="col-md-6 col-xl-4 mb-4">
                    <div class="card text-center waves-effect">
                        <img class="card-img-top building-img" src="{{asset('images/solution&services/equipment-on-rent/crane-512.png')}}" alt="">
                        <div class="card-body">
                            <br>
                            <h5 class="font-weight-normal">Mechanical Crane</h5>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mb-4">
                    <div class="card text-center waves-effect">
                        <img class="card-img-top generator-img" src="{{asset('images/solution&services/equipment-on-rent/hydraulic-crane.png')}}" alt="">
                        <div class="card-body">
                            <br>
                            <h5 class="font-weight-normal">
                                Hydraulic Crane
                            </h5>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mb-4">
                    <div class="card text-center waves-effect">
                        <img class="card-img-top water-plant-img" src="{{asset('images/solution&services/equipment-on-rent/lifter.png')}}" alt="">
                        <div class="card-body">
                            <br>
                            <h5 class="font-weight-normal">
                               Fork Lifter
                            </h5>

                        </div>
                    </div>
                </div>



                <div class="col-md-6 col-xl-4 mb-4 mep-col d-block m-auto">
                    <div class="card text-center waves-effect">
                        <img class="card-img-top water-plant-img" src="{{asset('images/solution&services/equipment-on-rent/bobcat-lift.png')}}" alt="">
                        <div class="card-body">
                            <br>
                            <h5 class="font-weight-normal">
                              Bobcat Forklift
                            </h5>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mb-4 mep-col m-auto d-block">
                    <div class="card text-center waves-effect">
                        <img class="card-img-top water-plant-img" src="{{asset('images/solution&services/equipment-on-rent/compressor.png')}}" alt="">
                        <div class="card-body">
                            <br>
                            <h5 class="font-weight-normal">
                                Air Compressor
                            </h5>

                        </div>
                    </div>
                </div>

            </div>

        </section>
    </div>
