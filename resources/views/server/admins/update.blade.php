@extends('server.master')

@section('content')

<div class="page-header">
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Quản Trị Viên</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cập Nhật</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('admins.update', ['id' => $admins->id]) }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Quản Trị</label>

                        <div class="input-group input-group-merge">
                            <input type="text" name="fullname" value="{{ $admins->fullname }}" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>

                        <div class="input-group input-group-merge">
                            <input type="email" name="email" value="{{ $admins->email }}" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Địa Chỉ</label>

                        <div class="input-group input-group-merge">
                            <input type="text" name="address" value="{{ $admins->address }}" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Điện Thoại</label>

                        <div class="input-group input-group-merge">
                            <input type="number" name="phone_number" value="{{ $admins->phone_number }}"
                                class="form-control">
                        </div>
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Tài Khoản</label>

                        <div class="input-group input-group-merge">
                            <input type="text" name="username" value="{{ $admins->username }}" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mật Khẩu</label>

                        <div class="input-group input-group-merge">
                            <input type="text" name="password" value="{{ $admins->password }}" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ngày Sinh </label>

                        <div class="input-group input-group-merge">
                            <input type="date" name="birth_date" value="{{ $admins->birth_date }}" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ảnh Đại Diện</label>

                        <div class="input-group input-group-merge">
                            <input type="file" name="avatar" class="form-control">
                        </div>
                        <br />
                        <img src="{{ asset($admins->avatar) }}" width="90px" height="90px" alt="Ảnh Đại Diện">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Lương </label>

                        <div class="input-group input-group-merge">
                            <input type="number" name="salary" value="{{ $admins->salary }}" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Giới Tính</label>

                        <select name="genders_id" class="form-select">
                            @foreach ($genders as $gender)
                            <option value="{{ $gender->id }}" @if ($gender->id == $admins->genders_id) selected @endif>
                                {{ $gender->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class=" mb-3">
                        <label class="form-label"> Trạng Thái</label>

                        <select name="status_id" class="form-select">
                            @foreach ($status as $sta)
                            <option value="{{ $sta->id }}" @if ($sta->id == $admins->status_id) selected @endif>
                                {{ $sta->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Cập Nhật</button>
                            <a href="{{ route('admins.index') }}" class="btn btn-outline-secondary">Trở Lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection