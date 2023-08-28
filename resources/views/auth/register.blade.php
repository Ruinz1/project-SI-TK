@extends('layouts.app')
@section('title', 'Daftar User')
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
              Daftar
            </h1>

            <!-- Text -->
            <p class="mb-6 text-center text-muted">
              Daftar user.
            </p>
                    <form method="POST" class="mb-6" action="{{ route('register') }}">
                        @csrf

                            <div class="form-group">
                            <label class="form-label" for="email">
                            Username
                            </label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                        <div class="form-group">
                            <label class="form-label" for="email">
                            Email Address
                            </label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                        <div class="form-group mb-5">
                            <label class="form-label" for="email">
                            Confirm Password
                            </label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                       

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                 <p class="mb-0 fs-sm text-center text-muted">
              Already have an account? <a href="{{ route('login') }}">{{ __('Login') }}</a>.
            </p>
          </div>
        </div> <!-- / .row -->
      </div>


            <!-- Form -->
           

            <!-- Text -->
           
@endsection
