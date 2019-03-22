<header class="header dark-bg">
    <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
    </div>
    <!--logo start-->
    <a href="index.html" class="logo"><span class="lite">@lang('index.admin')</span></a>
    <!--logo end-->
    <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
            <li>
                <form class="navbar-form">
                    <input class="form-control" placeholder="@lang('index.search')" type="text">
                </form>
            </li>
        </ul>
        <!--  search form end -->
    </div>
    <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <span class="profile-ava">
                <img alt="" src="{{ config('setting.img_folder') }}/avatar1_small.jpg">
                </span>
                <span class="username"></span>
                <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>

                </ul>
            </li>

        </ul>

    </div>
</header>
