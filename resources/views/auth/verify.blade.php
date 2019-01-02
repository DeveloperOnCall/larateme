<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/images/favicon.png') }}">
    <title>{{ $title ?? trans('larateme::dashboard.home') }} | {{ config('app.name') }}</title>
    <!-- Custom CSS -->
    <link href="{{ asset('/dist/css/style.min.css') }}" rel="stylesheet">
@stack('styles')
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="main-wrapper">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url({{ asset('/assets/images/big/auth-bg.jpg') }}) no-repeat center center;">
        <div class="auth-box">
            <h3>@lang('larateme::dashboard.auth.verify.title')</h3>
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    @lang('larateme::dashboard.auth.verify.resent')
                </div>
            @endif

            @lang('larateme::dashboard.auth.verify.note')
            @lang('larateme::dashboard.auth.verify.resend_note'), <a
                    href="{{ route('verification.resend') }}">@lang('larateme::dashboard.auth.verify.resend')</a>.
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- All Required js -->
<!-- ============================================================== -->
<script src="{{ asset('/assets/libs/jquery/dist/jquery.min.js') }}../../assets"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('/assets/libs/popper.js/dist/umd/popper.min.js') }}../../assets"></script>
<script src="{{ asset('/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}../../assets"></script>
<!-- ============================================================== -->
<!-- This page plugin js -->
<!-- ============================================================== -->
<script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
</script>
@stack('scripts')
</body>

</html>