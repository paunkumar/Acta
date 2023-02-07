@extends('layouts.web_old')
@section('meta_tags')
<title>{{ $meta->meta_title }}</title>
    <meta name="description" content="{{ $meta->meta_description }}">
	<meta name="keywords" content="{{ $meta->meta_keywords }}">
	<meta name="author" content="{{ $meta->meta_author }}">
@endsection
@section("title","$meta->meta_title")
@section('main-content')

<!-- Google Tag Manager (noscript) -->
<noscript>
	<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MVPQ7PZ"
	height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Services -->
<div id="service-head" class="container">
    <h4> ACTA International renders Accounting, Tax and finance related services to 
        nations across the world. ACTA International is an Organization composed of 
        professionals and team of experts that deliver work or aid in completing a 
        task for the benefit of our clients.
    </h4><br>
    
    <h5 class="acta-qute">Service to others is the rent you pay for your room here on Earth <b>-Muhammad Ali</b></h5>
</div>


<div id="service-content" class="container">
   	<div class="row">
                
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="acta-service-menus">
                <ul class="nav nav-pills">
                    <li ><a href="{{ url('services/USA/Accounting-Bookkeeping-services/') }}"><img src="{{ url('/assets/img/icon/USA.png') }}" alt="Outsourced Accounting and Bookkeeping Services" class=""/>USA</a></li>
                    <li><a  href="{{ url('services/australia/Accounting-Bookkeeping-services/') }}"><img src="{{ url('/assets/img/icon/Australia.png') }}" alt="" class=""/>AUSTRALIA</a></li>
                    <li><a  href="{{ url('services/canada/accounting-and-bookkeeping-services/') }}"><img src="{{ url('/assets/img/icon/Canada.png') }}" alt="" class=""/>CANADA</a></li>
                    <li><a  href="{{ url('services/uk/Virtual-accounting-bookkeeping-services/') }}"><img src="{{ url('/assets/img/icon/Uk.png') }}" alt="" class=""/>UK</a></li>
                    <li><a href="{{ url('services/uae/accounting-bookkeeping-services/') }}"><img src="{{ url('/assets/img/icon/UAE.png') }}" alt="" class=""/>UAE</a></li>
                    <li class="active"><a  href="{{ url('services/india/accounting-bookkeeping-GST-income-tax/') }}"><img src="{{ url('/assets/img/icon/India.png') }}" alt="" class=""/>INDIA</a></li>
                    <li class="w-map"><a  href="{{ url('services/othercountries') }}">OTHER COUNTRIES</a></li>
                </ul>
            </div>
        </div>
                
        <div class="col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12">    
            <div class="tab-content">
                    
                <section class="tab-pane fade in active" >
                    <div  class="row">
                        <div class="col-sm-6">
                            <img src="{{ url('/assets/img/icon/ACTA Bookkeeping Services.png') }}" alt="ACTA Bookkeeping Services"/>
                            <h3>Bookkeeping services</h3>
                            <ul class="list-unstyled">
                                <li>Entry of transactions</li>
                                <li>Journal Entry</li>
                                <li>Expenses Ledger</li>
                                <li>Accounts Receivable Services</li>
                                <li>Bank Account Reconciliation</li>
                                <li>Assets /Equipment Ledgers</li>
                                <li>General Ledger</li>
                                <li>Payroll</li>
                                <li>Accounts Payable Services</li>
                                <li>Credit Card Reconciliation</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                             <img src="{{ url('/assets/img/icon/ACTA Taxation.png') }}" alt="ACTA Taxation"/>
                            <h3>Income tax</h3>
                            <ul class="list-unstyled">
                                <li>Consultancy in Tax matters & Tax planning</li>
                                <li>Preparation of return and filing</li> 
                                <li>Income Tax assessments before authorities in India</li>
                                <li>Income tax Appeals before CIT (Appeals) and ITAT</li>
                                <li><b>Tax deducted at source (TDS)</b>
                                    <ul>
                                        <li>Verification of all payments to vendors for the purposes 
                                            of determination of correct application of rates and 
                                            category for deduction of withholding taxes.</li>
                                        <li>Computation of monthly TDS on the basis of above.</li>
                                        <li>Monthly tax reconciliation of the TDS due and deducted.</li>
                                        <li>Preparation and deposit of Monthly challans on or before the statutory due dates.</li>
                                        <li>Filing of quarterly E-TDS Returns.</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="{{ url('/assets/img/icon/ACTA Goods and service tax (GST).png') }}" alt="ACTA Goods and service tax (GST)"/>
                            <h3>Goods and service tax (GST)</h3>
                            <ul class="list-unstyled">
                                <li>GST Registration</li>
                                <li>GST Consultancy  & Advisory</li>
                                <li>GST Returns Filing</li>
                                <li>Impact of GST and Planning</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <img src="{{ url('/assets/img/icon/ACTA Auditing and Assurance.png') }}" alt="ACTA Auditing and Assurance"/>
                            <h3>Auditing and assurance</h3>
                            <ul class="list-unstyled">
                                <li>Statutory audit</li>
                                <li>Internal audit</li>
                                <li>Process audit</li>
                                <li>Concurrent audit</li>
                                <li>Stock audit</li>
                                <li>Forensic audit</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="{{ url('/assets/img/icon/ACTA Business Startups.png') }}" alt="ACTA Business Startups"/>
                            <h3>Business startups</h3>
                            <ul class="list-unstyled">
                                <li>Companies incorporation (Public limited, Private limited and one person company)</li>
                                <li>Firm or LLP formation & Registration</li>
                                <li>Proprietorship</li>
                                <li>Trust</li>
                                <li>Co-operative societies</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <img src="{{ url('/assets/img/icon/ACTA Compliances  Certifications.png') }}" alt="ACTA Compliances Certifications"/>
                            <h3>Compliances & Certifications :</h3>
                            <ul class="list-unstyled">
                                <li><b>Compliances</b>
                                    <ul>
                                        <li>IND AS & IFRS</li>
                                        <li>FEMA</li>
                                    </ul>
                                </li>
                                <li><b>Certifications</b>
                                    <ul>
                                        <li>Companies Act, FEMA and RBI related matters.</li>
                                        <li>Direct and Indirect Taxes.</li>
                                        <li>Exchange Control legislation for imports, remittances, ECB, DGFT, EOU etc.</li>
                                        <li>Transfer Pricing.</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="{{ url('contact-us') }}">
                                <img src="{{ url('/assets/img/icon/ACTA Foreign countries to start business in india.png') }}" alt="ACTA Foreign countries to start business in india"/>
                                <h3>Foreign countries <br> to start business in india</h3>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <img src="{{ url('/assets/img/icon/ACTA Financial  Management.png') }}" alt="ACTA Financial Management"/>
                            <h3>Financial & Management services</h3>
                            <ul class="list-unstyled">
                                <li>Mergers and Acquisitions</li>
                                <li>CMA Reports and Business Projections</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="{{ url('/assets/img/icon/ACTA Virtual CFO.png') }}" alt="ACTA Virtual CFO"/>
                            <h3>Virtual CFO</h3>
                            <ul class="list-unstyled">
                                <li>Financial Advice</li>
                                <li>Transaction and Advisory</li>
                                <li>Strategic Planning</li>
                                <li>Investor Relation</li>
                            </ul>
                            <p>ACTA Virtual CFO services model allows clients to control their 
                                requirements, when needed during key periods and then scale back 
                                this service during non-peak period.</p>
                        </div>
                    </div>
                </section>
                <!-- ~INDIA Services 6 ends~ -->
                
                        
            </div><!-- ./tab-content -->
        </div>
    </div>
</div>
        
<!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/5ca647176bba460528014d83/default';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
</script> -->
<!--End of Tawk.to Script-->



@endsection