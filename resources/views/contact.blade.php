@extends('base')

@section('title','ADESSPL - Contact')

@section('content')

    <section class="banner contact-banner">

        <div class="mask rgba-black-strong">

            <h2>
                <span class="banner-icon"><img src="{{asset('images/engineer-80px.png')}}" alt=""></span>
                <br>
                Contact Us
            </h2>
        </div>
    </section>

<div class="container">
    <section class="contact-section mt-5">
<h1 class="text-center mb-5 ad-black wow fadeInDown">Get In Touch</h1>
        <!-- Form with header -->
        <div class="card wow zoomIn">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-8">

                    <div class="card-body form">

                        <!-- Header -->
                        <h3 class="mt-4 ad-black"><i class="fas fa-envelope pr-2"></i>Write to us:</h3>

                        <form action="/sendMail" method="post">
                            @csrf
                        <!-- Grid row -->

                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="form-contact-name" class="form-control" name="name">
                                    <label for="form-contact-name" class="">Your name</label>
                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="email" id="form-contact-email" class="form-control" name="email">
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
                                    <input type="number" id="form-contact-phone" class="form-control" name="phone">
                                    <label for="form-contact-phone" class="">Your phone</label>
                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="form-contact-company" class="form-control" name="company">
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
                                    <textarea id="form-contact-message" class="form-control md-textarea" rows="3" name="message"></textarea>
                                    <label for="form-contact-message">Your message</label>
                                    <button type="submit" name="sendEmail" class="btn-floating btn-lg ad-redBtn">
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

                <!-- Grid column -->
                <div class="col-lg-4">

                    <div class="card-body contact ad-orangeGradient text-center h-100 text-white">

                        <h3 class="my-4 pb-2">Contact information</h3>
                        <ul class="text-lg-left list-unstyled ">

                            <li class="text-center mb-4">
                                <i class="fas fa-map-marker-alt pr-3 text-white fa-2x mb-2"></i> <p class="text-white"> Office # 6, 7th Floor, Goldmine Plaza, Ferozpur Road, Lahore, Punjab, Pakistan، Ichhra Lahore, Punjab 54600</p>
                            </li>
                            <li class="text-center mb-4">
                                <i class="fas fa-phone pr-2 text-white fa-2x mb-2"></i> <p class="text-white"> +01 234 567 89</p>
                            </li>
                            <li class="text-center">
                                <i class="fas fa-envelope pr-2 text-white fa-2x mb-2"></i><p class="text-white"> contact@example.com</p>
                            </li>
                        </ul>
                        <hr class="hr-light my-4">
                        <ul class="list-inline text-center list-unstyled">
                            <li class="list-inline-item">
                                <a href="http://www.twitter.com/ADESSPL" class="p-2 fa-lg tw-ic">
                                    <i class="fab fa-twitter text-white"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="http://www.linkedin.com/company/al-din-engineering-solutions-&-services-pvt.-ltd.?report%2Esuccess=KJ_KkFGTDCfMt-A7wV3Fn9Yvgwr02Kd6AZHGx4bQCDiP6-2rfP2oxyVoEQiPrcAQ7Bf" class="p-2 fa-lg li-ic">
                                    <i class="fab fa-linkedin-in text-white"> </i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="http://www.facebook.com/ADESSPL" class="p-2 fa-lg ins-ic">
                                    <i class="fab fa-facebook text-white"> </i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.youtube.com/channel/UCtzWjVzXEvRSfCQhcncMZNA" class="p-2 fa-lg ins-ic">
                                    <i class="fab fa-youtube text-white"> </i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="skype:aldinengineering?" class="p-2 fa-lg ins-ic">
                                    <i class="fab fa-skype text-white"> </i>
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
    <section class="mapSection">
        <h1 class="mb-5 text-center ad-black wow fadeInDown">Our Location</h1>
        <iframe  width="100%" height="350" frameborder="0" class="map shadow mb-5 rounded z-depth-1 wow zoomIn" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3400.7787349353034!2d74.32010231481888!3d31.53023655381027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919049a66feaf99%3A0x9816f44b8f4fadb6!2sAl-Din+Engineering+Solutions+and+Services+(Pvt.)+Ltd.!5e0!3m2!1sen!2s!4v1471667656830"  allowfullscreen=""></iframe>
    </section>
</div>
@endsection
