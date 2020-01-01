<div class="menu-sidebar__content js-scrollbar1 ps">
    <nav class="navbar-sidebar">
        <ul class="list-unstyled navbar__list">
            <li class="active has-sub">
                <a class="js-arrow" href="{{ asset('/') }}">
                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <li>
                <a href="{{ route('linh-vuc.danh-sach') }}">
                    <i class="fa fa-th-large" aria-hidden="true"></i></i>Lĩnh vực</a>
            </li>
            <li>
                <a href="{{ route('cau-hoi.danh-sach') }}">
                        <i class="fa fa-list-ol" aria-hidden="true"></i></i>Câu hỏi</a>
            </li>
            <li>
                <a href="{{ route('quan-tri-vien.danh-sach') }}">
                    <i class="fa fa-user" aria-hidden="true"></i>Admin</a>
            </li>
            <li>
                <a href="{{ route('user.danh-sach') }}">
                    <i class="fa fa-users" aria-hidden="true"></i></i>Người chơi</a>
            </li>
            <li>
                <a href="{{ route('luot-choi.danh-sach') }}">
                    <i class="fa fa-th-list" aria-hidden="true"></i></i>Lượt chơi</a>

            </li>
            <li>
                <a href="{{ route('goi-credit.danh-sach') }}">
                    <i class="fa fa-credit-card" aria-hidden="true"></i>Gói Credit</a>
            </li>
            <li>
                <a href="{{ route('lich-su-mua.danh-sach') }}">
                    <i class="fa fa-history" aria-hidden="true"></i>Lịch Sử Mua Credit</a>
            </li>
            <li>
                <a href="{{ route('cau-hinh-app.cau-hinh') }}">
                    <i class="fa fa-cog" aria-hidden="true"></i>Cấu Hình App</a>
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