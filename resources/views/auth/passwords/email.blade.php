@extends('layouts.app')

@section('content')
    <section class="hero-section">
        <div class="hero-section">
            <div class="hs-item set-bg" data-setbg="{{asset('img/slider/1.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 offset-lg-5">
                            <div class="contact-info-box">
                                <h5 class="contact-title">{{ __('Reset Password') }}</h5>

                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form class="contact-form" method="POST" action="{{ route('password.email') }}">
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


                                    <button class="site-btn" type="submit">  {{ __('Send Password Reset Link') }}</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
