@extends('server.master')

@section('content')

<div class="page-header">
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Sản Phẩm</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cập Nhật</li>
        </ol>
    </div>
</div>
<form method="POST" action="{{ route('products.update', ['id' => $products->id]) }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label">Giày </label>

                        <input type="text" name="name" value="{{ $products->name }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Giá Nhập</label>

                        <input type="number" name="purchase_price" value="{{ $products->purchase_price }}"
                            class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Giá Bán</label>

                        <div class="input-group input-group-merge">
                            <input type="number" name="selling_price" value="{{ $products->selling_price }}"
                                class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ảnh Giày</label>

                        <input type="file" name="images[]" multiple value="{{ $products->images }}"
                            class="form-control">
                    </div>
                    <br />
                    <img src="{{ asset('images/products/'.$products->images) }}" width="90px" height="90px"
                        alt="Ảnh Giày">
                    <div class="mb-3">
                        <label class="form-label">Mô Tả</label>

                        <textarea name="descriptions" class="form-control">{{ $products->descriptions }}</textarea>

                    </div>

                    <div class="mb-3">
                        <label class="form-label">Trạng Thái</label>
                        <select name="is_deleted" class="form-select">
                            @foreach ($is_deleted as $del)
                            <option value="{{ $del->id }}" @if ($del->id == $products->is_deleted) selected
                                @endif>
                                {{ $del->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Cập Nhật</button>
                            <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">Trở Lại</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</form>

@endsection