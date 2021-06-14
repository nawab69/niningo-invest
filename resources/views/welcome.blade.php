@extends('layouts.frontend.app')

@section('content')

<!--============= Banner Section Starts Here =============-->
<section class="banner-10 bg_img pos-rel oh" data-background="{{url('/')}}/frontend/images/banner/banner-10.jpg">
    <div class="bottom-shape d-lg-block d-none">
        <img src="{{url('/')}}/frontend/css/img/banner-10.png" alt="css">
    </div>
    <div class="banner-10-trops d-lg-block d-none">
        <div class="trops-1"><img src="{{url('/')}}/frontend/images/banner/banner10/circle.png" alt="banner10"></div>
        <div class="trops-2"><img src="{{url('/')}}/frontend/images/banner/banner10/tri1.png" alt="banner10"></div>
        <div class="trops-3"><img src="{{url('/')}}/frontend/images/banner/banner10/tri2.png" alt="banner10"></div>
        <div class="trops-4"><img src="{{url('/')}}/frontend/images/banner/banner10/tri3.png" alt="banner10"></div>
        <div class="trops-5"><img src="{{url('/')}}/frontend/images/banner/banner10/tri4.png" alt="banner10"></div>
        <div class="trops-6"><img src="{{url('/')}}/frontend/images/banner/banner10/tri5.png" alt="banner10"></div>
        <div class="trops-7"><img src="{{url('/')}}/frontend/images/banner/banner10/sq.png" alt="banner10"></div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="banner-content-10 cl-white">
                    <h1 class="title">Invest for Future</h1>
                    <p>
                        The simple, intuitive and powerful app to manage your invest.
                    </p>
                    <div class="banner-button-group">
                        <a href="{{route('register')}}" class="button-4">Get started</a>
                        <a href="{{route('login')}}" class="button-4 active">Login</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-lg-block d-none">
                <div class="banner-thumb-10">
                    <img src="{{url('/')}}/frontend/images/banner/banner10/banner10.png" alt="banner">
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Banner Section Ends Here =============-->


<!--============= Re-Charge Section Starts Here =============-->
<section class="recharge-section padding-bottom padding-top oh" id="feature">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-3 rtl d-none d-xl-block">
                <img src="{{url('/')}}/frontend/images/recharge/recharge.png" alt="recharge">
            </div>
            <div class="col-xl-8">
                <div class="section-header left-style">
                    <h2 class="title">Ready to transform your business?</h2>
                    <p>In the process of investment, the satisfaction of users is the most important and the focus is on usability and completeness</p>
                </div>
                <div class="recharge-wrapper">
                    <div class="recharge-item">
                        <div class="recharge-thumb">
                            <span class="anime"></span>
                            <div class="thumb"><img src="{{url('/')}}/frontend/images/recharge/1.png" alt="recharge"></div>
                        </div>
                        <div class="recharge-content">
                            <h5 class="title">Productivity</h5>
                        </div>
                    </div>
                    <div class="recharge-item active">
                        <div class="recharge-thumb">
                            <span class="anime"></span>
                            <div class="thumb"><img src="{{url('/')}}/frontend/images/recharge/2.png" alt="recharge"></div>
                        </div>
                        <div class="recharge-content">
                            <h5 class="title">optimization</h5>
                        </div>
                    </div>
                    <div class="recharge-item">
                        <div class="recharge-thumb">
                            <span class="anime"></span>
                            <div class="thumb"><img src="{{url('/')}}/frontend/images/recharge/3.png" alt="recharge"></div>
                        </div>
                        <div class="recharge-content">
                            <h5 class="title">safety</h5>
                        </div>
                    </div>
                    <div class="recharge-item">
                        <div class="recharge-thumb">
                            <span class="anime"></span>
                            <div class="thumb"><img src="{{url('/')}}/frontend/images/recharge/4.png" alt="recharge"></div>
                        </div>
                        <div class="recharge-content">
                            <h5 class="title">Sustainability</h5>
                        </div>
                    </div>
                    <div class="recharge-item">
                        <div class="recharge-thumb">
                            <span class="anime"></span>
                            <div class="thumb"><img src="{{url('/')}}/frontend/images/recharge/5.png" alt="recharge"></div>
                        </div>
                        <div class="recharge-content">
                            <h5 class="title">Compliance</h5>
                        </div>
                    </div>
                    <div class="recharge-item">
                        <div class="recharge-thumb">
                            <span class="anime"></span>
                            <div class="thumb"><img src="{{url('/')}}/frontend/images/recharge/6.png" alt="recharge"></div>
                        </div>
                        <div class="recharge-content">
                            <h5 class="title">Integrations</h5>
                        </div>
                    </div>
                    <div class="recharge-item">
                        <div class="recharge-thumb">
                            <span class="anime"></span>
                            <div class="thumb"><img src="{{url('/')}}/frontend/images/recharge/7.png" alt="recharge"></div>
                        </div>
                        <div class="recharge-content">
                            <h5 class="title">Expandability</h5>
                        </div>
                    </div>
                    <div class="recharge-item">
                        <div class="recharge-thumb">
                            <span class="anime"></span>
                            <div class="thumb"><img src="{{url('/')}}/frontend/images/recharge/8.png" alt="recharge"></div>
                        </div>
                        <div class="recharge-content">
                            <h5 class="title">Multilingual</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Re-Charge Section Ends Here =============-->


<!--============= How Section Starts Here =============-->
<section class="how-section padding-bottom padding-top pos-rel pb-xl-0 oh" id="how">
    <div class="bg-xl-100 bg_img" data-background="{{url('/')}}/frontend/images/bg/client-bg.jpg"></div>
    <div class="top-shape d-none d-lg-block"><img src="{{url('/')}}/frontend/css/img/work-shape.png" alt="css"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="client-header">
                    <div class="section-header left-style cl-white mb-olpo">

                        <h2 class="title">Let’s See How It Work</h2>
                        <p>It's easier than you think.Follow the simple easy steps</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-30-none">
            <div class="col-xl-3 col-sm-6">
                <div class="how-item-3">
                    <div class="how-thumb">
                        <img src="{{url('/')}}/frontend/images/how/how4.png" alt="how">
                    </div>
                    <div class="how-content">
                        <h4 class="title">Register</h4>
                        <p>Start using Runcapital group immediately after register your account from our website just in two clicks.</p>
                        <a href="{{route('register')}}" class="button-3">Get Started <i class="flaticon-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="how-item-3">
                    <div class="how-thumb">
                        <img src="{{url('/')}}/frontend/images/how/how5.png" alt="how">
                    </div>
                    <div class="how-content">
                        <h4 class="title">Payment</h4>
                        <p>Make a payment / Deposit to your account using any cryptocurrency. Then purchase a plan</p>
                        <a href="#0" class="button-3 active">Get Started <i class="flaticon-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="how-item-3">
                    <div class="how-thumb">
                        <img src="{{url('/')}}/frontend/images/how/how6.png" alt="how">
                    </div>
                    <div class="how-content">
                        <h4 class="title">Refer other users</h4>
                        <p>Refer other users to earn extra money. Lifetime earning feature.</p>
                        <a href="#0" class="button-3">Get Started <i class="flaticon-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="how-item-3">
                    <div class="how-thumb">
                        <img src="{{url('/')}}/frontend/images/how/how7.png" alt="how">
                    </div>
                    <div class="how-content">
                        <h4 class="title">Get Profit</h4>
                        <p>You will get your profit automatically after each month to your dashboard.</p>
                        <a href="#0" class="button-3">Get Started <i class="flaticon-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= How Section Ends Here =============-->


<!--============= Faster Section Starts Here =============-->
<div class="faster-section padding-top oh">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <div class="faster-content padding-bottom">
                    <div class="section-header left-style mb-olpo">
                        <h5 class="cate">All-in-one crypto invest platform for you</h5>
                        <h2 class="title">Run Capital Group
                            is up to 2x faster</h2>
                        <p>Run Capital Group introduces a new way of managing your investment and getting better results for your business.Run Capital Group One gives you a comprehensive and customizable platform to break down silos between departments and boost performance across your
                            investment.</p>
                    </div>
                    <div class="group">
                        <a href="{{route('register')}}" class="get-button active">Start Using for free<i class="flaticon-right"></i></a>
                        <a href="{{url('/about-us')}}" class="get-button">More About Us<i class="flaticon-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-5 d-none d-lg-block">
                <img src="{{url('/')}}/frontend/images/feature/faster.png" alt="feature">
            </div>
        </div>
    </div>
</div>
<!--============= Faster Section Ends Here =============-->


<!--============= Experience Section Starts Here =============-->
<section class="experience-section padding-bottom padding-top bg_img top_center bg-max-md-dark oh" data-background="{{url('/')}}/frontend/images/feature/experience-bg.png" id="feature">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="row">
                    <div class="col-xl-10">
                        <div class="section-header left-style">
                            <h5 class="cate">Better Experience</h5>
                            <h2 class="title">The only one platform you need</h2>
                            <p>We spend a lot of time to research tons of different software website from top companies to collect all best practices and the most necessary experience in one place.</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-30-none">
                    <div class="col-md-6">
                        <div class="ex-item">
                            <div class="ex-thumb">
                                <img src="{{url('/')}}/frontend/images/feature/ex1.png" alt="feature">
                            </div>
                            <div class="ex-content">
                                <h4 class="title">Data Protection</h4>
                                <p>We create a very clean and simple UI which is easily suitable for any project.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ex-item active">
                            <div class="ex-thumb">
                                <img src="{{url('/')}}/frontend/images/feature/ex2.png" alt="feature">
                            </div>
                            <div class="ex-content">
                                <h4 class="title">Team Collaboration</h4>
                                <p>We create a very clean and simple UI which is easily suitable for any project.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ex-item">
                            <div class="ex-thumb">
                                <img src="{{url('/')}}/frontend/images/feature/ex3.png" alt="feature">
                            </div>
                            <div class="ex-content">
                                <h4 class="title">Auto Responder</h4>
                                <p>We create a very clean and simple UI which is easily suitable for any project.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ex-item">
                            <div class="ex-thumb">
                                <img src="{{url('/')}}/frontend/images/feature/ex4.png" alt="feature">
                            </div>
                            <div class="ex-content">
                                <h4 class="title">Easy Customize</h4>
                                <p>We create a very clean and simple UI which is easily suitable for any project.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 d-none d-xl-block mt-xl-5">
                <img src="{{url('/')}}/frontend/images/feature/experience.png" alt="feature">
            </div>
        </div>
    </div>
</section>
<!--============= Experience Section Ends Here =============-->





<!--============= Safe Section Starts Here =============-->
<div class="safe-section oh padding-top padding-bottom">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-xl-5 d-none d-lg-block rtl">
                <img src="{{url('/')}}/frontend/images/feature/safe.png" alt="feature">
            </div>
            <div class="col-lg-6">
                <div class="safe-content">
                    <div class="section-header left-style mb-olpo">
                        <h5 class="cate">14 Days Money Back Guarantee!</h5>
                        <h2 class="title">100% Risk Free</h2>
                        <p>Don't worry! You are fully protected by our 100% No-Risk Money Back Guarantee. If you aren’t fully satisfied mosto app  over the next 14 days, simply cancel your order, and we won’t bill you. No questions asked.</p>
                    </div>
                    <div class="group">
                        <a href="#0" class="get-button active">Get Started<i class="flaticon-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--============= Safe Section Ends Here =============-->


<!--============= Testimonial Section Starts Here =============-->
<section class="testimonial-feature bg_img pb-xl-0 padding-bottom" data-background="{{url('/')}}/frontend/images/bg/client-bg.jpg" id="coverage">
    <div class="oh pos-rel padding-top">
        <div class="top-shape d-none d-lg-block">
            <img src="{{url('/')}}/frontend/css/img/client-shape.png" alt="css">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="client-header">
                        <div class="section-header left-style cl-white mb-olpo">
                            <h5 class="cate">Testimonials</h5>
                            <h2 class="title">Over 10.000 happy clients</h2>
                            <p>Everyday reviews from users around the world are an important driver of our team.</p>
                        </div>
                        <a href="#0" class="button-client">Get Free Trial <i class="flaticon-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="client-slider owl-carousel owl-theme">
                        <div class="client-item">
                            <div class="client-content">
                                <p>
                                    Perfect work to start on, support is awesome
                                </p>
                                <div class="rating">
                                        <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                    <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                    <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                    <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                    <span>
                                            <i class="fas fa-star-half-alt"></i>
                                        </span>
                                </div>
                            </div>
                            <div class="client-thumb">
                                <a href="#0">
                                    <img src="{{url('/')}}/frontend/images/client/client01.png" alt="client">
                                </a>
                            </div>
                        </div>
                        <div class="client-item">
                            <div class="client-content">
                                <p>
                                    Perfect work to start on, support is awesome
                                </p>
                                <div class="rating">
                                        <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                    <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                    <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                    <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                    <span>
                                            <i class="fas fa-star-half-alt"></i>
                                        </span>
                                </div>
                            </div>
                            <div class="client-thumb">
                                <a href="#0">
                                    <img src="{{url('/')}}/frontend/images/client/client02.png" alt="client">
                                </a>
                            </div>
                        </div>
                        <div class="client-item">
                            <div class="client-content">
                                <p>
                                    Perfect work to start on, support is awesome
                                </p>
                                <div class="rating">
                                        <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                    <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                    <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                    <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                    <span>
                                            <i class="fas fa-star-half-alt"></i>
                                        </span>
                                </div>
                            </div>
                            <div class="client-thumb">
                                <a href="#0">
                                    <img src="{{url('/')}}/frontend/images/client/client03.png" alt="client">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="counter-wrapper-area-2 mt-xl-0">
            <div class="counter-wrapper-2">
                <div class="counter-item-2">
                    <h2 class="title"><span class="intitle counter">45</span><span class="intitle">k</span></h2>
                    <span class="name">Users</span>
                </div>
                <div class="counter-item-2">
                    <h2 class="title"><span class="intitle counter">90</span><span class="intitle">+</span></h2>
                    <span class="name">Countries</span>
                </div>
                <div class="counter-item-2">
                    <h2 class="title"><span class="intitle counter">10000$ +</span><span class="intitle">+</span></h2>
                    <span class="name">Investments</span>
                </div>
                <div class="counter-item-2">
                    <h2 class="title"><span class="intitle counter">95</span><span class="intitle">%</span></h2>
                    <span class="name">Satisfaction</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Testimonial Section Ends Here =============-->





<!--============= Custom-Plan Section Starts Here =============-->
<section class="help-section padding-bottom padding-top oh mt-120">
    <div class="container">
        <div class="section-header">
            <h5 class="cate">Stop wasting time</h5>
            <h2 class="title">Need Some Help?</h2>
            <p>
                Whether you’re stuck or just want some tips on where to start, any problem,hit up our experts anytime.
            </p>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-6 rtl d-none d-lg-block">
                <img src="{{url('/')}}/frontend/images/feature/help.png" alt="feature">
            </div>
            <div class="col-lg-6 col-xl-5 mb-30-none">
                <div class="help-item">
                    <div class="help-thumb">
                        <img src="{{url('/')}}/frontend/images/feature/help1.png" alt="help">
                    </div>
                    <div class="help-content">
                        <h5 class="title">live chat</h5>
                        <p>Anything I can help you with?</p>
                    </div>
                </div>
                <div class="help-item">
                    <div class="help-thumb">
                        <img src="{{url('/')}}/frontend/images/feature/help2.png" alt="help">
                    </div>
                    <div class="help-content">
                        <h5 class="title">Send Ticket</h5>
                        <p>Anything I can help you with?</p>
                    </div>
                </div>
                <div class="help-item">
                    <div class="help-thumb">
                        <img src="{{url('/')}}/frontend/images/feature/help3.png" alt="help">
                    </div>
                    <div class="help-content">
                        <h5 class="title">Explore FAQs</h5>
                        <p><a href="#0">Go to FAQs page</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Custom-Plan Section Ends Here =============-->

@endsection
