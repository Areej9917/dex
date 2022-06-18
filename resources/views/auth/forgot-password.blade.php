@extends('auth.layouts.master')

@section('main-content')
<div class="login-wrapper">
    <div class="container">
        <div class="loginbox">
            <div class="login-left">
                <img class="img-fluid" src="{{ asset('images/logo-qhsms.png') }}" alt="Logo">
            </div>
            <div class="login-right">
                <div class="login-right-wrap">
                    @include('common.alerts')
                    <h1>Reset Password</h1>
                    <p class="account-subtitle"></p>

                    <!-- Form -->
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email" class="form-control">
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">Send Password Reset Link</button>
                        </div>
                    </form>
                    <!-- /Form -->
                    <div class="login-or">
                        <span class="or-line"></span>
                        <span class="span-or">or</span>
                    </div>
                    <!-- /Social Login -->

                    <div class="text-center dont-have">Already have an account? <a href="{{ route('login') }}">Login</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection