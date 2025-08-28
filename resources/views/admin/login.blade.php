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
                <form class="theme-form">
                  <h4 class="text-center">Sign in to account</h4>
                  <p class="text-center">Enter your email & password to login</p>
                  <div class="form-group">
                    <label class="col-form-label">Email Address</label>
                    <input class="form-control" type="email" required="" placeholder="Test@gmail.com">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
                      <div class="show-hide"><span class="show">                         </span></div>
                    </div>
                  </div>
                  <div class="form-group mb-0">
                    <div class="checkbox p-0">
                      <input id="checkbox1" type="checkbox">
                      <label class="text-muted" for="checkbox1">Remember password</label>
                    </div><a class="link" href="forget-password.html">Forgot password?</a>
                    <div class="text-end mt-3">
                      <button class="btn btn-primary btn-block w-100" type="submit">Sign in                 </button>
                    </div>
                  </div>
                  <div class="login-social-title">
                    <h6>Or Sign in with                 </h6>
                  </div>
                  <div class="form-group">
                    <ul class="login-social">
                      <li><a href="https://www.linkedin.com" target="_blank"><i data-feather="linkedin"></i></a></li>
                      <li><a href="https://twitter.com" target="_blank"><i data-feather="twitter"></i></a></li>
                      <li><a href="https://www.facebook.com" target="_blank"><i data-feather="facebook"></i></a></li>
                      <li><a href="https://www.instagram.com" target="_blank"><i data-feather="instagram"></i></a></li>
                    </ul>
                  </div>
                  <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="sign-up.html">Create Account</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
@endsection
