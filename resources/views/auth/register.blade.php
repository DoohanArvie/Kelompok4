@extends('adminlte.layouts.auth')

@section('content')
<body class="hold-transition register-page" style="background-color: #f2f2f2;">
    <div class="register-box">
      <div class="register-logo">
        <a href="index.php">
          <img src="assets/img/Marabunta.png" width="200" alt="Logo">
        </a>
      </div>

      <div class="card animated flipInY shadow-lg" style="border-radius: 10px;">
        <div class="card-body register-card-body">
          <p class="login-box-msg">Register a new membership</p>

          <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="input-group mb-3">
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Full name" value="{{ old('name') }}">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
              @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="input-group mb-3">
              <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
              @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
              @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                  <label for="agreeTerms">
                   I agree to the <a href="#">terms</a>
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

          @if (Route::has('login'))
          <p class="mb-0">
            <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
          </p>
          @endif
        </div>
        <!-- /.form-box -->
      </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <style>
      body::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('assets/img/hero-bg.jpg') repeat;
        background-size: cover;
        z-index: -1;
        animation: moveBackground 30s linear infinite;
      }
      @keyframes moveBackground {
        0% {
          background-position: 0 0;
        }
        100% {
          background-position: 1000px 1000px;
        }
      }
      .register-box {
        width: 360px;
        margin: 7% auto;
      }
      .register-logo a {
        font-size: 2.1rem;
        font-weight: 300;
        color: #666;
      }
      .login-box-msg {
        margin: 0;
        text-align: center;
        padding: 0 20px 20px 20px;
        color: #666;
      }
      .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
      }
      .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
      }
      .icheck-primary {
        user-select: none;
      }
    </style>
</body>
@endsection
