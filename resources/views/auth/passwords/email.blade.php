<!DOCTYPE html>
<html lang="en">
@include('adminlayout.head')
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth lock-full-bg">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-transparent text-left p-5 text-center">
              <img src="../../images/faces/face13.jpg" class="lock-profile-img" alt="img">
              <form class="pt-5" action="{{ route('password.email') }}" method="POST">
                        @csrf
                <div class="form-group">
                  <label for="examplePassword1">{{ __('E-Mail Address') }}</label>
                  <input type="email" class="form-control text-center @error('email') is-invalid @enderror" id="examplePassword1" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                @enderror
                </div>
                <div class="mt-5">
                <button type="submit" class="btn btn-block btn-success btn-lg font-weight-medium">
                     {{ __('Send Password Reset Link') }}
                     </button>
                </div>
                <div class="mt-3 text-center">
                  <a href="{{url('/register')}}" class="auth-link text-white">Sign in using a different account</a>
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
