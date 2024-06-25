@extends('client.master')

@section('content')

<!-- Shoping Cart -->
<form class="bg0 p-t-200 p-b-85">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-xl-9">
                <div class="m-r--30">
                    <div class="wrap-table-shopping-cart">
                        <table class="table-shopping-cart">
                            <tr class="table_head">
                                <th class="column-1">Ảnh</th>
                                <th class="column-0">Giày</th>
                                <th class="column-5">Số Lượng</th>
                                <th class="column-5">Giá</th>
                                <th class="column-5">Xóa</th>
                            </tr>

                            <tr class="table_row">
                                <td class="column-1">
                                    <div class="how-itemcart1">
                                        <img src="{{asset('user_template/images/item-cart-04.jpg')}}" alt="IMG">
                                    </div>
                                </td>
                                <td class="column-3"> Strawberries</td>
                                <td class="column-4">
                                    <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                        </div>

                                        <input class="mtext-104 cl3 txt-center num-product" type="number"
                                            name="num-product1" readonly value="1">

                                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-plus"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="column-5"> 36.00</td>
                                <td class="column-5">X</td>
                            </tr>
                        </table>
                    </div>

                    <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                        <div class="flex-w flex-m m-r-20 m-tb-5">
                            {{-- <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text"
                                name="coupon" placeholder="Mã Giảm Giá">

                            <div
                                class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                                Áp Dụng
                            </div> --}}
                        </div>
                        <div class="form-group">
                            <a href="{{route('products')}}"
                                class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                                Tiếp Tục Mua Hàng
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>
@endsection