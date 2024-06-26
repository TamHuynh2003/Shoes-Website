@extends('server.master')

@section('content')

<div class="page-header">
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Quản Trị Viên</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thùng Rác</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-12 col-sm-12">
        <div class="card product-sales-main">
            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                <div>
                    <a href="{{route('admins.index')}}" class="btn btn-primary me-2">Trở Lại</a>
                </div>

            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="data-table" class="table text-nowrap mb-0 table-bordered">
                        <thead class="table-head">
                            <tr>
                                <th>STT</th>
                                <th>Quản Trị </th>
                                <th>Địa Chỉ</th>
                                <th>Điện Thoại</th>
                                <th>Ảnh</th>
                                <th>Đăng Nhập </th>
                                <th>Trạng Thái</th>
                                <th>Chức Năng</th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            @foreach ($listAdmins as $admins)
                            <tr>
                                <td><strong>{{ $loop->iteration }}</strong></td>
                                <td><span>{{ $admins->fullname }}</span></td>
                                <td><span>{{ $admins->address }}</span></td>
                                <td><span>{{ $admins->phone_number }}</span></td>
                                <td>
                                    <ul class=" users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" title=""
                                            data-bs-original-title="{{ $admins->fullname }}">
                                            <img src="{{ asset($admins->avatar) }}" alt="Aatar" class="rounded-circle">
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <span style="color:gold">{{ $admins->login_at }}</span>
                                </td>
                                <td>
                                    <span style="color:red">{{ $admins->status->name }}</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-stretch">
                                        <!--Edit-->
                                        <a class="btn btn-sm btn-outline-primary border me-2"
                                            href="{{ route('admins.update', ['id' => $admins->id]) }}"
                                            data-bs-toggle="tooltip" data-bs-original-title="Khôi Phục">
                                            <i class="fe fe-rotate-ccw"></i>
                                        </a>
                                        <!--Details-->
                                        <a class=" btn btn-sm btn-outline-info border me-2" data-bs-toggle="tooltip"
                                            href="{{route('admins.show',['id' => $admins->id])}}"
                                            data-bs-original-title=" Chi Tiết">
                                            <i class="fe fe-info me"></i>
                                        </a>
                                        <!--Delete-->
                                        <a data-name="{{ $admins->fullname }}"
                                            class="btn btn-sm btn-outline-secondary border me-2 delete-link"
                                            data-bs-toggle="tooltip"
                                            data-route="{{ route('admins.delete', ['id' => $admins->id]) }}"
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
                    title: 'Xác Nhận Xóa Tài Khoản?',
                    text: 'Bạn có chắc muốn xóa tài khoản ' + " '" + name + "' " + ' không?',
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