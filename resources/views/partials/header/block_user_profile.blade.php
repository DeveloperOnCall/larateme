<?php
/**
 * Created by PhpStorm.
 * User: danielserrick
 * Date: 2019-01-01
 * Time: 14:56
 */?>
<!-- ============================================================== -->
<!-- User profile and search -->
<!-- ============================================================== -->
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true"
       aria-expanded="false">
        <img src="{{ get_gravatar(Auth()->user()->email) }}" alt="user" class="rounded-circle" width="31">
    </a>
    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
        <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
            <div class="">
                <img src="{{ get_gravatar(Auth()->user()->email) }}" alt="{{ Auth::user()->name }}" class="img-circle" width="60">
            </div>
            <div class="m-l-10">
                <h4 class="m-b-0">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</h4>
                <p class=" m-b-0">{{{ isset(Auth::user()->email) ? Auth::user()->email : Auth::user()->email }}}</p>
            </div>
        </div>
        <a class="dropdown-item" href="javascript:void(0)">
            <i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
        {{--<a class="dropdown-item" href="javascript:void(0)">
            <i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>--}}
        <a class="dropdown-item" href="javascript:void(0)">
            <i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="javascript:void(0)">
            <i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
        <div class="dropdown-divider"></div>
        <div class="p-l-30 p-10">
            <a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a>
        </div>
    </div>
</li>
<!-- ============================================================== -->
<!-- User profile and search -->
<!-- ============================================================== -->
