@extends('server.master')

@section('content')

<div class="page-header">

    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Hóa Đơn Nhập Hàng</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thùng Rác</li>
        </ol>
    </div>

</div>

<div class="row">
    <div class="col-12 col-sm-12">
        <div class="card product-sales-main">
            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                <div>
                    <a href="{{route('purchases.index')}}" class="btn btn-primary me-2">Trở Lại</a>

                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="listPurchases" class="table text-nowrap mb-0 table-bordered">
                        <thead class="table-head">
                            <tr>
                                <th>STT</th>
                                <th>Ngày Tạo</th>
                                <th>Tổng Tiền</th>
                                <th>Người Tạo</th>
                                <th>Nhà Cung Cấp</th>
                                <th>Trạng Thái</th>
                                <th>Chức Năng</th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            @foreach ($listPurchases as $purchases)
                            <tr>
                                <td>
                                    <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $loop->iteration}}</strong>
                                </td>

                                <td>{{ $purchases->purchase_date }}</td>
                                <td>{{ $purchases->total_price }}</td>

                                <td>{{ $purchases->admins->fullname }}</td>
                                <td>{{ $purchases->providers->name }}</td>
                                <td>
                                    <span style="color:red">{{ $purchases->status->name }}</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-stretch">
                                        <!--Details-->
                                        <a class=" btn btn-sm btn-outline-info border me-2" data-bs-toggle="tooltip"
                                            href="{{ route('purchases.show', ['id' => $purchases->id]) }}"
                                            data-bs-original-title="Chi Tiết">
                                            <i class="fe fe-info "></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection