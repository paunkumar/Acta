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
				$('#banner_scroll').owlCarousel({
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
		</script>
		@section('foot-content')
				@show
	</body>
</html>