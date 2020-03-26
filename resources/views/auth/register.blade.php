@extends('layouts.front')

@section('content')
<div class="breadcrumb-area pt-205 pb-210" style="background-image: url({{asset('img/bg/breadcrumb.jpg')}})">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>register</h2>
            <ul>
                <li><a href="#">home</a></li>
                <li> register </li>
            </ul>
        </div>
    </div>
</div>

<!-- register-area start -->
<div class="register-area ptb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-12 col-lg-12 col-xl-6 ml-auto mr-auto">
                <div class="login">
                    <div class="login-form-container">
                        <div class="login-form">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <input id="name" type="text" @error('name') 
                                is-invalid @enderror" name="name" value="{{ old('name') }}" 
                                required autocomplete="name" autofocus placeholder="Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="email" type="email"  @error('email') 
                                is-invalid @enderror" name="email" value="{{ old('email') }}" 
                                required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="password" type="password" @error('password') 
                                is-invalid @enderror" name="password" required 
                                autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="password-confirm" type="password" class="form-control" 
                                name="password_confirmation" required autocomplete="new-password" 
                                placeholder="Confirm Password">

                                <div class="button-box">
                                    <button type="submit" class="default-btn floatright">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- register-area end -->
@endsection
