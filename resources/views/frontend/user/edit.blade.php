@extends('frontend.master')

@section('content-head')

@endsection

@section('content-body')
<div class="col-xl-12 col-md-12 col-sm-12 order-xl-1">
    <div class="card bg-secondary shadow">
      <div class="card-header bg-white border-0">
        <div class="row align-items-center">
          <div class="col-8">
            <h3 class="mb-0">Add User</h3>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('frontend.user.update',[$user->id])}}" method="POST">
            {{csrf_field()}}
            {{ method_field('PUT')}}
            <h6 class="heading-small text-muted mb-4">User information</h6>
            <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Name</label><br>
                        <select id="name" class="form-control form-control-alternative" name="name">
                            @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}" @if($user->employee_id == $employee->id) selected @endif>{{ $employee->firstname }} {{ $employee->lastname }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label class="form-control-label" for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control form-control-alternative" value="{{ $user->username }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Email</label>
                        <input type="email" name="email" id="email" class="form-control form-control-alternative" value="{{ $user->email }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Role</label>
                        <select id="role" class="form-control form-control-alternative" name="role">
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}" @if($user->role_id == $role->id) selected @endif>{{ $role->name }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Password</label>
                        <input type="password" name="password" id="password" class="form-control form-control-alternative" placeholder="Password">
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
<script src="{{ asset('js/frontend/functions/select2/role.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/frontend/functions/select2/name.js')}}" type="text/javascript"></script>
@endpush