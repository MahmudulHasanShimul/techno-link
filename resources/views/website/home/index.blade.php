@extends('website.master')

@section('title')
Techo Link - Broadband & Internet Service Providers
@endsection

@section('content')
 <!-- Start Main Banner Area -->
 <div class="home-slides owl-carousel owl-theme">
    <div class="banner-section item-bg1 jarallax" data-jarallax='{"speed": 0.2}'>
        <div class="container">
            <div class="hero-content">
                <span class="sub-title">Welcome to Techno Link</span>
                <h1>Explore The Fastest Internet</h1>
                <p>Get Unlimited Broadband the package price is just starting with 500 tk Per Month Service with 24/7 Technical Support.</p>
            </div>
        </div>
    </div>

    <div class="banner-section item-bg3 jarallax" data-jarallax='{"speed": 0.2}'>
        <div class="container">
            <div class="hero-content">
                <span class="sub-title">Welcome to Techno Link</span>
                <h1>Experience Next Generation Internet</h1>
                <p>Get Unlimited Broadband the package price is just starting with 500 tk Per Month Service with 24/7 Technical Support.</p>
            </div>
        </div>
    </div>

    <div class="banner-section item-bg2 jarallax" data-jarallax='{"speed": 0.2}'>
        <div class="container">
            <div class="hero-content">
                <span class="sub-title">Welcome to Techno Link</span>
                <h1>No Suffer, No Buffer</h1>
                <p>Get Unlimited Broadband the package price is just starting with 500 tk Per Month Service with 24/7 Technical Support.</p>
            </div>
        </div>
    </div>
</div>
<!-- End Main Banner Area -->

<!-- Start Boxes Area -->
<section class="boxes-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-box">
                    <div class="icon">
                        <i class="flaticon-wifi-signal-tower"></i>
                    </div>

                    <h3>Home Internet</h3>

                    <p>High speed wifi and internet connectivity for home users.</p>

                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-box">
                    <div class="icon">
                        <i class="flaticon-router"></i>
                    </div>

                    <h3>CCTV Connectivity</h3>

                    <p>One of the best CCTV Camera & Surveillance Service Provider. </p>


                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-box">
                    <div class="icon">
                        <i class="flaticon-key"></i>
                    </div>

                    <h3>IP Phone</h3>

                    <p>Provide IP phone service for  different kinds of Organizations.</p>


                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-box">
                    <div class="icon">
                        <i class="flaticon-online-shop"></i>
                    </div>

                    <h3>Domain & Hosting</h3>

                    <p>Fast, Secure web hosting service for your company. </p>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Boxes Area -->

<!-- Start About Area -->
<section class="about-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-content">
                    <span class="sub-title">Welcome to Techno Link Family</span>
                    <h2>Discover a Wider World of Recreation</h2>
                    <p>Our mission lies in our brand name- we are one of the best amongst the Broadband service providers in Dhaka who focus on YOU, our customers. The internet is what drives today’s society.</p>
                    <p> People now require high-speed internet for almost every task, which is why data connectivity has become a necessity. If you are looking for a reliable internet service provider in Jatrabari area, contact Techno Link Internet Service Provider. </p>
                    <a href="{{route('about')}}" class="btn btn-primary">Learn More Us</a>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="about-main-image">
                    <img src="{{asset('/')}}website/assets/img/about-img2.jpg" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->

<!-- Start Packages Area -->
<section class="packages-area ptb-100 pb-0 jarallax " data-jarallax='{"speed": 0.2}'>
    <div class="container">
        <div class="section-title">
            <span>

                <span>Techno Link Packages</span>
            </span>
            <h2>The tree core price you it just valuable but not at many prices</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-packages-box">
                    <h3>TV Plus for Best Familytime</h3>

                    <a href="{{route('package')}}" class="btn btn-primary">View Plans</a>

                    <div class="image-box">
                        <img src="{{asset('/')}}website/assets/img/shape-image/1.png" alt="image">
                        <img src="{{asset('/')}}website/assets/img/shape-image/1.png" alt="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-packages-box">
                    <h3>Talk Weekends & Unlimited</h3>

                    <a href="{{route('package')}}" class="btn btn-primary">View Plans</a>

                    <div class="image-box">
                        <img src="{{asset('/')}}website/assets/img/shape-image/1.png" alt="image">
                        <img src="{{asset('/')}}website/assets/img/shape-image/1.png" alt="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                <div class="single-packages-box">
                    <h3>Optical Fiber Connectivity</h3>

                    <a href="{{route('package')}}" class="btn btn-primary">View Plans</a>

                    <div class="image-box">
                        <img src="{{asset('/')}}website/assets/img/shape-image/1.png" alt="image">
                        <img src="{{asset('/')}}website/assets/img/shape-image/1.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Packages Area -->

<!-- Start TV Show Area -->
{{-- <section class="tv-show-area" style="margin-top: 150px">
    <div class="container-fluid p-0">
        <div class="section-title">
            <span>

                <span>TV Show Area</span>
            </span>
            <h2>The tree core price you it just valuable but not at many prices</h2>
        </div>
        <div class="tv-show-slides owl-carousel owl-theme">
            <div class="single-tv-show">
                <img src="{{asset('/')}}website/assets/img/tv-show-img1.jpg" alt="image">

                <h3>Our Ultimate TV Experience</h3>

                <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube"></a>
            </div>

            <div class="single-tv-show">
                <img src="{{asset('/')}}website/assets/img/tv-show-img2.jpg" alt="image">

                <h3>Fast Internet Speeds</h3>

                <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube"></a>
            </div>

            <div class="single-tv-show">
                <img src="{{asset('/')}}website/assets/img/tv-show-img3.jpg" alt="image">

                <h3>Channel Lineups</h3>

                <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube"></a>
            </div>
        </div>
    </div>
</section> --}}
<!-- End TV Show Area -->

<!-- Start Blog Area -->
<section class="blog-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>

                <span>Techno Link Update</span>
            </span>
            <h2>What’s new Projects are <br>coming</h2>
        </div>

        <div class="row">
            <div class="blog-slides owl-carousel owl-theme">
                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-post">
                        <a href="#" class="post-image"><img src="{{asset('/')}}website/assets/img/blog-img1.jpg" alt="blog-image"></a>

                        <div class="blog-post-content">
                            <h3><a href="#">Techno Construction Farm</a></h3>
                            <p>At Techno Link Services, we understand your customers rely on you to help them keep their businesses running smoothly and design the right solution. </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-post">
                        <a href="#" class="post-image"><img src="{{asset('/')}}website/assets/img/blog-img2.jpg" alt="blog-image"></a>

                        <div class="blog-post-content">
                            <h3><a href="#">Techno IT Solution</a></h3>
                            <p>At Techno Link Services, we understand your customers rely on you to help them keep their businesses running smoothly and design the right solution for the right application. </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-post">
                        <a href="#" class="post-image"><img src="{{asset('/')}}website/assets/img/blog-img3.jpg" alt="blog-image"></a>

                        <div class="blog-post-content">
                            <h3><a href="#">Techno Security Service</a></h3>
                            <p>At Techno Link Services, we understand your customers rely on you to help them keep their businesses running smoothly and design the right solution for the right application. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-post">
                        <a href="#" class="post-image"><img src="{{asset('/')}}website/assets/img/blog-img4.jpg" alt="blog-image"></a>

                        <div class="blog-post-content">
                            <h3><a href="#">Techno Electronics Ltd.</a></h3>
                            <p>At Techno Link Services, we understand your customers rely on you to help them keep their businesses running smoothly and design the right solution for the right application. </p>
                        </div>
                    </div>
                </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->


@endsection
