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
        <section id="about" class="about-mobile">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <header class="carerr-view-header">
                    <h3>{{ $career->job_title }}</h3>
                    <p class="sub-para">{{ $career->job_location }}</p>
                </header>
            </div>
        </section>
        <section id="career-view-page" class="career-view-mobile">
            <div class="row mobile-row aos-init aos-animate" data-aos="fade-up">
                
                <header class="career-header-second">
                    <div class="row">
                        <p class="sub-para mx-2" style="font-size:26px"> {!! $career->job_description !!}
                        </p>
                    </div>
                </header>
                @include('career-form', ['jobid' => $career->id])

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

