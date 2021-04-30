
@extends('layouts.app')
@section('content')
    <div id="preloder">
        <div class="loader"></div>
    </div>
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
    <div class="hero-slider owl-carousel owl-theme">
        <div class="hs-item set-bg" data-setbg="{{asset('img/slider/1.jpg')}}" style="box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.5);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7">
                        <h2>3 Modern homes for modern thinking people. </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="hs-item set-bg" data-setbg="{{asset('img/slider/2.jpg')}}" style="box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.5);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7">
                        <h2>4 Modern homes for modern thinking people. </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="hs-item set-bg" data-setbg="{{asset('img/slider/3.jpg')}}" style="box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.5);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7">
                        <h2>6 Modern homes for modern thinking people. </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-nav-slider-warp">
        <div class="container">
            <div class="hero-nav-slider owl-carousel">
                <div class="hns-item">
                    <h5>3 bedrooms version</h5>
                    <p>Availble from March 2019</p>
                    <span>$145,000</span>
                </div>
                <div class="hns-item">
                    <h5>4 bedrooms version + PRIVATE POOL </h5>
                    <p>Availble from March 2019</p>
                    <span>$145,000</span>
                </div>
                <div class="hns-item">
                    <h5>6 bedrooms version + pRIVATE POOL </h5>
                    <p>Availble from March 2019</p>
                    <span>$145,000</span>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="features-icons-section">
    <div class="features-icon-item">
        <i class="flaticon-151-banker"></i>
        <p>Easy Buying</p>
    </div>
    <div class="features-icon-item">
        <i class="flaticon-151-closing"></i>
        <p>Ready to Move</p>
    </div>
    <div class="features-icon-item">
        <i class="flaticon-151-maps-and-flags-3"></i>
        <p>Great Location</p>
    </div>
    <div class="features-icon-item">
        <i class="flaticon-151-step-ladder"></i>
        <p>Comunity Pool</p>
    </div>
    <div class="features-icon-item">
        <i class="flaticon-151-trees"></i>
        <p>30% Park</p>
    </div>
    <div class="features-icon-item">
        <i class="flaticon-151-fader"></i>
        <p>Sunny Location</p>
    </div>
    <div class="features-icon-item">
        <i class="flaticon-151-indoor"></i>
        <p>Modern Design</p>
    </div>
    <div class="features-icon-item">
        <i class="flaticon-151-maps-and-flags-1"></i>
        <p>Parking Spaces</p>
    </div>
    <div class="features-icon-item">
        <i class="flaticon-151-transportation"></i>
        <p>Garage Included</p>
    </div>
</div>


<section class="intro-section">
    <div class="container">
        <div class="section-title">
            <h2>our houses</h2>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="intro-img-box">
                    <h4>MODERN VILLA 1</h4>
                    <img src="img/intro/1.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-4 align-items-end d-flex">
                <div class="intro-text-box">
                    <p>Nam gravida elit non massa congue, ac commodo ipsum mattis. Fusce erat magna, egestas vitae arcu non, posu-ere iaculis leo. Sed a lectus risus. Morbi eros sapien, inter-dum ut sollicitudin eget, porttitor nec elit. Fusce dignis-sim velit sit amet ligula dapibus fringilla. Cras fermentum consequat ornare. Etiam tempus ex nec nibh eleifend, nec tempus ipsum finibus. </p>
                    <a href="#" class="site-btn">MORE INFO</a>
                </div>
            </div>
            <div class="col-lg-4 align-items-end d-flex order-2 order-lg-1">
                <div class="intro-text-box">
                    <p>Nam gravida elit non massa congue, ac commodo ipsum mattis. Fusce erat magna, egestas vitae arcu non, posu-ere iaculis leo. Sed a lectus risus. Morbi eros sapien, inter-dum ut sollicitudin eget, porttitor nec elit. Fusce dignis-sim velit sit amet ligula dapibus fringilla. Cras fermentum consequat ornare. Etiam tempus ex nec nibh eleifend, nec tempus ipsum finibus. </p>
                    <a href="#" class="site-btn">MORE INFO</a>
                </div>
            </div>
            <div class="col-lg-8 order-1 order-lg-2">
                <div class="intro-img-box">
                    <h4>MODERN VILLA 1</h4>
                    <img src="img/intro/2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="design-section">
    <div class="container">
        <div class="section-title st-light">
            <h2>our houses</h2>
        </div>
    </div>
    <div class="design-slider owl-carousel">
        <a href="img/design/1.jpg" class="img-popup-gallery">
            <img src="img/design/1.jpg" alt="">
            <i class="flaticon-151-reading-glasses"></i>
        </a>
        <a href="img/design/2.jpg" class="img-popup-gallery">
            <img src="img/design/2.jpg" alt="">
            <i class="flaticon-151-reading-glasses"></i>
        </a>
        <a href="img/design/3.jpg" class="img-popup-gallery">
            <img src="img/design/3.jpg" alt="">
            <i class="flaticon-151-reading-glasses"></i>
        </a>
        <a href="img/design/2.jpg" class="img-popup-gallery">
            <img src="img/design/2.jpg" alt="">
            <i class="flaticon-151-reading-glasses"></i>
        </a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="design-text text-white">
                    <h4>INTERIOR </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="design-text text-white">
                    <h4>ENVIORMENT FRIENDLY</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="location-section spad">
    <div class="container">
        <div class="section-title">
            <h2>location</h2>
        </div>
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="tab-content location-tab">
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <img src="img/location/1.jpg" alt="">
                        <a href="https://www.youtube.com/watch?v=Sz_1tkcU0Co" class="play-btn"><img src="img/play-icon.png" alt=""></a>
                    </div>
                    <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                        <img src="img/location/2.jpg" alt="">
                        <a href="https://www.youtube.com/watch?v=7JTHzDiJ2NA" class="play-btn"><img src="img/play-icon.png" alt=""></a>
                    </div>
                    <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                        <img src="img/location/3.jpg" alt="">
                        <a href="https://www.youtube.com/watch?v=g3tB7aFoyjY" class="play-btn"><img src="img/play-icon.png" alt=""></a>
                    </div>
                    <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab-4">
                        <img src="img/location/4.jpg" alt="">
                        <a href="youtube.com/watch16bb.html?v=slJrBtarjgo" class="play-btn"><img src="img/play-icon.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <ul class="nav nav-tabs location-tab-nav" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">
                            <img src="img/location/thumb-1.jpg" alt="">
                            <h5>Surroundings</h5>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">
                            <img src="img/location/thumb-2.jpg" alt="">
                            <h5>Interior Design</h5>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">
                            <img src="img/location/thumb-3.jpg" alt="">
                            <h5>Comunity Pool</h5>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="4-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">
                            <img src="img/location/thumb-4.jpg" alt="">
                            <h5>Views</h5>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="features-section">
    <div class="container">
        <div class="section-title">
            <h2>features</h2>
        </div>
    </div>
    <div class="features-slider owl-carousel">
        <div class="feature-box">
            <i class="flaticon-151-banker"></i>
            <h5>ECO-FRIENDLY HOMES</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
        </div>
        <div class="feature-box">
            <i class="flaticon-151-security-system"></i>
            <h5>SECURE AREA</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi-dunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
        </div>
        <div class="feature-box">
            <i class="flaticon-151-maps-and-flags-1"></i>
            <h5>FREE PARKING</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi-dunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
        </div>
        <div class="feature-box">
            <i class="flaticon-151-step-ladder"></i>
            <h5>COMUNITY POOL</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi-dunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
        </div>
        <div class="feature-box">
            <i class="flaticon-151-real-estate-6"></i>
            <h5>BEST DEALS</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi-dunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
        </div>
    </div>
</section>


<section class="call-to-action-section set-bg" data-setbg="img/cta-bg.jpg">
    <div class="container text-white text-center">
        <h2>Ask our top consultants for an personalized offer today. </h2>
        <button class="site-btn sb-light sb-big">CALL 800-1-5141</button>
    </div>
</section>
@endsection
@section('css')

@endsection
@section('scripts')

@endsection
