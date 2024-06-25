@extends('server.master')

@section('content')

<div class="page-header">
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Quản Trị Viên</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chi Tiết</li>
        </ol>
    </div>
</div>

<div class="card-header border-bottom">
    <div>
        <a href=" {{route('admins.index')}}" class="btn btn-primary me-2">Trở Lại</a>
    </div>
</div>

<div class="row">

    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-body">
                <form>

                    <div class="mb-3">
                        <label class="form-label"> Quản Trị</label>
                        <input type="text" value="{{$admins->fullname}}" readonly class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" value="{{$admins->email}}" readonly class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Địa Chỉ</label>
                        <input type="text" value="{{$admins->address}}" readonly class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Điện Thoại</label>
                        <input type="number" value="{{$admins->phone_number}}" readonly class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tài Khoản</label>
                        <input type="text" value="{{$admins->username}}" readonly class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mật Khẩu</label>
                        <input type="text" value="{{$admins->password}}" readonly class="form-control">
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-body">
                <form>

                    <div class="mb-3">
                        <label class="form-label">Ngày Sinh </label>
                        <input type="date" value="{{$admins->birth_date}}" readonly class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Lương</label>
                        <input type="number" value="{{$admins->salary}}" readonly class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Đăng Nhập </label>
                        <input type="text" value="{{$admins->login_at}}" readonly class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Giới Tính</label>
                        <input type="text" value="{{$admins->genders->name}}" readonly class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Chức Vụ</label>
                        <input type="text" value="{{$admins->roles->name}}" readonly class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Trạng Thái</label>
                        <input type="text" value="{{$admins->status->name}}" readonly class="form-control">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection