<!doctype html>
<html lang="en">
@include('backend.layouts.head')
<body>
    <!--wrapper-->
    <div class="wrapper">
	<!--sidebar wrapper -->
	@include('backend.layouts.sidebar')
	<!--end sidebar wrapper -->
	<!--start header -->
	@include('backend.layouts.header')
	<!--end header -->
	<!--start page wrapper -->
	    <div class="page-wrapper">
		<div class="page-content">
		    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
			
			
			
			
		    </div><!--end row-->
		    
		</div>
	    @include('backend.layouts.footer')
	</div>
	<!--end wrapper-->

	<!-- Bootstrap JS -->
	@include('backend.layouts.footer-js')
    </body>
</html>