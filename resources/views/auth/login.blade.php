@extends('layouts.app')

@section('title','Login')
@section('content')
<div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center gx-0 min-vh-100">
          <div class="col-8 col-md-6 col-lg-7 offset-md-1 order-md-2 mt-auto mt-md-0 pt-8 pb-4 py-md-11">

            <!-- Image -->
            <img src="{{ asset('assets/landing-front/img/tk-img/coba-2.png')}}" alt="..." class="img-fluid">

          </div>
          <div class="col-12 col-md-5 col-lg-4 order-md-1 mb-auto mb-md-0 pb-8 py-md-11">

            <!-- Heading -->
            <h1 class="mb-0 fw-bold text-center">
              Masuk
            </h1>

            <!-- Text -->
            <p class="mb-6 text-center text-muted">
              Masuk untuk daftar peserta baru.
            </p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label class="form-label" for="email">
                            Email Address
                            </label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                        <div class="form-group mb-5">
                            <label class="form-label" for="email">
                            Password
                            </label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                        <div class="form-group mb-5">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                            </div>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                <p class="mb-0 fs-sm text-center text-muted">
              belum punya akun? <a href="{{ route('register') }}">{{ __('Register') }}</a>.
            </p>
          </div>
        </div> <!-- / .row -->
      </div>
@endsection
