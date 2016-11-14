<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Theme-Paradise" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>

    <link href="{{ asset("moon/fonts/fontawesome/css/font-awesome.min.css") }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset("moon/fonts/icomoon/style.css") }}" rel='stylesheet' type='text/css'>

    <link href="{{ asset("moon/css/jquery-ui.min.css") }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset("moon/bootstrap/css/bootstrap.min.css") }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset("moon/css/animate.css") }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset("moon/css/swiper.min.css") }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset("css/sweetalert.css") }}" rel='stylesheet' type='text/css'>

    <link href="{{ asset("moon/css/style.css") }}" rel='stylesheet' type='text/css'>

    <title>@yield('title')</title>

</head>
<body class="loading">
    <h1 class="hidden">Homepage 1</h1>
    <div id="preloader-wrapper">
        <div id="preloader"></div>
    </div>
    <header>
        <div class="container">
            <a href="#" class="logo-link"><img class="logo" src="{{ asset("moon/images/logo.png") }}" alt="Logo"></a>
            <nav class="main-menu clearfix">
                <h2 class="hidden">Main Menu</h2>
                <ul>
                    <li class="menu-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="menu-item">
                        <a href="#">Rooms</a>
                    </li>
                    <li class="menu-item">
                        <a href="facilities.html">Services</a>
                    </li>
                    <li class="menu-item">
                        <a href="#">Booking</a>
                    </li>
                    <li class="menu-item">
                        <a href="#">Gallery</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/blog/user')}}">Blog</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('kontak/create')}}">Contact</a>
                    </li>
                </ul>
            </nav>

            <div id="menu-toggle">
                <div class="bar first"></div>
                <div class="bar second"></div>
                <div class="bar third"></div>
            </div>
        </div>

        <nav id="mobile-menu">
            <h2 class="hidden">Mobile Navigation Menu</h2>
            <ul>
                <li class="mobile-menu-item">
                    <a class="menu-item" href="#">Home<i class="toggle-state-icon icon-angle-right"></i></a>
                    <ul class="submenu">
                        <li class="sub-menu-item"><a href="index1.html">Home Version 1</a></li>
                        <li class="sub-menu-item"><a href="index2.html">Home Version 2</a></li>
                    </ul>
                </li>
                <li class="mobile-menu-item">
                    <a class="menu-item" href="about.html">About</a>
                </li>
                <li class="mobile-menu-item">
                    <a class="menu-item" href="#">Rooms<i class="toggle-state-icon icon-angle-right"></i></a>
                    <ul class="submenu">
                        <li class="sub-menu-item"><a href="rooms.html">Rooms List</a></li>
                        <li class="sub-menu-item"><a href="room-single.html">Room single</a></li>
                    </ul>
                </li>
                <li class="mobile-menu-item">
                    <a class="menu-item" href="facilities.html">Services</a>
                </li>
                <li class="mobile-menu-item">
                    <a class="menu-item" href="#">Booking<i class="toggle-state-icon icon-angle-right"></i></a>
                    <ul class="submenu">
                        <li class="sub-menu-item"><a href="booking-choose-date.html">Choose Date</a></li>
                        <li class="sub-menu-item"><a href="booking-choose-room.html">Choose Room</a></li>
                        <li class="sub-menu-item"><a href="booking-reservation.html">Reservation</a></li>
                    </ul>
                </li>
                <li class="mobile-menu-item">
                    <a class="menu-item" href="#">Gallery<i class="toggle-state-icon icon-angle-right"></i></a>
                    <ul class="submenu">
                        <li class="sub-menu-item"><a href="gallery.html">Gallery</a></li>
                        <li class="sub-menu-item"><a href="gallery-single.html">Gallery Single</a></li>
                    </ul>
                </li>
                <li class="mobile-menu-item">
                    <a class="menu-item" href="#">Blog<i class="toggle-state-icon icon-angle-right"></i></a>
                    <ul class="submenu">
                        <li class="sub-menu-item"><a href="blog1.html">Blog Version 1</a></li>
                        <li class="sub-menu-item"><a href="blog2.html">Blog Version 2</a></li>
                        <li class="sub-menu-item"><a href="blog-single.html">Blog Single</a></li>
                    </ul>
                </li>
                <li class="mobile-menu-item">
                  <a class="menu-item" href="contact.html">Contact</a>
                </li>
            </ul>
        </nav>

    </header>
@yield('nav')
   <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h3 class="subtitle"><strong>Useful Links</strong></h3>
                    <ul class="site-links">
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Rooms</a></li>
                        <li><a href="#">Facilities</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Event Planner</a></li>
                        <li><a href="#">Special Offer</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Under Construction</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 text-center">
                    <h3 class="subtitle wide"><strong>Ombak Putih</strong> Bungalows</h3>
                    <div class="moon-divider small"></div>
                    <p>Jln.Pratama 101X, Tanjung Benoa</p>
                    <p>(+064) - 342 - 68273   —   (+064) - 342 - 68275</p>
                    <p><a href="#">info@themoonhotel.com</a></p>
                    <p><a href="#">http://themoonhotel.com</a></p>
                    <div class="moon-divider small"></div>
                    <div class="social-links">
                        <a class="social-link" href="#"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a>
                        <a class="social-link" href="#"><i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a>
                        <a class="social-link" href="#"><i class="fa fa-google-plus"></i><i class="fa fa-google-plus"></i></a>
                        <a class="social-link" href="#"><i class="fa fa-pinterest-p"></i><i class="fa fa-pinterest-p"></i></a>
                        <a class="social-link" href="#"><i class="fa fa-instagram"></i><i class="fa fa-instagram"></i></a>
                        <a class="social-link" href="#"><i class="fa fa-youtube"></i><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <p>@2016 Ombak Putih Bungalows. Designed by Code with <i class="fa fa-heart"></i></p>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="{{ asset("moon/js/jquery.js") }}"></script>
    <script type="text/javascript" src="{{ asset("moon/js/jquery-ui.js") }}"></script>
    <script type="text/javascript" src="{{ asset("moon/bootstrap/js/bootstrap.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("moon/js/plugins.js") }}"></script>
    <script type="text/javascript" src="{{ asset("moon/js/functions.js") }}"></script>

    </body>

</html>