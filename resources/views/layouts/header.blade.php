        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top d-flex align-items-center">
            <div id="head-container" class="container head-flex">
                <div class="logo">
                    <!-- Uncomment below if you prefer to use an text logo -->
                   
                    <a href="{{ url('/') }}" title="Acta"><img src="{{ url('assets/images/logo.png') }}" alt="Offshore Accounting Services for Accounting &amp; CPA Firms" title="Acta" class="img-fluid"></a>
                </div>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" title="Home" href="{{ url('/') }}">Home</a></li>
                        
                        <li class="dropdown">
                            <a href="#" title="Who we are"><span>Who we are </span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a title="About ACTA" href="{{ url('/about-us') }}">About ACTA</a></li>
                                <li><a title="Management Team" href="{{ url('/management-team') }}">Management Team</a></li>
                                <li><a title="Our Team" href="{{ url('/our-team') }}">Our Team</a></li>
                                <li><a title="Data Security and Confidentiality" href="{{ url('/data-security-confidentiality') }}">Data Security and Confidentiality</a></li>
                                <li class="d-none"><a title="Our Team" href="{{ url('/our-team') }}">Our Team</a></li>
                            </ul>
                        </li>
                        <li><a class="nav-link scrollto" href="{{ url('/services/USA/Accounting-Bookkeeping-services/') }}" title="Services">Services</a></li>
                        <li><a class="nav-link scrollto" href="{{ url('careers') }}" title="Careers">Careers</a></li>
                        <li><a class="nav-link scrollto" href="#team" title="Blogs">Blogs</a></li>
                        <li><a class="nav-link scrollto" href="{{ url('contact-us') }}" title="Contact Us">Contact Us</a></li>
                        <li class=""><a href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/karthick-s/talk-to-karthick-subramaniam?hide_gdpr_banner=1'});return false;" class="btn-free-trail" title="Get free trail">Get free trial</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle float-end"></i>
                </nav>
                <!-- .navbar -->
            </div>
        </header>
        <!-- #header -->