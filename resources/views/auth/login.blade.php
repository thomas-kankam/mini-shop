@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        <div class="d-flex justify-content-center py-4">
                            <a href="{{ url('/') }}" class="logo d-flex align-items-center w-auto">
                                <img src="{{ asset('assets/auth/img/logo.png') }}" alt="">
                                <span class="d-none d-lg-block">{{ config('app.name') }}</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">{{ __('Login to Your Account') }}
                                    </h5>
                                    <p class="text-center small">Enter your email & password to login</p>
                                </div>

                                <form class="row g-3 needs-validation" method="POST" action="{{ url('login') }}">
                                    @csrf
                                    <div class="col-12">
                                        <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                        <div class="input-group has-validation">

                                            <input type="email" name="email"
                                                class="form-control @error('password') is-invalid @enderror" id="email"
                                                value="{{ old('email') }}" autocomplete="email" autofocus required>
                                            @error('email')
                                                <div class="invalid-feedback" role="alert">
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="password" class="form-label">{{ __('Password') }}</label>
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror" id="password"
                                            required autocomplete="current-password">
                                        @error('password')
                                            <div class="invalid-feedback" role="alert">
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" value="true"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">{{ __('Login') }}</button>
                                    </div>
                                    <div class="col-12 text-center">
                                        <p class="small mb-0">
                                            Create an account?
                                            <a href="{{ url('register') }}">Create Account</a>
                                        </p>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>
@endsection
