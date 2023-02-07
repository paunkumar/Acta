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
                    <li>
                    <a href="{{ url('services/USA/Accounting-Bookkeeping-services/') }}">
                        <img src="{{ url('/assets/img/icon/USA.png') }}" alt="Outsourced Accounting and Bookkeeping Services" class=""/>USA
                    </a>
                    </li>
                    <li class="active">
                    <a  href="{{ url('services/australia/Accounting-Bookkeeping-services/') }}">
                        <img src="{{ url('/assets/img/icon/Australia.png') }}" alt="" class=""/>AUSTRALIA
                    </a>
                    </li>
                    <li>
                    <a  href="{{ url('services/canada/accounting-and-bookkeeping-services/') }}">
                        <img src="{{ url('/assets/img/icon/Canada.png') }}" alt="" class=""/>CANADA
                    </a>
                    </li>
                    <li>
                    <a  href="{{ url('services/uk/Virtual-accounting-bookkeeping-services/') }}">
                        <img src="{{ url('/assets/img/icon/Uk.png') }}" alt="" class=""/>UK
                    </a>
                    </li>
                    <li>
                    <a href="{{ url('services/uae/accounting-bookkeeping-services/') }}">
                        <img src="{{ url('/assets/img/icon/UAE.png') }}" alt="" class=""/>UAE
                    </a>
                    </li>
                    <li>
                    <a  href="{{ url('services/india/accounting-bookkeeping-GST-income-tax/') }}">
                        <img src="{{ url('/assets/img/icon/India.png') }}" alt="" class=""/>INDIA
                    </a>
                    </li>
                    <li class="w-map">
                    <a  href="{{ url('services/othercountries') }}">OTHER COUNTRIES</a>
                    </li>

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
                                    <li>Aged Payables</li>
                                    <li>Aged Receivables</li>
                                    <li>Payroll Process - Weekly, Fortnightly & Monthly</li>
                                    <li>Payroll Tax</li>
                                    <li>IAS (Instalment Activity Statement)</li>
                                    <li>BAS (Business Activity Statement)</li>
                                    <li>Finalization of Accounts & preparing financials for</li>
                                    <ol>
                                    <li>Sole Proprietor</li>
                                    
                                    <li>Partnership</li>
                                
                                    <li>Trust</li>
                                    
                                    <li>Company</li>
                                    </ol>
                                    <li>Preparing Tax Return for</li>
                                    <p>a)    Individual</p>
                                    
                                    <p>b)    Partnership</p>
                                
                                    <p>c)    Trust</p>
                                    
                                    <p>d)    Company</p>
                                    <li>Forecasting the financial</li>
                                    <li>Fringe Benefit Tax</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ url('/assets/img/icon/ACTA Taxation.png') }}" alt="ACTA Taxation"/>
                                <h3>Taxation</h3>
                                <ul class="list-unstyled">
                                    <li>Income tax – BAS, IAS, PAYG</li>
                                    <li>Goods and service tax</li>
                                    <li>Fringe benefit tax</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="{{ url('/assets/img/icon/ACTA Audit.png') }}" alt="ACTA Audit"/>
                                <h3>Audit</h3>
                                <p> Audit is an independent appraisal, involving specialized 
                                    application of techniques of auditing in accordance with 
                                    the specific needs of the organization. We have our associates 
                                    who will deliver you the best practice in, accounts evaluation 
                                    and examination, financial and other operations.</p>
                            </div>
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
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="{{ url('/assets/img/icon/ACTA Superannuation funds.png') }}" alt="ACTA Superannuation funds"/>
                                <h3>Superannuation funds</h3>
                                <p>We have tremendous expertise in doing Superannuation 
                                    funds for the past several years.</p>
                            </div>
                        </div>
                    </section>
                    <!-- ~AUSTRALIA Services 2 ends~ -->
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



@endsection