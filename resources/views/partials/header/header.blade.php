<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                <i class="ti-menu ti-close"></i>
            </a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <!-- Logo icon -->
                <b class="logo-icon">
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="{{ config('larateme.images.logo-icon') }}" alt="{{ config('app.name') }}" class="dark-logo" />
                    <!-- Light Logo icon -->
                    <img src="{{ config('larateme.images.logo-light-icon') }}" alt="{{ config('app.name') }}" class="light-logo" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
               {{-- <span class="logo-text">--}}
                    <!-- dark Logo text -->
                        {{--<img src="{{ config('larateme.images.logo-text') }}" alt="{{ config('app.name') }}" class="dark-logo" />--}}
                    <!-- Light Logo text -->
                        {{--<img src="{{ config('larateme.images.logo-text-light') }}" class="light-logo" alt="{{ config('app.name') }}" />--}}
                {{--</span>--}}
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="ti-more"></i>
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-left mr-auto">
                <li class="nav-item d-none d-md-block">
                    <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                        <i class="sl-icon-menu font-20"></i>
                    </a>
                </li>
                <!-- ============================================================== -->
                <!-- Notifications/Messages -->
                <!-- ============================================================== -->
                @foreach (config('larateme.appearance.header.left') as $item)
                    @include($item)
                @endforeach

                <!-- ============================================================== -->
                <!-- End Notifications -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Messages -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Messages -->
                <!-- ============================================================== -->


            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-right">

            @foreach (config('larateme.appearance.header.right') as $item)
                @include($item)
            @endforeach

            </ul>
        </div>
    </nav>
</header>
