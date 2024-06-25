@extends('server.master')

@section('content')

<div class="page-header">
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Quản Trị Viên</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thêm Mới</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('admins.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Quản Trị </label>

                        <input type="text" name="fullname" value="{{ old('fullname') }}" class="form-control">

                        @error('fullname')
                        <div class="form-text" style="color:red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>

                        <input type="email" name="email" value="{{ old('email') }}" class="form-control">

                        @error('email')
                        <div class="form-text" style="color:red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Địa Chỉ</label>

                        <input type="text" name="address" value="{{ old('address') }}" class="form-control">

                        @error('address')
                        <div class="form-text" style="color:red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label"> Điện Thoại</label>

                        <input type="number" name="phone_number" value="{{ old('phone_number') }}" class="form-control">

                        @error('phone_number')
                        <div class="form-text" style="color:red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tài Khoản</label>

                        <input type="text" name="username" value="{{ old('username') }}" class="form-control">

                        @error('username')
                        <div class="form-text" style="color:red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mật Khẩu</label>

                        <input type="password" name="password" value="{{ old('password') }}" class="form-control">

                        @error('password')
                        <div class="form-text" style="color:red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ngày Sinh</label>

                        <input type="date" name="birth_date" value="{{ old('birth_date') }}" class="form-control">

                        @error('birth_date')
                        <div class="form-text" style="color:red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Lương</label>

                        <input type="number" name="salary" value="{{ old('salary') }}" class="form-control">

                        @error('salary')
                        <div class="form-text" style="color:red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ảnh Đại Diện</label>

                        <input type="file" name="avatar" value="{{ old('avatar') }}" class="form-control">

                        @error('avatar')
                        <div class="form-text" style="color:red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Giới Tính</label>

                        <select name="genders_id" class="form-select">
                            @foreach ($genders as $gender)
                            <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                            @endforeach
                        </select>

                        @error('genders_id')
                        <div class="form-text" style="color:red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                            <a href="{{ route('admins.index') }}" class="btn btn-outline-secondary">Trở Lại</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection