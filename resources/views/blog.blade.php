@extends('layouts.web')
@section('meta_tags')
@endsection
@section("title","Title")
@section('main-content')
    <main id="main">
        <section class="blog_wrapp">
            <div class="container-md">
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog_head_inline">
                            <div><h3>Blog</h3></div>
                            <div class="search_icon">
                                <input type="search" name="" id="" class="form-control" placeholder="Type some keywords to search for blogs">
                                <div class="search_pos">
                                    <i class="bi bi-search"></i>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-md-5 abt_mb">
                        <img src="assets/images/blog/blog-1.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-5 col-md-7">
                        <div class="blog_text_wrap">
                            <div class="blog-tagline">
                                <h3><span>Latest News</span> - Nov 04, 2022</h3>
                                <div><small> Min Read</small></div>
                            </div>
                            <h4>eAuditor Office leaders recognised as two of India's top 10 virtual CFOs by CEO Insights</h4>

                            <p>Accounting firms and CFOs are sometimes out of reach for small enterprises because of their restricted budgets and lack of resources. As important as accounting and paperwork are to your company's success, one should ...</p>

                            <small>By CEO Insights</small>
                        </div>
                    </div>
                </div>
                <hr class="tagline_hr">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->
@endsection



