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
                                <li class="breadcrumb-item"><a href="{{ url('/blog/category/offshore-accounting')}}">Category</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Offshore Accounting</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                
            </div>
        </section>
    </main>
    <!-- End #main -->
@endsection



