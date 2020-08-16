@extends('/admin/base')


@section('content')




        <div class="mt-5 pt-4 mb-2">
            <div class="digital-clock text-center"><span>00:00:00</span></div>
            </div>






        <!--Section: Block Content-->
        <section>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                    <div class="media blue-grey  text-white z-depth-1 rounded">
                        <i class="fad fa-handshake fa-3x special-color-dark z-depth-1 p-4 rounded-left text-white"></i>
                        <div class="media-body">
                            <p class="text-uppercase mt-2 mb-1 ml-3 text-white"><small>Clients</small></p>
                            <p class="font-weight-bold mb-1 ml-3 text-white value-count">
                                @if($clientsCount)
                                    {{$clientsCount->count()}}
                                @endif
                            </p>
                            <div class="progress md-progress  mb-0 rounded-0">
                                <div class="progress-bar special-color-dark" role="progressbar" style="width: {{$clientsCount->count() }}px" aria-valuenow="{{$clientsCount->count()}}"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                        </div>
                    </div>


                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="media blue lighten-2 text-white z-depth-1 rounded">
                        <i class="fad fa-eye fa-3x blue darken-4 z-depth-1 p-4 rounded-left text-white"></i>
                        <div class="media-body">
                            <p class="text-uppercase mt-2 mb-1 ml-3 text-white"><small>Site Visits</small></p>
                            <p class="font-weight-bold mb-1 ml-3 text-white value-count">323 540</p>
                            <div class="progress md-progress mb-0 rounded-0">
                                <div class="progress-bar blue darken-4" role="progressbar" style="width: 76%" aria-valuenow="76"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                        </div>
                    </div>


                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="media success-color text-white z-depth-1 rounded">
                        <i class="fad fa-tasks-alt fa-3x success-color-dark z-depth-1 p-4 rounded-left text-white"></i>
                        <div class="media-body">
                            <p class="text-uppercase mt-2 mb-1 ml-3 text-white"><small>Projects</small></p>
                            <p class="font-weight-bold mb-1 ml-3 text-white value-count">

                                @if($projectsCount)
                                    {{$projectsCount->count()}}
                                @endif

                            </p>
                            <div class="progress md-progress mb-0 rounded-0">
                                <div class="progress-bar success-color-dark" role="progressbar" style="width: {{$projectsCount->count()}}px" aria-valuenow="{{$projectsCount->count()}}"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                        </div>
                    </div>


                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Blocks Content-->






@endsection
