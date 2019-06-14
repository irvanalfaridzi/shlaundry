@extends('frontend.master')

@section('content-head')

@endsection

@section('content-body')
<div class="col-xl-12 col-md-12 col-sm-12 order-xl-1">
    <div class="card bg-secondary shadow">
      <div class="card-header bg-white border-0">
        <div class="row align-items-center">
          <div class="col-8">
            <h3 class="mb-0">Add Employee</h3>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('frontend.employee.store')}}" method="POST">
            {{csrf_field()}}
            <h6 class="heading-small text-muted mb-4">User information</h6>
            <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Name</label><br>
                        <select id="name" class="form-control form-control-alternative" name="state">
                            <option value="AL">Alabama</option>
                              ...
                            <option value="WY">Wyoming</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Username</label>
                        <input type="text" name="lastname" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Email</label>
                        <input type="text" name="phone" id="phone-number" class="form-control form-control-alternative" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Role</label>
                        <input type="text" name="phone" id="phone-number" class="form-control form-control-alternative" placeholder="Phone Number">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Password</label>
                        <input type="text" name="phone" id="phone-number" class="form-control form-control-alternative" placeholder="Phone Number">
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
<script>
$(document).ready(function() {
    $('.form-control-alternative').select2();
});
</script>
@endpush