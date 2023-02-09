<!DOCTYPE html>
<html lang="en">
	<head>
    @include('layouts.head')
		
		@section('head-content')
			@show
		
	</head>
	<body>
    @include('layouts.header')

    @section('main-content')
				@show
		
    @include('layouts.footer')

		<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
		<!-- Vendor JS Files -->
		<script src="{{ url('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
		<!-- <script src="assets/vendor/aos/aos.js"></script> -->
		<script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ url('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
		<script src="{{ url('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
		<script src="{{ url('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
		
		<!-- Template Main JS File -->
		<script src="{{ url('assets/js/jquery.js') }}"></script>
		<script src="{{ url('assets/js/main.js') }}"></script>
		<script src="{{ url('assets/js/owl-carousel.js') }}"></script>
		<script>
			$(document).ready(function(){
				$('.owl-carousel').owlCarousel({
					loop:true,
					nav:false,
					dots:false,
					items:1,
					autoplay:true,
    				smartSpeed:25,
					mouseDrag:false,
					pullDrag:false,
					paginationSpeed: 200,
    				animateIn: 'animate__slideInUp',
					});
				});
				$('#blog_prev_next').owlCarousel({
					loop:true,
					margin:10,
					nav:true,
					navText:['<span><i class="bi bi-chevron-left"></i> Previous Post</span>', '<span>Next Post <i class="bi bi-chevron-right"></i></span>'],
					items:2,
					dots:false,
					animateIn: 'slideInLeft',
					animateOut: 'slideInLeft',
					responsive:{
						0:{
							items:1
						},
						1024:{
							items:2
						}
					}
					
             })	

		</script>
		@section('foot-content')
				@show
	</body>
</html>