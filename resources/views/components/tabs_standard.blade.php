<?php
/**
 * Created by PhpStorm.
 * User: danielserrick
 * Date: 2019-01-03
 * Time: 01:00
 */?>
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    <?php
    $cnt = 0;
    ?>
    @foreach($tabs as $tab)
        <li class="nav-item">
            <a class="nav-link @if($cnt == 0) active @endif" data-toggle="tab" href="#home" role="tab">
                <span class="hidden-sm-up"><i class="ti-home"></i></span>
                <span class="hidden-xs-down">{{ $tab->title }}</span>
            </a>
        </li>
        <?php $cnt++; ?>
    @endforeach
    {{--<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Profile</span></a> </li>
    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Messages</span></a> </li>--}}
</ul>
<!-- Tab panes -->
<div class="tab-content tabcontent-border">

    @foreach($tabs as $tab)
        <?php
        $cnt = 0;
        ?>
            <div class="tab-pane @if($cnt == 0) active @else  p-20 @endif" id="{{ $tab->short }}" role="tabpanel">
                <div @if($cnt == 0) class="p-20" @endif>
                    <h3>{{ $tab->long }}</h3>
                    {!! $tab->content !!}
                </div>
            </div>
            <?php $cnt++; ?>
    @endforeach

</div>
