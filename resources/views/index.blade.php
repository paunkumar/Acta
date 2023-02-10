@extends('layouts.web')
@section('meta_tags')
<title>{{ $meta->meta_title }}</title>
    <meta name="description" content="{{ $meta->meta_description }}">
	<meta name="keywords" content="{{ $meta->meta_keywords }}">
	<meta name="author" content="{{ $meta->meta_author }}">
@endsection
@section("title","Title")
@section('main-content')
<!-- ======= Hero Section ======= -->
<section class="main-section">
	<div class="container">
		<div class="row">
			<div class="col-xxl-11 col-lg-9 col-md-9 mx-auto text-center">
				<div class="hero-info">
				<h2>Offshore Staffing Solutions for Accountants with <span class="sub-color">NO</span>
				<span class="owl-carousel owl-theme owl-service-color" id="banner_scroll">
					<span class="item b_lines">Bonus</span>
					<span class="item b_lines">Insurance</span>
					<span class="item b_lines">Vacation Pay</span>
					<span class="item b_lines">Compliances</span>
					<span class="item b_lines">Payroll Taxes</span>
				</span>
				
			</h2>
				<div class="web">
					<div class="second-section">
						<h6>Starts from $10 per hour <span class="lines">|</span> Your offshore accounting partner</h6>
					</div>
					<div class="appointment-section">
						<a href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/karthick-s/offshore-staffing-for-cpa-accounting-firms-acta?month=2023-01'});return false;" title="Schedule an Appointment" class="btn-services scrollto">Schedule an Appointment</a>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>
<!-- End Hero Section -->
<section class="mobile_view_section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="mobile_view">
					<div class="second-section">
						<h6>Starts from $10 per hour |<span class="lines">|</span> Your offshore accounting partner</h6>
					</div>
					<div class="appointment-section">
						<a href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/karthick-s/offshore-staffing-for-cpa-accounting-firms-acta?month=2023-01'});return false;" title="Schedule an Appointment" class="btn-services scrollto">Schedule an Appointment</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<main id="main">
	<section class="wehelp">
	<div class="container">		
		<div class="row">
			<div class="col-md-12">
				<div class="foryou text-center">
					<h4 class="image-help-text">For You, <span class="sub-text">We Save</span></h4>
				</div>
			</div>
		</div>
		<div id="our-services" class="row justify-content-between mx-4">
			<div class="col-md-6 col-sm-6 col-lg-3 right_border bottom-border">
				<div class="icon-box-new ">
					<h4 class="title"><a title="100+ Man hours">100+ Man hours</a></h4>
					<p class="description-new">Per person Per Month</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-6  col-lg-3   right_border bottom-border">
				<div class="icon-box-new  ">
					<h4 class="title"><a title="70%">70%</a></h4>
					<p class="description-new">of Your Payroll Cost</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12  col-lg-3  right_border mb-border ">
				<div class="icon-box-new ">
					<h4 class="title"><a title="Stress Free">Stress Free</a></h4>
					<p class="description-new">Tax Season</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 col-lg-3 ">
				<div class="icon-box-new">
					<h4 class="title"><a title="Lots of Stress Free">Lots of Stress Free</a></h4>
					<p class="description-new">Family Time</p>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section id="services" class="section-bg">
		<div class="container aos-init aos-animate" data-aos="fade-up">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-header">
						<h3 class="accounting-header">Offshore <span class="sub-text-color">Accounting Services</span></h3>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-4 col-md-12 cmt-13">
					<div class="aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
						<div class="box service_wrap ">
							<div class="icons">
								<img src="assets/images/services/service-one.png" alt="Offshore Bookkeeping Services" title="Offshore Bookkeeping Services" />
							</div>
							<h5>
								<a href="" title="Offshore Bookkeeping Services">Offshore Bookkeeping Services</a>
							</h5>
							<p>
								Our skilled offshore team enables small and mid-sized CPA and accounting firms to focus on client generation and business <strong>Read more</strong>
							</p>
							<div class="description-arrow">
								<img src="assets/images/services/arrow.svg" alt="Arrow" title="Arrow"/>
							</div>
						</div>
					</div>
					<div class="aos-init aos-animate margin-top-60" data-aos="zoom-in" data-aos-delay="200">
						<div class="box service_wrap">
							<div class="icons">
								<img src="assets/images/services/service-two.png" alt="Offshore Audit Service" title="Offshore Audit Service">
							</div>
							<h5><a href="" title="Offshore Audit Service">Offshore Audit Service</a></h5>
							<p>We save mid-sized CPA and accounting firms 110+ hours per person per month by auditing business operations, reporting <strong>Read more</strong></p>
							<div class="description-arrow">
								<img src="assets/images/services/arrow.svg" alt="Arrow" title="Arrow"/>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 order-xs-1">
					<div class="aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
						<div class="box service_wrap actives" >
							<div class="icons">
								<img src="assets/images/services/service-three.png" alt="Offshore Accounting Services" title="Offshore Accounting Services" />
							</div>
							<h5><a href="" title="Offshore Accounting Services">Offshore Accounting Services</a></h5>
							<p>With our offshore accounting services, we help your firm save money and reduce work-related stress. Hiring a skilled <strong>Read more</strong></p>
							<div class="description-arrow">
								<img src="assets/images/services/arrow.svg" alt="Arrow" title="Arrow"/>
							</div>
						</div>
					</div>
					<div class="aos-init aos-animate " data-aos="zoom-in" data-aos-delay="200">
						<div class="box service_wrap mobile-service-top">
							<div class="icons">
								<img src="assets/images/services/service-four.png" alt="Offshore Quickbooks Proadvisor" title="Offshore Quickbooks Proadvisor" >
							</div>
							<h5><a href="" title="Offshore Quickbooks Proadvisor">Offshore Quickbooks Proadvisor</a></h5>
							<p>By managing, reviewing, and delivering work, we help mid-sized CPA and accounting firms save 99+ hours <strong>Read more</strong></p>
							<div class="description-arrow">
								<img src="assets/images/services/arrow.svg" alt="Arrow" title="Arrow"/>
							</div>
						</div>
					</div>
					<div class="aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
						<div class="box service_wrap ">
							<div class="icons">
								<img src="assets/images/services/service-five.png" alt="Offshore Staffing" title="Offshore Staffing" >
							</div>
							<h5 ><a href="" title="Offshore Staffing">Offshore Staffing</a></h5>
							<p>We help small and mid-sized CPA and accounting firms in hiring and retaining qualified professionals starting <strong>Read more</strong></p>
							<div class="description-arrow">
								<img src="assets/images/services/arrow.svg" alt="Arrow" title="Arrow"/>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 cmt-13">
					<div class="aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
						<div class="box service_wrap">
							<div class="icons">
								<img src="assets/images/services/service-six.png" alt="Offshore Federal Tax Preparation" title="Offshore Federal Tax Preparation" >
							</div>
							<h5><a href="" title="Offshore Federal Tax Preparation">Offshore Federal Tax Preparation</a></h5>
							<p>Plan for a stress-free tax season with our offshore professional team. We will help you prepare federal and state tax <strong>Read more</strong></p>
							<div class="description-arrow">
								<img src="assets/images/services/arrow.svg" alt="Arrow" title="Arrow"/>
							</div>
						</div>
					</div>
					<div class="aos-init aos-animate margin-top-60" data-aos="zoom-in" data-aos-delay="200">
						<div class="box service_wrap">
							<div class="icons">
								<img src="assets/images/services/service-seven.png" alt="Offshore Accountants" title="Offshore Accountants" >
							</div>
							<h5><a href="" title="Offshore Accountants">Offshore Accountants</a></h5>
							<p>We save small and mid-sized CPA and accounting firms $90,000+ annually and 100+ man hours per person per month  <strong>Read more</strong></p>
							<div class="description-arrow">
								<img src="assets/images/services/arrow.svg" alt="Arrow" title="Arrow"/>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<!--start clients-->
			<div class="clients">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-header">
						<h3 class="accounting-header">Our <span class="sub-text-color">Software Intelligence </span></h3>
					</div>
				</div>
			</div>
			<div class="row justify-content-center mx-5">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="client-logo">
						<img src="assets/images/clients/Myob.png" class="img-fluid" alt="MYOB Accounting" title="MYOB Accounting">
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="client-logo">
						<img src="assets/images/clients/Zoho-Books.png" class="img-fluid" alt="Zoho Books" title="Zoho Books">
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="client-logo">
						<img src="assets/images/clients/Fresh-Books.png" class="img-fluid" alt="Fresh Books" title="Fresh Books">
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="client-logo">
						<img src="assets/images/clients/Quick-Books.png" class="img-fluid " alt="Quick Books" title="Quick Books">
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="client-logo">
						<img src="assets/images/clients/Net-Suite.png" class="img-fluid" alt="Net Suite" title="Net Suite">
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="client-logo">
						<img src="assets/images/clients/Sage.png" class="img-fluid sage-tool" alt="Sage" title="Sage">
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 ">
					<div class="client-logo ">
						<img src="assets/images/clients/Xero.png" class="img-fluid " alt="Xero" title="Xero">
					</div>
				</div>
			</div>
	</div>
			<!--end-->		
		</div>
	</section>
	
	<section id="why-us">
		<div class="container aos-init aos-animate" data-aos="fade-up">
			<div class="row">
				<div class="col-lg-12 col-md-10 mx-auto">
					<div class="section-header">
						<h1 class="accounting-header">Offshore Staffing for CPA and Accounting Firms</h1>
					</div>
						<p class="sub-para sub_para">Offshore Staffing for CPA and Accounting firms is an increasingly popular way to manage Bookkeeping and Accounting, Audits & Taxation tasks allowing accountants to access the best talent from around the world. 
						Offshore staffing can provide cost savings, access to specialized skills, and streamlined processes. With Offshore Staffing, a CPA or Accounting firm can save from $65,000 to $100,000 per year per person. </p>
						<p class="sub-para sub_para">Offshore staffing also provides a great opportunity for accountants to expand their client base. By hiring staff from different countries like India, accountants can access a larger pool of potential clients and increase their reach. This can help them to increase their profits and grow their business.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="services p-0 " class="section-bg service-calenly">
		<!-- Calendly inline widget begin -->
		<div class="calendly-inline-widget" data-url="https://calendly.com/karthick-s/offshore-staffing-for-cpa-accounting-firms-acta?hide_gdpr_banner=1&back=1&month=2022-11"></div>
		<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
		<!-- Calendly inline widget end -->
	</section>
</main>
<!-- End #main -->
	@section('foot-content')
		<!-- <script>
			const texts = [
					"Bonus",
					"Insurance",
					"Vacation Pay",
					"Compliances",
					"Payroll Taxes",
					];

			let counter = 0;
			setInterval(() => {
				document.getElementById("hero-text").innerHTML = texts[counter];
				counter = (counter + 1) % texts.length;
			}, 2000); // 2000 milliseconds = 2 seconds
		</script> -->
	@endsection
@endsection