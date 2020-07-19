@extends('frontend.master')

@section('content-head')

@endsection

@section('content-body')
<div class="row mt-5">
    <div class="col-xl-12 col-md-12 col-sm-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Jenis Kostum</h3>
                    </div>
                    <div class="text-right col-4">
                        <a href="{{ route('frontend.product-categories.create')}}" class="btn btn-sm btn-primary">Add Jenis</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="categories_table" class="table table-striped table-bordered second" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>price</th>
                                <th>stock</th>
                                <th>file</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productCategories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>Rp. {{ number_format($category->price,2,",",".") }}</td>
                                <td>{{ $category->stock }}</td>
                                <td><img width="150px" src="{{ asset('data_file/'.$category->file) }}" alt=""></td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="{{ route('frontend.product-categories.edit',[$category->id])}}">Edit</a>
                                            <input type="hidden" name="id" id="id" value="{{ $category->id}}"> 
                                            <a class="dropdown-item" data-toggle="modal" data-id="{{$category->id}}" data-target="#modalDelete-category">Delete</a>
                                        </div>
                                    </div>
                                </td>
                                <div class="modal fade" id="modalDelete-category" tabindex="-1" role="dialog" aria-labelledby="modalDelete-category" aria-hidden="true">
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
                                                <form action="{{ route('frontend.product-categories.destroy','delete')}}" method="POST">
                                                    <input type="hidden" name="_method" value="Delete">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="hidden" name="id" id="id" value="{{ $category->id}}">
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
</div>
<div class="row mt-5">
    <div class="col-xl-12 col-md-12 col-sm-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Kostum</h3>
                    </div>
                    <div class="text-right col-4">
                        <a data-toggle="modal" data-target="#modalCreate-product" class="btn btn-sm btn-primary text-white">Add Kostum</a>
                        @include('frontend.product.modal-create')
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="products_table" class="table table-striped table-bordered second" style="width:100%">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <th>{{ $product->id }}</th>
                                <td>{{ $product->name }}</td>
                                <td>
                                    @if(isset($product->category->name))
                                        {{ $product->category->name }}
                                    @else
                                    -
                                    @endif
                                </td>
                                <td>{{ $product->status}}</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" data-toggle="modal" data-id="{{$product->id}}" data-name="{{$product->name}}" data-target="#modalEdit-product">Edit</a>
                                            <a class="dropdown-item" data-toggle="modal" data-id="{{$product->id}}" data-target="#modalDelete-product">Delete</a>
                                            <input type="hidden" name="id" id="id" value="{{$product->id}}">
                                        </div>
                                        @include('frontend.product.modal-edit')
                                    </div>
                                </td>
                                <div class="modal fade" id="modalDelete-product" tabindex="-1" role="dialog" aria-labelledby="modalDelete-product" aria-hidden="true">
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
                                                <form action="{{ route('frontend.product.destroy',[$product->id])}}" method="POST">
                                                    <input type="hidden" name="id" id="id" value="{{$product->id}}">
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
</div>
@endsection

@push('footer-scripts')
<script src="{{ asset('js/frontend/product/index.js')}}" type="text/javascript"></script>
@endpush