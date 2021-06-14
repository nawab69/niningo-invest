@extends('layouts.frontend.app')

@section('content')

<!--============= Header Section Ends Here =============-->
<section class="page-header bg_img" data-background="{{url('/')}}/frontend/images/page-header.png">
    <div class="bottom-shape d-none d-md-block">
        <img src="{{url('/')}}/frontend/css/img/page-header.png" alt="css">
    </div>
    <div class="container">
        <div class="page-header-content cl-white">
            <h2 class="title">About Us</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    About Us
                </li>
            </ul>
        </div>
    </div>
</section>
<!--============= Header Section Ends Here =============-->


<!--============= About Section Starts Here =============-->
<section class="about-section padding-top padding-bottom oh">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5">
                <div class="about-thumb rtl pr-xl-15">
                    <img src="{{url('/')}}/frontend/images/about/about.png" alt="about">
                </div>
            </div>
            <div class="col-xl-7 pl-xl-0">
                <div class="about-content">
                    <div class="section-header left-style">
                        <h5 class="cate">A Few Words About Us</h5>
                        <h2 class="title">We’re empowering teams to achieve greatness together.</h2>
                        <p>We are a passionate team of software developers, marketers, and
                            designers focused on driving results for our clients in the fast-growing.
                            We are making products loved by users all over the world. </p>
                    </div>
                    <div class="counter-area-5">
                        <div class="counter-item-5">
                            <div class="counter-thumb">
                                <img src="{{url('/')}}/frontend/images/counter/counter1.png" alt="counter">
                            </div>
                            <div class="counter-content">
                                <h3 class="title"><span class="counter">45</span><span>k</span></h3>
                                <p>Total User</p>
                            </div>
                        </div>
                        <div class="counter-item-5">
                            <div class="counter-thumb">
                                <img src="{{url('/')}}/frontend/images/counter/counter2.png" alt="counter">
                            </div>
                            <div class="counter-content">
                                <h3 class="title"><span class="counter">90</span><span>+</span></h3>
                                <p>Countries</p>
                            </div>
                        </div>
                        <div class="counter-item-5">
                            <div class="counter-thumb">
                                <img src="{{url('/')}}/frontend/images/counter/counter3.png" alt="counter">
                            </div>
                            <div class="counter-content">
                                <h3 class="title"><span class="counter">95</span><span>%</span></h3>
                                <p>Satisfaction</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= About Section Ends Here =============-->



<!--============= Coverage Section Starts Here =============-->
<section class="coverage-section padding-top padding-bottom-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="section-header left-style coverage-header">
                    <h5 class="cate">Our stats say more than any words</h5>
                    <h2 class="title">Invest Without Borders</h2>
                    <p>
                        RunCapital app are growing by 300% every year with a steady love from users around the world. We are also close to achieving 10 million cumulative downloads.
                    </p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="coverage-right-area text-lg-right">
                    <div class="rating-area">
                        <div class="ratings">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <span class="average">5.0 / 5.0</span>
                    </div>
                    <h2 class="amount">312,921+</h2>
                    <a href="#0">Total User Reviews <i class="fas fa-paper-plane"></i></a>
                </div>
            </div>
        </div>
        <div class="coverage-wrapper bg_img" data-background="{{url('/')}}/frontend/images/bg/world-map.png">
            <div class="border-item-1">
                <span class="name">North America</span>
                <h2 class="title">70.7%</h2>
            </div>
            <div class="border-item-2">
                <span class="name">Asia</span>
                <h2 class="title">14.4%</h2>
            </div>
            <div class="border-item-3">
                <span class="name">North Europe</span>
                <h2 class="title">8.4%</h2>
            </div>
            <div class="border-item-4">
                <span class="name">South America</span>
                <h2 class="title">1.8%</h2>
            </div>
            <div class="border-item-5">
                <span class="name">Africa</span>
                <h2 class="title">1.8%</h2>
            </div>
            <div class="border-item-6">
                <span class="name">Australia</span>
                <h2 class="title">3%</h2>
            </div>
        </div>
    </div>
</section>
<!--============= Coverage Section Ends Here =============-->


<!--============= Team Section Starts Here =============-->
<section class="team-section padding-top-2 padding-bottom oh">
    <div class="container">
        <div class="section-header">
            <h5 class="cate">Meet our most valued</h5>
            <h2 class="title">Expert Team Members</h2>
            <p>
                Our team of creative programmers,marketing experts, and members .we are to be doing what we love.
            </p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="team-item">
                    <div class="team-thumb">
                        <img src="{{url('/')}}/frontend/images/team/team1.png" alt="team">
                    </div>
                    <div class="team-content">
                        <h4 class="title">
                            <a href="#0">Alex Love</a>
                        </h4>
                        <span class="info">Chief executive officer</span>
                        <a href="#0" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item">
                    <div class="team-thumb">
                        <img src="{{url('/')}}/frontend/images/team/team2.png" alt="team">
                    </div>
                    <div class="team-content">
                        <h4 class="title">
                            <a href="#0">Kathy Holt</a>
                        </h4>
                        <span class="info">Growth Marketer</span>
                        <a href="#0" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item">
                    <div class="team-thumb">
                        <img src="{{url('/')}}/frontend/images/team/team3.png" alt="team">
                    </div>
                    <div class="team-content">
                        <h4 class="title">
                            <a href="#0">Steven Mann</a>
                        </h4>
                        <span class="info">iOS Developer</span>
                        <a href="#0" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="load-more">
            <a href="team.html" class="load-more"><i class="flaticon-reload"></i></a>
        </div>
    </div>
</section>
<!--============= Team Section Ends Here =============-->


<!--============= Creativity Section Starts Here =============-->
<section class="oh creativity-section padding-bottom bg-max-lg-dark bg_img top_center" data-background="{{url('/')}}/frontend/images/feature/experience-bg.png">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 padding-top">
                <div class="section-header left-style mb-0">
                    <h5 class="cate">We Build Apps for Creativity & Productivity</h5>
                    <h2 class="title">We Strive to Make Great Apps</h2>
                    <p>We are constantly working to improve usability based on data and listen to your voice to find the best results. All of mosto's products are designed with the concerns of developers,
                        designers, and marketers alike, regardless of their position.A culture that seeks directions and approaches issues from a
                        diverse perspective, rather than actively insisting on one
                        solution. </p>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 d-none d-lg-block">
                <img src="{{url('/')}}/frontend/images/feature/experience.png" alt="feature">
            </div>
        </div>
    </div>
</section>
<!--============= Creativity Section Ends Here =============-->


<!--============= History Section Starts Here =============-->
<section class="history-section padding-top padding-bottom-2">
    <div class="container">
        <div class="section-header">
            <h5 class="cate">Our history </h5>
            <h2 class="title">How We Became Successful</h2>
            <p>We always challenge the openness of higher possibilities
                without defining the limits of our teams and products. We test our hypotheses about new attempts and enjoy making our way around the world.</p>
            <p></p>
        </div>
        <div class="history-slider owl-theme owl-carousel">
            <div class="history-item">
                <div class="history-content">
                    <div class="content">
                        <h6 class="title">We Are Growing</h6>
                        <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                    </div>
                </div>
                <div class="history-thumb"><div class="anime-item-2"></div>
                    <span>2014</span>
                </div>
            </div>
            <div class="history-item">
                <div class="history-content">
                    <div class="content">
                        <h6 class="title">We Are Growing</h6>
                        <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                    </div>
                </div>
                <div class="history-thumb"><div class="anime-item-2"></div>
                    <span>2015</span>
                </div>
            </div>
            <div class="history-item">
                <div class="history-content">
                    <div class="content">
                        <h6 class="title">We Are Growing</h6>
                        <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                    </div>
                </div>
                <div class="history-thumb"><div class="anime-item-2"></div>
                    <span>2016</span>
                </div>
            </div>
            <div class="history-item">
                <div class="history-content">
                    <div class="content">
                        <h6 class="title">We Are Growing</h6>
                        <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                    </div>
                </div>
                <div class="history-thumb"><div class="anime-item-2"></div>
                    <span>2017</span>
                </div>
            </div>
            <div class="history-item">
                <div class="history-content">
                    <div class="content">
                        <h6 class="title">We Are Growing</h6>
                        <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                    </div>
                </div>
                <div class="history-thumb"><div class="anime-item-2"></div>
                    <span>2018</span>
                </div>
            </div>
            <div class="history-item">
                <div class="history-content">
                    <div class="content">
                        <h6 class="title">We Are Growing</h6>
                        <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                    </div>
                </div>
                <div class="history-thumb"><div class="anime-item-2"></div>
                    <span>2019</span>
                </div>
            </div>
            <div class="history-item">
                <div class="history-content">
                    <div class="content">
                        <h6 class="title">We Are Growing</h6>
                        <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                    </div>
                </div>
                <div class="history-thumb"><div class="anime-item-2"></div>
                    <span>2020</span>
                </div>
            </div>
            <div class="history-item">
                <div class="history-content">
                    <div class="content">
                        <h6 class="title">We Are Growing</h6>
                        <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                    </div>
                </div>
                <div class="history-thumb"><div class="anime-item-2"></div>
                    <span>2014</span>
                </div>
            </div>
            <div class="history-item">
                <div class="history-content">
                    <div class="content">
                        <h6 class="title">We Are Growing</h6>
                        <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                    </div>
                </div>
                <div class="history-thumb"><div class="anime-item-2"></div>
                    <span>2015</span>
                </div>
            </div>
            <div class="history-item">
                <div class="history-content">
                    <div class="content">
                        <h6 class="title">We Are Growing</h6>
                        <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                    </div>
                </div>
                <div class="history-thumb"><div class="anime-item-2"></div>
                    <span>2016</span>
                </div>
            </div>
            <div class="history-item">
                <div class="history-content">
                    <div class="content">
                        <h6 class="title">We Are Growing</h6>
                        <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                    </div>
                </div>
                <div class="history-thumb"><div class="anime-item-2"></div>
                    <span>2017</span>
                </div>
            </div>
            <div class="history-item">
                <div class="history-content">
                    <div class="content">
                        <h6 class="title">We Are Growing</h6>
                        <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                    </div>
                </div>
                <div class="history-thumb"><div class="anime-item-2"></div>
                    <span>2018</span>
                </div>
            </div>
            <div class="history-item">
                <div class="history-content">
                    <div class="content">
                        <h6 class="title">We Are Growing</h6>
                        <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                    </div>
                </div>
                <div class="history-thumb"><div class="anime-item-2"></div>
                    <span>2019</span>
                </div>
            </div>
            <div class="history-item">
                <div class="history-content">
                    <div class="content">
                        <h6 class="title">We Are Growing</h6>
                        <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                    </div>
                </div>
                <div class="history-thumb"><div class="anime-item-2"></div>
                    <span>2020</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= History Section Ends Here =============-->


<!--============= Testimonial Section Starts Here =============-->
<section class="testimonial-section padding-top-2 padding-bottom-2">
    <div class="container">
        <div class="section-header">
            <h5 class="cate">Testimonials</h5>
            <h2 class="title">5000+ happy clients all around the world</h2>
        </div>
        <div class="testimonial-wrapper">
            <a href="#0" class="testi-next trigger">
                <img src="{{url('/')}}/frontend/images/client/left.png" alt="client">
            </a>
            <a href="#0" class="testi-prev trigger">
                <img src="{{url('/')}}/frontend/images/client/right.png" alt="client">
            </a>
            <div class="testimonial-area testimonial-slider owl-carousel owl-theme">
                <div class="testimonial-item">
                    <div class="testimonial-thumb">
                        <div class="thumb">
                            <img src="{{url('/')}}/frontend/images/client/client1.jpg" alt="client">
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="ratings">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <p>
                            Awesome product. The guys have put huge effort into this app and focused on simplicity and ease of use.
                        </p>
                        <h5 class="title"><a href="#0">Bela Bose</a></h5>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-thumb">
                        <div class="thumb">
                            <img src="{{url('/')}}/frontend/images/client/client1.jpg" alt="client">
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="ratings">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <p>
                            Awesome product. The guys have put huge effort into this app and focused on simplicity and ease of use.
                        </p>
                        <h5 class="title"><a href="#0">Raihan Rafuj</a></h5>
                    </div>
                </div>
            </div>
            <div class="button-area">
                <a href="#0" class="button-2">Leave a review <i class="flaticon-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!--============= Testimonial Section Ends Here =============-->


<!--============= Sponsor Section Section Here =============-->
<section class="sponsor-section padding-top-2 padding-bottom">
    <div class="container">
        <div class="section-header mw-100">
            <h5 class="cate">Used by over 1,000,000 people worldwide</h5>
            <h2 class="title">Companies that trust us</h2>
        </div>
        <div class="sponsor-slider-4 owl-theme owl-carousel">
            <div class="sponsor-thumb">
                <img src="{{url('/')}}/frontend/images/sponsor/sponsor1.png" alt="sponsor">
            </div>
            <div class="sponsor-thumb">
                <img src="{{url('/')}}/frontend/images/sponsor/sponsor2.png" alt="sponsor">
            </div>
            <div class="sponsor-thumb">
                <img src="{{url('/')}}/frontend/images/sponsor/sponsor3.png" alt="sponsor">
            </div>
            <div class="sponsor-thumb">
                <img src="{{url('/')}}/frontend/images/sponsor/sponsor4.png" alt="sponsor">
            </div>
            <div class="sponsor-thumb">
                <img src="{{url('/')}}/frontend/images/sponsor/sponsor5.png" alt="sponsor">
            </div>
            <div class="sponsor-thumb">
                <img src="{{url('/')}}/frontend/images/sponsor/sponsor6.png" alt="sponsor">
            </div>
            <div class="sponsor-thumb">
                <img src="{{url('/')}}/frontend/images/sponsor/sponsor7.png" alt="sponsor">
            </div>
            <div class="sponsor-thumb">
                <img src="{{url('/')}}/frontend/images/sponsor/sponsor1.png" alt="sponsor">
            </div>
            <div class="sponsor-thumb">
                <img src="{{url('/')}}/frontend/images/sponsor/sponsor2.png" alt="sponsor">
            </div>
            <div class="sponsor-thumb">
                <img src="{{url('/')}}/frontend/images/sponsor/sponsor3.png" alt="sponsor">
            </div>
            <div class="sponsor-thumb">
                <img src="{{url('/')}}/frontend/images/sponsor/sponsor4.png" alt="sponsor">
            </div>
            <div class="sponsor-thumb">
                <img src="{{url('/')}}/frontend/images/sponsor/sponsor5.png" alt="sponsor">
            </div>
            <div class="sponsor-thumb">
                <img src="{{url('/')}}/frontend/images/sponsor/sponsor6.png" alt="sponsor">
            </div>
            <div class="sponsor-thumb">
                <img src="{{url('/')}}/frontend/images/sponsor/sponsor7.png" alt="sponsor">
            </div>
        </div>
    </div>
</section>
<!--============= Sponsor Section Ends Here =============-->

@endsection
