<?php
/**
 * Created by PhpStorm.
 * User: danielserrick
 * Date: 2019-01-02
 * Time: 17:08
 */?>
<li>
    <!-- User Profile-->
    <div class="user-profile dropdown m-t-20">
        <div class="user-pic">
            <img src="{{ get_gravatar(auth()->user()->email) }}" alt="users" class="rounded-circle img-fluid" />
        </div>
        <div class="user-content hide-menu m-t-10">
            <h5 class="m-b-10 user-name font-medium">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</h5>
            <a href="javascript:void(0)" class="btn btn-circle btn-sm m-r-5" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true"
               aria-expanded="false">
                <i class="ti-settings"></i>
            </a>
            <a href="{{ route('logout') }}" title="Logout" class="btn btn-circle btn-sm"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="ti-power-off"></i>
            </a>
            <div class="dropdown-menu animated flipInY" aria-labelledby="Userdd">
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
            </div>
        </div>
    </div>
    <!-- End User Profile-->
</li>
