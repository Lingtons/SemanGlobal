<!-- Modal -->
<div class="modal fade" id="newSiteModal" tabindex="-1" role="dialog" aria-labelledby="addVendorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close pt-2" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

            <div class="modal-body">
{{--                <form class="form-horizontal" method="POST" action="{{ route('manage.sites.store') }}">--}}
{{--                    {{ csrf_field() }}--}}
{{--                    <div class="form-field">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <input id="name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Name"--}}
{{--                                   required> @if ($errors->has('name'))--}}
{{--                                <span class="help-block">--}}
{{--                                <strong>{{ $errors->first('name') }}</strong>--}}
{{--                            </span>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-field">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <input id="name" type="text" class="form-control" name="name" placeholder="Name"--}}
{{--                                   required> @if ($errors->has('name'))--}}
{{--                                <span class="help-block">--}}
{{--                                <strong>{{ $errors->first('name') }}</strong>--}}
{{--                            </span>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-field">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email"--}}
{{--                                   required> @if ($errors->has('email'))--}}
{{--                                <span class="help-block">--}}
{{--                                <strong>{{ $errors->first('email') }}</strong>--}}
{{--                            </span>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                        <button type="submit" class="btn btn-primary">Save changes</button>--}}
{{--                    </div>--}}

{{--                </form>--}}

                <div class="contact-info-box">
                    <h5 class="contact-title">NEW SITE</h5>
                    <form class="contact-form" method="POST" action="{{ route('manage.sites.store') }}">
                        @csrf
                        <div class="form-field mb-2">
                            <select name="type" class="form-control" required>
                                <option value="">Select Type</option>
                                <option value="commercial">Commercial</option>
                                <option value="residential">Residential</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div class="form-field mb-2">
                            <select name="location" class="form-control" required>
                                <option value="">Select Location</option>
                                <option value="Abuja">Abuja</option>
                            </select>
                        </div>
                        <div class="form-field">
                            <input type="text" name="name" placeholder="Project Name" required>
                        </div>

                        <div class="form-field">
                            <input type="text" name="address" placeholder="Address" required >
                        </div>
                        <div class="form-field">
                            <input type="text" name="capacity" placeholder="Capacity e.g. 1000sqm">
                        </div>

                        <button class="site-btn">Submit</button>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
