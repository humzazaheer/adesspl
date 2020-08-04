@extends('base')

@section('content')

    <section class="banner career-banner">

        <div class="mask rgba-black-strong">

            <h2>
                <span class="banner-icon"><img src="{{asset('images/engineer-80px.png')}}" alt=""></span>
                <br>
                Career
            </h2>
        </div>
    </section>

    <div class="container">

        <div class="container">
            <section class="contact-section mt-5">
                <h1 class="text-center mb-5 ad-black wow fadeInDown">Join ADESSPL</h1>
                <p class="text-center mb-5">
                    At Aldin Engineering Solution & Services (Pvt) Limited, we seek Talented, Proficient and Industrious Team Members,
                    who can excel in competitive environments and are flexible to work at multiple projects location.
                    If you are interested to join us, send us your resume or Contact us for further details.</p>

                <div class="card wow zoomIn">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-lg-12">

                            <div class="card-body form">

                                <!-- Header -->
                                <h3 class="mt-4 ad-black"><i class="fad fa-file-upload pr-2"></i>Drop Your CV</h3>

                                <form action="" method="post">
                                @csrf
                                <!-- Grid row -->

                                    <div class="row">

                                        <!-- Grid column -->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="form-contact-name" class="form-control"
                                                       name="name">
                                                <label for="form-contact-name" class="">Your name</label>
                                            </div>
                                        </div>
                                        <!-- Grid column -->

                                        <!-- Grid column -->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="email" id="form-contact-email" class="form-control"
                                                       name="email">
                                                <label for="form-contact-email" class="">Your email</label>
                                            </div>
                                        </div>
                                        <!-- Grid column -->

                                    </div>
                                    <!-- Grid row -->

                                    <!-- Grid row -->
                                    <div class="row">

                                        <!-- Grid column -->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="number" id="form-contact-phone" class="form-control"
                                                       name="phone">
                                                <label for="form-contact-phone" class="">Your phone</label>
                                            </div>
                                        </div>
                                        <!-- Grid column -->

                                        <!-- Grid column -->
                                        <div class="md-form file-field">
                                            <div class="btn ad-orangeGradient btn-sm float-left text-white">
                                                <span><i class="fas fa-cloud-upload-alt mr-2" aria-hidden="true"></i>Choose file</span>
                                                <input type="file" name="gallery_thumbnail" id="gallery_thumbnail" required>
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text"
                                                       placeholder="Upload Your CV">
                                            </div>

                                        </div>
                                        <!-- Grid column -->

                                    </div>
                                    <!-- Grid row -->

                                    <!-- Grid row -->
                                    <div class="row">

                                        <!-- Grid column -->
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <textarea id="form-address" class="form-control md-textarea"
                                                          rows="3" name="address"></textarea>
                                                <label>Your Address</label>
                                                <button type="submit" name="sendCV"
                                                        class="btn-floating btn-lg ad-redBtn">
                                                    <i class="fad fa-paper-plane"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- Grid column -->

                                    </div>
                                    <!-- Grid row -->
                                </form>
                            </div>

                        </div>
                        <!-- Grid column -->


                    </div>
                    <!-- Grid row -->

                </div>


            </section>

        </div>
    </div>
@endsection
