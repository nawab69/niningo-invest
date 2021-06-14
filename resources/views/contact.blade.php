@extends('layouts.frontend.app')

@section('content')

    <!--============= Header Section Ends Here =============-->
    <section class="page-header single-header bg_img oh" data-background="{{url('/')}}/frontend/images/page-header.png">
        <div class="bottom-shape d-none d-md-block">
            <img src="{{url('/')}}/frontend/css/img/page-header.png" alt="css">
        </div>
    </section>
    <!--============= Header Section Ends Here =============-->



    <!--============= Contact Section Starts Here =============-->
    <section class="contact-section padding-top padding-bottom">
        <div class="container">
            <div class="section-header mw-100 cl-white">
                <h2 class="title">Contact Run Capiatal</h2>
                <p>Whether you're looking for a demo, have a support question or a commercial query get in touch.</p>
            </div>
            <div class="row justify-content-center justify-content-lg-between">
                <div class="col-lg-7">
                    <div class="contact-wrapper">
                        <h4 class="title text-center mb-30">Get in Touch</h4>
                        <form class="contact-form" id="contact_form_submit">
                            <div class="form-group">
                                <label for="surename">Your Company Name</label>
                                <input type="text" placeholder="Enter Your Company Name" id="surename" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Your Full Name</label>
                                <input type="text" placeholder="Enter Your Full Name" id="name" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" placeholder="Enter Your Phone Number " id="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Your Email </label>
                                <input type="text" placeholder="Enter Your Email " id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="subject">Your Subject</label>
                                <input type="text" placeholder="Enter Your Subject " id="subject" required>
                            </div>
                            <div class="form-group mb-0">
                                <label for="message">Your Message </label>
                                <textarea id="message" placeholder="Enter Your Message" required></textarea>
                                <div class="form-check">
                                    <input type="checkbox" id="check" checked><label for="check">I agree to receive emails, newsletters and promotional messages</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Send Message">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-content">
                        <div class="man d-lg-block d-none">
                            <img src="{{url('/')}}/frontend/images/contact/man.png" alt="bg">
                        </div>
                        <div class="section-header left-style">
                            <h3 class="title">Have questions?</h3>
                            <p>Have questions about payments or price
                                plans? We have answers!</p>
                            <a href="#0">Read F.A.Q <i class="fas fa-angle-right"></i></a>
                        </div>
                        <div class="contact-area">
                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="{{url('/')}}/frontend/images/contact/contact1.png" alt="contact">
                                </div>
                                <div class="contact-contact">
                                    <h5 class="subtitle">Email Us</h5>
                                    <a href="Mailto:info@mosto.com">info@mosto.com</a>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="{{url('/')}}/frontend/images/contact/contact2.png" alt="contact">
                                </div>
                                <div class="contact-contact">
                                    <h5 class="subtitle">Call Us</h5>
                                    <a href="Tel:565656855">+1 (987) 664-32-11</a>
                                    <a href="Tel:565656855">+1 (987) 664-32-11</a>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="{{url('/')}}/frontend/images/contact/contact3.png" alt="contact">
                                </div>
                                <div class="contact-contact">
                                    <h5 class="subtitle">Visit Us</h5>
                                    <p>4293 Euclid Avenue, Los Angeles,CA 90012</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Contact Section Ends Here =============-->




    <!--============= Do Section Starts Here =============-->
    <div class="do-section padding-bottom padding-top-2">
        <div class="container">
            <div class="row mb-30-none justify-content-center">
                <div class="col-md-6">
                    <div class="do-item cl-white">
                        <h3 class="title">About Us</h3>
                        <p>Find out who we are and what we do!</p>
                        <a href="about"><i class="fas fa-angle-left"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="do-item cl-white">
                        <h3 class="title">Partners</h3>
                        <p>Become a Run Capiatal
                            Solutions Partner!</p>
                        <a href="/"><i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============= Do Section Ends Here =============-->
@endsection
