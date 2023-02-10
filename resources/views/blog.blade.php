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
                                <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
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
                        <a href="{{ url('blog/offshore-accounting')}}">
                            <img src="{{ url('assets/images/blog/blog-1.png') }}" alt="" width="100%" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-lg-5 col-md-7">
                        <div class="blog_text_wrap">
                            <div class="blog-tagline">
                                <h3><span>Latest News</span> - Nov 04, 2022</h3>
                                <div><small> Min Read</small></div>
                            </div>
                            <a href="{{ url('blog/offshore-accounting')}}">
                            <h4>eAuditor Office leaders recognised as two of India's top 10 virtual CFOs by CEO Insights</h4>
                            </a>
                            <p>Accounting firms and CFOs are sometimes out of reach for small enterprises because of their restricted budgets and lack of resources. As important as accounting and paperwork are to your company's success, one should ...</p>

                            <small>By CEO Insights</small>
                        </div>
                    </div>
                </div>
                <hr class="tagline_hr">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row mb-5">
                            @foreach($blogs as $blog)
                            <div class="col-lg-6 col-sm-6 mb-4">
                                <div class="each_blog_wrap">
                                    <a class="w-100" href="{{ url('blog/offshore-accounting')}}">
                                        <img src="{{ url('assets/images/blog/blog-2.png') }}" alt="blog" width="100%" class="img-fluid">
                                    </a>
                                    <div class="each_blog_textwrap">
                                        <h3>A Complete Guide on Coir Udyami Yojana 2022</h3>
                                        <div class="blog-author-info">
                                            <div><h5>By Sathish Ramalingam <span>Auditor</span></h5></div>
                                            <div><h5>5 Min Read <span>Nov 2022</span></h5></div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            @endforeach
                            
                        </div>
                        <div class="row">
                    <div class="col-lg-12">
                        <div class="shared_blog">
                            <h3>Shared Blog</h3>
                            <ul>
                                <li> <a href="" target="_blank"><img src="{{ url('assets/images/blog/linkedin.svg') }}" alt=""></a></li>
                                <li> <a href="" target="_blank"><img src="{{ url('assets/images/blog/fb.svg') }}" alt=""></a></li>
                                <li> <a href="" target="_blank"><img src="{{ url('assets/images/blog/twitter.svg') }}" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row my-4">
                   
                            <div class="col-lg-6 mx-auto">
                                <div class="blog-pagination ">
                                    <ul class="custom-pagination">
                                        <li class="page-item"><a class="page-link"><img src="{{ url('assets/images/blog/previous.svg') }}" alt=""></a></li>
                                        <li class="page-item"><a class="page-link active">1</a></li>
                                        <li class="page-item"><a class="page-link">2</a></li>
                                        <li class="page-item"><a class="page-link">3</a></li>
                                        <li class="page-item"><a class="page-link">4</a></li>
                                        <li class="page-item"><a class="page-link"><img src="{{ url('assets/images/blog/next.svg') }}" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                      
                        <!-- <nav aria-label="Page navigation example">
                        @if ($blogs->hasPages())
                            <div class="pagination justify-content-center">
                                {{ $blogs->links() }}
                            </div>
                        @endif -->
                            <!-- <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1"><i class="bi bi-chevron-left"></i></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a>
                                </li>
                            </ul> -->
                        
                    
                </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="related_articles">
                            <h3>Recent Articles</h3>
                            @foreach($recentblog as $key => $blognew)
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6 col-5">
                                    <div>
                                        <a class="w-100" href="{{ url('blog/offshore-accounting')}}">
                                            <img src="{{ url('assets/images/blog/related-article-1.png') }}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-6 col-sm-6 col-7">
                                    <p>North East Entrepreneurship Development Program (NEEDP): Overview, Benefits, Eligibility <span>Jan 2023</span></p>
                                </div>
                            </div>
                            @if($key!=2)
                            <hr>
                            @endif
                            @endforeach
                            
                            <div class="my-5">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3>Download your quote</h3>
                                        <div class="request_quote">
                                            <div class="row">
                                                <div class="col-lg-12 mb-4">
                                                    <label for="">Choose the service <span class="required">*</span></label>
                                                    <div class="search_icons">
                                                        <input type="search" class="form-control" placeholder="Select the service">
                                                        <div class="search_icon_pos">
                                                            <i class="bi bi-search"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-4">
                                                    <label for="">Fullname <span class="required">*</span></label>
                                                    <input type="text" class="form-control" placeholder="Enter Fullname">
                                                </div>
                                                <div class="col-md-12 mb-4">
                                                    <label for="">Mobile Number<span class="required">*</span></label>
                                                    <input type="text" class="form-control" placeholder="Enter Your Mobile Number">
                                                </div>
                                                <div class="col-md-12 mb-4">
                                                    <label for="">Email ID<span class="required">*</span></label>
                                                    <input type="text" class="form-control" placeholder="Enter Your Email ID">
                                                </div>
                                                <div class="col-lg-12 mb-3">
                                                    <a  class="download_quote">Download Quote</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-5">
                                <h4>Categories</h4>
                                <ul>
                                    @foreach($categories as $key => $category)
                                        <li><a href="{{ url('blog/category/offshore-staffing')}}">{{$category}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>                        
                    </div>
                </div>
                
            </div>
        </section>
    </main>
    <!-- End #main -->
@endsection



