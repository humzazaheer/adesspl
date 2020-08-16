@extends('base')
@section('title','ADESSPL - Solution & Services')
@section('content')

    <section class="banner  om-services-banner">

        <div class="mask rgba-black-strong">

            <h2>
                <span class="banner-icon"><img src="{{asset('images/engineer-80px.png')}}" alt=""></span>
                <br>
                Solution & Services
            </h2>
        </div>
    </section>
    <div class="container">
        <section class="ss-section ">
            <h1 class="text-center mb-5 ad-black wow fadeInDown">Operation & Maintenance Services</h1>


            <div class="row mb-4">
                <div class="col-lg-7 d-flex align-content-center flex-wrap">
                    <ul class="installation-ul wow fadeInLeft">
                        <li>O&M estimating & budgeting</li>
                        <li>Startup and comissioning services</li>
                        <li>Plant staffing, training, personnel policies and procedures</li>
                        <li>Operating procedures</li>
                        <li>Long-term plant operation</li>
                        <li>Safety and quality control programs</li>
                        <li>Maintenance management programs</li>
                        <li>Plants improvements and upgrades</li>
                        <li>Replacement parts and field engineering services</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="ss-img waves-light om-img wow flipInY">
                        <img src="{{asset('images/solution&services/o&m/o&m2.JPG')}}"
                             class="img-fluid w-100  z-depth-1 rounded "/>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-6 waves-light">
                    <div class="ss-img waves-light z-depth-1 wow zoomIn">
                        <img src="{{asset('images/solution&services/o&m/o&m1.JPG')}}"
                             class="img-fluid   z-depth-1 rounded"/>
                    </div>
                </div>
                <div class="col-lg-6 waves-light installation-img">
                    <div class="ss-img waves-light z-depth-1 wow zoomIn">
                        <img src="{{asset('images/solution&services/o&m/o&m3.JPG')}}"
                             class="img-fluid  rounded"/>
                    </div>
                </div>
            </div>
        </section>
    </div>
