<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Run Capital</title>

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/png" href="image/favicon.png">

    <!--Bootstrap css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--font-awosome icon css-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--elegant icon css-->
    <link rel="stylesheet" href="vendors/elegant-icon/style.css">

    <!--google fonts-->
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Rufina:400,700' rel='stylesheet' type='text/css'>

    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="vendors/revolution/css/settings.css">

    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="vendors/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="vendors/revolution/css/navigation.css">

    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="css/meanmenu.min.css">

    <!--owl carousel css-->
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.css">
    <!--main css-->
    <link rel="stylesheet" href="css/style.css">

    <!--responsive css-->
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
<!-- Loader start -->
<div class="loader">
    <div class="loader-brand">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
</div>
<!-- Loader End -->
<!--start header area-->
<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="logo">
                    <a href="/"><img style="height: 50px" src="{{asset('assets/img/brand/blue.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="main-menu">
                    <nav>
                        <ul id="nav">
                            <li class="active"><a href="#">Home</a>
                            </li>
                            <li><a href="#about-us">About Us</a></li>

                            <li><a href="#blog">Blog</a>
                            </li>
                            <li><a href="#contact">Contact</a>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-2">
                <div class="socia-icon">
                    <ul>
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="{{route('register')}}">Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- mobile-menu-area start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mobile-menu">
                    <div class="logo">
                        <a href="/"><img style="height: 50px" src="{{asset('assets/img/brand/blue.png')}}" alt="" /></a>
                    </div>
                    <nav id="dropdown">
                        <ul>
                            <li class="active"><a href="#">Home</a>
                            </li>
                            <li><a href="#about-us">About Us</a></li>

                            <li><a href="#blog">Blog</a>
                            </li>
                            <li><a href="#contact">Contact</a>
                            </li>
                            <li><a href="{{route('login')}}">Login</a></li>
                            <li><a href="{{route('register')}}">Register</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile-menu-area end -->
<!--==========Start rv-Slider Area==========-->
<section class="row main-slider-area">
    <div id="slider1" class="rev_slider slider" data-version="5.0.7">
        <ul>
            <li data-index="rs-6" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="image/sliderthum.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="slider-1" data-description="">
                <img src="image/slider1.jpg" alt="">
                <div class="tp-caption slide-tittle NotGeneric-Title   tp-resizeme rs-parallaxlevel-3"
                     data-x="left"
                     data-hoffset="['0','0','0','0','20','0']"
                     data-y="top"
                     data-voffset="['175','130','70','70','110','65']"
                     data-fontsize="['60','60',50]"
                     data-lineheight="['60']"
                     data-width="['750','750','580','400','400',300']"
                     data-height="none"
                     data-whitespace="normal"
                     data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                     data-mask_out="x:inherit;y:inherit;"
                     data-start="1000"
                     data-transform_idle="o:1;"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on">
                    <h2>Your money has to work for you without loss <span>.</span></h2>
                </div>
                <div class="tp-caption slide-p"
                     data-x="left"
                     data-hoffset="['0','0','0','0','20','0']"
                     data-y="top"
                     data-voffset="['337','290','230','220','235','170']"
                     data-fontsize="['18']"
                     data-lineheight="['28']"
                     data-width="['610','610','610','400','400',300']"
                     data-height="none"
                     data-whitespace="normal"
                     data-transform_idle="o:1;"
                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="1500"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on"><p>We’ve all heard how crucial it is to set intentions, goals and targets. Powerful goals electrify us. Clear intentions energize and pull us forward.</p>
                </div>

                <div class="tp-caption slide-button"
                     data-x="left"
                     data-hoffset="['0','0','0','0','20','0']"
                     data-y="top"
                     data-voffset="['442','395','350']"
                     data-fontsize="16"
                     data-lineheight="['30']"
                     data-width="['458','458','458','400','400','290']"
                     data-height="none"
                     data-whitespace="normal"
                     data-transform_idle="o:1;"
                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                     data-mask_in="x:0px;y:0px;"
                     data-mask_out="x:inherit;y:inherit;"
                     data-start="1500"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on"><button type="button" class="btn button">read more<i class="arrow_right"></i></button>
                </div>
            </li>
            <li data-transition="scaledownfromRight" data-title="Slide-2">
                <img src="image/slider1.jpg"
                     alt=""
                     data-bgposition="center center"
                     data-bgfit="cover"
                     data-bgrepeat="no-repeat"
                     class="rev-slidebg" data-no-retina>
                <div class="tp-caption slide-tittle"
                     data-x="left"
                     data-hoffset="['0','0','0','0','20','0']"
                     data-y="top"
                     data-voffset="['175','130','70','70','110','65']"
                     data-fontsize="['60','60',50]"
                     data-lineheight="['60']"
                     data-width="['750','750','580','400','400',300']"
                     data-height="none"
                     data-whitespace="normal"
                     data-transform_idle="o:1;"
                     data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                     data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                     data-start="1000"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on">
                    <h2>Your money has to work for you without loss <span>.</span></h2>
                </div>
                <div class="tp-caption slide-p"
                     data-x="left"
                     data-hoffset="['0','0','0','0','20','0']"
                     data-y="top"
                     data-voffset="['337','290','230','220','235','170']"
                     data-fontsize="['18']"
                     data-lineheight="['28']"
                     data-width="['610','610','610','400','400',300']"
                     data-height="none"
                     data-whitespace="normal"
                     data-transform_idle="o:1;"
                     data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                     data-mask_out="x:inherit;y:inherit;"
                     data-start="1000"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on"><p>We’ve all heard how crucial it is to set intentions, goals and targets. Powerful goals electrify us. Clear intentions energize and pull us forward.</p>
                </div>

                <div class="tp-caption slide-button"
                     data-x="left"
                     data-hoffset="['0','0','0','0','20','0']"
                     data-y="top"
                     data-voffset="['442','395','350']"
                     data-fontsize="16"
                     data-lineheight="['30']"
                     data-width="['458','458','458','400','400','290']"
                     data-height="none"
                     data-whitespace="normal"
                     data-transform_idle="o:1;"
                     data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                     data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                     data-start="1500"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on"><button type="button" class="btn button">read more<i class="arrow_right"></i></button>
                </div>
            </li>
            <li data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="image/sliderthum.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="slider-3" data-description="">
                <img src="image/slider1.jpg"
                     alt=""
                     data-bgposition="center center"
                     data-bgfit="cover"
                     data-bgrepeat="no-repeat"
                     class="rev-slidebg" data-no-retina>
                <div class="tp-caption slide-tittle"
                     data-x="left"
                     data-hoffset="['0','0','0','0','20','0']"
                     data-y="top"
                     data-voffset="['175','130','70','70','110','65']"
                     data-fontsize="['60','60',50]"
                     data-lineheight="['60']"
                     data-width="['750','750','580','400','400',300']"
                     data-height="none"
                     data-whitespace="normal"
                     data-transform_idle="o:1;"
                     data-transform_in="z:0;rX:0;rY:0;rZ:5deg;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Back.easeOut;"
                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="1000"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on">
                    <h2>Your money has to work for you without loss <span>.</span></h2>
                </div>
                <div class="tp-caption slide-p"
                     data-x="left"
                     data-hoffset="['0','0','0','0','20','0']"
                     data-y="top"
                     data-voffset="['337','290','230','220','235','170']"
                     data-fontsize="['18']"
                     data-lineheight="['28']"
                     data-width="['610','610','610','400','400',300']"
                     data-height="none"
                     data-whitespace="normal"
                     data-transform_idle="o:1;"
                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="1500"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on"><p>We’ve all heard how crucial it is to set intentions, goals and targets. Powerful goals electrify us. Clear intentions energize and pull us forward.</p>
                </div>

                <div class="tp-caption slide-button"
                     data-x="left"
                     data-hoffset="['0','0','0','0','20','0']"
                     data-y="top"
                     data-voffset="['442','395','350']"
                     data-fontsize="16"
                     data-lineheight="['30']"
                     data-width="['458','458','458','400','400','290']"
                     data-height="none"
                     data-whitespace="normal"
                     data-transform_idle="o:1;"
                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="2000"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on"><button type="button" class="btn button">read more<i class="arrow_right"></i></button>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--==========End rv-Slider Area==========-->
<!--start features area-->
<section class="features-area">
    <div class="container">
        <h2 class="section-title">How are we useful for you</h2>
        <div class="row  features">
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="features-content">
                    <span class="features-num">01</span>
                    <h2>investment</h2>
                    <p>Many people would say that it is absolute madness to keep on doing the same thing, time after</p>
                    <a class="arrow pull-right" href="#"><i class="arrow_right"></i></a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="features-content">
                    <span class="features-num">02</span>
                    <h2>personal finance</h2>
                    <p>When someone does something that they know that they shouldn’t do, did they really.</p>
                    <a class="arrow pull-right" href="#"><i class="arrow_right"></i></a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="features-content">
                    <span class="features-num">03</span>
                    <h2>trust management</h2>
                    <p>Point of Sale hardware, the till at a shop check out, has become very complex over the past ten</p>
                    <a class="arrow pull-right" href="#"><i class="arrow_right"></i></a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="features-content">
                    <span class="features-num">04</span>
                    <h2>consulting</h2>
                    <p>Photographs are a way of preserving a moment in our lives for the rest of our lives. Many of </p>
                    <a class="arrow pull-right" href="#"><i class="arrow_right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End features area-->
<!--start about area-->
<section id="about-us" class="about-area">
    <div class="container">
        <h2 class="section-title">about us</h2>
        <div class="media about-content">
            <div class="media-left">
                <div class="about-img">
                    <img src="image/about1.jpg" alt="">
                    <div class="content">
                        <h3>Investment is a key to long-term wealth</h3>
                        <span><a href="#">– Nick Gerrard</a><br>CEO of Metropol</span>
                        <h4>metropol</h4>
                    </div>
                </div>

            </div>
            <div class="media-body">
                <div class="texts">
                    <h2>We help clients to work with money 5 years.</h2>
                    <p>So many of us are demotivated to achieve anything. Such people are not enthusiastic about anything. They don’t want to work towards any goal. Nothing motivates them to work. Why many of us are not motivated? What is wrong?</p>
                    <p>We think in different ways and our thinking is decided by many factors. Some are known and some are unknown. The known factors are – thinking, circumstances.</p>
                    <button type="button" class="btn button pull-right">read more<i class="arrow_right"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End about area-->
<!--start work progressbar area-->
<section class="work-progressbar-area">
    <div class="container">
        <h2 class="section-title">work in figures</h2>
        <div class="row work-progress">
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="work-progressbar">
                    <div class="circle" data-value="0.62" data-fill="{&quot;color&quot;: &quot;#12b5f1&quot;}" data-trackcolor="">
                        <div class="chart-percent"><div class="text"><span class="counter">3</span>M</div></div>
                    </div>
                    <p>Weekly turnover of the company</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="work-progressbar">
                    <div class="circle" data-value="0.72" data-fill="{&quot;color&quot;: &quot;#12b5f1&quot;}" data-trackcolor="">
                        <div class="chart-percent"><div class="text"><span class="counter">237</span></div></div>
                    </div>
                    <p>Clients working with us</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="work-progressbar">
                    <div class="circle" data-value="0.42" data-fill="{&quot;color&quot;: &quot;#12b5f1&quot;}" data-trackcolor="">
                        <div class="chart-percent"><div class="text"><span class="counter">18</span>%</div></div>
                    </div>
                    <p>Average profit of our clients</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="work-progressbar">
                    <div class="circle" data-value="0.70" data-fill="{&quot;color&quot;: &quot;#12b5f1&quot;}" data-trackcolor="">
                        <div class="chart-percent"><div class="text"><span class="counter">92</span>%</div></div>
                    </div>
                    <p>So many years we help people to manage money</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End work progressbar area-->
<!--Start clients-about-area-->
<section class="clients-about-area">
    <div class="container">
        <h2 class="section-title">clients about us</h2>
        <div class="slider-carousel">
            <div class="item">
                <div class="slider-content">
                    <div class="text">
                        <p>Notes are very powerful. They express your thanks, encouragement, sympathy, apology, congratulations, feelings, and requests to others.<br>
                            Many people create notes on a computer and print them or send them through the Internet. However, I believe the most effective notes are handwritten. A handwritten note is personal and rare.</p>
                    </div>
                    <div class="media">
                        <div class="media-left img">
                            <img class="img-circle" src="image/clients-about-us1.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <span><a href="#">– Dustin Green</a><br>Web designer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-content">
                    <div class="text">
                        <p>Notes are very powerful. They express your thanks, encouragement, sympathy, apology, congratulations, feelings, and requests to others.<br>Many people create notes on a computer and print them or send them through the Internet. However, I believe the most effective notes are handwritten. A handwritten note is personal and rare.</p>
                    </div>
                    <div class="media">
                        <div class="media-left img">
                            <img class="img-circle" src="image/clients-about-us2.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <span><a href="#">– Dustin Green</a><br>Web designer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clients-btn">
            <button type="button" class="btn button">become our client<i class="arrow_right"></i></button>
        </div>
    </div>
</section>
<!--End clients-about-area-->
<!--Start partner-logo-area-->
<section class="partner-logo-area">
    <div class="container">
        <h2 class="section-title">our partners</h2>
        <div class="partner-carousel">
            <div class="item">
                <div class="single-partner">
                    <a href="#">
                        <img src="image/clients-logo/1.png" alt="">
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="single-partner">
                    <a href="#">
                        <img src="image/clients-logo/2.png" alt="">
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="single-partner">
                    <a href="#">
                        <img src="image/clients-logo/1.png" alt="">
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="single-partner">
                    <a href="#">
                        <img src="image/clients-logo/2.png" alt="">
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="single-partner">
                    <a href="#">
                        <img src="image/clients-logo/1.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End partner-logo-area-->
<!--start latest blog area-->
<section id="blog" class="latest-blog-area">
    <div class="container">
        <h2 class="section-title">latest from blog</h2>
        <div class="row latest">
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="blog">
                    <div class="img-hover">
                        <img class="img-responsive" src="image/blog/1.jpg" alt="">
                    </div>
                    <div class="blog-content">
                        <div class="blog-content-inner">
                            <h2>Where to invest in 2016?</h2>
                            <p>The purpose of your brochure may differ from business to business. Some are designed to ...</p>
                            <h6 class="date"><a href="#">Apr 26, 2016</a></h6>
                            <a class="arrow pull-right" href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="blog blog-info1">
                    <div class="img-hover">
                        <img class="img-responsive" src="image/blog/2.jpg" alt="">
                    </div>
                    <div class="blog-content">
                        <div class="blog-content-inner">
                            <h2>Bank deposits. What to choose?</h2>
                            <p>Be careful what you believe because that is what you will experience. Your belief system is a mechanism which ...</p>
                            <h6 class="date"><a href="#" class="date">Apr 26, 2016</a></h6>
                            <a class="arrow pull-right" href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="blog blog-info">
                    <div class="img-hover">
                        <img class="img-responsive" src="image/blog/3.jpg" alt="">
                    </div>
                    <div class="blog-content">
                        <div class="blog-content-inner">
                            <h2>Our Top-10 recommendations</h2>
                            <p>Differentiate and you stand out in a crowded marketplace. Present your uniqueness and emphasize your ...</p>
                            <h6 class="date"><a href="#" class="date">Apr 26, 2016</a></h6>
                            <a class="arrow pull-right" href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-button">
            <button type="button" class="btn button">explore more<i class="arrow_right"></i></button>
        </div>
    </div>
</section>
<!--End latest blog area-->
<!--start question area-->
<section class="question-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="question-content">
                    <h2>If you have a question, you can contact us. Just fill a form.</h2>
                    <p>Many studies have been done to research
                        the effects of motivation and mental health.
                        As the implications of helping those with negative self-esteem, depression and anxiety are immense this is certainly an area of research that deserves a great deal of attention.</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="question-contact-form">
                    <form class="contact-form r0w m0 js-ajax-form">
                        <input type="text" id="name" name="name" placeholder="name" required="" class="form-control">
                        <input type="email" id="phone" name="email" placeholder="Email" class="form-control">
                        <input type="tel" id="subject" name="phone" placeholder="Phone" required="" class="form-control">
                        <textarea id="message" class="form-control" name="message"   placeholder="Message"></textarea>
                        <div class="contact-button">
                            <button type="submit" class="btn submit">send<i class="arrow_right"></i></button>
                        </div>
                    </form>
                    <div id="success">Your message succesfully sent!</div>
                    <div id="error">Opps! There is something wrong. Please try again</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End question area-->
<!--Start map contect area-->
<section id="contact" class="map-contact-area">
    <div class="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-6">
                    <div class="info">
                        <div class="media box">
                            <div class="media-left">
                                <i class="icon_clock_alt"></i>
                            </div>
                            <div class="media-body">
                                <h2><a href="#">working hours</a></h2>
                                <ul>
                                    <li>Monday – Friday: 8:00 – 16:30</li>
                                    <li>Saturday: 8:00 – 18:30</li>
                                    <li>Sunday: 11:00 – 15:00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                    <div class="info">
                        <div class="media box">
                            <div class="media-left icon">
                                <i class="icon_pin_alt"></i>
                            </div>
                            <div class="media-body">
                                <h2><a href="#">we are here</a></h2>
                                <ul>
                                    <li>Beechwood Dr, Lawrence, NY 11559, USA</li>
                                    <li>Phone: +1 916-875-2235</li>
                                    <li>Email: <a>info@metropol.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="mapBox" class="row m0"></div>

</section>
<!--End map contect area-->
<!--start footer area-->
<footer class="footer-area">
    <div class="footer-top">
        <div class="container">
            <div class="row footer">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="widget about-widget">
                        <h2 class="widget-tittle">About Us</h2>
                        <p>This is a popular question people ask me. How do you know if I am mastering the art of Deliberate Attraction? Is there an advanced course I can take? My answer is always the same, “The application of this material into</p>
                        <a href="#" class="logo">
                            <img src="image/footer-logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="widget widget-link">
                        <h2 class="widget-tittle">services</h2>
                        <ul>
                            <li><a href="#">Investment</a></li>
                            <li><a href="#">Personal Finance</a></li>
                            <li><a href="#">Trust Management</a></li>
                            <li><a href="#">Consulting</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 widget recent-widget">
                    <h2 class="widget-tittle">Recent Posts</h2>
                    <div class="widget-inner row m0">
                        <ul>
                            <li>
                                <img src="image/clients-about-us1.jpg" alt="">
                                <div class="recent-post-text">
                                    <h5><a>Where to invest in 2016?</a></h5>
                                    <a href="#">Apr. 28, 2016</a>
                                </div>
                            </li>
                            <li>
                                <img src="image/clients-about-us1.jpg" alt="">
                                <div class="recent-post-text">
                                    <h5><a>Bank deposit. What to choose?</a></h5>
                                    <a href="#">Apr. 28, 2016</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="widget widget-news">
                        <h2 class="widget-tittle">newsletter</h2>
                        <div class="widget-inner row m0">
                            <form action="#" class="search-form" method="get">
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="Email">
                                    <span class="input-group-addon">
                                                <button type="submit"><i class="arrow_right"></i></button>
                                            </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <span>© <a href="index.html">Metropol</a> 2016. All Rights Reserved.</span>
                </div>
                <div class="col-md-7 col-sm-6">
                    <ul class="nav footer-nav">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Privacy Policy </a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2">
                    <div class="social-nav">
                        <ul class="nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--End footer area-->
<!--All JS Files Here-->
<script src="js/jquery-2.2.0.min.js"></script>
<!--bootstrap Js-->
<script src="js/bootstrap.min.js"></script>
<!-- meanmenu js -->
<script src="js/jquery.meanmenu.js"></script>
<!--map js-->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="js/gmaps.min.js"></script>
<script src="js/google-map.js"></script>
<!-- counter js-->
<script src="vendors/waypoint/waypoints.min.js"></script>
<script src="vendors/couterup/jquery.counterup.min.js"></script>
<script src="vendors/circle-progress/circle-progress.js"></script>
<!-- RS5.0 Core JS Files -->
<script src="vendors/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
<script src="vendors/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
<!--RS5.0 Extensions-->
<script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<!--owl Js-->
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<!--form validate-->
<script src="js/jquery.validate.min.js"></script>
<!--main Js-->
<script src="js/main.js"></script>
</body>
</html>
