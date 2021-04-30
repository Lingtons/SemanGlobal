@extends('layouts.app')
@section('content')

<section class="page-top-section h-25 set-bg" data-setbg="{{asset('img/slider/3.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-top-text text-white">
                    <h2>{{$site->name}}</h2>
                    <p>{{ __($site->location."  ".$site->address) }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="mt-2">
        <div class="container">
            <p class="text-center">List of Plots (<span class="text-info">click on each one to view details</span>)</p>
            <div class="row justify-content-center">
                @foreach($site->plots()->get() as $plot)
                <div class="col-2 rounded rounded shadow border border-info m-1">
                  <div class="development-box">
                      {{$plot->plot_number}}
                  </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
