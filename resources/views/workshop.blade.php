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
        <div class="container text-justify">

            {{--            <h1 class="text-center mb-4"></h1>--}}
            {{--            <p>﻿ADESSPL by virtue of its unique advantage of having a diversified workshop to meet the challenging tasks--}}
            {{--                and to provide quality works.--}}
            {{--                Our goal is to provide superior project management services from project initiation to completion on a--}}
            {{--                turnkey basis, with total commitment towards; timeliness, safety and quality.--}}
            {{--            </p>--}}
            {{--            <img src="{{asset('images/92c9b701-0f3d-42bc-823d-8d66e4c82918.JPG')}}"--}}
            {{--                 class="img-fluid w-75 mx-auto d-block my-4 shadow"/>--}}
            {{--            <p>﻿From inspection, the company has enjoyed the continual growth and expanded its capabilities to provide a--}}
            {{--                full range services in facrication, installation, commissioning and erection of mechanical and--}}
            {{--                electrical construction project.</p>--}}
            {{--            <p>--}}
            {{--                The company has successfully executed many Power-plant, Petrochemical, Food, Cement, Fertilizer,--}}
            {{--                Chemical, Pipe Work, Oil Storage, Structure Steel Fabrication & Installation and Firefighting Networks--}}
            {{--                on a turkey basis.--}}
            {{--            </p>--}}


            <div class="row">
                <div class="col-md-6">
                    <div class="workshop-text rounded">
                        <p>﻿ADESSPL by virtue of its unique advantage of having a diversified workshop to meet the
                            challenging tasks
                            and to provide quality works.
                        </p>

                        <p>
                            Our goal is to provide superior project management services from project initiation to
                            completion on a
                            turnkey basis, with total commitment towards; timeliness, safety and quality.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="workshop-img">
                        <img src="{{asset('images/92c9b701-0f3d-42bc-823d-8d66e4c82918.JPG')}}"
                             class="img-fluid w-75 float-right z-depth-1 rounded"/>
                    </div>
                </div>
            </div>


            <div class="row my-5">
                <div class="col-md-6">
                    <div class="workshop-img">
                        <img src="{{asset('images/92c9b701-0f3d-42bc-823d-8d66e4c82918.JPG')}}"
                             class="img-fluid w-75 float-left z-depth-1 rounded"/>

                    </div>


                </div>
                <div class="col-md-6">
                    <div class="workshop-text rounded">
                        <p>﻿From inspection, the company has enjoyed the continual growth and expanded its capabilities
                            to
                            provide a full range services in facrication, installation, commissioning and erection of
                            mechanical and
                            electrical construction project.</p>

                        <p>
                            Our goal is to provide superior project management services from project initiation to
                            completion on a
                            turnkey basis, with total commitment towards; timeliness, safety and quality.
                        </p>
                    </div>
                </div>

            </div>

        </div>


    </section>
