@extends('frontend.master')

@section('content-head')

@endsection

@section('content-body')
<div class="col-xl-12 col-md-12 col-sm-12 order-xl-1">
    <div class="card bg-secondary shadow">
      <div class="card-header bg-white border-0">
        <div class="row align-items-center">
          <div class="col-8">
            <h3 class="mb-0">Edit Member</h3>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('frontend.customer.update',[$customer->id])}}" method="POST">
            {{csrf_field()}}
            {{ method_field('PUT')}}   
            <h6 class="heading-small text-muted mb-4">User information</h6>
            <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input name="firstname" type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="{{ $customer->firstname }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" name="lastname" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="{{ $customer->lastname }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Phone Number</label>
                        <input type="text" name="phone" id="phone-number" class="form-control form-control-alternative" placeholder="Phone Number" value="{{ $customer->phone }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-first-name">Gender</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text form-control-alternative" for="inputGroupSelect01">Options</label>
                                </div>
                                <select name="gender" class="custom-select form-control-alternative" id="inputGroupSelect01">
                                    <option selected>Choose...</option>
                                    <option value="man" @if($customer->gender == 'man') selected @endif>Man</option>
                                    <option value="woman" @if($customer->gender == 'woman') selected @endif>Woman</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-4" />
            <h6 class="heading-small text-muted mb-4">Contact information</h6>
            <div class="pl-lg-4">
                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <label class="form-control-label" for="input-address">Address</label>
                    <input id="input-address" name="address" class="form-control form-control-alternative" placeholder="Home Address" type="text" value="{{ $customer->address }}">
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                    <label class="form-control-label" for="input-city">City</label>
                    <input type="text" id="input-city" name="city" class="form-control form-control-alternative" placeholder="City" value="{{ $customer->city }}">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                    <label class="form-control-label" for="input-country">Country</label>
                    <input type="text" id="input-country" name="country" class="form-control form-control-alternative" placeholder="Country" value="{{ $customer->country }}">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                    <label class="form-control-label" for="input-country">Postal code</label>
                    <input type="number" id="input-postal-code" name="postalcode" class="form-control form-control-alternative" placeholder="Postal code" value="{{ $customer->postalcode}}" >
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