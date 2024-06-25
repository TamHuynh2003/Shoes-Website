@extends('server.master')

@section('content')

<div class="page-header">
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Danh Mục Sản Phẩm</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cập Nhật</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('categories.update', ['id' => $categories->id]) }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Danh Mục Sản Phẩm </label>

                        <div class="input-group input-group-merge">
                            <input type="text" name="name" value="{{ $categories->name }}" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Trạng Thái</label>
                        <select name="is_deleted" class="form-select">
                            @foreach ($is_deleted as $del)
                            <option value="{{ $del->id }}" @if ($del->id == $categories->is_deleted) selected
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