@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <div class="judul mb-3 w-50 pl-5 m-md-auto">
        <h1 class="display-4 pl-4">Hello,</h1>
        <p class="display-4 pl-4 font-weight-bold text-primary">wellcome!</p>
    </div>
    <form method="POST" class="w-75 m-auto mt-5 pt-2" action="{{ route('login') }}">
        @csrf

        <div class="form-group row justify-content-md-center">
            <div class="col-md-6">
                <input id="email" type="email" style="border-left: 5px solid #007bff" class="form-control rounded-0 @error('email') is-invalid @enderror" placeholder="Email" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row justify-content-md-center">
            <div class="col-md-6">
                <input id="password" type="password" placeholder="Password" style="border-left: 5px solid #007bff" class="form-control rounded-0 @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row justify-content-md-center">
            <div class="col-md-6">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row pt-3 justify-content-md-center pl-4 ml-5">
            <div class="col-md-8 pt-4">
                <button type="submit" class="btn btn-primary rounded-0 pr-5 pl-5">
                    {{ __('Login') }}
                </button>
                <a class="btn btn-outline-primary ml-4 rounded-0 pr-5 pl-5" href="{{ route('register') }}">{{ __('Register') }}</a>
                <br>
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
        </div>
    </form>
