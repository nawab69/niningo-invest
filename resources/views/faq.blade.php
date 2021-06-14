@extends('layouts.frontend.app')

@section('content')

    <!--============= Header Section Ends Here =============-->
    <section class="page-header bg_img" data-background="{{url('/')}}/frontend/images/page-header.png">
        <div class="bottom-shape d-none d-md-block">
            <img src="{{url('/')}}/frontend/css/img/page-header.png" alt="css">
        </div>
        <div class="container">
            <div class="page-header-content cl-white">
                <h2 class="title">Questions & Answers</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="#0">Pages</a>
                    </li>
                    <li>
                        FAQs
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--============= Header Section Ends Here =============-->



    <!--============= Faqs Section Starts Here =============-->
    <section class="faq-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <aside class="sticky-menu">
                        <div class="faq-menu bg_img mb-30" data-background="{{url('/')}}/frontend/images/faq/faq-menu.png">
                            <ul id="faq-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="#get">Getting Started</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#how">How Run Capital works</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#plugin">Plugins</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pricing">Pricing Plans</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#update">Updating the App</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#security">Security</a>
                                </li>
                            </ul>
                        </div>
                        <div class="faq-video">
                            <a href="https://www.youtube.com/watch?v=GT6-H4BRyqQ" class="video-area">
                                <img src="{{url('/')}}/frontend/images/faq/video.png" alt="faq">
                                <div class="video-button-2 popup">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <i class="flaticon-play"></i>
                                </div>
                            </a>
                            <h5 class="title">Watch Video Tour</h5>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-8 col-xl-7">
                    <article class="mt-70 mt-lg-0">
                        <div class="faq--wrapper" id="get">
                            <h3 class="main-title">Getting Started</h3>
                            <div class="faq--area">
                                <div class="faq--item">
                                    <div class="faq-title">
                                        <h6 class="title">Who is Run Capital for?</h6>
                                        <span class="icon"></span>
                                    </div>
                                    <div class="faq-content">
                                        <p>A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-oriented ad copy is difficult, as it must appeal to, entice, and convince consumers to take action. There is no magic formula to write perfect ad copy.</p>
                                    </div>
                                </div>
                                <div class="faq--item">
                                    <div class="faq-title">
                                        <h6 class="title">How do I get the Mobile App for my phone?</h6>
                                        <span class="icon"></span>
                                    </div>
                                    <div class="faq-content">
                                        <p>A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-oriented ad copy is difficult, as it must appeal to, entice, and convince consumers to take action. There is no magic formula to write perfect ad copy.</p>
                                    </div>
                                </div>
                                <div class="faq--item">
                                    <div class="faq-title">
                                        <h6 class="title">What features does the Mobile App have?</h6>
                                        <span class="icon"></span>
                                    </div>
                                    <div class="faq-content">
                                        <p>A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-oriented ad copy is difficult, as it must appeal to, entice, and convince consumers to take action. There is no magic formula to write perfect ad copy.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq--wrapper" id="how">
                            <h3 class="main-title">How Run Capital works</h3>
                            <div class="faq--area">
                                <div class="faq--item">
                                    <div class="faq-title">
                                        <h6 class="title">What’s special about Run Capital?</h6>
                                        <span class="icon"></span>
                                    </div>
                                    <div class="faq-content">
                                        <p>A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-oriented ad copy is difficult, as it must appeal to, entice, and convince consumers to take action. There is no magic formula to write perfect ad copy.</p>
                                    </div>
                                </div>
                                <div class="faq--item">
                                    <div class="faq-title">
                                        <h6 class="title">What problem does Run Capital solve?</h6>
                                        <span class="icon"></span>
                                    </div>
                                    <div class="faq-content">
                                        <p>A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-oriented ad copy is difficult, as it must appeal to, entice, and convince consumers to take action. There is no magic formula to write perfect ad copy.</p>
                                    </div>
                                </div>
                                <div class="faq--item">
                                    <div class="faq-title">
                                        <h6 class="title">How does Run Capitals differ from usual apps?</h6>
                                        <span class="icon"></span>
                                    </div>
                                    <div class="faq-content">
                                        <p>A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-oriented ad copy is difficult, as it must appeal to, entice, and convince consumers to take action. There is no magic formula to write perfect ad copy.</p>
                                    </div>
                                </div>
                                <div class="faq--item">
                                    <div class="faq-title">
                                        <h6 class="title">More about early access</h6>
                                        <span class="icon"></span>
                                    </div>
                                    <div class="faq-content">
                                        <p>A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-oriented ad copy is difficult, as it must appeal to, entice, and convince consumers to take action. There is no magic formula to write perfect ad copy.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq--wrapper" id="plugin">
                            <h3 class="main-title">Plugins</h3>
                            <div class="faq--area">
                                <div class="faq--item">
                                    <div class="faq-title">
                                        <h6 class="title">How does integration works?</h6>
                                        <span class="icon"></span>
                                    </div>
                                    <div class="faq-content">
                                        <p>A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-oriented ad copy is difficult, as it must appeal to, entice, and convince consumers to take action. There is no magic formula to write perfect ad copy.</p>
                                    </div>
                                </div>
                                <div class="faq--item open active">
                                    <div class="faq-title">
                                        <h6 class="title">How to use Run Capital API?</h6>
                                        <span class="icon"></span>
                                    </div>
                                    <div class="faq-content">
                                        <p>A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-oriented ad copy is difficult, as it must appeal to, entice, and convince consumers to take action. There is no magic formula to write perfect ad copy.</p>
                                    </div>
                                </div>
                                <div class="faq--item">
                                    <div class="faq-title">
                                        <h6 class="title">How do plugins work?</h6>
                                        <span class="icon"></span>
                                    </div>
                                    <div class="faq-content">
                                        <p>A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-oriented ad copy is difficult, as it must appeal to, entice, and convince consumers to take action. There is no magic formula to write perfect ad copy.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq--wrapper" id="pricing">
                            <h3 class="main-title">Pricing Plans</h3>
                            <div class="faq--area">
                                <div class="faq--item">
                                    <div class="faq-title">
                                        <h6 class="title">How much does Run Capital cost?</h6>
                                        <span class="icon"></span>
                                    </div>
                                    <div class="faq-content">
                                        <p>A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-oriented ad copy is difficult, as it must appeal to, entice, and convince consumers to take action. There is no magic formula to write perfect ad copy.</p>
                                    </div>
                                </div>
                                <div class="faq--item">
                                    <div class="faq-title">
                                        <h6 class="title">How I can get Run Capital for free?</h6>
                                        <span class="icon"></span>
                                    </div>
                                    <div class="faq-content">
                                        <p>A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-oriented ad copy is difficult, as it must appeal to, entice, and convince consumers to take action. There is no magic formula to write perfect ad copy.</p>
                                    </div>
                                </div>
                                <div class="faq--item">
                                    <div class="faq-title">
                                        <h6 class="title">Can I cancel my account plan at any time?</h6>
                                        <span class="icon"></span>
                                    </div>
                                    <div class="faq-content">
                                        <p>A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-oriented ad copy is difficult, as it must appeal to, entice, and convince consumers to take action. There is no magic formula to write perfect ad copy.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq--wrapper" id="update">
                            <h3 class="main-title">Updating the App</h3>
                            <div class="faq--area">
                                <div class="faq--item">
                                    <div class="faq-title">
                                        <h6 class="title">How can I edit my personal information?</h6>
                                        <span class="icon"></span>
                                    </div>
                                    <div class="faq-content">
                                        <p>A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-oriented ad copy is difficult, as it must appeal to, entice, and convince consumers to take action. There is no magic formula to write perfect ad copy.</p>
                                    </div>
                                </div>
                                <div class="faq--item">
                                    <div class="faq-title">
                                        <h6 class="title">How do I disable installed apps?</h6>
                                        <span class="icon"></span>
                                    </div>
                                    <div class="faq-content">
                                        <p>A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-oriented ad copy is difficult, as it must appeal to, entice, and convince consumers to take action. There is no magic formula to write perfect ad copy.</p>
                                    </div>
                                </div>
                                <div class="faq--item">
                                    <div class="faq-title">
                                        <h6 class="title">How do I disable installed apps?</h6>
                                        <span class="icon"></span>
                                    </div>
                                    <div class="faq-content">
                                        <p>A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-oriented ad copy is difficult, as it must appeal to, entice, and convince consumers to take action. There is no magic formula to write perfect ad copy.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq--wrapper" id="security">
                            <h3 class="main-title">Security</h3>
                            <div class="faq--area">
                                <div class="faq--item">
                                    <div class="faq-title">
                                        <h6 class="title">How do I switch to a different price plan?</h6>
                                        <span class="icon"></span>
                                    </div>
                                    <div class="faq-content">
                                        <p>A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-oriented ad copy is difficult, as it must appeal to, entice, and convince consumers to take action. There is no magic formula to write perfect ad copy.</p>
                                    </div>
                                </div>
                                <div class="faq--item">
                                    <div class="faq-title">
                                        <h6 class="title">How can I get my money back?</h6>
                                        <span class="icon"></span>
                                    </div>
                                    <div class="faq-content">
                                        <p>A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-oriented ad copy is difficult, as it must appeal to, entice, and convince consumers to take action. There is no magic formula to write perfect ad copy.</p>
                                    </div>
                                </div>
                                <div class="faq--item">
                                    <div class="faq-title">
                                        <h6 class="title">What about the security of my payments?</h6>
                                        <span class="icon"></span>
                                    </div>
                                    <div class="faq-content">
                                        <p>A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-oriented ad copy is difficult, as it must appeal to, entice, and convince consumers to take action. There is no magic formula to write perfect ad copy.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!--============= Faqs Section Ends Here =============-->


    <!--============= Comunity Section Starts Here =============-->
    <section class="comunity-section padding-top padding-bottom oh pos-rel">
        <div class="comunity-bg bg_img" data-background="{{url('/')}}/frontend/images/client/Run Capital-client.jpg"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-header cl-white">
                        <h5 class="cate">Still need help?</h5>
                        <h2 class="title">Stop Wasting Time</h2>
                        <p>Whether you’re stuck or just want some tips on where to start, any problem,hit up our experts anytime.</p>
                    </div>
                </div>
            </div>
            <div class="comunity-asking">
                <div class="row justify-content-between align-items-center">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Comunity Section Ends Here =============-->

@endsection
