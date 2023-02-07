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
        <section  class="ourteam">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-header">
                            <h1 class="accounting-header">Our <span class="sub-text-color">Team</span></h1>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12 aos-init aos-animate ">
                        <img src="assets/images/Team_Pic.png" class="img-fluid" alt="Acta Team" title="Acta Team">
                    </div>
                </div>
            </div>
        </section>
        <section class="ourteam_second">
            <div class="container">
                <div class="row">
                    <div class="col-lg-11 col-md-12 mx-auto">
                        <div class="heading-people-content">
                            <h2>Operations <span class="sub-text-color">Team</span></h2>
                        </div>
                        <div class="heading-people-content">
                            <p>Every member of the operations team is put through a rigorous selection process which predominantly looks for two aspects, first, 
                            field knowledge expertise and secondly, the ability to successfully handle any task put in front of him/her. 
                            The latter gets more weight, because once the employee is into the operations team, 
                            he/she is put into ACTA’s specialized training programme which makes sure that the employee comes out as an expert. 
                            Training at ACTA, is a constant process. We believe that in the ever changing dynamic field of accounting, auditing, taxation, 
                            regulatory compliances, what required is an ability to unlearn and relearn.</p>

                            <p>Our operations team members comprise of Chartered Accountants of 
                            ICAI (Indian Institute of Chartered Accountants - INDIA),
                            Certified Public Accountants (CPA-USA), 
                            Enrolled Agents (EA-USA), 
                            Certified Internal Auditors (CIA-USA) and Masters of Business Administration (MBA).</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="together">
             <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="together_head">
                            <h3>Together <span>we grow..!!</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <section class="together">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 aos-init aos-animate image-center-people">
                        <img src="assets/images/Team3_Pic.png" class="img-fluid" alt="ACTA Team" title="ACTA Team">
                    </div>
                </div>
            </div>
        </section> 
        <section class="teammate">
            <div class="container">                
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <div class="row">
                            <div class="col-lg-7 col-md-8 aos-init aos-animate abt_mb">
                                <div class="leadership_head">
                                    <h3>Leadership <span class="sub-text-color">Team</span></h3>
                                    <p>ACTA is lead by a team of experts in the field of Accounting, Auditing, Taxation & Advisory. The Leadership team comprises of professionals holding the highest qualification in Accounts, Tax & Audit, among others.</p>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="leadership_tolead mb-3">
                                            <div class="leadership_lead_before">T</div>
                                            <div class="leadership_lead_after pl-2">Together</div>
                                        </div>
                                        <div class="leadership_tolead mb-3">
                                            <div class="leadership_lead_before">E</div>
                                            <div class="leadership_lead_after pl-2">EVERYONE</div>
                                        </div>
                                        <div class="leadership_tolead mb-3">
                                            <div class="leadership_lead_before">A</div>
                                            <div class="leadership_lead_after pl-2">ACHIEVES</div>
                                        </div>
                                        <div class="leadership_tolead mb-3">
                                            <div class="leadership_lead_before">M</div>
                                            <div class="leadership_lead_after pl-2">MORE</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </section>
            
        <section class="joinasteam">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="joinasteam_wrap">
                            <h3>We identify necessities and create opportunities.</h3>
                            <p>Enjoy our growth in all aspects and continue our journey to scale.</p>
                            <a href="{{ url('careers') }}" class="btn-free-trail">Join Our Team</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>
    <!-- End #main -->
@endsection



