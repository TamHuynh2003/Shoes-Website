<!-- Header -->
<header>
    <div class="container-menu-desktop">
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar">
                    Chào Mừng Bạn Đến Với Website Của Chúng Tôi
                </div>

                <div class="right-top-bar flex-w h-full">
                    <a href="{{route('user_login')}}" class="flex-c-m trans-04 p-lr-25">
                        Đăng Nhập
                    </a>

                    {{-- <a href="#" class="flex-c-m trans-04 p-lr-25">
                        Login
                    </a>

                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        EN
                    </a>

                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        USD
                    </a> --}}
                </div>
            </div>
        </div>

        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop container">

                <a href="{{route('home')}}" class="logo">
                    <img src="{{asset('images/products/icons/logo-01.png')}}" alt="IMG-LOGO">
                </a>

                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li class="active-menu">
                            <a href="{{route('home')}}">Trang Chủ</a>
                        </li>

                        <li>
                            <a href="{{route('products')}}">Giày</a>
                        </li>

                        <li>
                            <a href="{{route('blog')}}">Blog</a>
                        </li>

                        <li>
                            <a href="{{route('about')}}">Về Chúng Tôi</a>
                        </li>

                        <li>
                            <a href="{{route('contact')}}">Liên Hệ</a>
                        </li>
                    </ul>
                </div>

                <div class="wrap-icon-header flex-w flex-r-m">
                    <div class="bor17 of-hidden pos-relative">
                        <input class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" name="search"
                            placeholder="Tìm kiếm">

                        <button class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                    </div>

                    <a href="{{route('cart')}}"
                        class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
                        data-notify="2">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </a>

                    <a href="{{route('wishlist')}}"
                        class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti"
                        data-notify="0">
                        <i class="zmdi zmdi-favorite-outline"></i>
                    </a>
                </div>
            </nav>
        </div>
    </div>

</header>