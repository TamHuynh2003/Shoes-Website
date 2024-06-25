@extends('client.master')

@section('content')

<!-- Slider -->
<section class="section-slide">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1" style="background-image: url({{asset('images/products/slide1.png')}});">
                {{-- <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                            <span class="ltext-101 cl2 respon2">
                                Giày Adidas 2024
                            </span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                Thiết Kế Mới
                            </h2>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                            <a href="{{route('products')}}"
                                class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Xem Giày
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="item-slick1" style="background-image: url({{asset('images/products/slide2.png')}});">
                {{-- <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                            <span class="ltext-101 cl2 respon2">
                                Giày Nike 2024
                            </span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                Màu Sắc Tươi Mới
                            </h2>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                            <a href="{{route('products')}}"
                                class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Xem Giày
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="item-slick1" style="background-image: url({{asset('images/products/slide3.png')}});">
                {{-- <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
                            <span class="ltext-101 cl2 respon2">
                                Giày Vans 2024
                            </span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                Thiết Kế Sang Trọng
                            </h2>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                            <a href="{{route('products')}}"
                                class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Xem Giày
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="item-slick1" style="background-image: url({{asset('images/products/slide4.png')}});">

            </div>
            {{-- <div class="item-slick1" style="background-image: url({{asset('images/products/slide5.png')}});">

            </div> --}}
        </div>
    </div>
</section>

<!-- Banner -->
<div class="sec-banner bg0 p-t-80 p-b-50">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="{{asset('images/products/banner1.png')}}" alt="IMG-BANNER">

                    <a href="{{route('products')}}"
                        class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                Nike Air Force
                            </span>
                            <span class="block1-info stext-102 trans-04">
                                Spring 2024
                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Mua Ngay
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="{{asset('images/products/banner2.png')}}" alt="IMG-BANNER">

                    <a href="{{route('products')}}"
                        class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                Adidas Supper Star
                            </span>

                            <span class="block1-info stext-102 trans-04">
                                Spring 2024
                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Mua Ngay
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="{{asset('images/products/banner3.png')}}" alt="IMG-BANNER">

                    <a href="{{route('products')}}"
                        class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                Vans Old Skool Classic
                            </span>

                            <span class="block1-info stext-102 trans-04">
                                Spring 2024
                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Mua Ngay
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="bg0 p-t-50 p-b-150">
    <div class="container">

        <div class="row isotope-grid">
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{asset('images/products/adidas1.png')}}" alt="IMG-PRODUCT">

                        <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Xem Giày
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Esprit Ruffle Shirt
                            </a>

                            <span class="stext-105 cl3">
                                16.64 VND
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04"
                                    src="{{asset('images/products/icons/icon-heart-01.png')}}" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                    src="{{asset('images/products/icons/icon-heart-02.png')}}" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{asset('images/products/adidas2.png')}}" alt="IMG-PRODUCT">

                        <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Xem Giày
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Herschel supply
                            </a>

                            <span class="stext-105 cl3">
                                35.31 VND
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04"
                                    src="{{asset('images/products/icons/icon-heart-01.png')}}" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                    src="{{asset('images/products/icons/icon-heart-02.png')}}" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{asset('images/products/adidas3.png')}}" alt="IMG-PRODUCT">

                        <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Xem Giày
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Only Check Trouser
                            </a>

                            <span class="stext-105 cl3">
                                25.50 VND
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04"
                                    src="{{asset('images/products/icons/icon-heart-01.png')}}" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                    src="{{asset('images/products/icons/icon-heart-02.png')}}" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{asset('images/products/adidas4.png')}}" alt="IMG-PRODUCT">

                        <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Xem Giày
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Classic Trench Coat
                            </a>

                            <span class="stext-105 cl3">
                                75.00 VND
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04"
                                    src="{{asset('images/products/icons/icon-heart-01.png')}}" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                    src="{{asset('images/products/icons/icon-heart-02.png')}}" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{asset('images/products/nike1.png')}}" alt="IMG-PRODUCT">

                        <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Xem Giày
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Front Pocket Jumper
                            </a>

                            <span class="stext-105 cl3">
                                34.75 VND
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04"
                                    src="{{asset('images/products/icons/icon-heart-01.png')}}" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                    src="{{asset('images/products/icons/icon-heart-02.png')}}" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item watches">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{asset('images/products/nike2.png')}}" alt="IMG-PRODUCT">

                        <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Xem Giày
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Vintage Inspired Classic
                            </a>

                            <span class="stext-105 cl3">
                                93.20 VND
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04"
                                    src="{{asset('images/products/icons/icon-heart-01.png')}}" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                    src="{{asset('images/products/icons/icon-heart-02.png')}}" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{asset('images/products/nike3.png')}}" alt="IMG-PRODUCT">

                        <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Xem Giày
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Shirt in Stretch Cotton
                            </a>

                            <span class="stext-105 cl3">
                                52.66 VND
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04"
                                    src="{{asset('images/products/icons/icon-heart-01.png')}}" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                    src="{{asset('images/products/icons/icon-heart-02.png')}}" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{asset('images/products/nike4.png')}}" alt="IMG-PRODUCT">

                        <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Xem Giày
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Pieces Metallic Printed
                            </a>

                            <span class="stext-105 cl3">
                                18.96 VND
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04"
                                    src="{{asset('images/products/icons/icon-heart-01.png')}}" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                    src="{{asset('images/products/icons/icon-heart-02.png')}}" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item shoes">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{asset('images/products/vans1.png')}}" alt="IMG-PRODUCT">

                        <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Xem Giày
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Converse All Star Hi Plimsolls
                            </a>

                            <span class="stext-105 cl3">
                                75.00 VND
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04"
                                    src="{{asset('images/products/icons/icon-heart-01.png')}}" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                    src="{{asset('images/products/icons/icon-heart-02.png')}}" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{asset('images/products/vans2.png')}}" alt="IMG-PRODUCT">

                        <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Xem Giày
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Femme T-Shirt In Stripe
                            </a>

                            <span class="stext-105 cl3">
                                25.85 VND
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04"
                                    src="{{asset('images/products/icons/icon-heart-01.png')}}" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                    src="{{asset('images/products/icons/icon-heart-02.png')}}" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{asset('images/products/vans3.png')}}" alt="IMG-PRODUCT">

                        <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Xem Giày
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Herschel supply
                            </a>

                            <span class="stext-105 cl3">
                                63.16 VND
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04"
                                    src="{{asset('images/products/icons/icon-heart-01.png')}}" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                    src="{{asset('images/products/icons/icon-heart-02.png')}}" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{asset('images/products/vans4.png')}}" alt="IMG-PRODUCT">

                        <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Xem Giày
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Herschel supply
                            </a>

                            <span class="stext-105 cl3">
                                63.15 VND
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04"
                                    src="{{asset('images/products/icons/icon-heart-01.png')}}" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                    src="{{asset('images/products/icons/icon-heart-02.png')}}" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{asset('images/products/puma1.png')}}" alt="IMG-PRODUCT">

                        <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Xem Giày
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                T-Shirt with Sleeve
                            </a>

                            <span class="stext-105 cl3">
                                18.49 VND
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04"
                                    src="{{asset('images/products/icons/icon-heart-01.png')}}" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                    src="{{asset('images/products/icons/icon-heart-02.png')}}" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{asset('images/products/puma2.png')}}" alt="IMG-PRODUCT">

                        <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Xem Giày
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Pretty Little Thing
                            </a>

                            <span class="stext-105 cl3">
                                54.79 VND
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04"
                                    src="{{asset('images/products/icons/icon-heart-01.png')}}" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                    src="{{asset('images/products/icons/icon-heart-02.png')}}" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item watches">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{asset('images/products/puma3.png')}}" alt="IMG-PRODUCT">

                        <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Xem Giày
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Mini Silver Mesh Watch
                            </a>

                            <span class="stext-105 cl3">
                                86.85 VND
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04"
                                    src="{{asset('images/products/icons/icon-heart-01.png')}}" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                    src="{{asset('images/products/icons/icon-heart-02.png')}}" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{asset('images/products/puma4.png')}}" alt="IMG-PRODUCT">

                        <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Xem Giày
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Square Neck Back
                            </a>

                            <span class="stext-105 cl3">
                                29.64 VND
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04"
                                    src="{{asset('images/products/icons/icon-heart-01.png')}}" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                    src="{{asset('images/products/icons/icon-heart-02.png')}}" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection