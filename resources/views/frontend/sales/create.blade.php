@extends('frontend.master')

@section('content-head')

@endsection

@section('content-body')
<div class="row">
  <div class="col-xl-4 col-md-4 col-sm-4 order-xl-1">
    <div class="card bg-secondary shadow">
      <div class="card-header bg-white border-0">
        <div class="row align-items-center">
          <div class="col-12">
            <h1>Information</h1>
            <h5 class="mb-0">Cashier : <span>{{ ucfirst(Auth::user()->employee->firstname) }}</span></h5>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12">
              <div class="form-group">
                  <label class="form-control-label" for="input-first-name">Customer</label>
                  <select id="customer" class="form-control form-control-alternative" name="customer_id">
                      @foreach ($customers as $customer)
                          <option value="{{$customer->id}}">{{$customer->firstname}} {{$customer->lastname}}</option>
                      @endforeach
                  </select>
              </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-12">
              <div class="form-group">
                  <label class="form-control-label" for="input-first-name">Item</label>
                  <div class="input-group">
                    <input id="item_code" name="item_code" type="text" class="form-control" disabled>
                    <input id="item_name" name="item_name" type="hidden">
                    <input id="item_category" name="item_category" type="hidden">
                    <input id="price" name="price" type="hidden">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-item"><i class="fas fa-fw fa-search"></i></button>
                    </div>
                  </div>
              </div>
              <div class="modal fade" id="modal-item" tabindex="-1" role="dialog" aria-labelledby="modal-item" aria-hidden="true">
                  <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
                      <div class="modal-content">
                        
                          <div class="modal-header">
                              <h3>Select Item</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                              </button>
                          </div>
                          
                          <div class="modal-body">
                              <div class="table-responsive">
                                  <table id="products_table" class="table table-striped table-bordered second" style="width:100%">
                                      <thead>
                                          <tr>
                                              <th>#</th>
                                              <th>Code</th>
                                              <th>Name</th>
                                              <th>Category</th>
                                              <th>Price</th>
                                              <th></th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($products as $item)
                                          <tr>
                                              <td>{{$i++}}</td>
                                              <td>{{ $item->code}}</td>
                                              <td>{{ $item->name}}</td>
                                              <td>{{ $item->category->name}}</td>
                                              <td>{{ $item->price}}</td>
                                              <td>
                                                  <button type="submit" data-dismiss="modal" class="btn-select btn btn-sm text-dark btn-info"><i class="fas fa-fw fa-plus"></i></button>
                                              </td>
                                          </tr> 
                                          @endforeach
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
              <div class="form-group">
                  <label class="form-control-label" for="input-first-name">Qty</label>
                  <input type="number" name="qty" id="qty" class="form-control form-control-alternative" value="0">
                  <input type="text" id="hidden" hidden>
              </div>
          </div>
          <div class="col-6">
              <div class="form-group">
                  <label class="form-control-label" for="input-first-name">Discount Item</label>
                  <input type="number" name="discount-item" id="discount-item" class="form-control form-control-alternative" value="0">
              </div>
          </div>
        </div>
        <button onclick="addHtmlTableRow()" class="btn btn-primary btn-md btn-block">Add Item</button>
      </div>
    </div>
    <div class="card bg-secondary shadow mt-2">
      <div class="card-header bg-white border-0">
        <div class="row align-items-center">
          <div class="col-12">
            <h1>Note</h1>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
            <textarea class="form-control" rows="5" id="note" name="note"></textarea>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-8 col-md-8 col-sm-8 order-xl-1">
    <div class="card bg-secondary shadow">
      <div class="card-header bg-white border-0">
        <div class="row align-items-center">
          <div class="col-8">
            <h1>Invoice <span>PJ000012300</span></h1>
            <h5 class="mb-0">Grand Total <b> Rp. 50.000,00-</b></h5>
          </div>
          <div class="col-4">
            <button type="button" class="btn btn-success btn-md btn-block">Submit</button>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
            <table id="product_table" class="table table-striped table-bordered second" style="width:100%">
                {{-- <thead> --}}
                    <tr>
                        <th>#</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Subtotal</th>
                        <th></th>
                    </tr>
                {{-- </thead> --}}
                {{-- <tbody> --}}
                    {{-- <tr>
                        <td class="text-right">
                            <div class="dropdown">
                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="">Edit</a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#modal-product">Delete</a>
                                </div>
                            </div>
                        </td>
                        <div class="modal fade" id="modal-product" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
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
                                        <form action="" method="POST">
                                            <input type="hidden" name="_method" value="Delete">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-white" value="Ok, Got it">
                                        </form>
                                        <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button> 
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </tr>  --}}
                {{-- </tbody> --}}
            </table>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <div class="card bg-secondary shadow mt-2">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-12">
                  <h3 class="mb-0">Total Price</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                  <label class="form-control-label" for="input-first-name">SubTotal</label>
                  <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Rp</span>
                    </div>
                    <input class="form-control pl-2" value="0" type="number" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="input-first-name">Discount</label>
                  <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Rp</span>
                    </div>
                    <input class="form-control pl-2" value="0" type="number">
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="input-first-name">Grand Total</label>
                  <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Rp</span>
                    </div>
                    <input class="form-control pl-2" value="0" type="number" disabled>
                  </div>
                </div>
            </div>
        </div>
      </div>
      <div class="col-6">
          <div class="card bg-secondary shadow mt-2">
              <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                  <div class="col-12">
                    <h3 class="mb-0">Total Cost</h3>
                  </div>
                </div>
              </div>
              <div class="card-body">
                  <div class="form-group">
                    <label class="form-control-label" for="input-first-name">Cash</label>
                    <div class="input-group mb-4">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Rp</span>
                      </div>
                      <input class="form-control pl-2" value="0" type="number">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-first-name">Change</label>
                    <div class="input-group mb-4">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Rp</span>
                      </div>
                      <input class="form-control pl-2" value="0" type="number" disabled>
                    </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection

@push('footer-scripts')
  
  <script src="{{ asset('js/frontend/sales/create.js')}}" type="text/javascript"></script>
  <script src="{{ asset('js/frontend/functions/select2/customer.js')}}" type="text/javascript"></script>
  <script>

      // add Row
      function addHtmlTableRow(){
         var table = document.getElementById("product_table");
             newRow = table.insertRow(table.length);
             cell1 = newRow.insertCell(0);
             cell2 = newRow.insertCell(1);
             cell3 = newRow.insertCell(2);
             cell4 = newRow.insertCell(3);
             cell5 = newRow.insertCell(4);
             cell6 = newRow.insertCell(5);
             cell7 = newRow.insertCell(6);
             cell8 = newRow.insertCell(7);

             hidden = document.getElementById("hidden").value;
             item_code = document.getElementById("item_code").value;
             qty = document.getElementById("qty").value;
             item_name = document.getElementById("item_name").value;
             item_category = document.getElementById("item_category").value;
             item_price = document.getElementById("price").value;
             item_subtotal = qty*item_price;
     
         cell1.innerHTML = hidden;
         cell2.innerHTML = item_code;
         cell3.innerHTML = item_name;
         cell4.innerHTML = item_category;
         cell5.innerHTML = item_price;
         cell6.innerHTML = qty;
         cell7.innerHTML = item_subtotal;
         cell8.innerHTML = '<button class="btnDelete">delete</button>';

         sumVal = 0;
         for(var i = 1; i < table.rows.length; i++)
          {
              sumVal = sumVal + parseInt(table.rows[i].cells[6].innerHTML);
          }
       }

       var table2 = document.getElementById("product_table"), sumVal = 0;
            
        for(var i = 1; i < table2.rows.length; i++)
        {
            sumVal = sumVal + parseInt(table2.rows[i].cells[5].innerHTML);
        }
        
        // document.getElementById("val").innerHTML = "Sum Value = " + sumVal;
        console.log(sumVal);

      // var index, table1 = document.getElementById("product_table");
      // for (let i = 1; i < table1.rows.length; i++) {
      //   // table1.rows[i].cells[6].onclick = function(){
      //     index = this.parentElement.rowIndex;
      //     // table1.deleteRow(index);
      //     console.log(index);
      //   // };
      // }
 </script>
@endpush