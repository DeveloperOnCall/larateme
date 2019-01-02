<?php
/**
 * Created by PhpStorm.
 * User: danielserrick
 * Date: 2019-01-03
 * Time: 00:38
 */?>

<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <div class="m-r-10">
                <span class="btn btn-circle btn-lg bg-{{ $class }}">
                    <i class="ti-{{ $icon }} text-white"></i>
                </span>
            </div>
            <div>
                {{ $title }}
            </div>
            <div class="ml-auto">
                <h2 class="m-b-0 font-light">{{ $stat }}</h2>
            </div>
        </div>
    </div>
</div>

{{--
@include('larateme::components.stat_card', ['class' => 'info', 'icon'=> 'clipboard', 'title' => 'Example Stat', 'stat' => 233])
   --}}