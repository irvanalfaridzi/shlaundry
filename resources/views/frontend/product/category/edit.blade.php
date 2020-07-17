@extends('frontend.master')

@section('content-head')

@endsection

@section('content-body')
<div class="col-xl-12 col-md-12 col-sm-12 order-xl-1">
    <div class="card bg-secondary shadow">
      <div class="card-header bg-white border-0">
        <div class="row align-items-center">
          <div class="col-8">
            <h3 class="mb-0">Add Jenis Kostum</h3>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('frontend.product-categories.update','update')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            {{ method_field('PUT')}} 
            <div class="pl-lg-4">
                <div class="row">
                    <div class="form-group">
                            <label class="form-control-label" for="file-gambar">File Gambar</label>
                            <input name="file" type="file" id="file-gambar" class="form-control form-control-alternative" placeholder="File Gambar">
					    </div>
                </div>
            </div>  
            <hr class="my-4">
            <h6 class="heading-small text-muted mb-4">Item information</h6>
            <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label class="form-control-label" for="input-name">Name</label>
                        <input name="name" type="text" id="input-name" class="form-control form-control-alternative" placeholder="Item name" value="{{ $productCategory->name }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Price</label>
                        <input type="number" name="price" id="price" class="form-control form-control-alternative" placeholder="Price" value="{{ $productCategory->price }}">
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-4" />
            <div class="col-12 text-right">
                <button class="btn btn-icon btn-3 btn-success">
                    <span class="btn-inner--icon"><i class="ni ni-single-copy-04"></i></span>
                    
                    <span class="btn-inner--text">Save</span>   
                </button>  
                <button class="btn btn-icon btn-3 btn-secondary" type="button">
                    <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
                    
                    <a href="{{ route('frontend.product.index')}}"><span class="btn-inner--text">Back</span></a>   
                </button>                        
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@push('footer-scripts')
<script src="{{ asset('js/frontend/functions/select2/category.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/frontend/functions/select2/unit.js')}}" type="text/javascript"></script>
@endpush