<div class="menu-sidebar__content js-scrollbar1 ps">
    <nav class="navbar-sidebar">
        <ul class="list-unstyled navbar__list">
            <li class="active has-sub">
                <a class="js-arrow" href="{{ asset('/') }}">
                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <li>
                <a href="{{ route('linh-vuc.danh-sach') }}">
                    <i class="fas fa-chart-bar"></i>Lĩnh vực</a>
            </li>
            
            <li>
                <a href="{{ route('cau-hoi.danh-sach') }}">
                    <i class="fas fa-chart-bar"></i>Câu hỏi</a>
            </li>

            <li>
                <a href="{{ route('user.danh-sach') }}">
                    <i class="fas fa-chart-bar"></i>Người chơi</a>

            <li>
                <a href="{{ route('goi-credit.danh-sach') }}">
                    <i class="fas fa-chart-bar"></i>Gói Credit</a>

            </li>
            <li>
                <a href="{{ route('lich-su-mua.danh-sach') }}">
                    <i class="fas fa-chart-bar"></i>Lịch Sử Mua Credit</a>

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