<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="index-2.html"><img src="{{ asset('assets/admin/img/logo.png') }}" alt></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="mm-active">
            <a href="{{ url('admin') }}" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('assets/admin/img/menu-icon/dashboard.svg') }}" alt>
                </div>
                <span>Dashboard</span>
            </a>
        </li>
        <li class>
            <a href="{{ url('admin/users') }}" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('assets/admin/img/menu-icon/2.svg') }}" alt>
                </div>
                <span>User</span>
            </a>
        </li>
        <li class>
            <a href="{{ url('admin/products') }}" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('assets/admin/img/menu-icon/3.svg') }}" alt>
                </div>
                <span>Sản phẩm</span>
            </a>
        </li>
        <li class>
            <a href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('assets/admin/img/menu-icon/4.svg') }}" alt>
                </div>
                <span>forms</span>
            </a>
        </li>
        <li class>
            <a href="Board.html" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('assets/admin/img/menu-icon/5.svg') }}" alt>
                </div>
                <span>Board</span>
            </a>
        </li>
        <li class>
            <a href="invoice.html" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('assets/admin/img/menu-icon/6.svg') }}" alt>
                </div>
                <span>Invoice</span>
            </a>
        </li>

</nav>