@extends('layouts.app')

@section('content')

<div class="main-content">
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
        <div class="container px-4">
            <a class="navbar-brand" href="../index.html">
                <h1 class="text-white font-weight-bold">Candhik Ayu</h1>
            </a>
        </div>
    </nav>
    <div class="header bg-gradient-primary py-7 py-lg-8">
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-7">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header">
                        <img style="height:40px;width:35px" src="{{ asset('assets/argon/img/brand/Logo_ChandikAyu.jpg')}}" alt="">
                        {{ __('Register') }}
                    </div>

                    <div class="card-body px-lg-5 py-lg-5">

                        <!-- Form identitas member -->
                        <form action="{{ route('register') }}" method="POST">
                            {{csrf_field()}}
                            <h6 class="heading-small text-muted mb-4">User information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">First name</label>
                                            <input name="firstname" type="text" id="input-first-name" class="form-control form-control-alternative" @error('firstname') is-invalid @enderror" placeholder="First name" required autocomplete="firstname" autofocus value="denan"> 
                                            @error('firstname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-last-name">Last name</label>
                                            <input type="text" name="lastname" id="input-last-name" class="form-control form-control-alternative" @error('lastname') is-invalid @enderror" placeholder="Last name" required autocomplete="firstname" autofocus value="den">
                                            @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Phone Number</label>
                                            <input type="text" name="phone" id="phone-number" class="form-control form-control-alternative" @error('phone') is-invalid @enderror" required autocomplete="phone" autofocus placeholder="Phone Number" value="082293837474">
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
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
                                                    <option value="man" selected>Man</option>
                                                    <option value="woman">Woman</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="username">Username</label>
                                            <input type="text" name="username" id="username" class="form-control form-control-alternative" @error('username') is-invalid @enderror" name="username" required autocomplete="username" placeholder="Username" value="alfaalfa">
                                            @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Email</label>
                                            <input type="email" name="email" id="email" class="form-control form-control-alternative" @error('email') is-invalid @enderror" name="email"  required autocomplete="email" placeholder="Email" value="alfa@gmail.com">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Role</label>
                                            <input type="text" name="role" id="role" class="form-control form-control-alternative" placeholder="role" value="3">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Password</label>
                                            <input type="password" name="password" id="password" class="form-control form-control-alternative" placeholder="Password" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Password Confirmation</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-alternative" placeholder="Password" required autocomplete="new-password">
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
                                            <input id="input-address" name="address" class="form-control form-control-alternative" placeholder="Home Address" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-city">City</label>
                                            <input type="text" id="input-city" name="city" class="form-control form-control-alternative" placeholder="City">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-country">Country</label>
                                            <input type="text" id="input-country" name="country" class="form-control form-control-alternative" placeholder="Country">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-country">Postal code</label>
                                            <input type="number" id="input-postal-code" name="postalcode" class="form-control form-control-alternative" placeholder="Postal code">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4" />
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                <button class="btn btn-icon btn-3 btn-secondary" type="button">
                                    <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>

                                    <a href="{{ route('login') }}">Back</a>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="py-5">
    <div class="container">
        <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6">
                <div class="copyright text-center text-xl-left text-muted">
                    &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Irvan Alfaridzi</a>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection