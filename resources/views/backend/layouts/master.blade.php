<!DOCTYPE html>
<html lang="en">
    @include('backend.layouts.head')
    <body>
        <!-- leftbar-tab-menu -->
        @include('backend.layouts.sidebar')
        <!-- end left-sidenav-->
        <!-- end leftbar-menu-->

        <!-- Top Bar Start -->
        <!-- Top Bar Start -->
        @include('backend.layouts.header')
        <!-- Top Bar End -->
        <!-- Top Bar End -->
	<!-- Page Content-->
	@yield('main-content')
	    <!-- Footer Start -->
	@include('backend.layouts.footer')
	<!-- end Footer -->                
	<!-- end page content -->
        <!-- end page-wrapper -->
	 @include('backend.layouts.footer-js')
    </body>
</html>