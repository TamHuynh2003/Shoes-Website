@extends('server.master')

@section('content')

<div class="page-header">
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Người Dùng</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cập Nhật</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('users.update', ['id' => $users->id]) }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Người Dùng </label>

                        <div class="input-group input-group-merge">
                            <input type="text" name="fullname" value="{{ $users->fullname }}" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>

                        <div class="input-group input-group-merge">
                            <input type="email" name="email" value="{{ $users->email }}" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Địa Chỉ </label>

                        <div class="input-group input-group-merge">
                            <input type="text" name="address" value="{{ $users->address }}" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Điện Thoại </label>

                        <div class="input-group input-group-merge">
                            <input type="number" name="phone_number" value="{{ $users->phone_number }}"
                                class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mật Khẩu </label>

                        <div class="input-group input-group-merge">
                            <input type="text" name="password" value="{{ $users->password }}" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ngày Sinh </label>

                        <div class="input-group input-group-merge">
                            <input type="date" name="birth_date" value="{{ $users->birth_date }}" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ảnh Đại Diện</label>

                        <div class="input-group input-group-merge">
                            <input type="file" name="avatar" class="form-control">
                        </div>
                        <br />
                        <img src="{{ asset($users->avatar) }}" width="90px" height="90px" alt="Ảnh Đại Diện">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Giới Tính</label>

                        <select name="genders_id" class="form-select">
                            @foreach ($genders as $gender)
                            <option value="{{ $gender->id }}" @if ($gender->id == $users->genders_id) selected @endif>
                                {{ $gender->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class=" mb-3">
                        <label class="form-label"> Trạng Thái</label>

                        <select name="status_id" class="form-select">
                            @foreach ($status as $sta)
                            <option value="{{ $sta->id }}" @if ($sta->id == $users->status_id) selected @endif>
                                {{ $sta->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Cập Nhật</button>
                            <a href="{{ route('users.index') }}" class="btn btn-outline-secondary">Trở Lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection