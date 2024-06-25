@extends('client.master')

@section('content')
<div class="css_update">
    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12">
                    {{-- <div class="border p-4 rounded" role="alert">
                        Returning customer? <a href="#">Click here</a> to login
                    </div> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                    <h2 class="h3 mb-3 text-black">Thông Tin Khách Hàng</h2>
                    <div class="p-3 p-lg-5 border">

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="c_fname" class="text-black">Họ <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_fname" name="c_fname">
                            </div>
                            <div class="col-md-6">
                                <label for="c_lname" class="text-black">Tên <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_lname" name="c_lname">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_address" class="text-black">Địa Chỉ Nhận Hàng <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_address" name="c_address">
                            </div>
                        </div>

                        <div class="form-group row mb-5">
                            <div class="col-md-6">
                                <label for="c_email_address" class="text-black">Email liên hệ <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_email_address" name="c_email_address">
                            </div>
                            <div class="col-md-6">
                                <label for="c_phone" class="text-black">Số Điện Thoại <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_phone" name="c_phone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="c_order_notes" class="text-black">Lời Nhắn Tới Shop</label>
                            <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control"
                                placeholder=""></textarea>
                        </div>
                        <div class="flex-w flex-sb-m">
                            <div class="form-group">
                                <a href="{{route('cart')}}"
                                    class="flex-c-m stext-101 cl0 size-119 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                                    Trở Lại
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h2 class="h3 mb-3 text-black">Chi Tiết Đơn Hàng</h2>
                            <div class="p-3 p-lg-5 border">
                                <table class="table site-block-order-table mb-5">
                                    <thead>
                                        <th>Giày</th>
                                        <th> Giá</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Top Up T-Shirt <strong class="mx-2">x</strong> 1</td>
                                            <td>350.000 VND</td>
                                        </tr>
                                        <tr>
                                            <td>Polo Shirt <strong class="mx-2">x</strong> 1</td>
                                            <td>500.000 VND</td>
                                        </tr>

                                        <tr>
                                            <td class="text-black font-weight-bold"><strong>Tổng</strong></td>
                                            <td class="text-black font-weight-bold"><strong>850.000 VND</strong></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="border p-3 mb-3">
                                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank"
                                            role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank
                                            Transfer</a></h3>

                                    <div class="collapse" id="collapsebank">
                                        <div class="py-2">
                                            <p class="mb-0">Make your payment directly into our bank account. Please use
                                                your Order ID as the payment reference. Your order won’t be shipped
                                                until
                                                the funds have cleared in our account.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="border p-3 mb-3">
                                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque"
                                            role="button" aria-expanded="false" aria-controls="collapsecheque">Cheque
                                            Payment</a></h3>

                                    <div class="collapse" id="collapsecheque">
                                        <div class="py-2">
                                            <p class="mb-0">Make your payment directly into our bank account. Please use
                                                your Order ID as the payment reference. Your order won’t be shipped
                                                until
                                                the funds have cleared in our account.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="border p-3 mb-5">
                                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal"
                                            role="button" aria-expanded="false"
                                            aria-controls="collapsepaypal">Paypal</a>
                                    </h3>

                                    <div class="collapse" id="collapsepaypal">
                                        <div class="py-2">
                                            <p class="mb-0">Make your payment directly into our bank account. Please use
                                                your Order ID as the payment reference. Your order won’t be shipped
                                                until
                                                the funds have cleared in our account.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button
                                        class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">Thanh
                                        Toán</button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- </form> -->
        </div>
    </div>
</div>
{{-- <div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <span class="icon-check_circle display-3 text-success"></span>
                <h2 class="display-3 text-black">Cảm Ơn Bạn Đã Đặt Hàng Ở Website Của Chúng Tôi</h2>
                <p class="lead mb-5">Đơn Hàng Của Bạn Đã Được Chúng Tôi Lên Đơn</p>
                <p><a href="shop.html" class="btn btn-sm btn-primary">Quay Lại Mua Sắp</a></p>
            </div>
        </div>
    </div>
</div> --}}
@endsection