<?php
/**
 * Created by PhpStorm.
 * User: danielserrick
 * Date: 2019-01-03
 * Time: 00:46
 */?>

<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{ $title }}</h4>
        <div class="profiletimeline">
            @foreach($items as $item)
            <div class="sl-item">
                <div class="sl-left">
                    @isset($item->image)
                        <img src="{{ $item->image }}" alt="user" class="rounded-circle">
                    @else
                        <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle">
                    @endisset
                </div>
                <div class="sl-right">
                    <div>
                        <a href="{{ $item->author_url }}" class="link">{{ $item->author_username }}</a>
                        <span class="sl-date">{{ $item->timeAgo }}</span>
                        <p>{{ $item->summary }}
                            <a href="{{ $item->url }}"> @lang('View')</a>
                        </p>
                    </div>
                </div>
            </div>
            <hr>
            @endforeach
        </div>
    </div>
</div>


{{--
@include('larateme::components.card_timeline', ['class' => 'info', 'title' => 'Example Stat', 'items' => $items])
   --}}

{{-- Examples of timeline contents below

<div class="sl-item">
    <div class="sl-left">
        <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle"> </div>
    <div class="sl-right">
        <div>
            <a href="javascript:void(0)" class="link">John Doe</a>
            <span class="sl-date">5 minutes ago</span>
            <div class="m-t-20 row">
                <div class="col-md-3 col-12">
                    <img src="../../assets/images/big/img1.jpg" alt="user" class="img-fluid rounded">
                </div>
                <div class="col-md-9 col-12">
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                        nec odio. Praesent libero. Sed cursus ante dapibus diam. </p>
                    <a href="javascript:void(0)" class="btn btn-info"> Design weblayout</a>
                </div>
            </div>
            <div class="like-comm m-t-20">
                <a href="javascript:void(0)" class="link m-r-10">2 comment</a>
                <a href="javascript:void(0)" class="link m-r-10">
                    <i class="fa fa-heart text-danger"></i> 5 Love</a>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="sl-item">
    <div class="sl-left">
        <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle"> </div>
    <div class="sl-right">
        <div>
            <a href="javascript:void(0)" class="link">John Doe</a>
            <span class="sl-date">5 minutes ago</span>
            <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
                Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem
                at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce
                nec tellus sed augue semper </p>
        </div>
        <div class="like-comm m-t-20">
            <a href="javascript:void(0)" class="link m-r-10">2 comment</a>
            <a href="javascript:void(0)" class="link m-r-10">
                <i class="fa fa-heart text-danger"></i> 5 Love</a>
        </div>
    </div>
</div>
<hr>
<div class="sl-item">
    <div class="sl-left">
        <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle"> </div>
    <div class="sl-right">
        <div>
            <a href="javascript:void(0)" class="link">John Doe</a>
            <span class="sl-date">5 minutes ago</span>
            <blockquote class="m-t-10">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
            </blockquote>
        </div>
    </div>
</div>

--}}
