@extends('larateme::auth.layout', ['title' => trans('larateme::dashboard.auth.email.title')])

@section('content')

    <div>
        <div class="logo">
            <span class="db"><img src="{{ asset('/assets/images/logo-icon.png') }}" alt="logo" /></span>
            <h5 class="font-medium m-b-20">@lang('larateme::dashboard.auth.email.message')</h5>
        </div>
        <!-- Form -->
        <div class="row">
            <div class="col-12">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <form class="form-horizontal m-t-20" action="{{ url(config('larateme.urls.password_email', 'password/email')) }}">
                    <div class="form-group row">
                        <div class="col-12">
                            <input class="form-control form-control-lg" type="text" required="" placeholder="@lang('larateme::dashboard.auth.email.email')">
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <div class="col-xs-12 p-b-20">
                            <button class="btn btn-block btn-lg btn-info" type="submit">{{ trans('larateme::dashboard.auth.email.submit') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection