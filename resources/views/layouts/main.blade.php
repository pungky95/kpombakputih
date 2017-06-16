<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Theme-Paradise" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="{{{ asset('images/gallery/favicon.png') }}}">
    <script src="{{ asset("js/sweetalert.min.js") }}"></script>
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>

    <link href="{{ asset("fonts/fontawesome/css/font-awesome.min.css") }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset("fonts/icomoon/style.css") }}" rel='stylesheet' type='text/css'>

    <link href="{{ asset("css/jquery-ui.min.css") }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset("bootstrap/css/bootstrap.min.css") }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset("css/animate.css") }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset("css/swiper.min.css") }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset("css/lightbox.css")}}" rel="stylesheet" />
    <link href="{{ asset("css/sweetalert.css") }}" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link href="{{ asset("css/style.css") }}" rel='stylesheet' type='text/css'>

    <title>@yield('title')</title>

</head>
<body class="loading">
    <h1 class="hidden">Homepage 1</h1>
    <div id="preloader-wrapper">
        <div id="preloader"></div>
    </div>

    <header >
        <div class="container">
            <a href="{{url('/')}}" class="logo-link"><img class="logo" src="{{ asset("moon/images/logo.png") }}" alt="Logo"></a>
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
                        <a href="{{ url('/bungalows')}}">Bungalows</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/facilities')}}">Facilities</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{url('/choose_date')}}">Booking</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/gallery')}}">Gallery</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/blogs')}}">Blog</a>
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
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li class="mobile-menu-item">
                    <a href="{{ url('/about') }}">About</a>
                </li>
                <li class="mobile-menu-item">
                    <a class="menu-item" href="{{ url('/bungalows')}}">Bungalows<i class="toggle-state-icon icon-angle-right"></i></a>
                </li>
                <li class="mobile-menu-item">
                    <a href="{{ url('/services')}}">Services</a>
                </li>
                <li class="mobile-menu-item">
                    <a class="menu-item" href="{{url('/choose_date')}}">Booking<i class="toggle-state-icon icon-angle-right"></i></a>
                </li>
                <li class="mobile-menu-item">
                    <a class="menu-item" href="{{ url('/gallery')}}">Gallery<i class="toggle-state-icon icon-angle-right"></i></a>
                </li>
                <li class="mobile-menu-item">
                    <a href="{{ url('/blogs')}}">Blog</a>
                </li>
                <li class="mobile-menu-item">
                    <a href="{{ url('kontak/create')}}">Contact</a>
                </li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h3 class="subtitle"><strong>Useful Links</strong></h3>
                    <ul class="site-links">
                        <li><a href="{{ url('/services')}}">Services</a></li>
                        <li><a href="{{ url('/blogs')}}">Blog</a></li>
                        <li><a href="{{ url('/bungalows')}}">Bungalows</a></li>
                        <li><a href="{{ url('/facilities')}}">Facilities</a></li>
                        <li><a href="{{ url('/about') }}">About</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 text-center">
                    <h3 class="subtitle wide"><strong>Ombak Putih</strong> Bungalows</h3>
                    <div class="moon-divider small"></div>
                    <p>Jln.Pratama 101X, Tanjung Benoa</p>
                    <p>(+064) - 342 - 68273   —   (+064) - 342 - 68275</p>
                    <p><a href="#">dinafur@hotmail.com</a></p>
                    <p><a href="#">http://ombakputihnusadua.com</a></p>
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
                <p>@2017 Ombak Putih Bungalows. Designed by Pungky &amp; Welly with Code and <i class="fa fa-heart"></i></p>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="{{ asset("js/jquery.js") }}"></script>
    <script type="text/javascript" src="{{ asset("js/jquery-ui.js") }}"></script>
    <script type="text/javascript" src="{{ asset("bootstrap/js/bootstrap.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("js/plugins.js") }}"></script>
    <script type="text/javascript" src="{{ asset("js/lightbox.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("js/functions.js") }}"></script>
    <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
    </body>
</html>