@extends('layouts.web')
@section('meta_tags')
<title>{{ $meta->meta_title }}</title>
    <meta name="description" content="{{ $meta->meta_description }}">
	<meta name="keywords" content="{{ $meta->meta_keywords }}">
	<meta name="author" content="{{ $meta->meta_author }}">
@endsection
@section("title","Title")
@section('main-content')
    <main id="main">
        <section id="contact-page" class="contact-mobile">
            <div class="row mobile-row aos-init aos-animate" data-aos="fade-up">
                <header class="contact-header">
                    <h3>What can <span class="sub-text-color">we help you <br>with?</span></h3>
                    <p class="sub-para">We'll connect you with the right person</p>
                </header>
                <div id="contact-new" class="contactnew aos-init aos-animate" data-aos="fade-up">
                        
                    <div class="col-lg-12">
                        
                        <div class="form">
                            <form id="myForm" action="{{ url('/save-contact') }}" method="post" role="form" class="php-email-form">         @csrf
                                <div class="row">
                                    <div class="form-group mobile-form col-md-6">
                                        <label for="firstname" class="mb-2 text-bold">First Name<span class="text-red">*</span></label>
                                        <input type="text" class="form-control" id="firstname" placeholder="" name="firstname"> 
                                        <span id="firstnameError" class="error"></span>
                                    </div>
                                    <div class="form-group mobile-form col-md-6">
                                        <label for="lastname" class="mb-2">Last Name<span class="text-red">*</span></label>
                                        <input type="text" class="form-control" id="lastname" placeholder="" name="lastname">
                                        <span id="lastnameError" class="error"></span>
                                    </div>
                                </div>
                                <div class="row contact-row">
                                    <div class="form-group mobile-form col-md-6">
                                        <label for="email" class="mb-2">E-Mail Id<span class="text-red">*</span></label>
                                        <input type="text" class="form-control" id="email" placeholder="" name="email">
                                        <span id="emailError" class="error"></span>
                                    </div>
                                    <div class="form-group mobile-form col-md-6">
                                        <label for="contact_number" class="mb-2">Contact Number<span class="text-red">*</span></label>
                                        <input type="text" class="form-control" id="contact_number" placeholder="" name="contact_number">  
                                        <span id="contactNumberError" class="error"></span>
                                    </div>
                                </div>
                                <div class="row contact-row">
                                    
                                    <div class="form-group mobile-form col-md-12">
                                        <label for="message" class="mb-2">Your Message</label>
                                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="" ></textarea>
                                        <span id="messageError" class="error"></span>
                                    </div>
                                </div>
                                <div class="my-3">
                                    <div class="loading"></div>
                                    <div class="error-message text-danger"></div>
                                    <div class="sent-message text-success"></div>
                                </div>
                                <div class="row contact-row">
                                    <div class="text-center"><button type="submit" title="Submit">Submit</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <header class="contact-header">
                    <h3 class="contact-first-color">Ready to help, <br>
                    <span class="sub-text-color">all around the world</span></h3>
                </header>
                <div id="contact-locations" class="contact-location aos-init aos-animate" data-aos="fade-up">
                    <div class="row">
                        <div class="col-md-6 px-4">
                            <div class="row contact-addess contact-addess-first">
                                
                                <div class="col-2 p-3">
                                    <img src="assets/images/india-flag.svg" alt="image" class="float-left mr-3" width="50" height="50">
                                </div>
                                <div class="col-10 p-3 mt-2">
                                    <h4 class="text-bold">India - Coimbatore</h4>
                                    <p class="business-address">46/3, Swarnambika Layout,<br> Ramnagar, Coimbatore - 641 009.<br> Tamil Nadu, India.</p>
                                    <div class="main-contact footer-contact-last mt-2">
                                        <a><img src="assets/images/phone.svg" width="20" style="color: #ff689b;"></a> +91 97157 95009
                                    </div>
                                    <div class="main-contact footer-contact-first mt-2">
                                        <a><img src="assets/images/mail.svg" width="15" style="color: #ff689b;"></a> info@actaintl.com
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6 px-4">
                            <div class="row contact-addess">
                                <div class="col-2 p-3">
                                    <img src="assets/images/uk-flag.svg" alt="image" class="float-left mr-3" width="50" height="50">
                                </div>
                                <div class="col-10 p-3 mt-2">
                                    <h4 class="text-bold">United Kingdom</h4>
                                    <p class="business-address">Middle Cottage, Cottage<br>Row,Gayton Road, King's Lynn<br>PE304EQ</p>
                                    <div class="main-contact footer-contact-last mt-2">
                                        <a><img src="assets/images/phone.svg" width="20" style="color: #ff689b;"></a> +447459213109
                                    </div>
                                    <div class="main-contact footer-contact-first mt-2">
                                        <a><img src="assets/images/mail.svg" width="15" style="color: #ff689b;"></a> info@actaintl.com
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <header class="contact-header mt-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="map mb-4 mb-lg-0">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3916.3142197031234!2d76.95672926480285!3d11.015034592159866!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba858fe7341606f%3A0x3263b77a046c8745!2sACTA%20International%20%7C%20Offshore%20Staffing%20for%20CPA%20firms%20%7C%20Accountants%20%7C%20Outsourced%20Bookkeeping%20%26%20Accounting!5e0!3m2!1sen!2sin!4v1672308829274!5m2!1sen!2sin" class="iframe-map" frameborder="0" style="border:0; width: 100%; height: 470px;" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
        </section>
        <section id="why-us-contact" class="join-our-team">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <header class="section-header-people">
                    <h3 class="sub-text-color fw-bold">Interested in joining our journey?</h3>
                    <p class="people-para">Check our open positions!</p>
                    <p class="pt-5"><a href="" class="btn-free-trail">Careers at Acta</a></p>
                </header>
            </div>
        </section>
        <section id="about-us" class="career-management p-0">
        </section>
    </main>
    <!-- End #main -->
@endsection
@section('foot-content')
<script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script>
@endsection



