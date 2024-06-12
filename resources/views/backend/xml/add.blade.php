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
                    <form class="row g-3" action="{{ route('xml.store') }}" method="post" enctype="multipart/form-data">
                        <div class="col-md-6">
                            <label for="productHeadName" class="form-label">Upload Xml File</label>
                            <input name="xml_file" type="file" class="form-control" id="xml_file">
                            
                        </div>
                        
                        @csrf
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary px-5">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            @if (isset($data['xml_file_list']) && $data['xml_file_list'])
            
            <div class="card">
                <div class="card-body">
                        <div class="table-responsive">
                        @foreach( $data['xml_file_list'] as $key => $faculty)
                            @dd($faculty);
                        @endforeach
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

