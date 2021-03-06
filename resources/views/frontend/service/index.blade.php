@extends('frontend.master')

@section('content-head')

@endsection

@section('content-body')
<div class="row">
    <div class="col-xl-8 col-md-8 col-sm-8 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">
                <h3 class="mb-0">Service</h3>
                </div>
                <div class="col-4 text-right">
                <a href="{{ route('frontend.service.create')}}" class="btn btn-sm btn-primary">Add Service</a>
                </div>
            </div>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table id="service_table" class="table table-striped table-bordered second" style="width:100%">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                        <tr>
                            <td>{{$service->code}}</td>
                            <td>{{$service->name}}</td>
                            <td>
                                @if(isset($service->category->name))
                                    {{$service->category->name}}
                                @else
                                -
                                @endif
                            </td>
                            <td>Rp. {{ number_format($service->price,2,",",".") }}</td>
                            <td>{{$service->description}}</td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="{{ route('frontend.service.edit',[$service->id])}}">Edit</a>
                                        <a class="dropdown-item" data-toggle="modal" data-id="{{$service->id}}" data-target="#modalDelete-service">Delete</a>
                                    </div>
                                </div>
                            </td>
                            <div class="modal fade" id="modalDelete-service" tabindex="-1" role="dialog" aria-labelledby="modalDelete-service" aria-hidden="true">
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
                                            <form action="{{ route('frontend.service.destroy','delete')}}" method="POST">
                                                <input type="hidden" name="_method" value="Delete">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="hidden" name="id" id="id">
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

    <div class="col-xl-4 col-md-4 col-sm-4 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">
                <h3 class="mb-0">Category</h3>
                </div>
            </div>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered second" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('footer-scripts')
<script src="{{ asset('js/frontend/service/index.js')}}" type="text/javascript"></script>
@endpush