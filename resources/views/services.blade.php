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
        <h3> <center>Offshore Staffing for Accounting/CPA firms | Outsourced Bookkeeping & Accounting |<br> VCFO Support | Tax Preparation, Planning & Projection </center>
        </h3><br><br>
        
        <div class="row text-center" >
            <div class="col-md-4 " style="width:400px;height: 400px;">
                <img src="{{ url('/assets/img/service/pro_advisor-1.png') }}" style="width:100%;height: 100%;object-fit: cover;" />
            </div>
            <div class="col-md-4 " style="width:400px;height: 400px;">
                <img src="{{ url('/assets/img/service/pro_advisor-2.png') }}" style="width: 100%;height: 100%;object-fit: cover;"/>
            </div>
        </div>
    </div>

    <div id="service-content" class="container">
        <div class="row">
            
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="acta-service-menus">
                    <ul class="nav nav-pills">
                    <li class="active">
                    <a href="{{ url('services/USA/Accounting-Bookkeeping-services/') }}">
                        <img src="{{ url('/assets/img/icon/USA.png') }}" alt="Outsourced Accounting and Bookkeeping Services" class=""/>USA
                    </a>
                    </li>
                    <li>
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
				

                    <section  class="tab-pane fade in active">
                        <div  class="row">
                            <div class="col-sm-6">
                                <img src="{{ url('/assets/img/icon/ACTA Bookkeeping Services.png') }}" alt="Outsourced Bookkeeping Services"/>
                                <h3>Bookkeeping services</h3>
                                <ul class="list-unstyled">
                                    <li>General bookkeeping</li>
                                    <li>Bank reconciliation</li>
                                    <li>Daily records updates</li>
                                    <li>VAT returns</li>
                                    <li>Records data entry</li>
                                    <li>General ledger maintenance</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ url('/assets/img/icon/ACTA Account Preparation.png') }}" alt="Outsourced Accounting services"/>
                                <h3>Accounts preparation</h3>
                                <ul class="list-unstyled">
                                    <li>Trial balance</li>
                                    <li>Annual accounts preparation</li> 
                                    <li>Monthly/quarterly management accounts</li>
                                    <li>Customised reports</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="{{ url('/assets/img/icon/ACTA Taxation.png') }}" alt="ACTA Taxation"/>
                                <h3>Taxation</h3>
                                <ul class="list-unstyled">
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
                            <div class="col-sm-6">
                                <img src="{{ url('/assets/img/icon/ACTA Payroll.png') }}" alt="ACTA Payroll"/>
                                <h3>Payroll</h3>
                                <ul class="list-unstyled">
                                    <li>Payroll services for US businesses</li>
                                    <li>Weekly, biweekly, semimonthly or monthly pay periods</li>
                                    <li>Payroll tax filing</li>
                                    <li>Direct Deposit or Paper Checks</li>
                                    <li>Filing of Year end Payroll Tax Forms with IRS</li>
                                    <li>General Ledger Interfacing</li>
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
                            <div class="col-sm-6">
                                <img src="{{ url('/assets/img/icon/ACTA Audit.png') }}" alt="ACTA Audit"/>
                                <h3>Audit</h3>
                                <ul class="list-unstyled">
                                    <li>Employee Benefit Plan(EBP)</li>
                                    <li>Housing and Urban Development(HUD)</li>
                                    <li>Non-Profit Organisation(NPO)</li>
                                    <li>Single Audit</li>
                                </ul>
                                <p> Audit is an independent appraisal, involving specialized application 
                                    of techniques of auditing in accordance with the specific needs of 
                                    the organization. We have our associates who will deliver you the 
                                    best practice in, accounts evaluation and examination, financial 
                                    and other operations.</p>
                            </div>
                        </div>
                    </section>
                    <!-- ~USA Services 1 ends~ -->
                    

                    
                    
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