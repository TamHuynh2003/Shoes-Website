@extends('server.master')

@section('content')

<div class="page-header">

    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Đơn Hàng</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Thùng Rác</li>
        </ol>
    </div>

</div>

<div class="row">
    <div class="col-12 col-sm-12">
        <div class="card product-sales-main">
            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                <div>
                    <a href="{{route('orders.index')}}" class="btn btn-primary me-2">Trở Lại</a>

                </div>

            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="listOrders" class="table text-nowrap mb-0 table-bordered">
                        <thead class="table-head">
                            <tr>
                                <th>STT</th>
                                <th>Ngày Đặt Hàng</th>
                                <th>Tổng Tiền</th>
                                <th>Người Đặt</th>
                                <th>Mã giảm Giá</th>
                                <th>Thanh Toán</th>
                                <th>Trạng Thái</th>
                                <th>Chức Năng</th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            @foreach ($listOrders as $orders)
                            <tr>
                                <td><strong>{{ $loop->iteration }}</strong></td>

                                <td><span>{{ $orders->order_date }}</span></td>
                                <td><span>{{ $orders->total_price }}</span></td>

                                <td><span>{{ $orders->users->fullname }}</span></td>
                                <td><span>{{ $orders->discounts->name }}</span></td>

                                <td><span>{{ $orders->payment_methods->name }}</span></td>
                                <td><span style="color:red">{{ $orders->status->name }}</span></td>

                                <td>
                                    <div class="d-flex align-items-stretch">
                                        <!--Details-->
                                        <a class=" btn btn-sm btn-outline-info border me-2" data-bs-toggle="tooltip"
                                            href="{{route('orders.show',['id' => $orders->id])}}"
                                            data-bs-original-title=" Chi Tiết">
                                            <i class="fe fe-info"></i>
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

{{-- <script src="{{ asset('admin_template/assets/jquery-3.7.1.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#search').on('keyup', function(event) {
            if (event.key === 'Enter') {
                searchOrders();
            }
        });
    });

        function searchOrders() {
            let keyword = $j('#search').val();
            $j.ajax({
                url: "{{ route('orders.search') }}",
                type: 'POST',
                data: {
                    data: keyword,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    $j('#listOrders tbody').html(data);
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                }
            });
        }
</script> --}}

@endsection