@extends('base')

@section('content')

    <section class="banner  installation-commissioning-banner">

        <div class="mask rgba-black-strong">

            <h2>
                <span class="banner-icon"><img src="{{asset('images/engineer-80px.png')}}" alt=""></span>
                <br>
                Solution & Services
            </h2>
        </div>
    </section>
    <div class="container">
        <section class="ss-section mt-5">
            <h1 class="text-center mb-5 ad-black">Installation & Commissioning of Plant Machinery</h1>

            <div class="row">
                <div class="col-lg-8 d-flex align-content-center flex-wrap">
                    <ul class=" installation-ul">
                        <li>Plant static equipment via heat exchangers, reactors, pressure vessels, furnaces.</li>
                        <li>Plant rotating and reciprocating machinery such as turbine, pumps, motors compressors, fans
                            and blowers.
                        </li>
                        <li>Thermal and hydral power plants, boiler houses, cooling towers, packaged units, skid mounted
                            machinery.
                        </li>
                        <li>Special purpose machinery.</li>
                        <li>Surface preparation, painting and insulation of pipe and vessels.</li>
                        <li>Testing, commissioning and assistance in startup of process plants.</li>
                        <li>Plant electrical and control equipment nad systems.</li>
                        <li>Turnkey installation and commissioning of process plants.</li>
                        <li>Operation and maintenance services of process and power generation plants.</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="ss-img waves-light">
                        <img src="{{asset('images/solution&services/installation/installation1.jpg')}}"
                             class="img-fluid w-100  z-depth-1 rounded"/>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-6 waves-light">
                    <div class="ss-img waves-light z-depth-1">
                        <img src="{{asset('images/solution&services/installation/installation3.jpeg')}}"
                             class="img-fluid   z-depth-1 rounded"/>
                    </div>
                </div>
                <div class="col-lg-6 waves-light installation-img ">
                    <div class="ss-img waves-light z-depth-1">
                        <img src="{{asset('images/solution&services/installation/installation2.jpeg')}}"
                             class="img-fluid  rounded"/>
                    </div>
                </div>
            </div>
        </section>
    </div>
