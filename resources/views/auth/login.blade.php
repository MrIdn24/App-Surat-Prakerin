@extends('layouts.app')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="card w-75 m-auto rounded-0">
            <div class="card-header text-center">
                <h2>Login Nyurat</h2>
            </div>
            <div class="card-body bg-white">
                <div class="row justify-content-center mb-3 mt-3">
                    <div class="col-md-6">
                        <form method="POST" class="w-75 m-auto mt-5 pt-2" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control mb-3  @error('email') is-invalid @enderror" placeholder="Email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <input type="password" name="password" id="password" class="form-control mb-3  @error('password') is-invalid @enderror"
                                    placeholder="Password">
                                <div class="form-check">
                                    <input type="checkbox" name="remeber" id="remember">
                                    {{ old('remeber') ? 'checked' : '' }}
                                    <label for="remember">Remember Me</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-dark rounded-0 w-100">Masuk</button>
                            <span class="row justify-content-center pt-1 pb-1">-or-</span>
                            <a href="{{ route('register') }}" class="btn btn-outline-dark rounded-0 w-100">Register</a>
                        </form>
                    </div>
                    <div class="col-md-4 mt-4">
                        <img src="{{ asset('assets/img/tb.png') }}" height="200">
                    </div>
                </div>
            </div>
        </div>
