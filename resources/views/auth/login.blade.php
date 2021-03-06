@extends('layouts.app')

@section('content')
    <section class="hero-section">
        <div class="hero-social-warp">
            <div class="hero-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <div class="hero-section">
            <div class="hs-item set-bg" data-setbg="img/slider/1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 offset-lg-5">
                            <div class="contact-info-box">
                                <h5 class="contact-title">SIGN IN</h5>
                                <form class="contact-form" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-field">
                                        <img src="{{asset('img/icons/envelope.png')}}" alt="">
                                        <input type="text" placeholder="Email Address" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                        <strong>{{ $message }}</strong>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="form-field">
                                        <img src="{{asset('img/icons/padlock.png')}}" alt="">
                                        <input type="password" placeholder="Password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                        <strong>{{ $message }}</strong>
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="site-btn">sign in</button>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
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
            </div>
        </div>
    </section>
@endsection
