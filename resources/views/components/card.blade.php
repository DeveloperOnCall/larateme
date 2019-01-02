<?php
/**
 * Created by PhpStorm.
 * User: danielserrick
 * Date: 2019-01-02
 * Time: 18:21
 */?>
<!-- Card -->
<div class="card">
    @isset($image)
        <img class="card-img-top img-responsive" src="{{ $image }}" @isset($image_alt) alt="{{ $image_alt }}" @endisset >
    @endisset
    <div class="card-body">
        @isset($title)<h4 class="card-title">{{ $title }}</h4> @endisset
        <p class="card-text">{{ $card_text }}</p>
        @isset($card_link_text)
            <a href="{{ $card_link_text }}" class="btn btn-primary">{{ $card_link_text }}</a>
        @endisset
    </div>
</div>
<!-- Card -->
