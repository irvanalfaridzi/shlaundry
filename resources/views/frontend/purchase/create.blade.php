@extends('frontend.master')

@section('content-head')

@endsection

@section('content-body')
<div class="col-xl-12 col-md-12 col-sm-12 order-xl-1">
    <div class="card bg-secondary shadow">
      <div class="card-header bg-white border-0">
        <div class="row align-items-center">
          <div class="col-8">
            <h3 class="mb-0">Add Purchase</h3>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('frontend.purchase.store')}}" method="POST">
            {{csrf_field()}}
            <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-first-name">Date</label>
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                </div>
                                <input class="form-control datepicker" name="dates" placeholder="Select date" type="text" value="06/20/2019">
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <hr class="my-4">
            <h6 class="heading-small text-muted mb-4">Purchase / StockIn information</h6>
            <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-name">Product Name</label>
                            <select id="product" class="form-control form-control-alternative" name="product_id">
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Quantity</label>
                        <input type="number" name="stock" id="stock" class="form-control form-control-alternative" placeholder="Quantity">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-first-name">Supplier Name</label>
                            <select id="supplier" class="form-control form-control-alternative" name="supplier_id">
                                @foreach ($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}">{{ $supplier->company }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <h6 class="heading-small text-muted mb-4">Spesific Detail</h6>
            <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                        <label class="form-control-label" for="input-name">Note</label>
                        <textarea name="note" class="form-control form-control-alternative" id="input-description" rows="5"></textarea>
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
                    
                    <span class="btn-inner--text">Back</span>   
                </button>                        
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@push('footer-scripts')
<script src="{{ asset('js/frontend/functions/select2/supplier.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/frontend/functions/select2/product.js')}}" type="text/javascript"></script>
@endpush