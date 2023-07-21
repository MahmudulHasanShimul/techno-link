 <!-- Start Header Area -->
 <header class="header-area header-style-two">
    <div class="top-header" style="margin-top: -8px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5">
                    <div class="top-header-left">
                        <p><span><b>Call Now At : &nbsp;</b></span> <a href="#">+880 1842-955050</a></p>
                    </div>
                </div>

                <div class="col-lg-7 col-md-7">
                    <div class="top-header-right">
                        {{-- <div class="login-signup-btn">
                            <p><a href="#">Login</a> <span>or</span> <a href="#">Register</a></p>
                        </div> --}}

                        <ul class="social">
                            <li><a href="https://www.facebook.com/profile.php?id=100075866602779&mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.facebook.com/profile.php?id=100075866602779&mibextid=ZbWKwL" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/profile.php?id=100075866602779&mibextid=ZbWKwL" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://www.facebook.com/profile.php?id=100075866602779&mibextid=ZbWKwL" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="bahama-mobile-nav">
            <div class="logo">
                <a href="{{route('home')}}">
                    <img src="{{asset('/')}}website/assets/img/tl-logo.png" alt="logo" height="55px" width="120px">
                </a>
            </div>
        </div>

        <div class="bahama-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('/')}}website/assets/img/tl-logo.png" alt="logo" height="70px" width="160px">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav ">
                            <li class="nav-item"><a href="{{route('home')}}" class="nav-link active">Home</a>

                            </li>

                            <li class="nav-item"><a href="{{route('about')}}" class="nav-link">ABOUT</i></a>
                            </li>

                            <li class="nav-item"><a href="{{route('services')}}" class="nav-link">Services</a>
                            </li>

                            <li class="nav-item"><a href="{{route('package')}}" class="nav-link">PACKAGES</a>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link">BDIX <i class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="http://binodonmela.net/" class="nav-link" target="_blank">FTP Server 1</a></li>

                                    <li class="nav-item"><a href="http://10.100.100.10/" class="nav-link" target="_blank">FTP Server 2</a></li>

                                    <li class="nav-item"><a href="https://fmovies.to/home" class="nav-link" target="_blank">FTP Server 3</a></li>

                                    <li class="nav-item"><a href="http://circleftp.net/" class="nav-link" target="_blank">FTP Server 4</a></li>

                                    <li class="nav-item"><a href="http://cinemabazar.net:8080/" class="nav-link" target="_blank">TV Server</a></li>

                                    <li class="nav-item"><a href="http://amrbd.com/" class="nav-link" target="_blank">Sports Channel</a></li>

                                </ul>
                            </li>

                            <!-- <li class="nav-item"><a href="{{route('support')}}" class="nav-link">SUPPORT</i></a>

                            </li> -->

                            <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                        </ul>

                        <div class="others-options">
                            <div class="d-flex align-items-center">
                                @if(Session::get('reSeller_id'))
                                    <div style="color: #C97817; font-weight: bolder">
                                        {{-- {{Session::get('reSeller_owner_name')}} --}}
                                    </div>
                                    <div class="ms-3">
                                        <a href="{{route('reseller.dashboard',['id' => Session::get('reSeller_id')])}}" class="text-white">Dashboard</a>
                                    </div>
                                    <div class="ms-3 ">
                                        <a href="{{route('reseller.logout')}}" class="btn btn-primary">
                                            <span>Logout</span>
                                        </a>
                                        {{-- <a href="{{route('reseller.logout')}}" class="text-white">Logout</a> --}}
                                    </div>
                                @else
                                <a href="{{route('reseller.login')}}" class="btn btn-primary">
                                     <span>Sign In</span>
                                </a>
                                <div class="dark-version-btn">
                                    <label id="switch" class="switch">
                                        <input type="checkbox" onchange="toggleTheme()" id="slider">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>
<!-- End Header Area -->
