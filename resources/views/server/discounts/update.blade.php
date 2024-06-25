@extends('server.master')

@section('content')

<div class="page-header">
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Mã Giảm Giá</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cập Nhật</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('discounts.update', ['id' => $discounts->id]) }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Mã Giảm Giá </label>

                        <div class="input-group input-group-merge">
                            <input type="text" name="name" value="{{ $discounts->name }}" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phần Trăm Giảm</label>

                        <div class="input-group input-group-merge">
                            <input type="number" name="amount" value="{{ $discounts->amount }}" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ngày Áp Dụng </label>

                        <div class="input-group input-group-merge">
                            <input type="date" name="start_date" value="{{ $discounts->start_date }}"
                                class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ngày Hết Hạn</label>

                        <div class="input-group input-group-merge">
                            <input type="date" name="end_date" value="{{ $discounts->end_date }}" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Loại Giảm Giá</label>

                        <select name="type_discounts_id" class="form-select">
                            @foreach ($type_discounts as $types)
                            <option value="{{ $types->id }}" @if ($types->id == $discounts->type_discounts_id) selected
                                @endif>
                                {{ $types->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Trạng Thái</label>
                        <select name="is_deleted" class="form-select">
                            @foreach ($is_deleted as $del)
                            <option value="{{ $del->id }}" @if ($del->id == $discounts->is_deleted) selected
                                @endif>
                                {{ $del->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Cập Nhật</button>
                            <a href="{{ route('discounts.index') }}" class="btn btn-outline-secondary">Trở Lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection