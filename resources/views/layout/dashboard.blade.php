<!DOCTYPE html>
<html>
<head>

    <!-- Title -->
    <title>@yield('title') | UFC Ghana</title>

    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta charset="UTF-8">
    <meta name="description" content="UFC Ghana" />
    <meta name="keywords" content="UFC,Ghana" />
    <meta name="author" content="Emmanuel Asaber" />

    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('admin/plugins/pace-master/themes/blue/pace-theme-flash.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('admin/plugins/uniform/css/uniform.default.min.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('admin/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('admin/plugins/fontawesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('admin/plugins/line-icons/simple-line-icons.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('admin/plugins/offcanvasmenueffects/css/menu_cornerbox.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('admin/plugins/waves/waves.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('admin/plugins/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('admin/plugins/3d-bold-navigation/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('admin/plugins/slidepushmenus/css/component.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('admin/plugins/weather-icons-master/css/weather-icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('admin/plugins/metrojs/MetroJs.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('admin/plugins/toastr/toastr.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- Theme Styles -->
    <link href="{{URL::asset('admin/css/modern.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('css/ionicons.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('admin/css/themes/green.css')}}" class="theme-color" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('admin/css/custom.css')}}" rel="stylesheet" type="text/css"/>

    <script src="{{URL::asset('admin/plugins/3d-bold-navigation/js/modernizr.js')}}"></script>
    <script src="{{URL::asset('admin/plugins/offcanvasmenueffects/js/snap.svg-min.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="page-header-fixed">
<div class="overlay"></div>
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s1">
    <h3><span class="pull-left">Chat</span><a href="javascript:void(0);" class="pull-right" id="closeRight"><i class="fa fa-times"></i></a></h3>
</nav>
<div class="menu-wrap">
    <nav class="profile-menu">
        <div class="profile">
            <img src="{{URL::asset('admin/images/profile-menu-image.png')}}" width="60" alt="David Green"/>
            <span>{{ Auth::user()->firstname }}</span>
        </div>
        <div class="profile-menu-list">
            <a href="#"><i class="fa fa-star"></i><span>Favorites</span></a>
            <a href="#"><i class="fa fa-bell"></i><span>Alerts</span></a>
            <a href="#"><i class="fa fa-envelope"></i><span>Messages</span></a>
            <a href="#"><i class="fa fa-comment"></i><span>Comments</span></a>
        </div>
    </nav>
    <button class="close-button" id="close-button">Close Menu</button>
</div>
<form class="search-form" action="#" method="GET">
    <div class="input-group">
        <input type="text" name="search" class="form-control search-input" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
    </div><!-- Input Group -->
</form><!-- Search Form -->
<main class="page-content content-wrap">
    <div class="navbar">
        <div class="navbar-inner">
            <div class="sidebar-pusher">
                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="logo-box">
                <a href="{{URL::to('/')}}" class="logo-text"><span>UFC Ghana</span></a>
            </div><!-- Logo Box -->
            <div class="search-button">
                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
            </div>
            <div class="topmenu-outer">
                <div class="top-menu">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success pull-right"></span></a>
                            <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                <li><p class="drop-title">You have 4 new  messages !</p></li>
                                <li class="drop-all"><a href="#" class="text-center">All Messages</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                <span class="user-name">{{Auth::user()->firstname}}<i class="fa fa-angle-down"></i></span>
                            </a>
                            <ul class="dropdown-menu dropdown-list" role="menu">
                                <li role="presentation"><a href="{{URL::to('profile')}}"><i class="fa fa-user"></i>Profile</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a href="{{URL::to('auth/logout')}}"><i class="fa fa-lock"></i>Logout</a></li>
                            </ul>
                        </li>
                    </ul><!-- Nav -->
                </div><!-- Top Menu -->
            </div>
        </div>
    </div><!-- Navbar -->
    <div class="page-sidebar sidebar">
        <div class="page-sidebar-inner slimscroll">
            <div class="sidebar-header">
                <div class="sidebar-profile">
                    <a href="javascript:void(0);" id="profile-menu-link">
                        <div class="sidebar-profile-image">
                            <div class="user-icon">{{$acronym}}</div>
                        </div>
                        <div class="sidebar-profile-details">
                            <span>{{Auth::user()->firstname}}<br></span>
                        </div>
                    </a>
                </div>
            </div>
            <ul class="menu accordion-menu">
                <li class=""><a href="#" class="waves-effect waves-button"><span class="menu-icon ion-stats-bars"></span><p>Dashboard</p></a></li>
                <li class=""><a href="#" class="waves-effect waves-button"><span class="menu-icon ion-trophy"></span><p>Reward</p></a></li>
            </ul>
        </div><!-- Page Sidebar Inner -->
    </div><!-- Page Sidebar -->

    <div class="page-inner">
        <div class="page-title">
            <h3>
                @yield('title')
                @yield('buttons')
            </h3>

        </div>
        <div id="main-wrapper">
            @yield('main')
        </div><!-- Main Wrapper -->
        <div class="page-footer">
            <p class="no-s">2018 &copy; easaber</p>
        </div>
    </div><!-- Page Inner -->

</main><!-- Page Content -->
<nav class="cd-nav-container" id="cd-nav">
    <header>
        <h3>Navigation</h3>
        <a href="#0" class="cd-close-nav">Close</a>
    </header>
    <ul class="cd-nav list-unstyled">
        <li class="cd-selected" data-menu="index">
            <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                <p>Dashboard</p>
            </a>
        </li>
        <li data-menu="profile">
            <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                <p>Profile</p>
            </a>
        </li>
        <li data-menu="inbox">
            <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-envelope"></i>
                        </span>
                <p>Mailbox</p>
            </a>
        </li>
        <li data-menu="#">
            <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-tasks"></i>
                        </span>
                <p>Tasks</p>
            </a>
        </li>
        <li data-menu="#">
            <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-cog"></i>
                        </span>
                <p>Settings</p>
            </a>
        </li>
        <li data-menu="calendar">
            <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-calendar"></i>
                        </span>
                <p>Calendar</p>
            </a>
        </li>
    </ul>
</nav>
<div class="cd-overlay"></div>


<!-- Javascripts -->
<script src="{{URL::asset('admin/plugins/jquery/jquery-2.1.4.min.js')}}"></script>
<script src="{{URL::asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{URL::asset('admin/plugins/pace-master/pace.min.js')}}"></script>
<script src="{{URL::asset('admin/plugins/jquery-blockui/jquery.blockui.js')}}"></script>
<script src="{{URL::asset('admin/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{URL::asset('admin/plugins/switchery/switchery.min.js')}}"></script>
<script src="{{URL::asset('admin/plugins/uniform/jquery.uniform.min.js')}}"></script>
<script src="{{URL::asset('admin/plugins/offcanvasmenueffects/js/classie.js')}}"></script>
<script src="{{URL::asset('admin/plugins/offcanvasmenueffects/js/main.js')}}"></script>
<script src="{{URL::asset('admin/plugins/waves/waves.min.js')}}"></script>
<script src="{{URL::asset('admin/plugins/3d-bold-navigation/js/main.js')}}"></script>
<script src="{{URL::asset('admin/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{URL::asset('admin/plugins/jquery-counterup/jquery.counterup.min.js')}}"></script>
<script src="{{URL::asset('admin/plugins/toastr/toastr.min.js')}}"></script>
<script src="{{URL::asset('admin/plugins/flot/jquery.flot.min.js')}}"></script>
<script src="{{URL::asset('admin/plugins/flot/jquery.flot.time.min.js')}}"></script>
<script src="{{URL::asset('admin/plugins/flot/jquery.flot.symbol.min.js')}}"></script>
<script src="{{URL::asset('admin/plugins/flot/jquery.flot.resize.min.js')}}"></script>
<script src="{{URL::asset('admin/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{URL::asset('admin/plugins/curvedlines/curvedLines.js')}}"></script>
<script src="{{URL::asset('admin/plugins/metrojs/MetroJs.min.js')}}"></script>
<script src="{{URL::asset('admin/js/modern.js')}}"></script>
<script src="{{URL::asset('admin/js/pages/dashboard.js')}}"></script>

</body>

<!-- Mirrored from steelcoders.com/modern/admin1/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Apr 2018 06:28:52 GMT -->
</html>
