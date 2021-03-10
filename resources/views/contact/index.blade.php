@extends('layouts.index')

@section('title', 'Contact')

@section('content')
    
    <!-- Contact Map Start -->
    <div class="section">
        <!--Google Map Area Start-->
        <div class="google-map-area w-100">
            <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2136.986005919501!2d-73.9685579655238!3d40.75862446708152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258e4a1c884e5%3A0x24fe1071086b36d5!2sThe%20Atrium!5e0!3m2!1sen!2sbd!4v1585132512970!5m2!1sen!2sbd"></iframe>
        </div>
        <!--Google Map Area Start-->
    </div>
    <!-- Contact Map End -->

    <!-- Contact Page Section Start -->
    <div class="section contact-content-wrapper">
        <div class="container">
            <!-- Contact Info Boxed Start -->
            <div class="contact-info-boxed bg-light mb-10" data-aos="fade-up" data-aos-delay="300">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="inner-content">
                            <h1 class="title">Brooklyn, <span>New York</span></h1>
                            <span class="text">849 Diamond Str, 07th Floor, NY 10012, New York, <br> United State America</span>
                            <span class="email">Email: <a href="mailto:infor@yourdomain.com">infor@yourdomain.com</a></span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="inner-info">
                            <span class="call">Call directly:<br><a href="tel:+035-527-1710-70">(+035) 527-1710-70</a></span>
                            <ul class="location-list">
                                <li><span>Brand Offices:</span>Allentown PA | Allanta, GA | Chicago, IL | Dallas, TX, <br> Edison, NJ | Houston, TX</li>
                                <li><span>Work Hours:</span>Mon - Sat: 8.00 - 17.00, Sunday closed</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Info Boxed End -->

            <!-- Form Boxed Start -->
            <div class="form-boxed bg-light" data-aos="fade-up" data-aos-delay="300">
                <div class="section-title text-center">
                    <h2 class="title">Have A Question? Contact Us</h2>
                </div>

                <div class="boxed-inner">
                    <!-- Contact Form -->
                    <div class="contact-form">
                        <!-- Contact Form -->
                        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        
            @if ($errors->has('name'))
            <div class="alert alert-danger">
                <div class="error">
                    {{ $errors->first('name') }}
                </div>
            </div>
            @endif
            @if ($errors->has('email'))
            <div class="alert alert-danger">
                <div class="error">
                    {{ $errors->first('email') }}
                </div>
            </div>
            @endif
            @if ($errors->has('message'))
            <div class="alert alert-danger">
                <div class="error">
                    {{ $errors->first('message') }}
                </div>
            </div>
            @endif
        
                        <form method="post" action="{{ route('contactForm') }}">
                            @csrf

                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                    <input class="input-item" type="text" name="name" placeholder="Enter your name...">
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                    <input class="input-item" type="email" name="email" placeholder="Your Email">
                                </div>

                                <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                                    <input class="input-item" type="text" name="subject" placeholder="Subject (optional)">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-10">
                                    <div class="input-item">
                                        <textarea class="textarea-item" name="message" placeholder="Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 text-center form-group">
                                    <button class="btn btn-primary btn-hover-dark" type="submit" name="send" id="submit"><span class="txt">Send Message</span></button>
                                </div>
                                <p class="col-8 form-message mb-0"></p>

                            </div>
                        </form>
                        

                    </div>
                    <!--End Contact Form -->
                </div>

            </div>
            <!-- Form Boxed End -->
        </div>
    </div>
    <!-- Contact Page Section End -->

@endsection