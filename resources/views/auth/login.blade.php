@extends('layouts.appSec')

@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <section class="register-photo" style="background-color: transparent">
        <div class="form-container" style="margin-top: 40px">
            <div class="image-holder" style="background: url('{{ asset('login_a/img/Crs.png') }}') left / cover no-repeat">
            </div>
            <form method="POST" action="{{ route('login') }}" style="height: 525px">
                @csrf
                <h2 class="text-center"><strong>Sign-In</strong></h2>
                <p>Must login to enter the site.</p>
                <label class="form-label">Email</label>
                <div class="form-group mb-3">
                    <input class="border rounded form-control" type="email" name="email"
                        placeholder="Your Email" />

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <label class="form-label">Password</label>
                <div class="form-group mb-3">
                    <input class="border rounded form-control" type="password" name="password"
                        placeholder="Your Password" />

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div id="passwordsError" style="display: none; margin-bottom: 16.5px">
                    <span id="errorMessage" class="text-danger" style="font-size: 13px"></span>
                </div>
                @if (Route::has('password.request'))
                    <div class="form-group mb-3">
                        <a class="already" href="{{ route('password.request') }}" style="margin-right: 158px">Forgot
                            Password?</a>

                    </div>
                @endif
                <div class="form-group mb-3">
                    <button class="btn btn-primary border rounded shadow-none d-block w-100 ms-md-0 me-md-0"
                        id="submitButton" type="submit" style="color: rgb(255, 255, 255); background-color: black">
                        Sign In
                    </button>
                </div>
                <a class="already" href="{{ route('register') }}">Don't have an account? Sign Up</a>
            </form>
        </div>
    </section>
@endsection
