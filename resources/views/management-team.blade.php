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
        <section class="people-management">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-header">
                            <h1 class="accounting-header">Management <span class="sub-text-color">Team</span></h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 abt_mb aos-init aos-animate" data-aos="fade-right">
                        <img src="assets/images/Karthik-Sir.png" class="img-fluid" alt="KARTHICK SUBRAMANIAM, CEO" title="KARTHICK SUBRAMANIAM, CEO">
                    </div>
                    <div class="col-lg-7 abt_mbaos-init aos-animate" data-aos="fade-left">
                        <div class="people-info">
                            <h4>KARTHICK SUBRAMANIAM <span class="crown"><img src="assets/images/head-style.png" alt="Head Style" title="Head Style"></span></h4>
                            <h5>CEO, Co-Founder</h5>
                            <ul class="social-links">
                                <li><a href="https://www.linkedin.com/in/karthick-sk" target="_blank" title="LinkedIn" class="linkedin"><img src="assets/images/linkedin.svg" title="LinkedIn" alt="LinkedIn"> </a></li>
                                <a></a>
                                <li><a href="mailto:Karthick@actaintl.com" target="_blank" title="Mail" class="linkedin"><img src="assets/images/mail-white.svg" alt="Mail" title="Mail"></a></li>
                            </ul>
                            <div class="manange_info">
                                <p>Karthick is experienced, with a demonstrated history of working in the accounting industry. skilled in budgeting, internal audit, direct tax, external audit, and strategic planning. CA with a strong administrative background focused on accounting and finance. His aim is to build a skilled operation team with high-quality and positive-attitude team members and to retain them.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="people-management-two">
            <div class="container aos-init aos-animate" data-aos="fade-up">                
                <div class="row">                    
                    <div class="col-lg-7 abt_mb aos-init aos-animate orders-2" data-aos="fade-left">
                        <div class="people-info">
                            <h4>SATHISH RAMALINGAM <span class="crown"><img src="assets/images/head-style.png" alt="Head Style" title="Head Style"></span></h4>
                            <h5>Executive Chairman, Co-Founder</h5>
                            <ul class="social-links">
                                <li><a href="https://www.linkedin.com/in/sathish-ramalingam" target="_blank" title="LinkedIn" class="linkedin"><img src="assets/images/linkedin.svg" title="LinkedIn" alt="LinkedIn"> </a></li>
                                <a></a>
                                <li><a href="mailto:sathish@actaintl.com" target="_blank" title="Mail" class="linkedin"><img src="assets/images/mail-white.svg" alt="Mail" title="Mail"></a></li>
                            </ul>
                            <div class="manange_info">
                                <p>We at ACTA understand the importance of maintaining the confidentiality and security of our client’s data. We have physical, administrative, and technical safeguards in order to ensure data security and confidentiality.</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-5 abt_mb orders-1 aos-init aos-animate" data-aos="fade-right">
                        <img src="assets/images/Sathish-Sir.png" class="img-fluid" alt="SATHISH RAMALINGAM, Executive Chairman" title="SATHISH RAMALINGAM, Executive Chairman">
                    </div>
                </div>
            </div>
        </section>
        <section class="people-management-third">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-5 abt_mb aos-init aos-animate" data-aos="fade-right">
                        <img src="assets/images/Vinay-Sir.png" class="img-fluid" alt="VINAY CHAUHAN, CA, Compliance & Expert" title="VINAY CHAUHAN, CA, Compliance & Expert">
                    </div>
                    <div class="col-lg-7 abt_mbaos-init aos-animate" data-aos="fade-left">
                        <div class="people-info">
                            <h4>VINAY CHAUHAN <span class="crown"><img src="assets/images/head-style.png" alt="Head Style" title="Head Style"></span></h4>
                            <h5>CA, Compliance & Expert</h5>
                            <ul class="social-links">
                                <li><a href="https://www.linkedin.com/in/vinay-chauhan-0179a9139" title="LinkedIn" target="_blank" class="linkedin"><img src="assets/images/linkedin.svg" title="LinkedIn" alt="LinkedIn"> </a></li>
                                <a></a>
                                <li><a href="mailto:vinay@actaintl.com" target="_blank" title="Mail" class="linkedin"><img src="assets/images/mail-white.svg" alt="Mail" title="Mail"></a></li>
                            
                            </ul>
                            <div class="manange_info">
                                <p>A member Chartered Accountant of the Institute of Chartered Accountants of India having more than ten years of experience in Tax, Accounts, Audit, Consulting, Finance etc, especially in International Taxation, Foreign Direct Investment, Foreign accounts and audit outsourcing. Also an entrepreneur and startup enthusiast.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="people-management-four">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="row">                    
                    <div class="col-lg-7 orders-2 abt_mbaos-init aos-animate" data-aos="fade-left">
                        <div class="people-info">
                            <h4>VALLIAPPAN PL <span class="crown"><img src="assets/images/head-style.png" alt="Head Style" title="Head Style"></span></h4>
                            <h5>CA, VCFO Expert</h5>
                            <ul class="social-links">
                                <li><a href="https://www.linkedin.com/in/valliappan-pl-0814a2166" title="LinkedIn" target="_blank" class="linkedin"><img src="assets/images/linkedin.svg" title="LinkedIn" alt="LinkedIn"> </a></li>
                                <a></a>
                                <li><a href="mailto:valliappan@actaintl.com" title="Mail" target="_blank" class="linkedin"><img src="assets/images/mail-white.svg" alt="Mail" title="Mail"></a></li>
                            
                            </ul>
                            <div class="manange_info">
                                <p>Valliappan PL is a fellow member of the Institute of Chartered Accountants of India. His expertise includes GST compliance and implementation of GST process and systems, Direct Taxation, Tax Litigation and process audit.</p>
                            </div>                            
                        </div>
                    </div>
                    <div class="col-lg-5 orders-1 abt_mb aos-init aos-animate" data-aos="fade-right">
                        <img src="assets/images/Valliappan.png" class="img-fluid" alt="VALLIAPPAN PL, CA, VCFO Expert" title="VALLIAPPAN PL, CA, VCFO Expert">
                    </div>
                </div>
            </div>
        </section> 
        <section class="people-management-five">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="row">  
                <div class="col-lg-5 abt_mb aos-init aos-animate" data-aos="fade-right">
                        <img src="assets/images/Nirekshana-Mam.png" class="img-fluid" alt="NIRIEKSHANAA, CA, Audit Expert" title="NIRIEKSHANAA, CA, Audit Expert">
                    </div>                  
                    <div class="col-lg-7 abt_mbaos-init aos-animate" data-aos="fade-left">
                        <div class="people-info">
                            <h4>NIRIEKSHANAA <span class="crown"><img src="assets/images/head-style.png" alt="Head Style" title="Head Style"></span></h4>
                            <h5>CA, Audit Expert</h5>
                            <ul class="social-links">
                                <li><a href="https://www.linkedin.com/company/actaintl/" title="LinkedIn" target="_blank" class="linkedin" title="Acta"><img src="assets/images/linkedin.svg" title="LinkedIn" alt="LinkedIn"> </a></li>
                                <a></a>
                                <li><a href="mailto:info@actaintl.com" target="_blank" title="Mail" class="linkedin"><img src="assets/images/mail-white.svg" alt="Mail" title="Mail"></a></li>
                            
                            </ul>
                            <div class="manange_info">
                                <p>Niriekshana is an associate member of the Institute of Chartered Accountants of India. Her expertise include Direct taxation, Direct tax compliance for employees on international secondment, Statutory audit, Internal audit, Internal Control Audit and Process Audit.</p>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <section class="weare-happy"> 
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-header">
                            <h2 class="accounting-header">We Are<span class="sub-text-color"> Happy To Connect</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->
@endsection



