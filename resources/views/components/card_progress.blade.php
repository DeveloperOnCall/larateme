<?php
/**
 * Created by PhpStorm.
 * User: danielserrick
 * Date: 2019-01-03
 * Time: 00:56
 */?>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h3>{{ $percent }}%</h3>
                <h6 class="card-subtitle">{{ $title }}</h6>
            </div>
            <div class="col-12">
                <div class="progress">
                    <div class="progress-bar bg-{{ $class }}" role="progressbar" style="width: {{ $percent }}%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
</div>


