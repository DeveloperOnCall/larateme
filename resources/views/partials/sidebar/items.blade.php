<?php
/**
 * Created by PhpStorm.
 * User: danielserrick
 * Date: 2019-01-02
 * Time: 17:09
 */?>

{{--  For each to build the side bar menu  --}}
<li class="sidebar-item">
    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
        <i class="icon-Mailbox-Empty"></i>
        <span class="hide-menu">Inbox </span>
    </a>
    <ul aria-expanded="false" class="collapse  first-level">
        <li class="sidebar-item">
            <a href="inbox-email.html" class="sidebar-link">
                <i class="mdi mdi-email"></i>
                <span class="hide-menu"> Email </span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="inbox-email-detail.html" class="sidebar-link">
                <i class="mdi mdi-email-alert"></i>
                <span class="hide-menu"> Email Detail </span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="inbox-email-compose.html" class="sidebar-link">
                <i class="mdi mdi-email-secure"></i>
                <span class="hide-menu"> Email Compose </span>
            </a>
        </li>
    </ul>
</li>
