@extends('layouts.app')
@section('content')

<section class="page-top-section h-25 set-bg" data-setbg="{{asset('img/slider/3.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-top-text text-white">
                    <h2>Users / Clients</h2>
                    <p>Persons account on system</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="developments-section spad">
    <div class="container">
        <a href="#" data-target="#newUserModal" data-toggle="modal"  class="mb-3 site-btn">New User</a>
        @include('partials.modals.new_user')
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered table-striped mt-3" id="datatable">
                    <thead>
                    <th>Name</th>
                    <th>Email</th>
                    </thead>
                    @foreach($users as $key => $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
