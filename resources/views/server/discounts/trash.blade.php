@extends('server.master')

@section('content')

<div class="page-header">

    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Mã Giảm Giá</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thùng Rác</li>
        </ol>
    </div>

</div>

<div class="row">
    <div class="col-12 col-sm-12">
        <div class="card product-sales-main">
            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                <div>
                    <a href="{{route('discounts.index')}}" class="btn btn-primary me-2">Trở Lại</a>
                </div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="data-table" class="table text-nowrap mb-0 table-bordered">
                        <thead class="table-head">
                            <tr>
                                <th>STT</th>
                                <th>Mã Giảm Giá</th>
                                <th>Phần Trăm Giảm</th>
                                <th>Loại Giảm</th>
                                <th>Ngày Áp Dụng </th>
                                <th>Ngày Hết Hạn</th>
                                <th>Trạng Thái</th>
                                <th>Chức Năng</th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            @foreach ($listDiscounts as $discounts)
                            <tr>
                                <td><strong>{{ $loop->iteration }}</strong></td>
                                <td><span>{{ $discounts->name }}</span></td>
                                <td><span>{{ $discounts->amount }} %</span></td>
                                <td><span>{{ $discounts->type_discounts->name }}</span></td>
                                <td>
                                    <span style="color:gold">{{ $discounts->start_date }}</span>
                                </td>
                                <td>
                                    <span style="color:gold">{{ $discounts->end_date}}</span>
                                </td>
                                <td>
                                    <span style="color:red">Đã hết áp dụng</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-stretch">
                                        <!--Edit-->
                                        <a class="btn btn-sm btn-outline-primary border me-2" data-bs-toggle="tooltip"
                                            href="{{ route('discounts.update', ['id' => $discounts->id]) }}"
                                            data-bs-original-title="Khôi Phục">
                                            <i class="fe fe-rotate-ccw "></i>
                                        </a>

                                        <!--Delete-->
                                        <a data-name="{{ $discounts->name }}"
                                            class="btn btn-sm btn-outline-secondary border me-2 delete-link"
                                            data-bs-toggle="tooltip"
                                            data-route="{{ route('discounts.delete', ['id' => $discounts->id]) }}"
                                            data-bs-original-title=" Xóa">
                                            <i class="fe fe-trash-2 "></i>
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.delete-link').forEach(function (link) {
            link.addEventListener('click', function (event) {
                event.preventDefault();

                var route = this.getAttribute('data-route');
                var name = this.getAttribute('data-name');

                Swal.fire({
                    title: 'Xác Nhận Xóa Mã Giảm Giá?',
                    text: 'Bạn có chắc muốn xóa mã giảm giá ' + " '" + name + "' " + ' không?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Xóa',
                    cancelButtonText: 'Hủy',
                }).then(function (result) {
                    if (result.isConfirmed) {
                        window.location.href = route;
                    }
                });
            });
        });
    });
</script>

@endsection