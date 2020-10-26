@extends('layouts.app')
@section('additional-css')
    <link href="{{ asset('css/log_sign.css') }}" rel="stylesheet">
@endsection
@section('content')
<!-- Start Signup Page -->
<div class="container_su m-auto">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">
                     {{ __('Sign Up') }}
                 </div>

                <div class="card-body">
                    <h5>Account Information</h5>
                    <hr class="style12">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6 mb-2">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="First Name" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Last Name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 mb-2">
                                    <input id="username" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Username" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email"required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                             <div class="col-md-6 mb-2">
                                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                                 @error('password')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror
                             </div>
                             <div class="col-md-6">
                                 <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                             </div>
                         </div>

                         <div class="form-group row">
                             <div class="col-md-6 mb-2">
                                 <input class="date form-control" placeholder="Date of Birth" type="text">
                             </div>

                             <div class="col-md-6">
                                 <select class="form-control" name="gender" id="gender">
                                 <option value="">Gender</option>
                                     <option value="male">Male</option>
                                     <option value="female">Female</option>
                                 </select>
                             </div>
                         </div>

                         <hr class="style12">
                         <h5>Location</h5>

                         <div class="form-group row">
                             <div class="col-md-4 mb-2">
                             <select class="form-control" name="country" id="country">
                                <option value="">Country</option>
                                </select>
                             </div>
                            <div class="col-md-4 mb-2">
                                <select class="form-control" name="state" id="state">
                                <option value="">State</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control" name="city" id="city">
                                    <option value="">City</option>
                                </select>
                            </div>
                        </div>

                        <hr class="style12">
                        <h5>Select Plan ( <font style="color:#FF0000;"> 14 day Free Trial, cancel anytime.</font> )</h5>
                        <h6>Paypal account is required to sign up.</h6>
                        <div class="form-group row">
                            <div class="col-md-6 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">$7.99 per month.</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">$74.99 per year. </label>
                                </div>
                            </div>
                        </div>

                       <hr class="style12">
                       <h5>Terms</h5>

                       <div class="form-group row">
                           <div class="col-md-12 mb-2">
                               <div class="form-check">
                                   <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                   <label class="form-check-label" for="defaultCheck1">
                                       I have read and agree with the <a data-toggle="modal" href="#tmModal">Terms of Agreement</a> and <a data-toggle="modal" href="#pvcModal">Privacy Policy</a> by Kunnec.com.
                                   </label>
                               </div>
                           </div>
                       </div>

                       <div class="form-group row mb-0">
                           <div class="col-md-6 offset-md-5">
                               <button type="submit" class="btn btn-success btn-lg">
                                   {{ __('Sign Up') }}
                               </button>
                           </div>
                       </div>
                   </form>
               </div><!-- End of Card Body -->
           </div><!-- End of Card -->
       </div><!-- End of Col -->
   </div><!-- End of Row -->
</div>
<!-- End Signup Page -->
@endsection
@section('additional-js')
@endsection
