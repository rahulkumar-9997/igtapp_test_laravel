@extends('backend.layouts.master')

@section('main-content')
<div class="page-wrapper">
   <div class="page-content">
      <!--breadcrumb-->
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
         <div class="breadcrumb-title pe-3">Manage Employee</div>
         <div class="ps-3">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Employee
                    </li>
               </ol>
            </nav>
         </div>
      </div>
      <!--end breadcrumb-->
      <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-xl-4">
                            <a href="{{route('employee.create')}}" class="btn btn-primary mb-3 mb-lg-0">
                                <i class="bx bxs-plus-square"></i>
                                Add New Employee
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-body">
                    @if (isset($data['product_list']) && $data['product_list']->count() > 0)
                        <div class="table-responsive">
                            <table id="example" class="table mb-0" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Product Image</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Unit</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $sr_no = 1 ?>
                                @foreach($data['product_list'] as $products)
                                    <?php $sr_no++ ?>
                                    <tr>
                                        <th scope="row">{{ $sr_no }}</th>
                                        <td>{{ $products->product_name }}</td>
                                        <td><img src="{{ asset('images/productImage/' . $products->product_image) }}" style="width: 50px;" alt="job image" title="job image"></td>
                                        <td>{{ $products->product_price }}</td>
                                        <td>{{ $products->product_unit }}</td>
                                        <td>
                                            <div class="d-flex order-actions">
                                                <a href="<?php echo url('/'); ?>/admin/product-dummy/{{ $products->id }}/edit" class=""><i class="bx bxs-edit"></i></a>
                                                <!--<a href="<?php echo url('/'); ?>/admin/product-dummy/{{ $products->id }}/destroy" class="ms-3"><i class="bx bxs-trash"></i></a>
                                                <a href="#" class="ms-3 show_confirm"><i class="bx bxs-trash"></i></a>-->
                                                <form method="POST" action="{{ route('product-dummy.destroy', $products->id) }}" style="margin-left: 10px;">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <a href="#" title="Delete" class="show_confirm">
                                                        <i class="bx bxs-trash"></i>
                                                    </a>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
   </div>
</div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{asset('backend/plugins/Drag-And-Drop/dist/imageuploadify.min.css')}}">
    <link href="{{asset('backend/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/plugins/select2/css/select2-bootstrap4.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
    
    @endpush
@push('scripts')
<script src="{{asset('backend/plugins/Drag-And-Drop/dist/imageuploadify.min.js')}}"></script>
<script src="{{asset('backend/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
        } );
</script>
<script>
    $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
</script>
@endpush

