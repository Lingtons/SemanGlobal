@extends('layouts.app')
@section('content')

<section class="page-top-section h-25 set-bg" data-setbg="{{asset('img/slider/3.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-top-text text-white">
                    <h2>Projects / Sites</h2>
                    <p>Configure and manage sites information here</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="developments-section spad">
    <div class="container">
        <a href="#" data-target="#newSiteModal" data-toggle="modal"  class="mb-3 site-btn">New Site</a>
        @include('partials.modals.new_site')
        <div class="row">
            @foreach($sites as $site)
            <div class="col-lg-4 col-md-6">
                <div class="development-box">
                    <img src="{{asset('img/developments/1.jpg')}} " alt="">
                    <div class="dev-text">
                        <h4>{{$site->name}}</h4>
                        <h5>{{$site->location}}</h5>
                        <p class="text-dark">{{$site->address}}</p>
{{--                        <div class="dev-price">--}}
{{--                            <span>from</span>--}}
{{--                            <h4>$145,000</h4>--}}
{{--                        </div>--}}
                        <a href="{{route('manage.sites.show', $site->id)}}" class="site-btn">MORE INFO</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
