@extends('website.master')

@section('title')
Services | Techno Link
@endsection

@section('content')
        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">

                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start About Area -->
        <section class="about-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-content">
                            <span class="sub-title"> Information</span>
                            <h2>Our Contact Supporter Will contract you in time</h2>
                            <p>Techno Link with its state-of-the-art redundant backbone infrastructure assures 100% uptime while providing ultimate clients satisfaction no matter how small a client may be. The Network Operation Center (NOC) is staffed 24/7 basis to respond and fix any issues related to connectivity.</p>

                            <a href="{{route('about')}}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <img src="{{asset('/')}}website/assets/img/about-img3.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Area -->

        <!-- Start Services Area -->
        <section class="services-area bg-image ptb-100">
            <div class="container">
                <div class="section-title">
                    <span>
                        <span>Techno Link Services</span>
                    </span>
                    <h2>Explore the next ISP unlimited possibilities</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-wifi-signal-tower"></i>
                            </div>
                            
                            <h3>Cable Broadband</h3>

                            <p>We provide internet connection using CAT 5. If you want to take intenet connectivity with CAT 5, you don't have to pay for the service. No connection charge, just pay the running month bill</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-wifi-1"></i>
                            </div>

                            <h3>Fibre Optic Broadband</h3>

                            <p>We provide fibre optic internet connectivity. If you want to take intenet connectivity with fibre optic, you have to pay 1500 tk for the service. Pay 1500 tk connection charge with running month bill</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-router"></i>
                            </div>

                            <h3>Home WIFI</h3>

                            <p>We will set up your home Wi-Fi connection and do everything for improving your Wi-Fi signal. If you need Wifi device, we can also provide you whatever device want to use with fair price</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-shield"></i>
                            </div>
                           
                            <h3>Tech support</h3>

                            <p>We offer tech support to our customers. This can be a valuable service for those unfamiliar with setting up or troubleshooting internet connections.Fully Staffed 24/7 to supprt you in problem.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-key"></i>
                            </div>

                            <h3>CCTV Connectivity</h3>

                            <p>We also provide CCTV Camera Services with the best service at an affordable price, guaranteed customer satisfaction and experienced computer technicians who are ready to support you for 7 days.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-online-shop"></i>
                            </div>

                            <h3>Domain & Hosting</h3>

                            <p>Our web hosting plan has everything you need to power your website. Get the best for your website with Interserver's cheap Web Hosting packages. Cloud Storage. Advance Security. 24x7 Support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Area -->
@endsection
