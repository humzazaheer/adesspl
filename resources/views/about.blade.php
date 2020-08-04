@extends('base')

@section('content')

    <section class="banner about-banner">

        <div class="mask rgba-black-strong">

            <h2>
                <span class="banner-icon"><img src="{{asset('images/engineer-80px.png')}}" alt=""></span>
                <br>
                About Us
            </h2>
        </div>
    </section>
    <div class="container">

{{--        who we are?     --}}

    <section class="aboutUs">
            <h1 class="text-center mb-4 ad-black wow fadeInDown">Who We Are?</h1>
            <p class="wow fadeInUp"><strong>Aldin Engineering Solutions & Services <abbr
                        title="Private">PVT.</abbr> <abbr
                        title="Limited">LTD</abbr></strong> is an engineering services, manufacturing and construction company op­erating in Pakistan. We are in the business of delivering client-specific solutions for projects related to Energy, Infrastructure and Other Process industry. The package of services encompasses engineering, procurement, manufacturing, commission­ing and maintenance. We are a superior company renowned in the region for its quality, safety and on-time delivery of projects and products. All the faculties required to deliver turnkey projects, reside within the company. This unique strength enables us to provide solutions as EPCC (Engineering, Procurement, Construction and Commissioning) services provider to a host of clients.
                ADESSPL's employees qualified & highly experienced personnel are capable of or­ganizing, executing & handling of al kind of mechanics construction projects from start to completion. ADESSPL's design team is fully capable, competent of under­taking design, engineering of steel structures, Fabrication of any size & application.</p>
            <img src="{{asset('images/92c9b701-0f3d-42bc-823d-8d66e4c82918.JPG')}}" class="wow pulse img-fluid w-75 mx-auto d-block my-4 z-depth-1-half rounded"/>
        <p class="wow fadeInDown">ADESSPL is an <strong>QMS ISO 9001:2015, EMS ISO 14001:2015 and OHSMS ISO 45001:2018 </strong>certified company, providing quality services in the area of project management, engineering, manufacturing and construction to domestic and over­seas clients. ADESSPL project teams have internationally operated in all avenues of project implementation as general construction contractor, maintenance turn­around planner and turnkey (EPC) solution provider. ADESSPL's personnel have a long & distinguished record of teamwork developed over year of association at vari­ous projects.</p>
    </section>


{{--        CEO Statement   --}}

        <div class=" text-center text-lg-left">
            <h1 class="text-center mb-4 ad-black wow fadeInDown">CEO Statement</h1>

            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="row ">
                        <div class="col-lg-8  d-flex flex-column wow slideInLeft">
                            <h6 class="mb-3">We are continuing to build on the ADESSPL culture of empathy, confidence and
                                empowerment of the employees.</h6>
                            <p class=" mb-4">It is of my great pleasure to welcome you to Al Din Engineering Solutions & Services Pvt. Ltd. The
                                philosophy of our company is to do what we say we will do. It is important to note what has not
                                changed at ADESSPL, namely our commitments to providing exceptional client service and to living our
                                core values: Teamwork, Quality, Challenge, No Politics and Ethics.
                                At ADESSPL we adopt a long-term perspective approach. Looking ahead, we are focused on accelerating
                                the execution of our growth strategy while continuing to build on the strength of our company. While
                                we are proud of our past, we are looking forward to the future with optimism.
                                ADESSPL team are executing projects of strategic importance smartly across the country day in and day
                                out. Hailing from different locations and cultural diversity. As a leader of the team I am confident that
                                our vision, the synergies inherently available to our team and the commitment of our people will take
                                our ADESSPL family to new heights (INSHA ALLAH).
                                I am thankful to my staff and workers and hereby acknowledge their hard work. I also take this
                                opportunity to pledge that I and ADESSPL team will endeavor to devote our full efforts to exceed our
                                clients’ expectations and ultimately impact Pakistan’s economy in positive and meaningful ways.</p>
                            <div>
                                <p class="font-weight-bold lead mb-2"><strong>Muhammad Shakeel</strong></p>
                                <p class="font-weight-bold text-muted">CEO</p>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex mb-2 align-items-center">
                            <div class="avatar mx-4 w-100 white d-flex justify-content-center align-items-center wow slideInRight">
                                <img src="{{asset('images/ceo_snap.jpg')}}" class=" img-fluid z-depth-1" alt="CEO image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{{--        statements      --}}

        <section class="statements">
            <!-- Card group      -->
            <div class="card-group">



                <!-- Card -->
                <div class="card mb-6 mx-2 wow flipInX" data-wow-delay="0.5s">

                    <!-- Card image -->
                    <div class="card-icon mt-5 mb-4 text-center text-danger">
                        <i class="fa fa-bullseye-arrow fa-5x"></i>
                    </div>

                    <!-- Card content -->
                    <div class="card-body">
                        <!-- Title -->
                        <h3 class="card-title text-center ad-black">Mission Statement</h3>
                        <!-- Text -->
                        <p class="card-text">To harnesses the synergy by the skills and expertise of ADESSPL in carrying out turnkey engineering projects and is committed to achieving customer satisfaction by providing quality products and services in a cost-effective and environment friendly manner.</p>

                    </div>
                    <!-- Card content -->

                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="card mb-6 mx-2 wow flipInX" data-wow-delay="0.5s">

                    <!-- Card image -->
                    <div class="card-icon mt-5 mb-4 text-center text-warning">
                        <i class="fa fa-eye fa-5x"></i>
                    </div>

                    <!-- Card content -->
                    <div class="card-body">

                        <!-- Title -->
                        <h3 class="card-title text-center ad-black">Vision Statement</h3>
                        <!-- Text -->
                        <p class="card-text">To become the preferred leading Contractor and Supplier to Petrochemical, Oil & Gas, fertilizer, Power Generation Cement and Industrial Projects in Asia. Customers and partners will see us as integral to their success. We will anticipate their needs and deliver on every commitment we make. People will be proud to work at ADESSPL. We will create opportunities to achieve the extraordinary, and we will reward
                            success.</p>

                    </div>
                    <!-- Card content -->

                </div>
                <!-- Card -->

            </div>
            <!-- Card group -->
        </section>
    </div>
