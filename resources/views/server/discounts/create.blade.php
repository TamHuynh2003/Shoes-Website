@extends('server.master')

@section('content')

<div class="page-header">
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Mã Giảm Giá</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thêm Mới</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('discounts.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Mã Giảm Giá </label>

                        <input type="text" name="name" value="{{ old('name') }}" class="form-control">

                        @error('name')
                        <div class="form-text" style="color:red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phần Trăm Giảm</label>

                        <input type="number" name="amount" value="{{ old('amount') }}" class="form-control">

                        @error('amount')
                        <div class="form-text" style="color:red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ngày Áp Dụng</label>

                        <input type="date" name="start_date" value="{{ old('start_date') }}" class="form-control">

                        @error('start_date')
                        <div class="form-text" style="color:red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ngày Hết Hạn</label>

                        <input type="date" name="end_date" value="{{ old('end_date') }}" class="form-control">

                        @error('end_date')
                        <div class="form-text" style="color:red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Loại Giảm Giá</label>

                        <select name="type_discounts_id" class="form-select">
                            @foreach ($type_discounts as $types)
                            <option value="{{ $types->id }}">{{ $types->name }}</option>
                            @endforeach
                        </select>

                        @error('type_discounts_id')
                        <div class="form-text" style="color:red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                            <a href="{{ route('discounts.index') }}" class="btn btn-outline-secondary">Trở Lại</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection