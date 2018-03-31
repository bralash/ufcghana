<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.designing-world.com/blink3/blink/index-business.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Mar 2018 03:28:45 GMT -->
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
<!-- Preloader Start -->
{{--<div id="preloader">--}}
    {{--<div class="spinner">--}}
        {{--<div class="bounce1"></div>--}}
        {{--<div class="bounce2"></div>--}}
        {{--<div class="bounce3"></div>--}}
    {{--</div>--}}
{{--</div>--}}

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
                                    <a class="nav-link" href="#contact">Contact</a>
                                </li>
                            </ul>
                            <div class="sing-up-button pull-right">
                                <a href="#" class="btn">Sign Up</a>
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
                        Some nice and sensible text goes here
                    </p>
                </div>

                {{--<!-- Form Start -->--}}
                {{--<form action="#" method="post">--}}
                    {{--<input type="email" class="subscribe-email" placeholder="Enter your email address">--}}
                    {{--<button type="submit"><i class="pe-7s-angle-right"></i></button>--}}
                {{--</form>--}}
                {{--<!-- Form End -->--}}
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
    <div class="feature--content-area section_padding_90_100 item">
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
                            Write something about security
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
                        <p>Write something about trust</p>
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
                        <p>Write something about support</p>
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

<!-- ***** Our Service Area Start ***** -->
<section class="our-service-area bg-white section_padding_90_50 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Heading Text -->
                <div class="section-heading text-center">
                    <h2>Why choose us</h2>
                    <p>
                        Write some small introduction. Like there are a lot of p2p systems out there and these are the
                        reasons people should choose yours
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Service Start -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-service text-center wow fadeInUp" data-wow-delay="0.2s">
                    <i class="ti-blackboard"></i>
                    <h5>Awesome Experience</h5>
                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <!-- Single Service Start -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-service text-center wow fadeInUp" data-wow-delay="0.4s">
                    <i class="ti-rocket"></i>
                    <h5>Fast and Simple</h5>
                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <!-- Single Service Start -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-service text-center wow fadeInUp" data-wow-delay="0.6s">
                    <i class="ti-layout-grid2-alt"></i>
                    <h5>Clean Code</h5>
                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <!-- Single Service Start -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-service text-center wow fadeInUp" data-wow-delay="0.8s">
                    <i class="ti-folder"></i>
                    <h5>Projects Planing</h5>
                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <!-- Single Service Start -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-service text-center wow fadeInUp" data-wow-delay="1s">
                    <i class="ti-check-box"></i>
                    <h5>Live Chatbox</h5>
                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <!-- Single Service Start -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-service text-center wow fadeInUp" data-wow-delay="1.2s">
                    <i class="ti-headphone"></i>
                    <h5>24/7 Online Support</h5>
                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Our Service Area End ***** -->

<!-- ***** More fearutes  Area Start ***** -->
{{--<section class="more-feature-area clearfix" id="feature">--}}
    {{--<div class="feature-thumbnail-area item" style="background-image: url(img/bg-img/feature-1.jpg);"></div>--}}
    {{--<!-- Feature Content Area -->--}}
    {{--<div class="feature-content-area section_padding_90_100 item">--}}
        {{--<!-- Service Details -->--}}
        {{--<div class="service-details">--}}
            {{--<!-- Section Heading Area -->--}}
            {{--<div class="section-heading">--}}
                {{--<h2>See Few Core Features About this Business</h2>--}}
                {{--<p>Everything that we know about our reality comes by way of our senses. In other words, our entire experience of reality is simply a combination of sensory information.</p>--}}
            {{--</div>--}}
            {{--<div class="feature_area">--}}
                {{--<!-- Single Feature -->--}}
                {{--<div class="single_feature">--}}
                    {{--<!-- Feature Icon -->--}}
                    {{--<div class="feature_icon">--}}
                        {{--<i class="ti-clipboard"></i>--}}
                    {{--</div>--}}
                    {{--<!-- Single Feature Text -->--}}
                    {{--<div class="single_feature_text">--}}
                        {{--<h5>Projects Planing</h5>--}}
                        {{--<p>Aliquam rhoncus finibus orci et facilisis. Vivamus ullamcorper at erat sit amet congue. Sed quis tellus in ex pellentesque sodales.</p>--}}
                        {{--<h2>04</h2>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- Single Feature -->--}}
                {{--<div class="single_feature">--}}
                    {{--<!-- Feature Icon -->--}}
                    {{--<div class="feature_icon">--}}
                        {{--<i class="ti-alarm-clock"></i>--}}
                    {{--</div>--}}
                    {{--<!-- Single Feature Text -->--}}
                    {{--<div class="single_feature_text">--}}
                        {{--<h5>Super Fast Work</h5>--}}
                        {{--<p>Aliquam rhoncus finibus orci et facilisis. Vivamus ullamcorper at erat sit amet congue. Sed quis tellus in ex pellentesque sodales.</p>--}}
                        {{--<h2>05</h2>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- Single Feature -->--}}
                {{--<div class="single_feature">--}}
                    {{--<!-- Feature Icon -->--}}
                    {{--<div class="feature_icon">--}}
                        {{--<i class="ti-camera"></i>--}}
                    {{--</div>--}}
                    {{--<!-- Single Feature Text -->--}}
                    {{--<div class="single_feature_text">--}}
                        {{--<h5>Super HD Camera</h5>--}}
                        {{--<p>Aliquam rhoncus finibus orci et facilisis. Vivamus ullamcorper at erat sit amet congue. Sed quis tellus in ex pellentesque sodales.</p>--}}
                        {{--<h2>06</h2>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
<!-- ***** More fearutes Area End ***** -->

<!-- ***** Our Creative Portfolio Area Start ***** -->
{{--<section class="our_creative_portfolio section_padding_90_100 clearfix" id="work">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-12">--}}
                {{--<!-- Heading Text -->--}}
                {{--<div class="section-heading text-center">--}}
                    {{--<h2>Our Creative Portfolio</h2>--}}
                    {{--<p>Everything that we know about our reality comes by way of our senses. In other words, our entire experience of reality is simply.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="gallery_menu">--}}
        {{--<div class="text-center portfolio-menu">--}}
            {{--<button class="active btn btn-md" type="button" data-filter="*">All</button>--}}
            {{--<button class="btn btn-md" type="button" data-filter=".design">Design</button>--}}
            {{--<button class="btn btn-md" type="button" data-filter=".art">Art</button>--}}
            {{--<button class="btn btn-md" type="button" data-filter=".oth">Others</button>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="gallery_full_width_images_area clearfix">--}}

        {{--<!-- Single gallery Item -->--}}
        {{--<div class="design portfolio_gallery_iteam">--}}
            {{--<img src="img/portfolio/gallery-1.jpg" alt="">--}}
            {{--<!-- single Content-->--}}
            {{--<div class="single_content">--}}
                {{--<div class="border-layer">--}}
                    {{--<div class="blink-table">--}}
                        {{--<div class="blink-table-cell">--}}
                            {{--<!-- Project Title-->--}}
                            {{--<div class="project_title">--}}
                                {{--<a href="#">Project Title</a>--}}
                                {{--<p>Our all creative project and clean design show at a glance here</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<!-- Single gallery Item -->--}}
        {{--<div class="art portfolio_gallery_iteam">--}}
            {{--<img src="img/portfolio/gallery-2.jpg" alt="">--}}
            {{--<!-- single Content-->--}}
            {{--<div class="single_content">--}}
                {{--<div class="border-layer">--}}
                    {{--<div class="blink-table">--}}
                        {{--<div class="blink-table-cell">--}}
                            {{--<!-- Project Title-->--}}
                            {{--<div class="project_title">--}}
                                {{--<a href="#">Project Title</a>--}}
                                {{--<p>Our all creative project and clean design show at a glance here</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<!-- Single gallery Item -->--}}
        {{--<div class="oth portfolio_gallery_iteam">--}}
            {{--<img src="img/portfolio/gallery-3.jpg" alt="">--}}
            {{--<!-- single Content-->--}}
            {{--<div class="single_content">--}}
                {{--<div class="border-layer">--}}
                    {{--<div class="blink-table">--}}
                        {{--<div class="blink-table-cell">--}}
                            {{--<!-- Project Title-->--}}
                            {{--<div class="project_title">--}}
                                {{--<a href="#">Project Title</a>--}}
                                {{--<p>Our all creative project and clean design show at a glance here</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<!-- Single gallery Item -->--}}
        {{--<div class="design art portfolio_gallery_iteam">--}}
            {{--<img src="img/portfolio/gallery-4.jpg" alt="">--}}
            {{--<!-- single Content-->--}}
            {{--<div class="single_content">--}}
                {{--<div class="border-layer">--}}
                    {{--<div class="blink-table">--}}
                        {{--<div class="blink-table-cell">--}}
                            {{--<!-- Project Title-->--}}
                            {{--<div class="project_title">--}}
                                {{--<a href="#">Project Title</a>--}}
                                {{--<p>Our all creative project and clean design show at a glance here</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!-- Single gallery Item -->--}}
        {{--<div class="oth portfolio_gallery_iteam">--}}
            {{--<img src="img/portfolio/gallery-5.jpg" alt="">--}}
            {{--<!-- single Content-->--}}
            {{--<div class="single_content">--}}
                {{--<div class="border-layer">--}}
                    {{--<div class="blink-table">--}}
                        {{--<div class="blink-table-cell">--}}
                            {{--<!-- Project Title-->--}}
                            {{--<div class="project_title">--}}
                                {{--<a href="#">Project Title</a>--}}
                                {{--<p>Our all creative project and clean design show at a glance here</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!-- Single gallery Item -->--}}
        {{--<div class="design art portfolio_gallery_iteam">--}}
            {{--<img src="img/portfolio/gallery-6.jpg" alt="">--}}
            {{--<!-- single Content-->--}}
            {{--<div class="single_content">--}}
                {{--<div class="border-layer">--}}
                    {{--<div class="blink-table">--}}
                        {{--<div class="blink-table-cell">--}}
                            {{--<!-- Project Title-->--}}
                            {{--<div class="project_title">--}}
                                {{--<a href="#">Project Title</a>--}}
                                {{--<p>Our all creative project and clean design show at a glance here</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!-- Single gallery Item -->--}}
        {{--<div class="oth portfolio_gallery_iteam">--}}
            {{--<img src="img/portfolio/gallery-3.jpg" alt="">--}}
            {{--<!-- single Content-->--}}
            {{--<div class="single_content">--}}
                {{--<div class="border-layer">--}}
                    {{--<div class="blink-table">--}}
                        {{--<div class="blink-table-cell">--}}
                            {{--<!-- Project Title-->--}}
                            {{--<div class="project_title">--}}
                                {{--<a href="#">Project Title</a>--}}
                                {{--<p>Our all creative project and clean design show at a glance here</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!-- Single gallery Item -->--}}
        {{--<div class="design portfolio_gallery_iteam">--}}
            {{--<img src="img/portfolio/gallery-4.jpg" alt="">--}}
            {{--<!-- single Content-->--}}
            {{--<div class="single_content">--}}
                {{--<div class="border-layer">--}}
                    {{--<div class="blink-table">--}}
                        {{--<div class="blink-table-cell">--}}
                            {{--<!-- Project Title-->--}}
                            {{--<div class="project_title">--}}
                                {{--<a href="#">Project Title</a>--}}
                                {{--<p>Our all creative project and clean design show at a glance here</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Load More Button-->--}}
    {{--<div class="load_more_button text-center">--}}
        {{--<a href="#" class="btn blink-btn mt-50">Load More</a>--}}
    {{--</div>--}}
{{--</section>--}}
<!-- ***** Our Creative Portfolio Area End ***** -->

<!-- ***** Cool Facts Area Start ***** -->
<section class="cool_facts_do_area section_padding_90_50 clearfix jarallax bg-overlay1by4" style="background-image:url(img/bg-img/cool-fact-1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-3">
                <!-- Single Cool Fact-->
                <div class="single_cool_fact text-center">
                    <div class="right-left-border-shape">
                        <div class="cool_fact_icon">
                            <i class="ti-user"></i>
                        </div>
                        <!-- Single Cool Detail-->
                        <div class="cool_fact_detail">
                            <h3><span class="counter">550</span>+</h3>
                            <h2>Registered Users</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <!-- Single Cool Fact-->
                <div class="single_cool_fact text-center">
                    <div class="right-left-border-shape">
                        <div class="cool_fact_icon">
                            <i class="ti-basketball"></i>
                        </div>
                        <!-- Single Cool Detail-->
                        <div class="cool_fact_detail">
                            <h3><span class="counter">150</span>+</h3>
                            <h2>Help received</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <!-- Single Cool Fact-->
                <div class="single_cool_fact text-center">
                    <div class="right-left-border-shape">
                        <div class="cool_fact_icon">
                            <i class="ti-alarm-clock"></i>
                        </div>
                        <!-- Single Cool Detail-->
                        <div class="cool_fact_detail">
                            <h3><span class="counter">120</span>+</h3>
                            <h2>Help given</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <!-- Single Cool Fact-->
                <div class="single_cool_fact text-center">
                    <div class="right-left-border-shape">
                        <div class="cool_fact_icon">
                            <i class="ti-money"></i>
                        </div>
                        <!-- Single Cool Detail-->
                        <div class="cool_fact_detail">
                            <h3><span class="counter">4,000</span>+</h3>
                            <h2>Payouts</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Cool Facts Area End ***** -->

<!-- ***** Price table Area Start ***** -->
{{--<section class="our_price_table section_padding_90_70 clearfix" id="price">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-12">--}}
                {{--<!-- Heading Text -->--}}
                {{--<div class="section-heading text-center">--}}
                    {{--<h2>Pricing Plane</h2>--}}
                    {{--<p>Everything that we know about our reality comes by way of our senses. In other words, our entire experience of reality is simply.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="row justify-content-center">--}}
            {{--<div class="col-12 col-md-6 col-lg-4">--}}
                {{--<!-- Package Price  -->--}}
                {{--<div class="single_price_plan text-center mb-30">--}}
                    {{--<!-- Package Price -->--}}
                    {{--<div class="package_price">--}}
                        {{--<div class="price_icon">--}}
                            {{--<i class="ti-shine"></i>--}}
                        {{--</div>--}}
                        {{--<!-- Package Text -->--}}
                        {{--<div class="package_text">--}}
                            {{--<h3>Standard</h3>--}}
                            {{--<h4>$9.99</h4>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- Package Description -->--}}
                    {{--<div class="package_description">--}}
                        {{--<p>15 Email Account</p>--}}
                        {{--<p>100Gb Space</p>--}}
                        {{--<p>Domain Name</p>--}}
                        {{--<p>500Gb Bandwidth</p>--}}
                        {{--<p>25 MySQL Databases</p>--}}
                        {{--<p>Enhanced Sercurity</p>--}}
                        {{--<!-- Price Button  -->--}}
                        {{--<div class="price_button">--}}
                            {{--<a href="#" class="btn blink-btn mt-30">Choose Plan</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-12 col-md-6 col-lg-4">--}}
                {{--<!-- Package Price  -->--}}
                {{--<div class="single_price_plan text-center mb-30">--}}
                    {{--<!-- Package Price -->--}}
                    {{--<div class="package_price">--}}
                        {{--<div class="price_icon">--}}
                            {{--<i class="ti-package"></i>--}}
                        {{--</div>--}}
                        {{--<!-- Package Text -->--}}
                        {{--<div class="package_text">--}}
                            {{--<h3>Business</h3>--}}
                            {{--<h4>$36.99</h4>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- Package Description -->--}}
                    {{--<div class="package_description">--}}
                        {{--<p>15 Email Account</p>--}}
                        {{--<p>100Gb Space</p>--}}
                        {{--<p>Domain Name</p>--}}
                        {{--<p>500Gb Bandwidth</p>--}}
                        {{--<p>25 MySQL Databases</p>--}}
                        {{--<p>Enhanced Sercurity</p>--}}
                        {{--<!-- Price Button  -->--}}
                        {{--<div class="price_button">--}}
                            {{--<a href="#" class="btn blink-btn mt-30">Choose Plan</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-12 col-md-6 col-lg-4">--}}
                {{--<!-- Package Price  -->--}}
                {{--<div class="single_price_plan text-center mb-30">--}}
                    {{--<!-- Package Price -->--}}
                    {{--<div class="package_price">--}}
                        {{--<div class="price_icon">--}}
                            {{--<i class="ti-world"></i>--}}
                        {{--</div>--}}
                        {{--<!-- Package Text -->--}}
                        {{--<div class="package_text">--}}
                            {{--<h3>Ultimate</h3>--}}
                            {{--<h4>$99.99</h4>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- Package Description -->--}}
                    {{--<div class="package_description">--}}
                        {{--<p>15 Email Account</p>--}}
                        {{--<p>100Gb Space</p>--}}
                        {{--<p>Domain Name</p>--}}
                        {{--<p>500Gb Bandwidth</p>--}}
                        {{--<p>25 MySQL Databases</p>--}}
                        {{--<p>Enhanced Sercurity</p>--}}
                        {{--<!-- Price Button  -->--}}
                        {{--<div class="price_button">--}}
                            {{--<a href="#" class="btn blink-btn mt-30">Choose Plan</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
<!-- ***** Pricing Plane Area End ***** -->

<!-- ***** Product Details Area Start ***** -->
{{--<section class="service-details-area d-lg-flex clearfix">--}}
    {{--<!-- Video Area -->--}}
    {{--<div class="video_area wow fadeInLeftBig animated-img bg-overlay1by3 d-flex align-items-center justify-content-center" data-wow-delay="0.5s" style="background-image: url(img/bg-img/video-1.jpg);">--}}
        {{--<div class="video-text-icon text-center">--}}
            {{--<a href="https://youtu.be/jh61R-BXOgE" class="video_button"><i class="ti-control-play"></i></a>--}}
            {{--<p>Watch Business Review</p>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Content Area -->--}}
    {{--<div class="content-area section_padding_90_100 wow fadeInRightBig" data-wow-delay="1s">--}}
        {{--<div class="content-details wow fadeIn" data-wow-delay="2s">--}}
            {{--<!-- Content Section Text Area -->--}}
            {{--<div class="content-section-text">--}}
                {{--<h2>It is a modern &amp; creative design.</h2>--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus nam enim quas beatae quasi necessitatibus dolores et porro iure numquam, voluptate autem adipisci odit ea maiores natus quos dicta. Corporis id quas repellat distinctio assumenda magni at aspernatur velit dignissimos dolore rerum, qui, quod minus!</p>--}}
                {{--<a href="#" class="btn blink-btn white-btn mt-15">Buy Now</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
<!-- ***** More fearutes Area End ***** -->
<section class="frequently_asked_question section_padding_90_100 clearfix">
    <div class="container">
        <div class="row">
            <!-- Heading Text  -->
            <div class="col-12 text-center">
                <div class="section-heading">
                    <h2>Some of our <br>Frequently Asked Question</h2>
                    <p>Aliquam rhoncus finibus orci et facilisis. Vivamus ullamcorper at erat sit amet congue. Sed quis tellus in ex pellentesque sodales.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single FAQ -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single_faq">
                    <h5>How can I apply for a job?</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id magna pretium, pellentesque</p>
                </div>
            </div>
            <!-- Single FAQ -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single_faq">
                    <h5>How it Work?</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id magna pretium, pellentesque</p>
                </div>
            </div>
            <!-- Single FAQ -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single_faq">
                    <h5>How Can I Use it?</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id magna pretium, pellentesque</p>
                </div>
            </div>
            <!-- Single FAQ -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single_faq">
                    <h5>How Can I get it in Online?</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id magna pretium, pellentesque</p>
                </div>
            </div>
            <!-- Single FAQ -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single_faq">
                    <h5>How Can I Paid my Payment?</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id magna pretium, pellentesque</p>
                </div>
            </div>
            <!-- Single FAQ -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single_faq">
                    <h5>How can I get my payment easily?</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id magna pretium, pellentesque</p>
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
<!-- ***** Our Team Area Start ***** -->
{{--<section class="our-team-area section_padding_90_70 clearfix" id="team">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-12 text-center">--}}
                {{--<!-- Heading Text  -->--}}
                {{--<div class="section-heading">--}}
                    {{--<h2>Meet our expert <br>team member</h2>--}}
                    {{--<p>Aliquam rhoncus finibus orci et facilisis. Vivamus ullamcorper at erat sit amet congue. Sed quis tellus in ex pellentesque sodales.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="row">--}}
            {{--<!-- Single Team Member -->--}}
            {{--<div class="col-12 col-sm-6 col-lg-3">--}}
                {{--<div class="single-team-member text-center">--}}
                    {{--<div class="member-image">--}}
                        {{--<img src="img/team-img/team-1.jpg" alt="">--}}
                        {{--<!-- Overlay -->--}}
                        {{--<div class="team-overlay-effect">--}}
                            {{--<a href="#"><i class="ti-plus"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="member-text">--}}
                        {{--<h4>NAZRUL ISLAM</h4>--}}
                        {{--<p>Founder</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<!-- Single Team Member -->--}}
            {{--<div class="col-12 col-sm-6 col-lg-3">--}}
                {{--<div class="single-team-member text-center">--}}
                    {{--<div class="member-image">--}}
                        {{--<img src="img/team-img/team-2.jpg" alt="">--}}
                        {{--<!-- Overlay -->--}}
                        {{--<div class="team-overlay-effect">--}}
                            {{--<a href="#"><i class="ti-plus" aria-hidden="true"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="member-text">--}}
                        {{--<h4>AJOY DAS</h4>--}}
                        {{--<p>Developer</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<!-- Single Team Member -->--}}
            {{--<div class="col-12 col-sm-6 col-lg-3">--}}
                {{--<div class="single-team-member text-center">--}}
                    {{--<div class="member-image">--}}
                        {{--<img src="img/team-img/team-3.jpg" alt="">--}}
                        {{--<!-- Overlay -->--}}
                        {{--<div class="team-overlay-effect">--}}
                            {{--<a href="#"><i class="ti-plus" aria-hidden="true"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="member-text">--}}
                        {{--<h4>SUNNY KHAN</h4>--}}
                        {{--<p>Designer</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<!-- Single Team Member -->--}}
            {{--<div class="col-12 col-sm-6 col-lg-3">--}}
                {{--<div class="single-team-member text-center">--}}
                    {{--<div class="member-image">--}}
                        {{--<img src="img/team-img/team-4.jpg" alt="">--}}
                        {{--<!-- Overlay -->--}}
                        {{--<div class="team-overlay-effect">--}}
                            {{--<a href="#"><i class="ti-plus" aria-hidden="true"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="member-text">--}}
                        {{--<h4>NADIRA KHAN</h4>--}}
                        {{--<p>Advisor</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
<!-- ***** Our Team Area End ***** -->

<!-- ***** Subscribe Area Start ***** -->
{{--<section class="subscribe-area section_padding_90_100 bg-overlay1by3" style="background-image:url(img/bg-img/subscrib-2.jpg);">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-12 col-md-10 col-lg-8 ml-auto wow fadeIn" data-wow-delay="1s">--}}
                {{--<!-- Subscribe Content Text -->--}}
                {{--<div class="subscribe_content">--}}
                    {{--<h2>Subscribe For Our New Updates</h2>--}}
                    {{--<p>Aliquam rhoncus finibus orci et facilisis. Vivamus ullamcorper at erat sit amet congue. Sed quis tellus in ex pellentesque sodales.</p>--}}
                {{--</div>--}}

                {{--<!-- Form Start -->--}}
                {{--<form action="#" method="post" class="subscribe-form">--}}
                    {{--<input type="email" class="email" placeholder="Enter your mail">--}}
                    {{--<button type="submit" class="submit btn blink-btn w-100">Subscribe Now</button>--}}
                {{--</form>--}}
                {{--<!-- Form End -->--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
<!-- ***** Subscribe Area End ***** -->

<!-- ***** Frequently Asked Question Area ***** -->
<section class="frequently_asked_question section_padding_90_100 clearfix">
    <div class="container">
        <div class="row">
            <!-- Heading Text  -->
            <div class="col-12 text-center">
                <div class="section-heading">
                    <h2>Some of our <br>Frequently Asked Question</h2>
                    <p>Aliquam rhoncus finibus orci et facilisis. Vivamus ullamcorper at erat sit amet congue. Sed quis tellus in ex pellentesque sodales.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single FAQ -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single_faq">
                    <h5>How can I apply for a job?</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id magna pretium, pellentesque</p>
                </div>
            </div>
            <!-- Single FAQ -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single_faq">
                    <h5>How it Work?</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id magna pretium, pellentesque</p>
                </div>
            </div>
            <!-- Single FAQ -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single_faq">
                    <h5>How Can I Use it?</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id magna pretium, pellentesque</p>
                </div>
            </div>
            <!-- Single FAQ -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single_faq">
                    <h5>How Can I get it in Online?</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id magna pretium, pellentesque</p>
                </div>
            </div>
            <!-- Single FAQ -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single_faq">
                    <h5>How Can I Paid my Payment?</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id magna pretium, pellentesque</p>
                </div>
            </div>
            <!-- Single FAQ -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single_faq">
                    <h5>How can I get my payment easily?</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id magna pretium, pellentesque</p>
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
<!-- ***** Frequently Asked Question End ***** -->

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
                    <p>Aliquam rhoncus finibus orci et facilisis. Vivamus ullamcorper at erat sit amet congue. Sed quis tellus in ex pellentesque sodales.</p>
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
                            <p>Aliquam rhoncus finibus orci et facilisis. Vivamus ullamcorper at erat sit amet congue. Sed quis tellus in ex pellentesque sodales.</p>
                            <div class="star-icon">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>(80% Recommended)</span>
                            </div>
                            <h5>Liean Smith</h5>
                        </div>
                        <!-- Testimonial Image -->
                        <div class="testimonial_image">
                            <img src="img/test-img/1.jpg" alt="">
                        </div>
                    </div>

                    <!-- Single Testimonial -->
                    <div class="single-testimonial">
                        <!-- Testimonial Description Text  -->
                        <div class="testimonial-description">
                            <p>Aliquam rhoncus finibus orci et facilisis. Vivamus ullamcorper at erat sit amet congue. Sed quis tellus in ex pellentesque sodales.</p>
                            <!-- Start Icon -->
                            <div class="star-icon">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <span>(90% Recommended)</span>
                            </div>
                            <h5>John Smith</h5>
                        </div>
                        <!-- Testimonial Image -->
                        <div class="testimonial_image">
                            <img src="img/test-img/2.jpg" alt="">
                        </div>
                    </div>

                    <!-- Single Testimonial -->
                    <div class="single-testimonial">
                        <!-- Testimonial Description  -->
                        <div class="testimonial-description">
                            <p>Aliquam rhoncus finibus orci et facilisis. Vivamus ullamcorper at erat sit amet congue. Sed quis tellus in ex pellentesque sodales.</p>
                            <!-- Start Icon -->
                            <div class="star-icon">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <span>(100% Recommended)</span>
                            </div>
                            <h5>John Smith</h5>
                        </div>
                        <!-- Testimonial Image -->
                        <div class="testimonial_image">
                            <img src="img/test-img/3.jpg" alt="">
                        </div>
                    </div>

                    <!-- Single Testimonial -->
                    <div class="single-testimonial">
                        <!-- Testimonial Description  -->
                        <div class="testimonial-description">
                            <p>Aliquam rhoncus finibus orci et facilisis. Vivamus ullamcorper at erat sit amet congue. Sed quis tellus in ex pellentesque sodales.</p>
                            <div class="star-icon">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>(70% Recommended)</span>
                            </div>
                            <h5>John Smith</h5>
                        </div>
                        <!-- Testimonial Image -->
                        <div class="testimonial_image">
                            <img src="img/test-img/4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Partner Area Start -->
        <div class="our-partners-area mt-100">
            <div class="row justify-content-center">
                <!-- Partner Slides -->
                <div class="col-12">
                    <div class="partners-slides owl-carousel">
                        <img src="img/partner-img/1.png" alt="">
                        <img src="img/partner-img/2.png" alt="">
                        <img src="img/partner-img/3.png" alt="">
                        <img src="img/partner-img/4.png" alt="">
                        <img src="img/partner-img/5.png" alt="">
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
<!-- ***** Call To Action area End ***** -->

<!-- ***** Blog Area Start ***** -->
{{--<section class="blog_area section_padding_90_70" id="blog">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-12 text-center">--}}
                {{--<!-- Heading Text  -->--}}
                {{--<div class="section-heading">--}}
                    {{--<h2>Blog Area</h2>--}}
                    {{--<p>Aliquam rhoncus finibus orci et facilisis. Vivamus ullamcorper at erat sit amet congue. Sed quis tellus in ex pellentesque sodales.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="row justify-content-center">--}}
            {{--<!-- Single News Area Start -->--}}
            {{--<div class="col-12 col-md-6 col-lg-4">--}}
                {{--<div class="single_latest_news_area mb-30">--}}
                    {{--<!-- Single Latest Image -->--}}
                    {{--<div class="single_latest_news_img_area">--}}
                        {{--<img src="img/blog-img/blog-1.jpg" alt="">--}}
                        {{--<a href="#">Business</a>--}}
                    {{--</div>--}}
                    {{--<!-- Single Latest Text -->--}}
                    {{--<div class="single_latest_news_text_area">--}}
                        {{--<a href="#">--}}
                            {{--<h4>Get Busy with the Business</h4>--}}
                        {{--</a>--}}
                        {{--<!-- Post Meta -->--}}
                        {{--<div class="post-meta">--}}
                            {{--<a href="#"><i class="fa fa-user" aria-hidden="true"></i> Ajoy Das</a>--}}
                            {{--<a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> 5 Mar, 2018</a>--}}
                            {{--<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 350</a>--}}
                        {{--</div>--}}
                        {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy.Lorem Ipsum is simply dummy text.</p>--}}
                        {{--<a href="#" class="btn blink-btn mt-15">Read More</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<!-- Single News Area Start -->--}}
            {{--<div class="col-12 col-md-6 col-lg-4">--}}
                {{--<div class="single_latest_news_area mb-30">--}}
                    {{--<!-- Single Latest Image -->--}}
                    {{--<div class="single_latest_news_img_area">--}}
                        {{--<img src="img/blog-img/blog-2.jpg" alt="">--}}
                        {{--<a href="#">Design</a>--}}
                    {{--</div>--}}
                    {{--<!-- Single Latest News Text -->--}}
                    {{--<div class="single_latest_news_text_area">--}}
                        {{--<a href="#">--}}
                            {{--<h4>I like to design</h4>--}}
                        {{--</a>--}}
                        {{--<!-- Post Meta -->--}}
                        {{--<div class="post-meta">--}}
                            {{--<a href="#"><i class="fa fa-user" aria-hidden="true"></i> Ajoy Das</a>--}}
                            {{--<a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> 5 Mar, 2018</a>--}}
                            {{--<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 350</a>--}}
                        {{--</div>--}}
                        {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy.Lorem Ipsum is simply dummy text.</p>--}}
                        {{--<a href="#" class="btn blink-btn mt-15">Read More</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<!-- Single News Area Start -->--}}
            {{--<div class="col-12 col-md-6 col-lg-4">--}}
                {{--<div class="single_latest_news_area mb-30">--}}
                    {{--<!-- Single Latest Image -->--}}
                    {{--<div class="single_latest_news_img_area">--}}
                        {{--<img src="img/blog-img/blog-6.jpg" alt="">--}}
                        {{--<a href="#">Business</a>--}}
                    {{--</div>--}}
                    {{--<!-- Single Latest News Text -->--}}
                    {{--<div class="single_latest_news_text_area">--}}
                        {{--<a href="#">--}}
                            {{--<h4>Get Busy with the Business</h4>--}}
                        {{--</a>--}}
                        {{--<!-- Post Meta -->--}}
                        {{--<div class="post-meta">--}}
                            {{--<a href="#"><i class="fa fa-user" aria-hidden="true"></i> Ajoy Das</a>--}}
                            {{--<a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> 5 Mar, 2018</a>--}}
                            {{--<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 350</a>--}}
                        {{--</div>--}}
                        {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy.Lorem Ipsum is simply dummy text.</p>--}}
                        {{--<a href="#" class="btn blink-btn mt-15">Read More</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
<!-- ***** Blog Area End ***** -->

<!-- ***** Contact Area Start ***** -->
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
    <div class="top-footer-area pb-5">
        <div class="container">
            <div class="row">
                <!-- Single Bottom Area -->
                <div class="col-12 col-sm-6 col-lg-2">
                    <div class="single_bottom_area mt-5">
                        <h5>Navigation</h5>
                        <ul class="footer-menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Single Bottom Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_bottom_area mt-5">
                        <h5>Useful Links</h5>
                        <ul class="footer-menu">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Create Account</a></li>
                            <li><a href="#">Company Philosophy</a></li>
                            <li><a href="#">Career at blink.</a></li>
                            <li><a href="#">Customer Management</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg">
                    <!-- Single Bottom Area -->
                    <div class="single_bottom_area mt-5">
                        <h5>About blink.</h5>
                        <p>Aliquam rhoncus finibus orci et facilisis. Vivamus ullamcorper at erat sit amet congue. Sed quis tellus in ex pellentesque sodales.</p>
                        <p>Everything that we know about our reality comes by way of our senses. In other words, our entire</p>
                        <!-- Social Links Area -->
                        <div class="social_links_area">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Bottom Area -->
                <div class="col-12 col-sm-6 col-lg">
                    <div class="single_bottom_area mt-5">
                        <h5>Get In Touch</h5>
                        <p>Aliquam rhoncus finibus orci et facilisis. Vivamus ullamcorper at erat sit amet congue. Sed quis tellus in ex pellentesque sodales.</p>
                        <a href="#" class="d-block"><i class="fa fa-phone" aria-hidden="true"></i> +00777 222 111</a>
                        <a href="#" class="d-block"><i class="fa fa-envelope-open" aria-hidden="true"></i> example@example.com</a>
                        <a href="#" class="d-block"><i class="fa fa-globe" aria-hidden="true"></i> www.example.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Footer Area -->
    <div class="bottom-footer-area">
        <!-- Footer Text -->
        <div class="copywrite_text text-center">
            <p>Made With <i class="fa fa-heart"></i> by <a href="https://themeforest.net/user/designing-world/portfolio">Designing World</a></p>
        </div>
    </div>
</section>
<!-- ***** Footer Area End ***** -->

<!-- jQuery-2.2.4 js -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="js/plugins/plugins.js"></script>
<!-- Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
<script src="js/map-active.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>
</body>


<!-- Mirrored from demo.designing-world.com/blink3/blink/index-business.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Mar 2018 03:28:49 GMT -->
</html>