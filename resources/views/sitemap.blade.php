@extends('layouts.web')
@section('meta_tags')
<title>Sitemap</title>
    <meta name="description" content="Sitemap">
	<meta name="keywords" content="Sitemap">
	<meta name="author" content="ACTA">

@endsection
@section("title","Title")
@section('main-content')
    <main id="main">
        <section id="about-us-one" class="carrer-management">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <header class="section-header">
                    <h3 class="fw-bold">Pages</h3>
                </header>
            </div>
            <div class="container d-flex ">
                <ul class="mx-auto">
                    @foreach ($pages as $page)
                        <li><a target="_blank" href="{{ $page['url'] }}">{{ $page['title'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            
            
           
        </section>
        
        <section id="about-us-one" class="carrer-management p-0">
        </section>
    </main>
    <!-- End #main -->
@endsection



