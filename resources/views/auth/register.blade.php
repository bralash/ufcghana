<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.ansonika.com/mavia/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 02:10:00 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MAVIA - Register, Reservation, Questionare, Reviews form wizard">
    <meta name="author" content="Ansonika">
    <title>Sign Up | UFC Ghana</title>

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
                    <figure><img src="{{URL::asset('img/register_wh.png')}}" alt=""></figure>
                    <h2>Registration</h2>
                    <p>
                        Provide the necessary details to create your account to get access to your back office.
                    </p>
                    <p>
                        Already registered? <a href="{{URL::to('auth/login')}}" style="color: tomato;">Login</a>
                    </p>
                </div>
            </div>
            <div class="col-md-7">

                <div id="wizard_container">
                    <div id="top-wizard">
                        <div id="progressbar"></div>
                    </div>
                    <!-- /top-wizard -->
                    <form action="{{URL::to('auth/signup/')}}" id="wrapped" method="POST">
                        {{ csrf_field() }}
                        <input id="website" name="website" type="text" value="">
                        <!-- Leave for security protection, read docs for details -->
                        @if($errors->any())
                            <div class="errors">{{$errors->first()}}</div>
                        @endif
                        <div id="middle-wizard">
                            <div class="step">
                                <h3 class="main_question"><strong>1/2</strong>Please fill with your details</h3>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="firstname" class="form-control required" placeholder="First name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="surname" class="form-control required" placeholder="Surname">
                                        </div>
                                    </div>
                                </div>
                                <!-- /row -->

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control required" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control required" placeholder="Username">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control required" placeholder="Phone number">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group" style="position: relative">
                                            <img class="showPass" src="{{URL::asset('auth/img/eye.png')}}" alt="">
                                            <input type="password" name="password" class="form-control required pass" placeholder="Password">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="referral_email" class="form-control" placeholder="Referral Email">
                                        </div>
                                    </div>
                                </div>
                                <!-- /row -->
                            </div>
                            <!-- /step-->

                            <div class="submit step">
                                <h3 class="main_question"><strong>2/2</strong>Mobile money account details</h3>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select name="mm_provider" class="form-control required">
                                                <option value="">Mobile money providers</option>
                                                @foreach($providers as $provider)
                                                    <option value="{{$provider->id}}">{{$provider->provider_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="acc_name" class="form-control required" placeholder="Account Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="acc_number" class="form-control required" placeholder="Account Number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /step-->
                        </div>
                        <!-- /middle-wizard -->
                        <div id="bottom-wizard">
                            <button type="button" name="backward" class="backward">Backward </button>
                            <button type="button" name="forward" class="forward">Forward</button>
                            <button type="submit" name="process" class="submit">Submit</button>
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
