@extends('admin.layouts.master')
@section('content')
<div class="container-fluid p-0">
  <div class="row m-0">
    <div class="col-12 p-0">
      <div class="login-card">
        <div>
          <div><a class="logo" href="#"><img class="img-fluid for-light" src="/backend/assets/images/logo/logo2.png" alt="looginpage"></a></div>
          <div class="login-main">
            <form class="theme-form" method="POST" action="{{ route('admin.forgot.submit') }}">
              @csrf
              <h4 class="text-center">Forgot Password</h4>
              <p class="text-center">Enter your email to get OTP</p>
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
                <input class="form-control" type="email" name="email" value="{{ old('email') }}" required placeholder="admin@example.com">
              </div>
              <div class="form-group mb-0">
                <div class="text-end mt-3">
                  <button class="btn btn-primary btn-block w-100" type="submit">Send OTP</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
