@extends('admin.layouts.header')
@section('title','Dashboard Page')
@section('main-content')

<div id="layoutSidenav">
	<div id="layoutSidenav_content">
		<main>
			<div class="container-fluid px-4 d-none">
				<h1 class="mt-4">Dashboard</h1>
				<div class="row">
					<div class="col-lg-3  col-sm-6 col-12 my-1">
						<div class="d-flex justify-content-between align-items-center box-dash">
							<div class="">
								<h3>5</h3>
								<a href="" class="mb-0">CONTACT-US</a>
							</div>
							<div class="">
								<a href="">
									<i class="fa-regular fa-address-card" id="icons">
									</i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3  col-sm-6 col-12 my-1">
						<div class="d-flex justify-content-between align-items-center box-dash">
							<div class="">
								<h3>5</h3>
								<a href="" class="mb-0">CAREER</a>
							</div>
							<div class="">
								<a href="">
									<i class="fa-solid fa-briefcase" id="icons"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3  col-sm-6 col-12 my-1">
						<div class="d-flex justify-content-between align-items-center box-dash">
							<div class="">
								<h3>{{ $countBlog }}</h3>
								<a href="{{ url('/view-blog') }}" class="mb-0">BLOGS</a>
							</div>
							<div class="">
								<a href="{{ url('/view-blog') }}">
									<i class="fa-brands fa-blogger" id="icons"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3  col-sm-6 col-12 my-1">
						<div class="d-flex justify-content-between align-items-center box-dash">
								
							<div class="">
								<h3>{{ $pages }}</h3>
								<a href="{{ url('/view-page-list') }}" class="mb-0"> PAGES</a>
							</div>
							<div class="">
								<a href="{{ url('/view-page-list') }}">
									<i class="fa-regular fa-file" id="icons"></i>
								</a>
							</div>
								
						</div>
						
					</div>
				</div>
			</div>
		</main>
	</div>
</div>


@endsection