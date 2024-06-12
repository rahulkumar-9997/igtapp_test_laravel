@extends('backend.layouts.master')

@section('main-content')
<div class="page-wrapper">
   <div class="page-content">
      <!--breadcrumb-->
      
      <!--end breadcrumb-->
      <div class="row">
        <div class="col-12">
            
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul></ul>
                    </div>
                    <form class="row g-3" enctype="multipart/form-data">
                        <div class="col-md-6">
                            <label for="productHeadName" class="form-label">Employee Name</label>
                            <input name="employee_name" type="text" class="form-control" id="employee_name">
                            
                        </div>
                        <div class="col-md-6">
                            <label for="productName" class="form-label">Employee Father Name</label>
                            <input  name="employee_father_name" type="text" class="form-control" id="employee_father_name">
                            
                        </div>
                        <div class="col-md-6">
                            <label for="productPrice" class="form-label">Employee Mother Name</label>
                            <input type="text"  name="employee_mother_name" class="form-control" id="employee_mother_name">
                            
                        </div>
                        <div class="col-md-6">
                            <label for="productUnit" class="form-label">Employee Address</label>
                            <input type="text"  name="employee_address" class="form-control" id="employee_address">
                            
                        </div>
                        @csrf
                        <div class="col-12">
                            <button class="btn btn-primary px-5 btn-submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
      
   </div>
</div>
@endsection
@push('styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
@endpush
@push('scripts')
<script type="text/javascript">
      
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  
    $(".btn-submit").click(function(e){
        e.preventDefault();
        var name = $("#employee_name").val();
        var father = $("#employee_father_name").val();
        var mother = $("#employee_mother_name").val();
        var address = $("#employee_address").val();
     
        $.ajax({
           type:'POST',
           url:"{{ route('employee.store') }}",
           data:{name:name, father:father, mother:mother, address:address},
           success:function(data){
                if($.isEmptyObject(data.error)){
                    $("form").trigger("reset");
                    alert(data.success);
                   
                }else{
                    printErrorMsg(data.error);
                }
           }
        });
    });
  
    function printErrorMsg (msg) {
        $(".print-error-msg").find("ul").html('');
        $(".print-error-msg").css('display','block');
        $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
        });
    }
  
</script>
@endpush

