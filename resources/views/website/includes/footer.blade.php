<footer class="footer-style-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <div class="logo">
                        <a href="{{route('home')}}"><img src="{{asset('/')}}website/assets/img/tl-logo.png" alt="logo" height="60px" width="135px"></a>
                        <p>If you are looking for a reliable internet service provider in Jatrabari area, contact Techno Link Internet Service Provider. </p>
                    </div>

                    <form class="newsletter-form" data-toggle="validator">
                        <input type="email" class="newsletter-input" placeholder="Your Email Address" name="EMAIL" required autocomplete="off">
                        <button type="submit"><i class="flaticon-paper-plane"></i></button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Customer Services</h3>

                    <ul class="services-widget-list">
                        <li><a href="#">Parental Controls</a></li>
                        <li><a href="#">Check Email</a></li>
                        <li><a href="#">Check Voicemail</a></li>
                        <li><a href="{{route('package')}}">Manage Your Plan</a></li>
                        <li><a href="#">Group Counseling</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Support</h3>

                    <ul class="links-widget-list">
                        <li><a href="{{route('support')}}">Comcast Customer Service</a></li>
                        <li><a href="#">Bill & Payments</a></li>
                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                        <li><a href="{{route('support')}}">Support Forums</a></li>
                        <li><a href="{{route('about')}}">Office Locator</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Call now for Services!</h3>

                    <ul class="footer-contact-info">
                        <li><a href="#">+880 1842-955050</a></li>
                        <li><a href="#"><i class="fas fa-phone"></i> Call Us</a></li>
                        <li>34/58, Agradut School Road, Sontek,
                            Dhania, Jatrabari, Dhaka-1236</li>
                        <li><a href="https://www.google.com/maps/place/Techno+Link/@23.7052549,90.446662,21z/data=!4m14!1m7!3m6!1s0x3755b98b57057851:0x774b297ccadc0d95!2sTechno+Link!8m2!3d23.7052209!4d90.4469852!16s%2Fg%2F11np1f7bwp!3m5!1s0x3755b98b57057851:0x774b297ccadc0d95!8m2!3d23.7052209!4d90.4469852!16s%2Fg%2F11np1f7bwp?entry=ttu" target="_blank"><i class="fas fa-map-marker-alt"></i> Get Direction</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <ul class="social">
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 text-white inline-block">
                    <p >  © {{date('Y-m-d')}} All Rights Reserved <a href="" style="color: #C97817">TechnoLink.com</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
