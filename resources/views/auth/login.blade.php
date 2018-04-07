<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.ansonika.com/mavia/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 02:10:00 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MAVIA - Register, Reservation, Questionare, Reviews form wizard">
    <meta name="author" content="Ansonika">
    <title>Login | UFC Ghana</title>

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{URL::asset('auth/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('auth/css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('auth/css/responsive.css')}}" rel="stylesheet">
    <link href="{{URL::asset('auth/css/menu.css')}}" rel="stylesheet">
    <link href="{{URL::asset('auth/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('auth/css/icon_fonts/css/all_icons_min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('auth/css/skins/square/grey.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{URL::asset('auth/css/custom.css')}}" rel="stylesheet">

    <script src="{{URL::asset('auth/js/modernizr.js')}}"></script>
    <!-- Modernizr -->

</head>

<body>

<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-3">
                <div id="logo">
                    <h3 style="margin: 0px;"><a href="{{URL::to('/')}}">UFC</a></h3>
                </div>
            </div>
            <div class="col-xs-9">
                <div id="social">
                    <ul>
                        <li><a href="#0"><i class="icon-facebook"></i></a></li>
                        <li><a href="#0"><i class="icon-twitter"></i></a></li>
                        <li><a href="#0"><i class="icon-google"></i></a></li>
                        <li><a href="#0"><i class="icon-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- container -->
</header>
<!-- End Header -->

<main>
    <div id="form_container">
        <div class="row">
            <div class="col-md-5">
                <div id="left_form">
                    <figure><img src="{{URL::asset('img/login.png')}}" alt=""></figure>
                    <h2>Login</h2>
                    <p>
                        Provide your login details to access your back office
                    </p>
                    <a href="#0" id="more_info" data-toggle="modal" data-target="#more-info"><i class="pe-7s-info"></i></a>
                </div>
            </div>
            <div class="col-md-7">

                <div id="wizard_container">
                    <div id="top-wizard">
                        <div id="progressbar"></div>
                    </div>
                    <!-- /top-wizard -->
                    <form action="{{URL::to('auth/login/')}}" id="wrapped" method="POST">
                        {{ csrf_field() }}
                        <input id="website" name="website" type="text" value="">
                        <!-- Leave for security protection, read docs for details -->
                        @if($errors->any())
                            <div class="errors">{{$errors->first()}}</div>
                        @endif
                        <div id="middle-wizard">
                            <div class="submit step">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control required" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control required" placeholder="Password">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <a href="#" style="margin-left: 10px;">Forgot password</a>
                                </div>
                            </div>
                            <!-- /step-->
                        </div>
                        <!-- /middle-wizard -->
                        <div id="bottom-wizard">
                            <button type="submit" name="process" class="submit">Login</button>
                        </div>
                        <!-- /bottom-wizard -->
                    </form>
                </div>
                <!-- /Wizard container -->
            </div>
        </div><!-- /Row -->
    </div><!-- /Form_container -->
</main>


<!-- SCRIPTS -->
<!-- Jquery-->
<script src="{{URL::asset('auth/js/jquery-2.2.4.min.js')}}"></script>
<!-- Common script -->
<script src="{{URL::asset('auth/js/common_scripts_min.js')}}"></script>
<!-- Wizard script -->
<script src="{{URL::asset('auth/js/registration_wizard_func.js')}}"></script>
<!-- Menu script -->
<script src="{{URL::asset('auth/js/velocity.min.js')}}"></script>
<script src="{{URL::asset('auth/js/main.js')}}"></script>
<!-- Theme script -->
<script src="{{URL::asset('auth/js/functions.js')}}"></script>
<!-- Google map -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="{{URL::asset('auth/js/mapmarker.jquery.js')}}"></script>
<script src="{{URL::asset('auth/js/mapmarker_func.jquery.js')}}"></script>

</body>
</html>
