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
        <section id="about-security">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-header">
                            <h3>Data <span class="sub-text-color">Security</span> and <span class="sub-text-color">Confidentiality</span></h3>
                        </div>
                    </div>
                </div>
                <!--second roww-->
                <div class="row mb-5">
                    <div class="col-lg-11 mx-auto">
                        <div class="data_security">
                            <p class="cmbdata_security">We at ACTA understand the importance of maintaining the confidentiality and security of our client’s data. We have physical, administrative and technical safeguards in order to ensure data security and confidentiality.</p>

                            <p>Our company complies with all GDPR requirements, and we have a very transparent and clear privacy policy. We are a certified GDPR compliant company.</p>

                            <p>For the most standard Quality Measures for Information Security, we are also ISO 27001-2013 certified.</p>
                        </div>
                    </div>
                </div>
                <!--end-->
                <!--third row-->
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <div class="data_securitys">
                            <div class="row">
                                <div class="col-lg-6 col-md-5">
                                    <div class="data-security-image">
                                        <img src="assets/images/Cyber-Security.png" class="img-fluid " alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7">
                                    <div class="my-3">
                                        <div class="sub-heading">
                                            <h3>Few of Our  <span class="sub-text-color">Safety Measures</span> </h3>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>Restriction on client data from being downloaded into the office server.</li>
                                        <li>No provision for data transfer devices like pen drives, hard disks, CDs, DVDs etc.,</li>
                                        <li>Biometric access into operations room</li>
                                        <li>Devices which may be a threat to security, like cell phones, cameras, tabs are not allowed inside the operations area.</li>
                                        <li>24×7 CCTV Surveillance</li>
                                        <li>Paperless environment</li>
                                        <li>Restricted Social Media and E-Commerce websites</li>
                                        <li>Personal email restrictions</li>
                                        <li>Strong firewall with 256-bit SSL encryption.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end-->
            </div>
        </section>       
    </main>
    <!-- End #main -->
@endsection



