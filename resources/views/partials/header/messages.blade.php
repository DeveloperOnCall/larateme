<?php
/**
 * Created by PhpStorm.
 * User: danielserrick
 * Date: 2019-01-02
 * Time: 16:52
 */?>
@isset($messages)
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="font-20 ti-email"></i>

    </a>
    <div class="dropdown-menu mailbox animated bounceInDown" aria-labelledby="2">
        <span class="with-arrow">
            <span class="bg-danger"></span>
        </span>
        <ul class="list-style-none">
            <li>
                <div class="drop-title bg-danger text-white">
                    <h4 class="m-b-0 m-t-5">{{ count($messages) }} New</h4>
                    <span class="font-light">Messages</span>
                </div>
            </li>
            <li>
                <div class="message-center message-body">
                    <!-- Message -->
                    <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img">
                                                    <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle">
                                                    <span class="profile-status online pull-right"></span>
                                                </span>
                        <div class="mail-contnet">
                            <h5 class="message-title">Pavan kumar</h5>
                            <span class="mail-desc">Just see the my admin!</span>
                            <span class="time">9:30 AM</span>
                        </div>
                    </a>
                    <!-- Message -->
                    <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img">
                                                    <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle">
                                                    <span class="profile-status busy pull-right"></span>
                                                </span>
                        <div class="mail-contnet">
                            <h5 class="message-title">Sonu Nigam</h5>
                            <span class="mail-desc">I've sung a song! See you at</span>
                            <span class="time">9:10 AM</span>
                        </div>
                    </a>
                    <!-- Message -->
                    <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img">
                                                    <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle">
                                                    <span class="profile-status away pull-right"></span>
                                                </span>
                        <div class="mail-contnet">
                            <h5 class="message-title">Arijit Sinh</h5>
                            <span class="mail-desc">I am a singer!</span>
                            <span class="time">9:08 AM</span>
                        </div>
                    </a>
                    <!-- Message -->
                    <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img">
                                                    <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle">
                                                    <span class="profile-status offline pull-right"></span>
                                                </span>
                        <div class="mail-contnet">
                            <h5 class="message-title">Pavan kumar</h5>
                            <span class="mail-desc">Just see the my admin!</span>
                            <span class="time">9:02 AM</span>
                        </div>
                    </a>
                </div>
            </li>
            <li>
                <a class="nav-link text-center link" href="javascript:void(0);">
                    <b>See all e-Mails</b>
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        </ul>
    </div>
</li>
@endisset
