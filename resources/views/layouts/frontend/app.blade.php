<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Run Capital Group - Investment portal</title>

    <link rel="stylesheet" href="{{url('/')}}/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/all.min.css">
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/animate.css">
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/nice-select.css">
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/owl.min.css">
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/jquery-ui.min.css">
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/magnific-popup.css">
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/flaticon.css">
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/main.css">

    <link rel="shortcut icon" href="{{url('/')}}/frontend/images/favicon.png" type="image/x-icon">


</head>

<body>
<!--============= ScrollToTop Section Starts Here =============-->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
<div class="overlay"></div>
<!--============= ScrollToTop Section Ends Here =============-->


<!--============= Header Section Starts Here =============-->
<header class="header-section">
    <div class="container">
        <div class="header-wrapper">
            <div class="logo">
                <a href="{{url('/')}}">
                    <img src="{{url('/')}}/assets/img/brand/blue.png" alt="logo">
                </a>
            </div>
            <ul class="menu">
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li>
                    <a href="{{url('/about-us')}}">About us</a>
                </li>

                <li>
                    <a href="{{url('/contact-us')}}">contact</a>
                </li>
                <li class="d-sm-none">
                    <a href="{{route('login')}}" class="m-0 header-button">Login</a>
                    <a href="{{route('register')}}" class="m-0 header-button">Register</a>
                </li>
            </ul>
            <div class="header-bar d-lg-none">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="header-right">
                <a href="{{route('login')}}" class="header-button d-none d-sm-inline-block light">Login</a>
                <a href="{{route('register')}}" class="header-button d-none d-sm-inline-block light">Register</a>
            </div>
        </div>
    </div>
</header>
<!--============= Header Section Ends Here =============-->

@yield('content')



<!--============= Footer Section Starts Here =============-->
<footer class="footer-section bg_img" data-background="{{url('/')}}/frontend/images/footer/footer-bg.jpg">
    <div class="container">
        <div class="footer-top padding-top padding-bottom">
            <div class="logo">
                <a href="#0">
                    <img src="{{url('/')}}/assets/img/brand/blue.png" alt="logo">
                </a>
            </div>
            <ul class="social-icons">
                <li>
                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="#0" class="active"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fab fa-pinterest-p"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fab fa-google-plus-g"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
        </div>
        <div class="footer-bottom">
            <ul class="footer-link">
                <li>
                    <a href="{{url('/about-us')}}">About</a>
                </li>
                <li>
                    <a href="{{url('/faq')}}">FAQs</a>
                </li>
                <li>
                    <a href="{{url('/contact-us')}}">Contact</a>
                </li>
                <li>
                    <a href="{{url('/terms-of-services')}}">Terms of Service</a>
                </li>
                <li>
                    <a href="{{url('/privacy-policy')}}">Privacy</a>
                </li>
            </ul>
        </div>
        <div class="copyright">
            <p>
                Copyright © 2020.All Rights Reserved By <a href="{{url('/')}}">Run Capital</a>
            </p>
        </div>
    </div>
</footer>
<!--============= Footer Section Ends Here =============-->

<script src="{{url('/')}}/frontend/js/jquery-3.3.1.min.js"></script>
<script src="{{url('/')}}/frontend/js/modernizr-3.6.0.min.js"></script>
<script src="{{url('/')}}/frontend/js/plugins.js"></script>
<script src="{{url('/')}}/frontend/js/bootstrap.min.js"></script>
<script src="{{url('/')}}/frontend/js/magnific-popup.min.js"></script>
<script src="{{url('/')}}/frontend/js/jquery-ui.min.js"></script>
<script src="{{url('/')}}/frontend/js/wow.min.js"></script>
<script src="{{url('/')}}/frontend/js/waypoints.js"></script>
<script src="{{url('/')}}/frontend/js/nice-select.js"></script>
<script src="{{url('/')}}/frontend/js/owl.min.js"></script>
<script src="{{url('/')}}/frontend/js/counterup.min.js"></script>
<script src="{{url('/')}}/frontend/js/paroller.js"></script>
<script src="{{url('/')}}/frontend/js/main.js"></script>


</body>

</html>
