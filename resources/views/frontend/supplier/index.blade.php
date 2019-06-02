@extends('frontend.master')

@section('content-head')

@endsection

@section('content-body')
<div class="col-xl-12 col-md-12 col-sm-12 order-xl-1">
    <div class="card bg-secondary shadow">
      <div class="card-header bg-white border-0">
        <div class="row align-items-center">
          <div class="col-8">
            <h3 class="mb-0">suppliers</h3>
          </div>
          <div class="col-4 text-right">
          <a href="{{ route('frontend.supplier.create')}}" class="btn btn-sm btn-primary">Add supplier</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
            <table id="supplier_table" class="table table-striped table-bordered second" style="width:100%">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Full Name</th>
                        <th>Company</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Postal Code</th>
                        <th>Address</th>
                        <th>Note</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($suppliers as $supplier)
                    <tr>
                        <td>{{ $supplier->code }}</td>
                        <td>{{ $supplier->firstname }} {{$supplier->lastname}}</td>
                        <td>{{ $supplier->company }}</td>
                        <td>{{ $supplier->phone }}</td>
                        <td>{{ $supplier->email }}</td>
                        <td>{{ $supplier->country }}</td>
                        <td>{{ $supplier->city }}</td>
                        <td>{{ $supplier->postalcode }}</td>
                        <td>{{ $supplier->address }}</td>
                        <td>{{ $supplier->note }}</td>
                        <td class="text-right">
                            <div class="dropdown">
                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="{{ route('frontend.supplier.edit',[$supplier->id])}}">Edit</a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#modal-notification">Delete</a>
                                </div>
                            </div>
                        </td>
                        <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                            <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                                <div class="modal-content bg-gradient-danger">
                                    
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    
                                    <div class="modal-body">
                                        <div class="py-3 text-center">
                                            <i class="ni ni-bell-55 ni-3x"></i>
                                            <h4 class="heading mt-4">You should read this!</h4>
                                            <p>when you delete your data, you will get a lost your data</p>
                                        </div>
                                    </div>
                                    
                                    <div class="modal-footer">
                                        <form action="{{ route('frontend.supplier.destroy',[$supplier->id])}}" method="POST">
                                            <input type="hidden" name="_method" value="Delete">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-white" value="Ok, Got it">
                                        </form>
                                        <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button> 
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('footer-scripts')
<script src="{{ asset('js/frontend/supplier/index.js')}}" type="text/javascript"></script>
@endpush