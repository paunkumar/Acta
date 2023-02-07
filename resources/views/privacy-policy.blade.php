@extends('layouts.web_old')
@section('meta_tags')
<title>{{ $meta->meta_title }}ss</title>
    <meta name="description" content="{{ $meta->meta_description }}">
	<meta name="keywords" content="{{ $meta->meta_keywords }}">
	<meta name="author" content="{{ $meta->meta_author }}">
@endsection

@section('main-content')

<!-- Google Tag Manager (noscript) -->
<noscript>
	<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MVPQ7PZ"
	height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<section class="container"  id="aboutus-acta" >
   	<div class="row">
        <div class="col-sm-10 col-md-12">
            <div class="row">
                <div class="col-sm-12 text-center " id="privacy-policy-h1" style="margin-top:40PX;"> 
                    <h1 >PRIVACY POLICY</h1>
                </div>
                <div class="col-sm-12">
                    <p>
                        This privacy policy applies to the Site <span><a href="{{ url('/') }}">www.actaintl.com</a></span>  and products and services offered on the website. The domain name <span><a href="{{ url('/') }}">www.actaintl.com</a></span> ("Website"), is owned and operated by <span>ACTA International Services Private Limited</span>.
                    </p>
                    <h4>1. PERSONAL & OTHER INFORMATION</h4>
                    <p class="text-justify">
                        We may collect information from Users visiting our site, including, but not limited to, name, email address, mailing address, phone number. This information is used for creating your acta account, also to enable us to communicate with you, to help us prepare your tax returns or apply for your business registration and also for other services that we offer. Personal identification information shall be collected from Users only if it is voluntarily submitted to us. 
                    </p>
                    <p class="text-justify">
                        We may collect information which may include the browser name, IP address, the operating system and other similar information usually provided by the browser you use.
                    </p>
                    <h4>2. WEB BROWSER COOKIES</h4>
                    <p class="text-justify">
                        Our Site may use "cookies" to enhance User experience.
                    </p>
                    <h4>3. HOW WE USE THE INFORMATION WE COLLECT FROM YOU</h4>
                    <p class="text-justify">
                        <span>To provide requested service </span>– The information we ask from you will be used to provide you the requested services and to also enable us to communicate & serve you better in the future.
                    </p>
                    <p class="text-justify">
                        <span>To improve customer service  </span>- Information you provide helps us respond to your customer service requests and support needs more efficiently.
                    </p>
                    <p class="text-justify">
                        <span>To personalize user experience </span>- We may use information in the aggregate to understand how our Users as a group use the services and resources provided on our Site.
                    </p>
                    <p class="text-justify">
                        <span>To improve our Site </span>- We may use feedback you provide to improve our services.
                    </p>
                    <p class="text-justify">
                        <span>To communicate with you </span>- We may use the email address to send User information and updates pertaining to their order. It may also be used to respond to their inquiries, questions, and/or other requests. If User decides to opt-in to our mailing list, they will receive emails that may include company news, updates, related product or service information, etc. If at any time the User would like to unsubscribe from receiving future emails, we include detailed unsubscribe instructions at the bottom of each email or User may contact us via our Site.
                    </p>
                    <h4>4. HOW WE PROTECT YOUR INFORMATION</h4>
                    <p class="text-justify">
                        We adopt appropriate data collection, storage and processing practices and security measures to protect against unauthorized access, alteration, disclosure or destruction of your personal information, username, password, transaction information and data stored on our Site.
                    </p>
                    <p class="text-justify">
                        Sensitive and private data exchange between the Site and its Users happens over a SSL secured communication channel and is encrypted and protected with digital signatures. 
                    </p>
                    <h4>5. SHARING YOUR PERSONAL INFORMATION</h4>
                    <p class="text-justify">
                        We may use third party service providers to help us operate our business and the Site or administer activities on our behalf. We may share your information with these third parties for those limited purposes provided that you have given us your permission. We may use service companies to perform services on our behalf for you, but all information we share with such companies shall be only for the limited purpose of providing you the services and cannot be used for their personal business. 
                    </p>
                    <h4>6. CHANGES TO THIS PRIVACY POLICY</h4>
                    <p class="text-justify">
                        Please note that <span><a href="{{ url('/') }}">www.actaintl.com</a></span> has the discretion to update this privacy policy at any time. We advise Users to frequently check this page for any changes to this section. For significant changes, the users will be notified. You acknowledge and agree that it is your responsibility to review this privacy policy periodically and become aware of modifications.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ~Home Menu Active~ -->
    <script>
    $(document).ready(function(){   
        $('nav ul li a.acta-home').addClass('active');
    });
    </script>


@endsection
