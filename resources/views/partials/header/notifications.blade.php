<?php
/**
 * Created by PhpStorm.
 * User: danielserrick
 * Date: 2019-01-02
 * Time: 16:36
 */ ?>
@isset($notifications)
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true"
       aria-expanded="false">
        <i class="ti-bell font-20"></i>

    </a>
    <div class="dropdown-menu mailbox animated bounceInDown">
        <span class="with-arrow">
            <span class="bg-primary"></span>
        </span>
        <ul class="list-style-none">
            <li>
                <div class="drop-title bg-primary text-white">
                    <h4 class="m-b-0 m-t-5">{{ count($notifications) }} New</h4>
                    <span class="font-light">Notifications</span>
                </div>
            </li>
            <li>
                <div class="message-center notifications">
                    @foreach($notifications)
                        <!-- Message -->
                        <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-danger btn-circle">
                                                    <i class="fa fa-link"></i>
                                                </span>
                        <div class="mail-contnet">
                            <h5 class="message-title">Lannch Admin</h5>
                            <span class="mail-desc">Just see the my new admin!</span>
                            <span class="time">9:30 AM</span>
                        </div>
                    </a>
                    @endforeach
                </div>
            </li>
            <li>
                <a class="nav-link text-center m-b-5" href="{{ config('larateme::urls.notifications') }}">
                    <strong>Check all notifications</strong>
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        </ul>
    </div>
</li>
@endisset
