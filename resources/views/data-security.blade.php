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
            
            <div class="about-extra">
                <header class="section-header">
                    <h3>Data <span class="sub-text-color">Security</span> and <span class="sub-text-color">Confidentiality</span></h3>
                </header>
                <div class="row justify-content-center">
                    <p class="sub-heading-header">We at ACTA understand the importance of maintaining the confidentiality and security of our client’s data. We have physical, administrative and technical safeguards in order to ensure data security and confidentiality.</p>

                    <p class="sub-heading-header">Our company complies with all GDPR requirements, and we have a very transparent and clear privacy policy. We are a certified GDPR compliant company.</p>

                    <p class="sub-heading-header-last">For the most standard Quality Measures for Information Security, we are also ISO 27001-2013 certified.</p>
           
                    <div class="col-md-6 col-lg-5 col-sm-12 aos-init aos-animate">
                        <img src="assets/images/Cyber-Security.png" class="img-fluid float-end-image security-image" alt="">
                    </div>
                    <div class="col-md-6 col-lg-5 col-sm-12 aos-init aos-animate">
                        <h3>Few of Our  <span class="sub-text-color">Safety Measures</span> </h3>
                        <ul class="list-group security-group">
                            <li class="list-group-item security-item">
                                <i class="bi bi-check"></i>
                                <span>Restriction on client data from being downloaded into the office server.</span>
                            </li>
                            <li class="list-group-item security-item">
                                <i class="bi bi-check"></i>
                                <span>No provision for data transfer devices like pen drives, hard disks, CDs, DVDs etc.,</span>
                            </li>
                            <li class="list-group-item security-item">
                                <i class="bi bi-check"></i>
                                <span>Biometric access into operations room</span>
                            </li>
                            <li class="list-group-item security-item">
                                <i class="bi bi-check"></i>
                                <span>Devices which may be a threat to security, like cell phones, cameras, tabs are not allowed inside the operations area.</span>
                            </li>
                            <li class="list-group-item security-item">
                                <i class="bi bi-check"></i>
                                <span>24×7 CCTV Surveillance</span>
                            </li>
                            <li class="list-group-item security-item">
                                <i class="bi bi-check"></i>
                                <span>Paperless environment</span>
                            </li>
                            <li class="list-group-item security-item">
                                <i class="bi bi-check"></i>
                                <span>Restricted Social Media and E-Commerce websites</span>
                            </li>
                            <li class="list-group-item security-item">
                                <i class="bi bi-check"></i>
                                <span>Personal email restrictions</span>
                            </li>
                            <li class="list-group-item security-item">
                                <i class="bi bi-check"></i>
                                <span>Strong firewall with 256-bit SSL encryption.</span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            
        </section>
       
    </main>
    <!-- End #main -->
@endsection



