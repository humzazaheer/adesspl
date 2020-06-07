@extends('base')

@section('title','Home')

@section('content')

    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item active">
                <div class="view"
                     style="background-image: url('https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg'); background-repeat: no-repeat; background-size: cover">
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                        <div class="text-center white-text mx-5">
                            <h1 class="mb-4">
                                <strong>ALDIN ENGINEERING</strong>
                            </h1>
                        </div>
                    </div>

                </div>
            </div>
            <!--/First slide-->
            <!--Second slide-->
            <div class="carousel-item">

                <div class="view"
                     style="background-image: url('https://mdbootstrap.com/img/Photos/Slides/img%20(16).jpg'); background-repeat: no-repeat; background-size: cover">
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                        <div class="text-center white-text mx-5">
                            <h1 class="mb-4">
                                <strong>Learn Bootstrap 4 with MDB</strong>
                            </h1>
                        </div>
                    </div>


                </div>
            </div>
            <!--/Second slide-->
            <!--Third slide-->
            <div class="carousel-item">

                <div class="view"
                     style="background-image: url('https://mdbootstrap.com/img/Photos/Slides/img%20(31).jpg'); background-repeat: no-repeat; background-size: cover">
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                        <div class="text-center white-text mx-5">
                            <h1 class="mb-4">
                                <strong>Learn Bootstrap 4 with MDB</strong>
                            </h1>
                        </div>
                    </div>


                </div>
            </div>

            <!--/Third slide-->
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->


    {{--  Why Aldin?  --}}
    <section class="why-aldin">
        <div class="container ">
            <h1 class="text-center ad-black">Why ADESSPL?</h1>

            <div class="row  why-aldin-row">

                <div class="col-md-6 col-xl-4 mb-4">
                    <div class="media">
                        <div class="mr-4">
                            <span class="text-dark"><i class="fad fa-child fa-2x"></i></span>
                        </div>
                        <div class="media-body">
                            <h6 class="font-weight-bold">An Unusual Exciting Company </h6>
                            <p class="">Where people are empopwered to do business with an enterpreneure
                                flair.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4 mb-4">
                    <div class="media">
                        <div class="mr-3">
                            <span class="text-warning"><i class="fas fa-users fa-2x"></i></span>
                        </div>
                        <div class="media-body">
                            <h6 class="font-weight-bold">Organizational Culture</h6>
                            <p class="">A values driven organizational culture encouraging innovation.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4 mb-4">
                    <div class="media">
                        <div class="mr-4">
                            <span class="text-danger"><i class="fad fa-industry-alt fa-2x"></i></span>
                        </div>
                        <div class="media-body">
                            <h6 class="font-weight-bold">Offer One Window Solution</h6>
                            <p class="">To it's customers in several engineering disciplines &
                                technologies.</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-xl-4 mb-4">
                    <div class="media">
                        <div class="mr-3">
                            <span class="text-dark"><i class="fad fa-tasks-alt fa-2x"></i></span>
                        </div>
                        <div class="media-body">
                            <h6 class="font-weight-bold">Excellent Knowledge Of It's Management</h6>
                            <p class="">Excellent knowledge of it's management team to develop & implement
                                projects.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4 mb-4">
                    <div class="media">
                        <div class="mr-4">
                            <span class="text-warning"><i class="fad fa-certificate fa-2x"></i></span>
                        </div>
                        <div class="media-body">
                            <h6 class="font-weight-bold">Strong Network for Sourcing </h6>
                            <p class="">Strong Network for sourcing of materials & equipment internationally &
                                in Pakistan.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4 mb-4">
                    <div class="media">
                        <div class="mr-3">
                            <span class="text-danger"><i class="fas fa-hand-receiving fa-2x"></i></span>
                        </div>
                        <div class="media-body">
                            <h6 class="font-weight-bold">Ability To Assimilate</h6>
                            <p class="">Ability to assimilate new technologies and work in diversified
                                multicultural environment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mb-4">
                    <div class="media">
                        <div class="mr-3">
                            <span class="text-dark"><i class="fad fa-star-half fa-2x"></i></span>
                        </div>
                        <div class="media-body">
                            <h6 class="font-weight-bold">Experties In Both Fields</h6>
                            <p class="">Experties in both green field and brown field project execution.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mb-4">
                    <div class="media">
                        <div class="mr-4">
                            <span class="text-warning"><i class="fas fa-gem fa-2x"></i></span>
                        </div>
                        <div class="media-body">
                            <h6 class="font-weight-bold">Uniqueness</h6>
                            <p class="">ADESSPL provides unique project management solutions & is capable to
                                integrate all phases of project execution.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mb-4">
                    <div class="media">
                        <div class="mr-4">
                            <span class="text-danger"><i class="fas fa-heartbeat fa-2x"></i></span>
                        </div>
                        <div class="media-body">
                            <h6 class="font-weight-bold">Focus On Human Life</h6>
                            <p class="">Offers uncompromised focus on human life & sustainable development
                                through time tested state of art integrated QHSE System.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mb-4">
                    <div class="media">
                        <div class="mr-4">
                            <span class="text-dark"><i class="fad fa-hiking fa-2x"></i></span>
                        </div>
                        <div class="media-body">
                            <h6 class="font-weight-bold">Coaching & Nurturing Human Development</h6>
                            <p class="">Coaching & nurturing human development both from the technical &
                                general management perspectives on defined career paths.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mb-4">
                    <div class="media">
                        <div class="mr-4">
                            <span class="text-warning"><i class="fas fa-braille fa-2x"></i></span>
                        </div>
                        <div class="media-body">
                            <h6 class="font-weight-bold">Processes Different Indigenous Developed Areas</h6>
                            <p class="">Project management, engineering, manufacturing and construction
                                capabilities which offer best value for money-based upon in-house multi-disciplinary
                                engineering design resourse. </p>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>


    {{--  Core Values  --}}
    <section class=" core-values section-highlight">
        <div class="container">
            <h1 class="text-center ad-black">Core Values</h1>

            <div class="row my-5">
                <div class="col-lg-8 mx-auto">

                    <ol class="timeline">
                        <li class="timeline-element">

                            <h5 class="font-weight-bold  mb-3">
                                <span class="text-danger mr-4"><i class="fad fa-users fa-2x"></i></span>
                                Team Work
                            </h5>
                            <p class="">We are an employee-owned company that encourages differing ideas &
                                fosters partnerships through communication, mutual respect, cooperation & trust.</p>
                        </li>

                        <li class="timeline-element">
                            <h5 class="font-weight-bold  mb-3">
                                Quality
                                <span class="text-warning ml-4"><i class="fad fa-award fa-2x"></i></span>

                            </h5>
                            <p class="">We are passionate about excellence and doing our work right the first
                                time. Our reputation depends on our delievered value in the eyes of every customer and
                                community.</p>
                        </li>

                        <li class="timeline-element">

                            <h5 class="font-weight-bold  mb-3">
                                <span class="text-danger mr-4"><i class="fad fa-people-carry fa-2x"></i></span>
                                Challenge
                            </h5>
                            <p class="">We constantly challenge ourselves to come up with solutions that make us unique
                                & leade us to innovation.</p>
                        </li>

                        <li class="timeline-element">
                            <h5 class="font-weight-bold  mb-3">
                                No Politics
                                <span class="text-warning ml-4"><i class="fad fa-landmark fa-2x"></i></span>

                            </h5>
                            <p class="">As a team we struggle for results & collective success. Internal politics is not
                                bearable.</p>
                        </li>
                        <li class="timeline-element">

                            <h5 class="font-weight-bold  mb-3">
                                <span class="text-danger     mr-4"><i class="fad fa-balance-scale fa-2x"></i></span>
                                Ethics
                            </h5>
                            <p class="">We are uncompromising in our integrity, honesty & fairness.</p>
                        </li>

                    </ol>

                </div>
            </div>

        </div>
    </section>
    {{--End Core Values --}}


    {{--    clients--}}
    <section id="clients" class="our-clients container-fluid">

        <h1 class="text-center ad-black">Our Clients</h1>

        <div class="container my-5">

            <ul id="client_slider" class="client_slider">
                @if($clientLogos)
                    @foreach($clientLogos as $client_logo)
                        <li>
                            <img src="{{asset('/uploads')}}/{{$client_logo->client_logo}}"
                                 alt="{{$client_logo->client_logo}}" class="w-50 img-fluid">
                        </li>
                    @endforeach
                @endif
            </ul>

        </div>

    </section>
    {{--    end clients--}}
@endsection
