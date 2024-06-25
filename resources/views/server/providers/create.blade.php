@extends('server.master')

@section('content')

<div class="page-header">
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Nhà Cung Cấp</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thêm Mới</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('providers.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Nhà Cung Cấp </label>

                        <input type="text" name="name" value="{{ old('name') }}" class="form-control">

                        @error('name')
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
                        <label class="form-label">Email</label>

                        <input type="email" name="email" value="{{ old('email') }}" class="form-control">

                        @error('email')
                        <div class="form-text" style="color:red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Điện Thoại</label>

                        <input type="number" name="phone_number" value="{{ old('phone_number') }}" class="form-control">

                        @error('phone_number')
                        <div class="form-text" style="color:red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mô Tả</label>

                        <textarea name="descriptions" class="form-control">{{ old('descriptions') }}</textarea>

                        @error('descriptions')
                        <div class="form-text" style="color:red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                            <a href="{{ route('providers.index') }}" class="btn btn-outline-secondary">Trở Lại</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection