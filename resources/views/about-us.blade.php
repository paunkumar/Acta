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
        <section id="about" class="about-mobile">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-header">
                            <h2>About Us</h2>
                            <p class="sub-para">Offshore staffing for CPA and accounting firms:</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about_section">
            <div class="container">
                <div class="row">
                    <div class=" col-lg-5 col-sm-12 abt_mb aos-init aos-animate">
                        <img src="assets/images/about-us.png" class="img-fluid" alt="about Acta" title="about Acta">
                    </div>
                    <div class=" col-lg-7 abt_mb col-sm-12 aos-init aos-animate">
                        <div class="about_sections">
                            <h3>ACTA International is lead by an expert team of Accounting, Auditing, Tax and Finance Professionals. 
                            Our operations team members comprise of Chartered Accountants of ICAI (Indian Institute of Chartered Accountants - INDIA), 
                            Certified Public Accountants (CPA-USA), Certified Management Accountants (CMA-USA), Enrolled Agents (EA-USA), 
                            Certified Internal Auditors (CIA-USA) and Masters of Business Administration (MBA).</h3>
                        </div>
                    </div>
                </div>
                <div class="row second_section">
                    <div class="col-lg-12">
                            <h3>ACTA International can become your business' extended arm. So that all your book keeping, all your accounting, all your taxation and all your regular day to day works will be perfectly taken care by us. And you can enjoy the flexibility to devote your precious time to the tasks of your choice, and of course you will enjoy an ever growing and enriching partnership, which in time, will prove to be one of the key pillars of your business.</h3>
                    </div>
                </div>
            </div>   
        </section>
        <section id="iso_sec_wrap">
            <div class="iso_section" >
                <div class="container">
                    <div class="col-lg-11 col-md-12 mx-auto">
                        <div class="iso-text-wrap">
                            <h1>ACTA has ISO 27001:2013 information security and ISO 9001:2013 quality  management certifications.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="why-us">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="row cmb-7">
                    <div class="col-lg-4 abt_mb">
                        <div class="ourvalues">
                            <h3><u>OUR</u> VALUES</h3>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ourvalues">
                            <p>Our office is the cabin next to your door. Our operations are transparent. Our work delivery is just as you will have your people deliver. We deliver work within the time you want, we deliver the quality you expect and we give you the flexibility you seek.</p>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 justify-content-center">
                     <div class="col mb-4">
                        <div class="card aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icons ">
                                <img src="assets/images/about/icon1.svg" alt="Time bound delivery management" title="Time bound delivery management" class="img-fluid"></div>
                            
                            <div class="card-body">
                                <p class="card-text">Time bound delivery management</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icons"><img src="assets/images/about/icon2.svg" alt="Low transition period, higher efficiency" title="Low transition period, higher efficiency" class="img-fluid"></div>
                            <div class="card-body">
                                <p class="card-text">Low transition period, higher efficiency</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icons "><img src="assets/images/about/icon3.svg" alt="Hiring of professionals with domain expertise" title="Hiring of professionals with domain expertise" class="img-fluid"></div>
                            <div class="card-body">
                                <p class="card-text">Hiring of professionals with domain expertise</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icons "><img src="assets/images/about/icon4.svg" alt="Flawless performance commitment" title="Flawless performance commitment" class="img-fluid"></div>
                            <div class="card-body">
                                <p class="card-text">Flawless performance commitment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icons "><img src="assets/images/about/icon5.svg" alt="Save your cost up to 70 percent" title="Save your cost up to 70 percent" class="img-fluid"></div>
                            <div class="card-body">
                                <p class="card-text">Save your cost up to 70 percent</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about-vision">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="our_vission_head">
                            <h4>Our <span class="sub-text-color">Vision</span></h4>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-6 col-md-12 abt_mb">                        
                        <div class="our_vission">
                            <p>Many small and mid-sized CPA and accounting firms' slow expansion can be traced to a shortage of skilled staff. No one can construct even a small wall without the appropriate team. Our vision is to serve as a trusted staffing partner for small and mid-sized CPA and accounting firms. By offering offshore staffing, we want to help such firms reduce the challenges, time, and costs related to their skilled staff shortage. So they can expand their operations, grow their businesses and generate more profit.
                            </p>
                        </div>                       
                    </div>
                    <div class="col-lg-6 col-md-12 abt_mb aos-init aos-animate" data-aos="zoom-in">
                        <img src="assets/images/vision.png" class="img-fluid" alt="Vision" title="Vision">
                    </div>
                </div>
                <div class="row abt_mb">
                    <div class="col-lg-6 col-6 pr-0  aos-init aos-animate " data-aos="fade-right">
                        <div class="left_box text_rights">

                        </div>
                    </div>
                    <div class="col-lg-6 col-6 pl-0 aos-init aos-animate " data-aos="fade-left">
                        <div class="right_box">

                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                        <div class="col-lg-6 abt_mb pr-0 abt_mb aos-init aos-animate" data-aos="fade-right">
                            <img src="assets/images/mission.png" class="img-fluid" alt="Mission" title="Mission">
                        </div>
                        <div class="col-lg-6 abt_mb text_rights">
                            <div class="our_vission ">
                                <div class="our_vission_head">
                                    <h4>Our<span>Mission</span></h4>
                                </div>                                
                                <p>Our mission is to, "Make Offshore Staffing Easy, Trustable & Accessible by All CPA & Accounting Firms."</p>
                            </div>                           
                        </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->
@endsection



