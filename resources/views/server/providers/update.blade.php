@extends('server.master')

@section('content')

<div class="page-header">
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Nhà Cung Cấp</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cập Nhật</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('providers.update', ['id' => $providers->id]) }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nhà Cung Cấp</label>

                        <div class="input-group input-group-merge">
                            <input type="text" name="name" value="{{ $providers->name }}" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Địa Chỉ</label>

                        <div class="input-group input-group-merge">
                            <input type="text" name="address" value="{{ $providers->address }}" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email </label>

                        <div class="input-group input-group-merge">
                            <input type="email" name="email" value="{{ $providers->email }}" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Điện Thoại </label>

                        <div class="input-group input-group-merge">
                            <input type="number" name="phone_number" value="{{ $providers->phone_number }}"
                                class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mô Tả</label>

                        <textarea class="form-control">{{ old('descriptions', $providers->descriptions) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Trạng Thái</label>
                        <select name="is_deleted" class="form-select">
                            @foreach ($is_deleted as $del)
                            <option value="{{ $del->id }}" @if ($del->id == $providers->is_deleted) selected
                                @endif>
                                {{ $del->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Cập Nhật</button>
                            <a href="{{ route('providers.index') }}" class="btn btn-outline-secondary">Trở Lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection