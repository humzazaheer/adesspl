@extends('base')

@section('content')

    <section class="banner workshop-banner">

        <div class="mask rgba-black-strong">

            <h2>
                <span class="banner-icon"><img src="{{asset('images/engineer-80px.png')}}" alt=""></span>
                <br>
                Workshop
            </h2>
        </div>
    </section>

    <section class="workshop">
        <div class="container">
            <section class="ss-section mt-2">
{{--                <h1 class="text-center ad-black ss-heading">Turnkey EPC Project & Solutions</h1>--}}

                <div class="row">
                    <div class="col-md-6 d-flex align-content-center flex-wrap">
                        <div class="ss-text rounded">
                            <p>ADESSPL offers turnkey project execution services involving management, design,
                                engineering, project procurement, construction and commissioning for the oil & gas, chemical,
                                petrochemical, power as well as industrial and domestic water treatment sector.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ss-img text-right">
                            <img src="{{asset('images/')}}"
                                 class="img-fluid w-75  z-depth-1 rounded"/>
                        </div>
                    </div>
                </div>


                <div class="row my-5">
                    <div class="col-md-6">
                        <div class="ss-img text-left">
                            <img src="{{asset('images/')}}"
                                 class="img-fluid w-75  z-depth-1 rounded"/>

                        </div>


                    </div>
                    <div class="col-md-6 d-flex align-content-center flex-wrap">
                        <div class="ss-text rounded">
                            <p>﻿ADESSPL management specializes in execution of turnkey projects on fast track basis and can
                                undertake, projects on Lump sum turnkey (LSTK) or Engineering, Procurement &
                                Construction (EPC) basis with full compliance to international standards and involving
                                technology from process licensors worldwide.
                            </p>
                        </div>
                    </div>

                </div>
                {{--            <div class="row">--}}
                {{--                <div class="col-12">--}}
                {{--                    <img src="{{asset('images/solution&services/turnkey_epc/turnkey3.jpg')}}"--}}
                {{--                         class="img-fluid  rounded "/>--}}
                {{--                </div>--}}
                {{--            </div>--}}


            </section>
        </div>


    </section>
