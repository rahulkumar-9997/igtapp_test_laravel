<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
	<div>
	    <img src="{{asset('backend/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
	</div>
	<div>
	    <h4 class="logo-text">Rocker</h4>
	</div>
	<div class="toggle-icon ms-auto">
	    <i class='bx bx-arrow-to-left'></i>
	</div>
    </div>
  <!--navigation-->
  <ul class="metismenu" id="menu">
    <li>
		<a href="#">
			<div class="parent-icon">
			<i class='bx bx-home-circle'></i>
			</div>
			<div class="menu-title">Dashboard</div>
		</a>
    </li>
	<li>
		<a href="{{route('employee.index')}}">
			
			<div class="menu-title">Add Employee</div>
		</a>
    </li>
	<li>
		<a href="{{route('xml.create')}}">
			
			<div class="menu-title">Upload Xmp File</div>
		</a>
    </li>
	<li>
		<a href="{{route('image.create')}}">
			
			<div class="menu-title">Upload Image</div>
		</a>
    </li>
    
    
  </ul>
  <!--end navigation-->
</div>