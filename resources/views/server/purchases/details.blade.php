@extends('server.master')

@section('content')

<div class="page-header">
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Hóa Đơn Nhập Hàng</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chi Tiết</li>
        </ol>
    </div>
</div>

<div class="card-header border-bottom">
    <div>
        <a href=" {{route('purchases.index')}}" class="btn btn-primary me-2">Trở Lại</a>
    </div>
</div>

<div class="card-body">
    <table id="listPurchases" class="table text-nowrap mb-0 table-bordered">
        <thead class="table-head">
            <tr>
                <th>STT</th>
                <th>Giày</th>
                <th>Giá Nhập</th>
                <th>Số Lượng</th>
                <th>Màu Sắc</th>
                <th>Kích Cỡ</th>
            </tr>
        </thead>
        <tbody class="table-body">
            @foreach ($listPurchaseDetails as $purchaseDetails)
            <tr>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $loop->iteration }}</strong>
                </td>

                <td>{{ $purchaseDetails->products->name }}</td>
                <td>{{ number_format($purchaseDetails->purchase_price )}}</td>

                <td>{{ $purchaseDetails->quantity }}</td>
                <td>{{ $purchaseDetails->colors->name }}</td>
                <td>{{ $purchaseDetails->sizes->name }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection