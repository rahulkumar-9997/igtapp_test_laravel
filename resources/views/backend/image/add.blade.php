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
                    <form class="row g-3" action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
                        <div class="col-md-6">
                            <label for="productHeadName" class="form-label">Upload a Image</label>
                            <input name="image_file" type="file" class="form-control" id="image_file">
                            @if($errors->has('image_file'))
							    <div class="text-danger">{{ $errors->first('image_file') }}</div>
							@endif
                        </div>
                        
                        @csrf
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary px-5">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            @if (isset($data['image_list']) && $data['image_list']->count() > 0)
            
            <div class="card">
                <div class="card-body">
                        <div class="table-responsive">
                        <table id="example" class="table mb-0" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $sr_no = 0 ?>
                                @foreach($data['image_list'] as $image_list_id)
                                <?php $sr_no++ ?>
                                    <tr>
                                        <td>{{ $sr_no }}</td>
                                        <td>
                                            <img src="{{ asset('Images-File/' . $image_list_id->image) }}" style="width: 50px;">
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
   </div>
</div>
@endsection
@push('styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
@endpush
@push('scripts')

@endpush

