<!DOCTYPE html>
<html lang="en">
@include('adminlayout.head')
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../../images/logo.svg" alt="logo">
              </div>
              <h6 class="font-weight-light">{{ __('Reset Password') }}</h6>
              <form class="pt-3" method="POST" action="{{ route('password.update') }}">
                        @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group">
                  <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="Email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                         </span>
                     @enderror
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="Password" name="password" required autocomplete="new-password">
                  @error('password')
                        <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                             </span>
                                @enderror
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="mt-3">
                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                         {{ __('Reset Password') }}
                         </button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center"> 
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  @include('adminlayout.script')

  <!-- endinject -->
</body>

</html>

