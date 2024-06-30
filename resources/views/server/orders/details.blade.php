@extends('server.master')

@section('content')

<div class="page-header">
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"> Đơn Hàng</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chi Tiết</li>
        </ol>
    </div>
</div>

<div class="card-header border-bottom">
    <div>
        <a href=" {{route('orders.index')}}" class="btn btn-primary me-2">Trở Lại</a>
    </div>
</div>

<div class="card-body">
    <table id="listPurchases" class="table text-nowrap mb-0 table-bordered">
        <thead class="table-head">
            <tr>
                <th>STT</th>
                <th>Giày</th>
                <th>Giá</th>
                <th>Số Lượng</th>
                <th>Màu Sắc</th>
                <th>Kích Cỡ</th>
            </tr>
        </thead>
        <tbody class="table-body">
            @foreach ($listOrderDetails as $orderDetails)
            <tr>
                <td>
                    <i class="fab fa-angular fa-lg text-danger me-3"></i>
                    <strong>{{ $loop->iteration }}</strong>
                </td>

                <td>{{ $orderDetails->products->name }}</td>
                <td>{{number_format( $orderDetails->selling_price )}}</td>

                <td>{{ $orderDetails->quantity }}</td>
                <td>{{ $orderDetails->colors->name }}</td>
                <td>{{ $orderDetails->sizes->name }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection