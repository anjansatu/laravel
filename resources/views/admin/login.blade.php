@extends('admin.layouts.master')
@section('content')

    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"> </div>
      <div class="dot"></div>
    </div>
    <!-- Loader ends-->
    <!-- login page start-->
    <div class="container-fluid p-0">
      <div class="row m-0">
        <div class="col-12 p-0">    
          <div class="login-card">
            <div>
              <div><a class="logo" href="index.html"><img class="img-fluid for-light" src="/backend/assets/images/logo/logo2.png" alt="looginpage"></a></div>
              <div class="login-main"> 
                <form class="theme-form" method="POST" action="{{ route('admin.login.submit') }}">
                  @csrf
                  <h4 class="text-center">Sign in to account</h4>
                  <p class="text-center">Enter your email & password to login</p>
                  @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                  @endif
                  <div class="form-group">
                    <label class="col-form-label">Email Address</label>
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}" required="" placeholder="admin@example.com">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" name="password" required="" placeholder="*********">
                      <div class="show-hide"><span class="show"></span></div>
                    </div>
                  </div>
                  <div class="form-group mb-3">
                    <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
                  </div>
                  <div class="form-group mb-0">
                    <div class="checkbox p-0">
                      <input id="checkbox1" type="checkbox" name="remember">
                      <label class="text-muted" for="checkbox1">Remember password</label>
                    </div><a class="link" href="{{ route('admin.forgot') }}">Forgot password?</a>
                    <div class="text-end mt-3">
                      <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                    </div>
                  </div>
                </form>
                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
@endsection
