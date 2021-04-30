@extends('layouts.app')
@section('content')

<section class="page-top-section h-25 set-bg" data-setbg="{{asset('img/slider/1.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-top-text text-white">
                    <h2>{{__($plot->site->name." > ".$plot->plot_number)}}</h2>
                    <p>{{ __($plot->site->location."  ".$plot->site->address) }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="mt-2">
        <div class="container">
            <p>Manage plot information</p>
            <div class="row justify-content-center">
                <div class="col-12 card m-1">
                    <div class="card-header mb-3">Update Plot Information</div>
                    <form class="contact-form" method="POST" action="{{ route('manage.sites.update', $plot->id) }}">
                        @csrf
                        <input type="hidden" class="form-control" name="plot_id" value="{{$plot->id}}">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-4">
                                    <label>Block Letter</label>
                                    <input type="text" class="form-control" name="block" value="{{$plot->block}}" required >
                                </div>
                                <div class="col-4">
                                    <label>Block Letter</label>
                                    <input type="text" class="form-control" name="plot_number" value="{{$plot->plot_number}}"   required >
                                </div>
                                <div class="col-4">
                                    <label>Plot Size</label>
                                    <input type="text" class="form-control" name="capacity" value="{{$plot->capacity}}">
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label for="">Assign Plot to Client</label>
                                    <select name="user_id" id="" class="form-control">
                                        <option value="">Select Client</option>
                                        @foreach($clients as $client)
                                            <option value="{{$client->id}}">{{$client->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="">Selling Status</label>
                                    <select name="user_id" id="" class="form-control">
                                        <option {{$plot->sold ? "selected" : ""}} value="1">Sold</option>
                                        <option {{$plot->sold ? "" : "selected"}} value="0">Not Sold</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <button class="site-btn">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
