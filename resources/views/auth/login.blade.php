@extends('larateme::auth.layout', ['title' => trans('larateme::dashboard.auth.login.title')])

@section('content')
    <div id="loginform">
        <div class="logo">
            <span class="db"><img src="{{ asset('/images/logo-icon.png') }}" alt="{{ config('app.name') }}" /></span>
            <h5 class="font-medium m-b-20">@lang('Sign In to Admin')</h5>
        </div>
        <!-- Form -->
        <div class="row">
            <div class="col-12">
                <p>
                    @lang('larateme::dashboard.auth.login.message')
                </p>
                @if ($errors->has('email'))
                    <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                @endif
                @if ($errors->has('password'))
                    <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                @endif
                <form class="form-horizontal m-t-20" id="loginform" action="{{ config('larateme.urls.login') }}">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">@lang('larateme::dashboard.auth.login.remember')</label>
                                <a href="javascript:void(0)" id="to-recover" class="text-dark float-right"><i class="fa fa-lock m-r-5"></i> @lang('larateme::dashboard.auth.login.forgot')?</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <div class="col-xs-12 p-b-20">
                            <button class="btn btn-block btn-lg btn-info" type="submit">@lang('larateme::dashboard.auth.login.title')</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                            <div class="social">
                                {!! $social ?? '' !!}
                                <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="" data-original-title="Login with Facebook"> <i aria-hidden="true" class="fab  fa-facebook"></i> </a>
                                <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="" data-original-title="Login with Google"> <i aria-hidden="true" class="fab  fa-google-plus"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-b-0 m-t-10">
                        <div class="col-sm-12 text-center">
                            @lang('larateme::dashboard.auth.login.register')? <a href="{{ config('larateme.urls.register') }}" class="text-info m-l-5"><b>Sign Up</b></a>
                        </div>
                    </div>
                    @csrf
                </form>
                {!! $social ?? '' !!}
            </div>
        </div>
    </div>
    <div id="recoverform">
        <div class="logo">
            <span class="db"><img src="{{ asset('/images/logo-icon.png') }}" alt="{{ config('app.name') }}" /></span>
            <h5 class="font-medium m-b-20">Recover Password</h5>
            <span>Enter your Email and instructions will be sent to you!</span>
        </div>
        <div class="row m-t-20">
            <!-- Form -->
            <form class="col-12" action="{{ config('larateme.urls.login') }}">
                <!-- email -->
                <div class="form-group row">
                    <div class="col-12">
                        <input class="form-control form-control-lg" type="email" required="" placeholder="Username">
                    </div>
                </div>
                <!-- pwd -->
                <div class="row m-t-20">
                    <div class="col-12">
                        <button class="btn btn-block btn-lg btn-danger" type="submit" name="action">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection