@extends('server.master')

@section('content')

<div class="page-header">
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Sản Phẩm</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thêm Mới</li>
        </ol>
    </div>
</div>

<form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label">Tên Giày </label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                        @error('name')
                        <div class="form-text" style="color:red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Giá Nhập</label>
                        <input type="number" name="purchase_price" value="{{ old('purchase_price') }}"
                            class="form-control">
                        @error('purchase_price')
                        <div class="form-text" style="color:red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Giá Bán</label>
                        <input type="number" name="selling_price" value="{{ old('selling_price') }}"
                            class="form-control">
                        @error('selling_price')
                        <div class="form-text" style="color:red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ảnh Giày</label>
                        <input type="file" name="images[]" multiple class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mô Tả</label>
                        <textarea name="descriptions" class="form-control">{{ old('descriptions') }}</textarea>
                        @error('descriptions')
                        <div class="form-text" style="color:red;">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label" for="selectCategories">Danh Mục Sản Phẩm</label>

                        <select name="categories_id" id="selectCategories" class="form-select">

                            @foreach ($listCategories as $categories)
                            <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="selectProviders">Nhà Cung Cấp</label>

                        <select name="providers_id" id="selectProviders" class="form-select">

                            @foreach ($listProviders as $providers)
                            <option value="{{ $providers->id }}">{{ $providers->name }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="selectColors">Chọn Màu Sắc</label>

                        <select name="colors_id" id="selectColors" class="form-select">

                            @foreach ($listColors as $colors)
                            <option value="{{ $colors->id }}">{{ $colors->name }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="selectSizes">Kích Cỡ</label>

                        <select name="sizes_id" id="selectSizes" class="form-select">

                            @foreach ($listSizes as $sizes)
                            <option value="{{ $sizes->id }}">{{ $sizes->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <br>
                    <div class="mb-3">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                            <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">Trở Lại</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection