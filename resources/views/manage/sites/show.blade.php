@extends('layouts.app')
@section('content')

<section class="page-top-section h-25 set-bg" data-setbg="{{asset('img/slider/1.jpg')}}">
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
            <div class="row">
                <div class="col-lg-6"><p>List of Plots (<span class="text-info">click on each one to view details</span>)</p></div>
                <div class="col-lg-6"><p class="float-lg-right">Scroll to (<a href="#manage-site"><span class="text-info">Manage Site</span></a>)</p></div>
            </div>

            <div class="row justify-content-center">
                @foreach($site->plots()->get() as $plot)
                <div class="col-2 rounded rounded shadow border border-info m-1 {{$plot->sold ? "bg-teal text-white" : ""}}" data-target="#plotDetailModal{{$plot->id}}" data-toggle="modal">
                  <div class="development-box {{$plot->sold ? "bg-teal text-white" : ""}}">
                      {{$plot->plot_number}}
                  </div>
                </div>
                    @include('partials.modals.site_detail')
                @endforeach
            </div>
        </div>
    </section>
<section class="mt-2 mb-3" id="manage-site">
    <div class="container">
        <p>Manage site information</p>
        <div class="row justify-content-center">
            <div class="col-lg-5 card m-1">
                <div class="card-header mb-3">Add more plots</div>
                <form class="contact-form" method="POST" action="{{ route('manage.sites.update', $site->id) }}">
                    @csrf
                    <input type="hidden" class="form-control" name="site_id" value="{{$site->id}}">

                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label>Block Letter</label>
                                <input type="text" class="form-control" name="block" placeholder="Block Letter e.g. A" required >
                            </div>
                            <div class="col-6">
                                <label>Plot Size</label>
                                <input type="text" class="form-control" name="capacity" placeholder="Capacity e.g. 1000sqm">
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <p>Plots numbering</p>
                        <div class="row">
                            <div class="col-6">
                                <label>No. of Plots to add</label>
                                <input type="number" class="form-control" name="amount">
                            </div>
                            <div class="col-6">
                                <label>No. to start from</label>
                                <input type="number" class="form-control" name="start">
                            </div>
                        </div>

                    </div>
                    <button class="site-btn">Submit</button>

                </form>
            </div>

            <div class="col-lg-5 card m-1">
                <div class="card-header mb-3">Update Site Information</div>
                <form class="contact-form" method="POST" action="{{ route('manage.sites.update', $site->id) }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" value="{{$site->name}}" placeholder="Project Name" required>
                    </div>
                    <div class="form-group mb-2">
                        <div class="row">
                            <div class="col-6">
                                <select name="type" class="form-control" required>
                                    <option value="">Select Type</option>
                                    <option {{$site->type == "commercial" ? "selected" : ""}} value="commercial">Commercial</option>
                                    <option {{$site->type == "residential" ? "selected" : ""}} value="residential">Residential</option>
                                    <option {{$site->type == "others" ? "selected" : ""}} value="others">Others</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <select name="location" class="form-control" required>
                                    <option value="">Select Location</option>
                                    <option {{$site->location == "Abuja" ? "selected" : ""}} value="Abuja">Abuja</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control" name="address" value="{{$site->address}}" placeholder="Address" required >
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" name="capacity" value="{{$site->capacity}}" placeholder="Capacity e.g. 1000sqm">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cover_picture">Cover Picture</label>
                        <input type="file" class="form-control" name="cover_picture">
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="aerial_picture">Aerial Picture</label>
                                <input type="file" class="form-control" name="aerial_picture">
                            </div>
                            <div class="col-6">
                                <label for="alt_picture">Alternative Picture</label>
                                <input type="file" class="form-control" name="alt_picture">
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
