<div class="menu-sidebar__content js-scrollbar1 ps">
    <nav class="navbar-sidebar">
        <ul class="list-unstyled navbar__list">
            <li class="active has-sub">
                <a class="js-arrow" href="{{ asset('#') }}">
                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                    <li>
                        <a href="{{ asset('index.html') }}">Dashboard 1</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('linh-vuc.danh-sach') }}">
                    <i class="fas fa-chart-bar"></i>Lĩnh vực</a>
            </li>
        </ul>
    </nav>
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
    </div>
</div>