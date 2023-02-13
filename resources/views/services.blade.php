@extends('layouts.web_old')
@section('meta_tags')
<title>{{ $meta->meta_title }}</title>
    <meta name="description" content="{{ $meta->meta_description }}">
	<meta name="keywords" content="{{ $meta->meta_keywords }}">
	<meta name="author" content="{{ $meta->meta_author }}">
@endsection
@section("title","$meta->meta_title")
@section('main-content')
	
    <main id="main">         
        <section id="about-security">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-9 mx-auto mb-5">
                        <div class="people-info">
                            <h4>Offshore Staffing for Accounting/CPA firms | Outsourced Bookkeeping & Accounting | VCFO Support | Tax Preparation, Planning & Projection</h4>
                        </div>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                        <div class="service_image">
                            <img src="{{ url('/assets/img/service/pro_advisor-1.png') }}" class="img-fluid" alt="advisor">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 ">
                        <div class="service_image">
                            <img src="{{ url('/assets/img/service/pro_advisor-2.png') }}" class="img-fluid" alt="advisor">
                        </div>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-lg-12 mb-3">
                        <div class="services_link">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ url('services/USA/Accounting-Bookkeeping-services/') }}"><img src="{{ url('/assets/img/icon/USA.png') }}" alt="Outsourced Accounting and Bookkeeping Services" class=""/>USA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('services/australia/Accounting-Bookkeeping-services/') }}"><img src="{{ url('/assets/img/icon/Australia.png') }}" alt="" class=""/>AUSTRALIA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('services/canada/accounting-and-bookkeeping-services/') }}"><img src="{{ url('/assets/img/icon/Canada.png') }}" alt="" class=""/>CANADA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('services/uk/Virtual-accounting-bookkeeping-services/') }}"><img src="{{ url('/assets/img/icon/Uk.png') }}" alt="" class=""/>UK</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ url('services/uae/accounting-bookkeeping-services/') }}"><img src="{{ url('/assets/img/icon/UAE.png') }}" alt="" class=""/>UAE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link "href="{{ url('services/india/accounting-bookkeeping-GST-income-tax/') }}">
                                    <img src="{{ url('/assets/img/icon/India.png') }}" alt="" class=""/>INDIA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ url('services/othercountries') }}"><img src="{{ url('assets/img/icon/grey-world-map.png') }}">OTHER COUNTRIES</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row my-5">                     
                    <div class="col-lg-11 mx-auto">
                        <div class="row justify-content-between">
                            <div class="col-lg-6 col-md-6 mb-5">
                                <div class="services_wrap ">
                                    <div class="d-flex align-items-center mb-3">
                                        <div><img src="{{ url('/assets/img/icon/ACTA Bookkeeping Services.png') }}" alt="Outsourced Bookkeeping Services"/></div>
                                        <div class="pl-15"><h3>Bookkeeping Services</h3></div>
                                    </div>
                                    <ul>
                                        <li>General bookkeeping</li>
                                        <li>Bank reconciliation</li>
                                        <li>Daily records updates</li>
                                        <li>VAT returns</li>
                                        <li>Records data entry</li>
                                        <li>General ledger maintenance</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-5">
                                <div class="services_wrap ">
                                    <div class="d-flex align-items-center mb-3">
                                        <div><img src="{{ url('/assets/img/icon/ACTA Account Preparation.png') }}" alt="Outsourced Accounting services"/></div>
                                        <div class="pl-15"> <h3>Accounts preparation</h3></div>
                                    </div>
                                    <ul>
                                        <li>Trial balance</li>
                                        <li>Annual accounts preparation</li> 
                                        <li>Monthly/quarterly management accounts</li>
                                        <li>Customised reports</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-5">
                                <div class="services_wrap ">
                                    <div class="d-flex align-items-center mb-3">
                                        <div><img src="{{ url('/assets/img/icon/ACTA Taxation.png') }}" alt="ACTA Taxation"/></div>
                                        <div class="pl-15"><h3>Taxation</h3></div>
                                    </div>
                                    <ul>
                                        <li>Preparation of Individual(1040) , trust(1041)</li>
                                        <li>Non profit organisation(990) tax returns </li>
                                        <li>Preparation of Corporate(1120 & 1120S) and partnership(1065) tax returns</li>
                                        <li>Preparation of State and local tax returns(SALT)</li>
                                        <li>Fixed asset, depreciation and tax adjustments to the general ledger</li>
                                        <li>Filing status updates</li>
                                        <li>Extension filing</li>
                                        <li>VAT preparation</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-5">
                                <div class="services_wrap ">
                                    <div class="d-flex align-items-center mb-3">
                                        <div> <img src="{{ url('/assets/img/icon/ACTA Payroll.png') }}" alt="ACTA Payroll"/></div>
                                        <div class="pl-15"><h3>Payroll</h3></div>
                                    </div>
                                    <ul>
                                        <li>Payroll services for US businesses</li>
                                        <li>Weekly, biweekly, semimonthly or monthly pay periods</li>
                                        <li>Payroll tax filing</li>
                                        <li>Direct Deposit or Paper Checks</li>
                                        <li>Filing of Year end Payroll Tax Forms with IRS</li>
                                        <li>General Ledger Interfacing</li>
                                    </ul>
                                </div>
                            </div>
                          
                            <div class="col-lg-6 col-md-6 mb-5">
                                <div class="services_wrap ">
                                    <div class="d-flex align-items-center mb-3">
                                        <div> 
                                        <img src="{{ url('/assets/img/icon/ACTA Virtual CFO.png') }}" alt="ACTA Virtual CFO"/>
                                        </div>
                                        <div class="pl-15">
                                            <h3>Virtual CFO</h3>
                                        </div>
                                    </div>
                                    <ul>
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
                            <div class="col-lg-6 col-md-6 mb-5">
                                 <div class="services_wrap ">
                                    <div class="d-flex align-items-center mb-3">
                                        <div> 
                                            <img src="{{ url('/assets/img/icon/ACTA Audit.png') }}" alt="ACTA Audit"/>
                                        </div>
                                        <div class="pl-15">
                                            <h3>Audit</h3>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>Employee Benefit Plan(EBP)</li>
                                        <li>Housing and Urban Development(HUD)</li>
                                        <li>Non-Profit Organisation(NPO)</li>
                                        <li>Single Audit</li>
                                    </ul>

                                    <p>Audit is an independent appraisal, involving specialized application of techniques of auditing in accordance with the specific needs of the organization. We have our associates who will deliver you the best practice in, accounts evaluation and examination, financial and other operations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </section>
    </main>
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
     
	<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MVPQ7PZ"
		height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<!-- End Google Tag Manager (noscript) -->
@endsection 