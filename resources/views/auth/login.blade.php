@extends('layouts.front')

@section('content')

<div class="breadcrumb-area pt-205 pb-210" style="background-image: url({{asset('img/bg/breadcrumb.jpg')}})">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>login</h2>
            <ul>
                <li><a href="#">home</a></li>
                <li> login </li>
            </ul>
        </div>
    </div>
</div>

<!-- login-area start -->
<div class="register-area ptb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto">
                <div class="login">
                    <div class="login-form-container">
                        <div class="login-form">
                            <form method="POST" action="{{ route('login') }}">
                                 @csrf
                                <input id="email" 
                                type="email" 
                                @error('email') 
                                is-invalid @enderror" 
                                name="email" 
                                value="{{ old('email') }}" 
                                required 
                                autocomplete="email"
                                placeholder="Email"
                                autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="password" 
                                type="password" 
                                @error('password') 
                                is-invalid @enderror" 
                                name="password" 
                                required 
                                placeholder="Password"
                                autocomplete="current-password">
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="button-box">
                                    <div class="login-toggle-btn">
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label>Remember me</label>
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif
                                    </div>
                                    <button type="submit" class="default-btn floatright">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login-area end -->

@endsection
