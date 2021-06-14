@extends('layouts.frontend.app')

@section('content')
    <!--============= Header Section Ends Here =============-->
    <section class="page-header bg_img oh" data-background="{{url('/')}}/frontend/images/page-header.png">
        <div class="bottom-shape d-none d-md-block">
            <img src="{{url('/')}}/frontend/css/img/page-header.png" alt="css">
        </div>
        <div class="page-left-thumb">
            <img src="{{url('/')}}/frontend/images/bg/privacy-header.png" alt="bg">
        </div>
        <div class="container">
            <div class="page-header-content cl-white">
                <h2 class="title">Our Privacy Policy</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="/">Home</a>
                    </li>

                    <li>
                        Privacy
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--============= Header Section Ends Here =============-->



    <!--============= Privacy Section Starts Here =============-->
    <section class="privacy-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header">
                        <h2 class="title">Privacy Policy</h2>
                        <p>Please read this Privacy Policy carefully before using this website</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <aside class="sticky-menu">
                        <div class="faq-menu bg_img" data-background="{{url('/')}}/frontend/images/faq/faq-menu.png">
                            <ul id="faq-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="#general">General</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#prop">Intellectual Property</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#secu">Security and storage</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#info">Usage Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#cooki">Cookies</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#ipaddr">IP Address</a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-8 col-xl-7">
                    <article class="mt-70 mt-lg-0">
                        <div class="privacy-item" id="general">
                            <h3 class="title">General</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget
                                euismod erat, sit amet vulputate enim. Etiam enim tellus, maximus vel augue sed, pharetra hendrerit orci. Vivamus sed massa in nibh imperdiet mattis quis sed augue. Pellentesque erat metus, vestibulum nec nisl.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget
                                euismod erat, sit amet vulputate enim. Etiam enim tellus.</p>
                        </div>
                        <div class="privacy-item" id="prop">
                            <h3 class="title">Intellectual Property</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget
                                euismod erat, sit amet vulputate enim. Etiam enim tellus, maximus vel augue sed, pharetra hendrerit orci. Vivamus sed massa in nibh imperdiet mattis quis sed augue. Pellentesque erat metus, vestibulum nec nisl.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget
                                euismod erat, sit amet vulputate enim. Etiam enim tellus.</p>
                        </div>
                        <div class="privacy-item" id="secu">
                            <h3 class="title">Security and storage</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget
                                euismod erat, sit amet vulputate enim. Etiam enim tellus, maximus vel augue sed, pharetra hendrerit orci. Vivamus sed massa in nibh imperdiet mattis quis sed augue. Pellentesque erat metus, vestibulum nec nisl.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget
                                euismod erat, sit amet vulputate enim. Etiam enim tellus.</p>
                        </div>
                        <div class="privacy-item" id="info">
                            <h3 class="title">Usage Information</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget
                                euismod erat, sit amet vulputate enim. Etiam enim tellus, maximus vel augue sed, pharetra hendrerit orci. Vivamus sed massa in nibh imperdiet mattis quis sed augue. Pellentesque erat metus, vestibulum nec nisl.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget
                                euismod erat, sit amet vulputate enim. Etiam enim tellus.</p>
                        </div>
                        <div class="privacy-item" id="cooki">
                            <h3 class="title">Cookies</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget
                                euismod erat, sit amet vulputate enim. Etiam enim tellus, maximus vel augue sed, pharetra hendrerit orci. Vivamus sed massa in nibh imperdiet mattis quis sed augue. Pellentesque erat metus, vestibulum nec nisl.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget
                                euismod erat, sit amet vulputate enim. Etiam enim tellus.</p>
                        </div>
                        <div class="privacy-item" id="ipaddr">
                            <h3 class="title">IP Address</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget
                                euismod erat, sit amet vulputate enim. Etiam enim tellus, maximus vel augue sed, pharetra hendrerit orci. Vivamus sed massa in nibh imperdiet mattis quis sed augue. Pellentesque erat metus, vestibulum nec nisl.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget
                                euismod erat, sit amet vulputate enim. Etiam enim tellus.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!--============= Privacy Section Ends Here =============-->

@endsection
