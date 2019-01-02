@extends('larateme::auth.layout', ['title' => trans('dashboard.auth.register.title')])

@section('content')
    <div>
        <div class="logo">
            <span class="db"><img src="{{ config('larateme.images.logo-icon') }}" alt="logo" /></span>
            <h5 class="font-medium m-b-20">Sign Up to Admin</h5>
        </div>
        <!-- Form -->
        <div class="row">
            <div class="col-12">
                <form class="form-horizontal m-t-20" action="{{ url(config('larateme.urls.register')) }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group row ">
                        <div class="col-12 ">
                            <input class="form-control form-control-lg" type="text" required=" " placeholder="@lang('larateme::dashboard.auth.register.name')">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12 ">
                            <input class="form-control form-control-lg" type="text" required=" " placeholder="@lang('larateme::dashboard.auth.register.email')">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12 ">
                            <input class="form-control form-control-lg" type="password" required=" " placeholder="@lang('larateme::dashboard.auth.register.password')">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12 ">
                            <input class="form-control form-control-lg" type="password" required=" " placeholder="@lang('larateme::dashboard.auth.register.password_confirmation')">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 ">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">I agree to all <a target="_blank" href="{{ config('larateme.urls.terms') }}">Terms</a></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center ">
                        <div class="col-xs-12 p-b-20 ">
                            <button class="btn btn-block btn-lg btn-info " type="submit ">@lang('larateme::dashboard.auth.register.submit')</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0 m-t-10 ">
                        <div class="col-sm-12 text-center ">
                            Already have an account? <a href="{{ url(config('larateme.urls.login', 'login')) }}" class="text-info m-l-5 "><b>@lang('larateme::dashboard.auth.register.login.title')</b></a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection