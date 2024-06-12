<!-- Bootstrap JS -->
<script src="{{ asset('js/app.js') }}"></script>
<script> $.noConflict(); /script>
<script src="{{asset('backend/js/bootstrap.bundle.min.js')}}"></script>
<!--plugins-->
<script src="{{asset('backend/js/jquery.min.js')}}"></script>
<script src="{{asset('backend/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{asset('backend/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{asset('backend/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<script src="{{asset('backend/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('backend/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('backend/plugins/chartjs/js/Chart.min.js')}}"></script>
<script src="{{asset('backend/plugins/chartjs/js/Chart.extension.js')}}"></script>
<script src="{{asset('backend/js/index.js')}}"></script>
<!--app JS-->
<script src="{{asset('backend/plugins/notifications/js/notifications.min.js')}}"></script>
<script src="{{asset('backend/plugins/notifications/js/notification-custom-script.js')}}"></script>
<script src="{{asset('backend/js/app.js')}}" defer></script>
<!--<script src="{{asset('backend/js/common.js')}}"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<script>
    $(document).ready(function() {
	//toastr.options.timeOut = 10000;
	//error_noti('hello');
	@if(session()->has('error'))
	    error_noti('{{ session()->get('error') }}');
	@elseif(session()->has('success'))
	    success_noti('{{ session()->get('success') }}');
	@endif
    });

</script>
@stack('scripts')
