<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SDG YN SL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ruda:400,900,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/prettyphoto/css/prettyphoto.css" rel="stylesheet">
    <link href="assets/lib/hover/hoverex-all.css" rel="stylesheet">
    <link href="assets/lib/jetmenu/jetmenu.css" rel="stylesheet">
    <link href="assets/lib/owl-carousel/owl-carousel.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/colors/blue.css">

    <!-- =======================================================
      Template Name: MaxiBiz
      Template URL: https://templatemag.com/maxibiz-bootstrap-business-template/
      Author: TemplateMag.com
      License: https://templatemag.com/license/
    ======================================================= -->
</head>
<body>
<div class="topbar clearfix">
    <div class="container">
        <div class="col-lg-12 text-right">
            <div class="social_buttons">
                <a href="https://www.facebook.com/sunfomobile/" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Dribbble"><i class="fa fa-dribbble"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="RSS"><i class="fa fa-rss"></i></a>
            </div>
        </div>
    </div>
    <!-- end container -->
</div>
<!-- end topbar -->
@if (Auth::user()->role =='dc')
<header class="header">
    <div class="container">
        <div class="site-header clearfix">
            <div class="col-lg-3 col-md-3 col-sm-12 title-area">
                <div class="site-title" id="title">
                    <a href="index.html" title="">
                        <img src="logo.jpg">
                    </a>
                </div>
            </div>
            <!-- title area -->
            <div class="col-lg-9 col-md-12 col-sm-12">
                <div id="nav" class="right">
                    <div class="container clearfix">
                        <ul id="jetmenu" class="jetmenu blue">
                            <li class="active"><a href="index.html">Home</a>
                            </li>
                            <li><a href="#">ABOUT US</a>
                                <ul class="dropdown">
                                    <li><a href="{{ url('/aboutUs') }}">About Us</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="team-members.html">Team Members</a></li>
                                    <li><a href="testimonials.html">Testimonials</a></li>


                                </ul>
                            </li>
                            <li><a href="#">OUR GOALS</a>
                                <ul class="dropdown">
                                    <li><a href="digital-download.html">Products Page</a></li>
                                    <li><a href="single-product.html">Single Product</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="account.html">Account Page</a></li>
                                    <li><a href="support.html">Support Center</a></li>
                                </ul>
                            </li>
                            <li><a href="#">COMPETITION</a>
                                <ul class="dropdown">
                                    <li><a href="single-portfolio-1.html">Single Portfolio 1</a></li>
                                    <li><a href="single-portfolio-2.html">Single Portfolio 2</a></li>
                                    <li><a href="portfolio-2.html">Portfolio (2 Columns)</a></li>
                                    <li><a href="portfolio-3.html">Portfolio (3 Columns)</a></li>
                                    <li><a href="gallery-portfolio.html">Gallery</a></li>
                                    <li><a href="masonry-grid-portfolio.html">Masonry Grid Style</a></li>
                                </ul>
                            </li>

                            <li><a href="#">CONTACT US</a>
                                <ul class="dropdown">
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="single-with-sidebar.html">Single with Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="#">MEMBERS</a>
                                <ul class="dropdown">
                                    <li><a href="{{ url('/allmembers') }}">ALL MEMBERS</a></li>
                                    <li><a href="blog-left-sidebar.html">RECENTLY JOINED</a></li>
                                    <li><a href="blog-right-sidebar.html">MOST ACTIVE</a></li>
                                    <li><a href="single-with-sidebar.html">SLEEPING MEMBERS</a></li>
                                </ul>
                            </li>

                            <!-- Authentication Links -->

                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>


                    </div>
                </div>
                <!-- nav -->
            </div>
            <!-- title area -->
        </div>
        <!-- site header -->
    </div>
    <!-- end container -->
</header>
<!-- end header -->
@else


    <header class="header">
        <div class="container">
            <div class="site-header clearfix">
                <div class="col-lg-3 col-md-3 col-sm-12 title-area">
                    <div class="site-title" id="title">
                        <a href="index.html" title="">
                            <img src="logo.jpg">
                        </a>
                    </div>
                </div>
                <!-- title area -->
                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div id="nav" class="right">
                        <div class="container clearfix">
                            <ul id="jetmenu" class="jetmenu blue">
                                <li class="active"><a href="index.html">Home</a>
                                </li>
                                <li><a href="#">ABOUT US</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('/aboutUs') }}">About Us</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="team-members.html">Team Members</a></li>
                                        <li><a href="testimonials.html">Testimonials</a></li>


                                    </ul>
                                </li>
                                <li><a href="#">OUR GOALS</a>
                                    <ul class="dropdown">
                                        <li><a href="digital-download.html">Products Page</a></li>
                                        <li><a href="single-product.html">Single Product</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="account.html">Account Page</a></li>
                                        <li><a href="support.html">Support Center</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">COMPETITION</a>
                                    <ul class="dropdown">
                                        <li><a href="single-portfolio-1.html">Single Portfolio 1</a></li>
                                        <li><a href="single-portfolio-2.html">Single Portfolio 2</a></li>
                                        <li><a href="portfolio-2.html">Portfolio (2 Columns)</a></li>
                                        <li><a href="portfolio-3.html">Portfolio (3 Columns)</a></li>
                                        <li><a href="gallery-portfolio.html">Gallery</a></li>
                                        <li><a href="masonry-grid-portfolio.html">Masonry Grid Style</a></li>
                                    </ul>
                                </li>

                                <li><a href="#">CONTACT US</a>
                                    <ul class="dropdown">
                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                        <li><a href="single-with-sidebar.html">Single with Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">MEMBERS</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('/allmembers') }}">ALL MEMBERS</a></li>
                                        <li><a href="blog-left-sidebar.html">RECENTLY JOINED</a></li>
                                        <li><a href="blog-right-sidebar.html">MOST ACTIVE</a></li>
                                        <li><a href="single-with-sidebar.html">SLEEPING MEMBERS</a></li>
                                    </ul>
                                </li>

                                <!-- Authentication Links -->

                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest

                        </div>
                    </div>
                    <!-- nav -->
                </div>
                <!-- title area -->
            </div>
            <!-- site header -->
        </div>
        <!-- end container -->
    </header>
    <!-- end header -->





    <section id="intro">
    <div class="container">
        <div class="ror">
            <div class="col-md-8 col-md-offset-2">
                <h1>A Bootstrap Template designed for all your business needs.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            </div>
        </div>
    </div>
</section>


<section class="section1">
    <div class="container">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="servicebox text-center">
                <div class="service-icon">
                    <div class="dm-icon-effect-1" data-effect="slide-left">
                        <a href="#" class=""> <i class="active dm-icon fa fa-bars fa-3x"></i> </a>
                    </div>
                    <div class="servicetitle">
                        <h4>Responsive Layout</h4>
                        <hr>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since..</p>
                </div>
                <!-- service-icon -->
            </div>
            <!-- servicebox -->
        </div>
        <!-- large-4 -->

        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="servicebox text-center">
                <div class="service-icon">
                    <div class="dm-icon-effect-1" data-effect="slide-bottom">
                        <a href="#" class=""> <i class="active dm-icon fa fa-laptop fa-3x"></i> </a>
                    </div>
                    <div class="servicetitle">
                        <h4>Creative Design</h4>
                        <hr>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since..</p>
                </div>
                <!-- service-icon -->
            </div>
            <!-- servicebox -->
        </div>
        <!-- large-4 -->

        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="servicebox text-center">
                <div class="service-icon">
                    <div class="dm-icon-effect-1" data-effect="slide-right">
                        <a href="#" class=""> <i class="active dm-icon fa fa-book fa-3x"></i> </a>
                    </div>
                    <div class="servicetitle">
                        <h4>Easy to Setup</h4>
                        <hr>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since..</p>
                </div>
                <!-- service-icon -->
            </div>
            <!-- servicebox -->
        </div>
        <!-- large-4 -->
    </div>
    <!-- end container -->
</section>
<!-- end section -->

<section class="section5">
    <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-12 columns">
            <div class="widget" data-effect="slide-left">
                <img src="assets/img/slider_02.png" alt="">
            </div>
            <!-- end widget -->
        </div>
        <!-- large-6 -->
        <div class="col-lg-6 col-md-6 col-sm-12 columns">
            <div class="widget clearfix">
                <div class="services_lists">

                    <div class="services_lists_boxes clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="services_lists_boxes_icon" data-effect="slide-bottom">
                                <a href="#" class=""> <i class="active dm-icon-medium fa fa-key fa-2x"></i> </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <div class="servicetitle">
                                <h4>Create an Account</h4>
                                <hr>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since..</p>
                        </div>
                    </div>
                    <!-- services_lists_boxes -->

                    <div class="services_lists_boxes clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="services_lists_boxes_icon" data-effect="slide-bottom">
                                <a href="#" class=""> <i class="active dm-icon-medium fa fa-download fa-2x"></i> </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <div class="servicetitle">
                                <h4>Upload Your Works</h4>
                                <hr>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard..</p>
                        </div>
                    </div>
                    <!-- services_lists_boxes -->


                    <div class="services_lists_boxes clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="services_lists_boxes_icon_none" data-effect="slide-bottom">
                                <a href="#" class=""> <i class="active dm-icon-medium fa fa-dollar fa-2x"></i> </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <div class="servicetitle">
                                <h4>Earn Money</h4>
                                <hr>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the industry. Lorem Ipsum has been the industry"s standard dummy text ever since..</p>
                        </div>
                    </div>
                    <!-- services_lists_boxes -->

                </div>
                <!-- services_lists -->
            </div>
            <!-- end widget -->
        </div>
        <!-- large-6 -->
    </div>
    <!-- end container -->
</section>
<!-- end section2 -->

<section class="section4 text-center">
    <div class="general-title">
        <h3>OUR BEST PRODUCTS</h3>
        <hr>
    </div>
    <div class="portfolio-wrapper">
        <div id="owl-demo" class="owl-carousel">

            <div class="item">
                <a data-rel="prettyPhoto" href="assets/img/portfolio_01.jpg">
                    <img class="lazyOwl" src="assets/img/portfolio_01.jpg" data-src="img/portfolio_01.jpg" alt="">
                    <div>
                        <small>Product Design</small>
                        <span>Project Name Here</span>
                        <i class="fa fa-search"></i>
                    </div>
                </a>
            </div>

            <div class="item">
                <a data-rel="prettyPhoto" href="assets/img/portfolio_02.jpg">
                    <img class="lazyOwl" src="assets/img/portfolio_02.jpg" data-src="img/portfolio_02.jpg" alt="">
                    <div>
                        <small>Product Design</small>
                        <span>Project Name Here</span>
                        <i class="fa fa-search"></i>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="assets/single-portfolio-1.html">
                    <img class="lazyOwl" src="assets/img/portfolio_07.jpg" data-src="img/portfolio_07.jpg" alt="">
                    <div>
                        <small>Product Design</small>
                        <span>Project Name Here</span>
                        <i class="fa fa-link"></i>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="assets/single-portfolio-1.html">
                    <img class="lazyOwl" src="assets/img/portfolio_05.jpg" data-src="img/portfolio_05.jpg" alt="">
                    <div>
                        <small>Product Design</small>
                        <span>Project Name Here</span>
                        <i class="fa fa-link"></i>
                    </div>
                </a>
            </div>

            <div class="item">
                <a data-rel="prettyPhoto" href="assets/img/portfolio_09.jpg">
                    <img class="lazyOwl" src="assets/img/portfolio_09.jpg" data-src="img/portfolio_09.jpg" alt="">
                    <div>
                        <small>Product Design</small>
                        <span>Project Name Here</span>
                        <i class="fa fa-search"></i>
                    </div>
                </a>
            </div>

            <div class="item">
                <a data-rel="prettyPhoto" href="assets/img/portfolio_10.jpg">
                    <img class="lazyOwl" src="assets/img/portfolio_10.jpg" data-src="img/portfolio_10.jpg" alt="">
                    <div>
                        <small>Product Design</small>
                        <span>Project Name Here</span>
                        <i class="fa fa-search"></i>
                    </div>
                </a>
            </div>

            <div class="item">
                <a data-rel="prettyPhoto" href="assets/img/portfolio_06.jpg">
                    <img class="lazyOwl" src="assets/img/portfolio_06.jpg" data-src="img/portfolio_06.jpg" alt="">
                    <div>
                        <small>Product Design</small>
                        <span>Project Name Here</span>
                        <i class="fa fa-search"></i>
                    </div>
                </a>
            </div>

        </div>
        <!-- end owl-demo -->
    </div>
    <!-- end portfolio-wrapper -->
    <a class="button large" href="home3.html#">VIEW ALL WORKS</a>
</section>
<!-- end section1 -->

<section class="section2">
    <div class="container">
        <div class="message text-center">
            <h2 class="big-title">Your <span>portfolio</span> should standout!</h2>
            <p class="small-title">Lorem Ipsum is simply dummy text of the printing and typesetting industy has been the industry"s standard.</p>
            <a class="button large" href="#">ABOUT OUR SERVICES</a> <a class=" dmbutton large" href="#">CONTACT US TODAY</a>
        </div>
        <!-- end message -->
    </div>
    <!-- end container -->
</section>
<!-- end section2 -->

<section class="section1 text-center">
    <div class="container">
        <div class="general-title">
            <h3>AFFORDABLE PRICES</h3>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" data-effect="slide-bottom">
                <div class="custom-box">
                    <div class="servicetitle">
                        <h4>Standard</h4>
                        <hr>
                    </div>
                    <div class="icn-main-container">
                        <span class="icn-container">$25</span>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                    <ul class="pricing">
                        <li>150 Mb Storage</li>
                        <li>1 Domain</li>
                        <li>2 Sub Domains</li>
                        <li>3 MySQL DBs</li>
                        <li>2 Emails</li>
                        <li>WordPress Installation</li>
                        <li>24/7 Support</li>
                    </ul>
                    <a class="btn btn-primary" href="#">Order Now</a>
                </div>
                <!-- end custombox -->
            </div>
            <!-- end col-4 -->

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" data-effect="slide-bottom">
                <div class="custom-box">
                    <div class="servicetitle">
                        <h4>Mega Pack</h4>
                        <hr>
                    </div>
                    <div class="icn-main-container">
                        <span class="icn-container">$55</span>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                    <ul class="pricing">
                        <li>150 Mb Storage</li>
                        <li>1 Domain</li>
                        <li>2 Sub Domains</li>
                        <li>3 MySQL DBs</li>
                        <li>2 Emails</li>
                        <li>WordPress Installation</li>
                        <li>24/7 Support</li>
                    </ul>
                    <a class="btn btn-primary" href="#">Order Now</a>
                </div>
                <!-- end custombox -->
            </div>
            <!-- end col-4 -->

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" data-effect="slide-bottom">
                <div class="custom-box">
                    <div class="servicetitle">
                        <h4>Ultra Pack</h4>
                        <hr>
                    </div>
                    <div class="icn-main-container">
                        <span class="icn-container">$98</span>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                    <ul class="pricing">
                        <li>150 Mb Storage</li>
                        <li>1 Domain</li>
                        <li>2 Sub Domains</li>
                        <li>3 MySQL DBs</li>
                        <li>2 Emails</li>
                        <li>WordPress Installation</li>
                        <li>24/7 Support</li>
                    </ul>
                    <a class="btn btn-primary" href="#">Order Now</a>
                </div>
                <!-- end custombox -->
            </div>
            <!-- end col-4 -->

        </div>
    </div>
    <!-- end container -->
</section>
<!-- end section1 -->

<section class="section3">
    <div class="container withpadding">
        <div class="message">
            <div class="col-lg-9 col-md-9 col-sm-9">
                <h3>Grab the attention of your customers!</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since the 1500s..</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <a class="dmbutton button large pull-right" href="#"><i class="fa fa-download"></i> GET A QUOTE</a>
            </div>
        </div>
        <!-- end message -->
    </div>
    <!-- end container -->
</section>
<!-- end section3 -->

@include('layouts.footer')
<!-- JavaScript Libraries -->
<script src="assets/lib/jquery/jquery.min.js"></script>
<script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/lib/php-mail-form/validate.js"></script>
<script src="assets/lib/prettyphoto/js/prettyphoto.js"></script>
<script src="assets/lib/isotope/isotope.min.js"></script>
<script src="assets/lib/hover/hoverdir.js"></script>
<script src="assets/lib/hover/hoverex.min.js"></script>
<script src="assets/lib/unveil-effects/unveil-effects.js"></script>
<script src="assets/lib/owl-carousel/owl-carousel.js"></script>
<script src="assets/lib/jetmenu/jetmenu.js"></script>
<script src="assets/lib/animate-enhanced/animate-enhanced.min.js"></script>
<script src="assets/lib/jigowatt/jigowatt.js"></script>
<script src="assets/lib/easypiechart/easypiechart.min.js"></script>

<!-- Template Main Javascript File -->
<script src="assets/js/main.js"></script>

</body>
</html>
