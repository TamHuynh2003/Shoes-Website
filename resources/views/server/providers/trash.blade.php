@extends('server.master')

@section('content')

<div class="page-header">

    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Nhà Cung Cấp</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thùng Rác</li>
        </ol>
    </div>

</div>

<div class="row">
    <div class="col-12 col-sm-12">
        <div class="card product-sales-main">
            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                <div>
                    <a href="{{route('providers.index')}}" class="btn btn-primary me-2">Trở Lại</a>
                </div>

            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="data-table" class="table text-nowrap mb-0 table-bordered">
                        <thead class="table-head">
                            <tr>
                                <th>STT</th>
                                <th>Nhà Cung Cấp</th>
                                <th>Địa Chỉ</th>
                                <th>Điện Thoại</th>
                                <th>Trạng Thái</th>
                                <th>Chức Năng</th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            @foreach ($listProviders as $providers)
                            <tr>
                                <td><strong>{{ $loop->iteration }}</strong></td>
                                <td><span>{{ $providers->name }}</span></td>
                                <td><span>{{ $providers->address }}</span></td>
                                <td><span>{{ $providers->phone_number }}</span></td>
                                <td>
                                    <span style="color:red">Đã ngừng cung cấp</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-stretch">
                                        <!--Edit-->
                                        <a class="btn btn-sm btn-outline-primary border me-2" data-bs-toggle="tooltip"
                                            href="{{ route('providers.update', ['id' => $providers->id]) }}"
                                            data-bs-original-title="Khôi Phục">
                                            <i class="fe fe-rotate-ccw "></i>
                                        </a>
                                        <!--Details-->
                                        <a class=" btn btn-sm btn-outline-info border me-2" data-bs-toggle="tooltip"
                                            href="{{route('providers.show',['id' => $providers->id])}}"
                                            data-bs-original-title="Chi Tiết">
                                            <i class="fe fe-info "></i>
                                        </a>
                                        <!--Delete-->
                                        <a data-name="{{ $providers->name }}"
                                            class="btn btn-sm btn-outline-secondary border me-2 delete-link"
                                            data-bs-toggle="tooltip"
                                            data-route="{{ route('providers.delete', ['id' => $providers->id]) }}"
                                            data-bs-original-title="Xóa">
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
                    title: 'Xác Nhận Xóa Nhà Cung Cấp?',
                    text: 'Bạn có chắc muốn xóa nhà cung cấp ' + " '" + name + "' " + ' không?',
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