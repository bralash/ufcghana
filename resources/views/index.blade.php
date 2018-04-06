<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Welcome | UFC Ghana</title>

    <!-- Favicon -->
    {{--<link rel="icon" href="img/core-img/favicon.ico">--}}

    <!-- Core Stylesheet -->
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{URL::asset('css/responsive.css')}}" rel="stylesheet">

</head>

<body>

<!-- ***** Header Area Start ***** -->
<header class="header_area">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <!-- Menu Area Start -->
            <div class="col-12 h-100">
                <div class="menu_area h-100">
                    <nav class="navbar h-100 navbar-expand-lg align-items-center">
                        <!-- Logo -->
                        <a class="navbar-brand" href="index-default.html">UFC</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#blinkNav" aria-controls="blinkNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Menu Area -->
                        <div class="collapse navbar-collapse" id="blinkNav">
                            <ul class="navbar-nav ml-auto" id="nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#faq">FAQs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" target="_blank" href="legality">Legality</a>
                                </li>
                            </ul>
                            <div class="sing-up-button pull-right">
                                @if (Auth::check())
                                    <a href="{{URL::to('dashboard')}}" class="btn btn-secondary">Dashboard</a>
                                @else
                                    <a href="{{URL::to('auth/signup')}}" class="btn btn-primary">Sign Up</a>
                                @endif
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Welcome Area Start ***** -->
<section class="subscribe--area text-center bg-overlay1by3" style="background-image: url({{URL::asset('img/bg-img/welcome-6.jpg')}})" id="home">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <!-- Subscribe Content Text -->
                <div class="subscribe--content">
                    <h2>Welcome to UFC Ghana</h2>
                    <p>
                        We are here to give you financial freedom through peer-to-peer donation
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Welcome Area End ***** -->

<!-- ***** About Area Start ***** -->
<section class="about-area clearfix section_padding_90_100 d-lg-flex align-items-center" id="about">
    <!-- About Image -->
    <div class="about-thumbnail-area">
        <img src="img/bg-img/about.png" alt="">
    </div>
    <!-- About Content Area -->
    <div class="about--content-area">
        <div class="about-text">
            <h2>About Unicorn Funds Community(UFC)</h2>
            <h6>A community aimed at giving you long term sustainablity in your finances.</h6>
            <p>
                With UFC, we help you achieve financial freedom via out peer to peer platform.
                Members are encouraged to continuously donate to support their peer even as
                they get help from fellow members of this community.
            </p>
        </div>
    </div>
</section>
<!-- ***** About Area End ***** -->

<!-- ***** Feature Area Start ***** -->
<section class="feature-area clearfix" id="product">
    <div class="feature--content-area section_padding_0_100 item">
        <!-- Service Details -->
        <div class="service-details-meta">
            <!-- Section Heading Area -->
            <div class="section-heading">
                {{--<h2>Core Features</h2>--}}
                <p>
                    With support form our experienced team of experts, we are able to manage the
                    community to the satisfaction of all members. Also, our strict recycling
                    policy has led to all members recommitting before getting help from the
                    community to reduce instances of hit and run.
                </p>
                <p>
                    With these policies in place, members are assured of speedly realising their
                    dreams.
                </p>
            </div>
            <!-- Feature Area -->
            <div class="feature_area">
                <!-- Single Feature -->
                <div class="single_feature">
                    <!-- Feature Icon -->
                    <div class="feature_icon">
                        <i class="ti-lock"></i>
                    </div>
                    <!-- Single Feature Text -->
                    <div class="single_feature_text">
                        <h5>Security</h5>
                        <p>
                            Our system is well secured where participants can donate and
                            receive freely.
                        </p>
                        <h2>01</h2>
                    </div>
                </div>
                <!-- Single Feature -->
                <div class="single_feature">
                    <div class="feature_icon">
                        <i class="ti-shield"></i>
                    </div>
                    <!-- Single Feature Text -->
                    <div class="single_feature_text">
                        <h5>Trust</h5>
                        <p>
                            We are here to build broken trust in peer-to-peer
                            donation.
                        </p>
                        <h2>02</h2>
                    </div>
                </div>
                <!-- Single Feature -->
                <div class="single_feature">
                    <div class="feature_icon">
                        <i class="ti-headphone-alt"></i>
                    </div>
                    <!-- Single Feature Text -->
                    <div class="single_feature_text">
                        <h5>Support</h5>
                        <p>
                            We give responsive support to participants 24/7
                        </p>
                        <h2>03</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Thumbnail Area -->
    <div class="product-thumbnail-area item" style="background-image: url(img/bg-img/product-2.jpg);"></div>
</section>
<!-- ***** Feature Area End ***** -->
<section class="our-service-area bg-white section_padding_90_50 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Heading Text -->
                <div class="section-heading text-center">
                    <h2>How it works</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Service Start -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-service text-center wow fadeInUp" data-wow-delay="0.2s">
                    <img src="{{URL::asset('img/register.png')}}" alt="">
                    <h5>Register</h5>
                    <p>
                        Fill the registration form by providing your needed details. Bank details
                        cannot be changed afterwards, for security reasons.
                    </p>
                </div>
            </div>
            <!-- Single Service Start -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-service text-center wow fadeInUp" data-wow-delay="0.4s">
                    <img src="{{URL::asset('img/ph.png')}}" alt="">
                    <h5>Provide Help (PH)</h5>
                    <p>
                        You accept to provide help (PH) to the community through your back office.
                        You click on the Provide Help (PH) button to enter the amount you wish to
                        provide to the community. You will be matched to a corresponding participant
                        after pledge has been made and payment has to be made within 18 hours.
                    </p>
                </div>
            </div>
            <!-- Single Service Start -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-service text-center wow fadeInUp" data-wow-delay="0.6s">
                    <img src="{{URL::asset('img/upload.png')}}" alt="">
                    <h5>UPLOAD PROOF OF PAYMENT (POP)</h5>
                    <p>
                        After successfully making payment, participant are required to upload
                        the proof of the payment by taking a screen shot of the transaction made.
                    </p>
                </div>
            </div>
            <!-- Single Service Start -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-service text-center wow fadeInUp" data-wow-delay="0.8s">
                    <img src="{{URL::asset('img/gh.png')}}" alt="">
                    <h5>GET HELP(GH)</h5>
                    <p>
                        The maturity date of your reward is 7 days after a successful
                        PH has been made, participant can now GET HELP (GH) their matured reward by
                        clicking on the GET HELP BUTTON. Participants are to recommit 100% of their
                        next PH to GH their reward. Remember SUSTAINABILITY IS OUR HALLMARK.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***** Download App Area Start ***** -->
<section class="download-apps-area section_padding_90_70 bg-overlay1by3" style="background-image:url(img/bg-img/subscrib-1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-8 wow fadeIn" data-wow-delay="1s">
                <!-- Subscribe Content Text -->
                <div class="download_apps_content">
                    <h2>Be part of this opportunity</h2>
                    <p>Write something sensible here</p>
                    <!-- Download Button -->
                    <div class="download-btn">
                        <a href="#" class="btn blink-btn mt-30 mr-15">Create account</a>
                        <a href="#" class="btn blink-btn mt-30">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Download App Area End ***** -->

<!-- ***** Testimonials Area Start ***** -->
<section class="testimonials-area clearfix">
    <div class="container-fluid">
        <div class="row">
            <!-- Heading Text -->
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>What people Say</h2>
                </div>
            </div>
        </div>

        <!-- Testimonials Slider  -->
        <div class="row">
            <div class="col-12">
                <div class="testimonials_slider owl-carousel">
                    <!-- Single Testimonial -->
                    <div class="single-testimonial">
                        <!-- Testimonial Feedback Text  -->
                        <div class="testimonial-description">
                            <p>
                                I'm participant of UFC. I provided help of
                                1000gh and got help of 1600gh within 7 days. UFC, no size!!
                            </p>
                            <h5>Esi Amoah</h5>
                        </div>
                    </div>

                    <!-- Single Testimonial -->
                    <div class="single-testimonial">
                        <!-- Testimonial Description Text  -->
                        <div class="testimonial-description">
                            <p>
                                UFC, onaapo!! &#128077; <br>
                                I have received 60% of my PH in 7 days
                            </p>
                            <h5>Samuel Inkoom</h5>
                        </div>
                    </div>

                    <!-- Single Testimonial -->
                    <div class="single-testimonial">
                        <!-- Testimonial Description  -->
                        <div class="testimonial-description">
                            <p>
                                I provided help of 600gh, and on the 7th day,
                                I got help of 960gh.
                            </p>

                            <h5>Joyce Aban</h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Testimonials Feedback Area End ***** -->

<!-- ***** Call To Action area Start ***** -->
<section class="call-to-action-area section_padding_90_100 clearfix bg-b-overlay1by3">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <!-- Heading Text  -->
                <div class="call-section-heading">
                    <h2>Have questions? Feel free to contact us.</h2>
                    <a href="#" class="btn blink-btn white-btn mt-30">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="frequently_asked_question section_padding_90_100 clearfix" id="faq">
    <div class="container">
        <div class="row">
            <!-- Heading Text  -->
            <div class="col-12 text-center">
                <div class="section-heading">
                    <h2>Frequently Asked Question</h2>
                    <p></p>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single FAQ -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single_faq">
                    <h5>How do I register?</h5>
                    <p>
                        Visit our page. Click on the signup button on the navigation bar. Fill in required details
                        and submit.
                    </p>
                </div>
            </div>
            <!-- Single FAQ -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single_faq">
                    <h5>What is the return on investment (ROI)?</h5>
                    <p>
                        Every participant will earn 60% on each donation made
                    </p>
                </div>
            </div>
            <!-- Single FAQ -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single_faq">
                    <h5>How many days does it take to get help?</h5>
                    <p>
                        Participants can Get Help (GH) in 7 days after donation.
                    </p>
                </div>
            </div>
            <!-- Single FAQ -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single_faq">
                    <h5>Can I create multiple accounts?</h5>
                    <p>
                        No. The community does not allow multiple accounts. Usernames, emails and phone number are unique.
                    </p>
                </div>
            </div>
            <!-- Single FAQ -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single_faq">
                    <h5>Can I change my account details?</h5>
                    <p>
                        Account details cannot be changed after registration, unless participant provides ownership details
                        through our support page.
                    </p>
                </div>
            </div>
            <!-- Single FAQ -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single_faq">
                    <h5>What is the recommitment policy?</h5>
                    <p>
                        We have a 100% recommitment policy to help sustain the system.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single_faq">
                    <h5>What happens if I fail to make payment on time?</h5>
                    <p>
                        Participants who fail to make payments on time(18hrs after PH), will have their accounts blocked.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single_faq">
                    <h5>What happens if I don't receive payment within 18 hrs?</h5>
                    <p>
                        The system will automatically re-match you to another user to make payment to you.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single_faq">
                    <h5>Should I upload proof of payment (POP) each time I make payment?</h5>
                    <p>
                        Yes. Participants are entreated to upload thier proof of payment each time they
                        successfully make payment. Note that if you fail to upload your POP, receiver can't
                        confirm your payment.
                    </p>
                </div>
            </div>

            <!-- Support Button  -->
            <div class="col-12">
                <div class="support_text text-center">
                    <h4>Any Question? <a href="#">Contact us</a></h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="message_now_area bg-gray" id="contact">
    <!-- Google Maps -->
    <div id="googleMap"></div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-9">
                <div class="blink-contact-form-area">
                    <!-- Section Heading -->
                    <div class="contact_section_heading">
                        <h2>Give us a shout</h2>
                    </div>

                    <!-- Contact Form -->
                    <div class="contact_from">
                        <form action="http://demo.designing-world.com/blink3/blink/mail.php" method="post" id="main_contact_form">
                            <div class="contact_input_area">
                                <div id="success_fail_info"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="number" id="number" placeholder="Number *" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Your Message *" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn blink-btn mt-15">Send Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-12 col-md-3">
                <div class="contact-info">
                    <a href="#" class="d-block"><i class="fa fa-phone" aria-hidden="true"></i> +00777 222 111</a>
                    <a href="#" class="d-block"><i class="fa fa-envelope-open" aria-hidden="true"></i> example@example.com</a>
                    <a href="#" class="d-block"><i class="fa fa-globe" aria-hidden="true"></i> www.example.com</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Contact Area End ***** -->

<!-- ***** Footer Area Start ***** -->
<section class="footer-area clearfix">
    {{--<div class="top-footer-area pb-5">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<!-- Single Bottom Area -->--}}
                {{--<div class="col-12 col-sm-6 col-lg-2">--}}
                    {{--<div class="single_bottom_area mt-5">--}}
                        {{--<h5>Navigation</h5>--}}
                        {{--<ul class="footer-menu">--}}
                            {{--<li><a href="#home">Home</a></li>--}}
                            {{--<li><a href="#about">About</a></li>--}}
                            {{--<li><a href="#faq">FAQs</a></li>--}}
                            {{--<li><a href="#contact">Contact</a></li>--}}
                            {{--<li><a href="{{URL::to('legality')}}" target="_blank">Legality</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- Single Bottom Area -->--}}
                {{--<div class="col-12 col-sm-6 col-lg-3">--}}
                    {{--<div class="single_bottom_area mt-5">--}}
                        {{--<h5>Useful Links</h5>--}}
                        {{--<ul class="footer-menu">--}}
                            {{--<li><a href="#">Privacy Policy</a></li>--}}
                            {{--<li><a href="#">Terms &amp; Conditions</a></li>--}}
                            {{--<li><a href="#">Create Account</a></li>--}}
                            {{--<li><a href="#">Company Philosophy</a></li>--}}
                            {{--<li><a href="#">Career at blink.</a></li>--}}
                            {{--<li><a href="#">Customer Management</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-12 col-sm-6 col-lg">--}}
                    {{--<!-- Single Bottom Area -->--}}
                    {{--<div class="single_bottom_area mt-5">--}}
                        {{--<h5>About blink.</h5>--}}
                        {{--<p>Aliquam rhoncus finibus orci et facilisis. Vivamus ullamcorper at erat sit amet congue. Sed quis tellus in ex pellentesque sodales.</p>--}}
                        {{--<p>Everything that we know about our reality comes by way of our senses. In other words, our entire</p>--}}
                        {{--<!-- Social Links Area -->--}}
                        {{--<div class="social_links_area">--}}
                            {{--<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<!-- Single Bottom Area -->--}}
                {{--<div class="col-12 col-sm-6 col-lg">--}}
                    {{--<div class="single_bottom_area mt-5">--}}
                        {{--<h5>Get In Touch</h5>--}}
                        {{--<p>Aliquam rhoncus finibus orci et facilisis. Vivamus ullamcorper at erat sit amet congue. Sed quis tellus in ex pellentesque sodales.</p>--}}
                        {{--<a href="#" class="d-block"><i class="fa fa-phone" aria-hidden="true"></i> +00777 222 111</a>--}}
                        {{--<a href="#" class="d-block"><i class="fa fa-envelope-open" aria-hidden="true"></i> example@example.com</a>--}}
                        {{--<a href="#" class="d-block"><i class="fa fa-globe" aria-hidden="true"></i> www.example.com</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <!-- Bottom Footer Area -->
    <div class="bottom-footer-area">
        <!-- Footer Text -->
        <div class="copywrite_text text-center">
            <p>Made With <i class="fa fa-heart"></i> by <a href="http://easaber.com">easaber</a></p>
        </div>
    </div>
</section>
<!-- ***** Footer Area End ***** -->

<!-- jQuery-2.2.4 js -->
<script src="{{URL::asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
<!-- Popper js -->
<script src="{{URL::asset('js/bootstrap/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{URL::asset('js/bootstrap/bootstrap.min.js')}}"></script>
<!-- All Plugins js -->
<script src="{{URL::asset('js/plugins/plugins.js')}}"></script>
<!-- Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
<script src="{{URL::asset('js/map-active.js')}}"></script>
<!-- Active js -->
<script src="{{URL::asset('js/active.js')}}"></script>
</body>

</html>
