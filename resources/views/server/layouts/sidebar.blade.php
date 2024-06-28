<!--APP-SIDEBAR-->
<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <span style="text-align: center;">
                <a class="header-brand1" href="{{route('dashboards.index')}}">
                    <img src="{{ asset('admin_template/assets/images/brand/logo.png ') }}"
                        class="header-brand-img desktop-logo" alt="logo">
                    <img src="{{ asset('admin_template/assets/images/brand/logo-1.png') }}"
                        class="header-brand-img toggle-logo" alt="logo">
                    <img src="{{ asset('admin_template/assets/images/brand/logo-2.png') }}"
                        class="header-brand-img light-logo1" alt="logo">
                </a>
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">MT Shoes</span>
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg>
            </div>
            <ul class="side-menu">
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('dashboards.index')}}">
                        <i class="side-menu__icon fa fa-home"></i>
                        <span class="side-menu__label">Trang Chủ</span>
                    </a>
                </li>
                <li>
                    <h3>Chức Năng Quản Lý</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('admins.index')}}">
                        <i class="side-menu__icon fa fa-user-circle-o"></i>
                        <span class="side-menu__label">Quản Trị Viên</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('users.index')}}">
                        <i class="side-menu__icon fa fa-user-o"></i>
                        <span class="side-menu__label">Người Dùng</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('products.index')}}">
                        <i class="side-menu__icon fa fa-cube"></i>
                        <span class="side-menu__label">Sản Phẩm</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('providers.index')}}">
                        <i class="side-menu__icon fa fa-address-book"></i>
                        <span class="side-menu__label">Nhà Cung Cấp</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('purchases.index')}}">
                        <i class="side-menu__icon fa fa-cart-plus"></i>
                        <span class="side-menu__label">Hóa Đơn Nhập Hàng</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('orders.index')}}">
                        <i class="side-menu__icon fa fa-cart-arrow-down"></i>
                        <span class="side-menu__label">Hóa Đơn Bán Hàng</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('comments.index')}}">
                        <i class="side-menu__icon fa fa-comments"></i>
                        <span class="side-menu__label">Đánh Giá Sản Phẩm</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('discounts.index')}}">
                        <i class="side-menu__icon fa fa-ticket"></i>
                        <span class="side-menu__label">Mã Giảm Giá</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('categories.index')}}">
                        <i class="side-menu__icon fa fa-th-list"></i>
                        <span class="side-menu__label">Danh Mục Sản Phẩm</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide"
                        href="{{route('payment_methods.index')}}">
                        <i class="side-menu__icon fa fa-credit-card"></i>
                        <span class="side-menu__label">Phương Thức Thanh Toán</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('slideshows.index')}}">
                        <i class="side-menu__icon icon-screen-desktop"></i>
                        <span class="side-menu__label">SlideShows</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('colors.index')}}">
                        <i class="side-menu__icon ti-palette"></i>
                        <span class="side-menu__label">Màu Sắc</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('sizes.index')}}">
                        <i class="side-menu__icon ti-ruler-alt"></i>
                        <span class="side-menu__label">Kích Thước</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--/APP-SIDEBAR-->