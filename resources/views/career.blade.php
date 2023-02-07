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
        <section id="career-page" class="career-mobile">
            <div class="row mobile-row aos-init aos-animate" data-aos="fade-up">
                <header class="career-header text-center">
                    <h3>we’re more than a workplace.<span class="sub-text-color">We’re a <br>family.</span></h3>
                    <p class="sub-para">Today is the opportunity to build the tomorrow you want! We provide the high performing culture and sustainable future. Together we strive to build empire of Acta International that shape employee centric approach and enrich the experiences. So, do the best work of your life and design your career with us.</p>
                    <div class="row contact-row">
                        <div class="text-center"><button type="submit" class="apply" title="Submit">View Openings</button></div>
                    </div>
                </header>
                
                <header class="career-header-second">
                    <h3 class="contact-first-color">Current <span class="sub-text-color">Openings</span></h3>
                </header>
                @foreach ($careers as $carrer)
                <div id="carrer-locations" class="contact-location aos-init aos-animate" data-aos="fade-up">
                    <div class="row">
                        <div class="col-md-12 px-4">
                            <div class="row contact-addess">
                                <div class="col-lg-10 col-sm-6 p-3">
                                    <h4 class="text-bold mb-3"><a href="{{ url('/career-view/'.$carrer->id) }}">{{ $carrer->job_title }}</a></h4>
                                    <div class="row">
                                        <div class="col-12 col-md-4 carrer-post"><a><img src="assets/images/geo.svg" height="15" style="color: #ff689b;"></a> {{ $carrer->job_location }}</div>
                                        <div class="col-12 col-md-4 carrer-post"><a><img src="assets/images/experience.svg" width="15" style="color: #ff689b;"></a> {{ $carrer->job_experience }}</div>
                                        <div class="col-12 col-md-4 carrer-post"><a><img src="assets/images/qualification.svg" width="15" style="color: #ff689b;"></a>  {{ $carrer->job_qualification }}</div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 p-3 d-flex align-items-center">
                                    <a href="{{ url('/career-view/'.$carrer->id) }}"><button type="button" class="apply" title="Apply">Apply</button></a>
                                </div>
                                
                            </div>
                            
                        </div>
                       
                    </div>
                </div>
                @endforeach
                <header class="career-header-second">
                    <div class="row">
                        <p class="sub-para text-center" style="font-size:26px">Your profile was not listed in the above Vacancies? No worry. You can share your resume here, Will get in touch with you if we have any openings near future. <br> <u>Upload your resume</u>.
</p>
                    </div>
                </header>
                @include('career-form', ['jobid' => ''])
                
            </div>
        </section>
        
        <section id="about-us" class="career-management p-0">
        </section>
    </main>
    <!-- End #main -->
@endsection

@section('foot-content')
<script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script>
@endsection

