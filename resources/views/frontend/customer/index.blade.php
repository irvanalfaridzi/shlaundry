@extends('frontend.master')

@section('content-head')

@endsection

@section('content-body')
<div class="col-xl-12 col-md-12 col-sm-12 order-xl-1">
    <div class="card bg-secondary shadow">
      <div class="card-header bg-white border-0">
        <div class="row align-items-center">
          <div class="col-8">
            <h3 class="mb-0">Customers</h3>
          </div>
          <div class="col-4 text-right">
            <a href="{{ route('frontend.customer.create')}}" class="btn btn-sm btn-primary">Add Customer</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
            <table id="customer_table" class="table table-striped table-bordered second" style="width:100%">
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Gender</th>
                        <th>Phone Number</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Postal Code</th>
                        <th>Address</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ibnu Pratama Adi Saputra</td>
                        <td>Man</td>
                        <td>08123231232</td>
                        <td>Indonesia</td>
                        <td>Surabaya</td>
                        <td>61232</td>
                        <td>Jl. Kedung Klinter 7/20</td>
                        <td class="text-right">
                            <div class="dropdown">
                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#modal-notification">Delete</a>
                                </div>
                            </div>
                        </td>
                        @component('frontend.common.modal.modal-delete')
                          @slot('action', '{{route("customer.destroy","4")}}')
                        @endcomponent 
                    </tr>
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('footer-scripts')
<script src="{{ asset('js/frontend/customer/index.js')}}" type="text/javascript"></script>
@endpush