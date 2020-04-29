@extends('base')

@section('content')

    <section class="banner contact-banner">

        <div class="mask rgba-black-strong">
            <h2>Contact Us</h2>
        </div>
    </section>

<div class="container">
    <section class="contact-section my-5">

        <!-- Form with header -->
        <div class="card">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-8">

                    <div class="card-body form">

                        <!-- Header -->
                        <h3 class="mt-4"><i class="fas fa-envelope pr-2"></i>Write to us:</h3>

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="form-contact-name" class="form-control">
                                    <label for="form-contact-name" class="">Your name</label>
                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="form-contact-email" class="form-control">
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
                                    <input type="text" id="form-contact-phone" class="form-control">
                                    <label for="form-contact-phone" class="">Your phone</label>
                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="form-contact-company" class="form-control">
                                    <label for="form-contact-company" class="">Your company</label>
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
                                    <textarea id="form-contact-message" class="form-control md-textarea" rows="3"></textarea>
                                    <label for="form-contact-message">Your message</label>
                                    <a class="btn-floating btn-lg sunny-morning-gradient">
                                        <i class="far fa-paper-plane"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                    </div>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4">

                    <div class="card-body contact sunny-morning-gradient text-center h-100 white-text">

                        <h3 class="my-4 pb-2">Contact information</h3>
                        <ul class="text-lg-left list-unstyled ml-4">
                            <li>
                                <p><i class="fas fa-map-marker-alt pr-2"></i>New York, 94126, USA</p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone pr-2"></i>+ 01 234 567 89</p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope pr-2"></i>contact@example.com</p>
                            </li>
                        </ul>
                        <hr class="hr-light my-4">
                        <ul class="list-inline text-center list-unstyled">
                            <li class="list-inline-item">
                                <a class="p-2 fa-lg tw-ic">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="p-2 fa-lg li-ic">
                                    <i class="fab fa-linkedin-in"> </i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="p-2 fa-lg ins-ic">
                                    <i class="fab fa-instagram"> </i>
                                </a>
                            </li>
                        </ul>

                    </div>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Form with header -->

    </section>
    <section class="mt-5">
        <h2 class="my-5 text-center font-weight-bold">Our Location</h2>
        <iframe  width="100%" height="300" frameborder="0" class="map shadow mb-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3400.7787349353034!2d74.32010231481888!3d31.53023655381027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919049a66feaf99%3A0x9816f44b8f4fadb6!2sAl-Din+Engineering+Solutions+and+Services+(Pvt.)+Ltd.!5e0!3m2!1sen!2s!4v1471667656830"  allowfullscreen=""></iframe>
    </section>
</div>
