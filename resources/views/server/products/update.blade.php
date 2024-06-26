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
                        <label class="form-label">Tên Giày</label>
                        <input type="text" name="name" value="{{ $products->name }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Giá Nhập</label>
                        <input type="number" name="purchase_price" value="{{ $products->purchase_price }}"
                            class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Giá Bán</label>
                        <input type="number" name="selling_price" value="{{ $products->selling_price }}"
                            class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ảnh Giày</label>
                        <input type="file" name="images[]" multiple class="form-control">
                    </div>

                    <br />

                    @foreach($images as $image)
                    <div class="mb-3" style="display:inline-block">
                        <img src="{{ asset($image->url) }}" width="110px" height="110px" alt="Ảnh Giày">

                        <label>
                            <input type="checkbox" name="delete_images[]" value="{{ $image->id }}"> Xóa ảnh
                        </label>
                    </div>
                    @endforeach

                    <div class="mb-3">
                        <label class="form-label">Mô Tả</label>
                        <textarea style="height: 100px" name="descriptions"
                            class="form-control">{{ $products->descriptions }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Danh Mục Sản Phẩm</label>
                        <select name="categories_id" class="form-select">
                            @foreach ($listCategories as $categories)
                            <option value="{{ $categories->id }}" @if ($categories->id == $products->categories_id)
                                selected @endif>
                                {{ $categories->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nhà Cung Cấp</label>
                        <select name="providers_id" class="form-select">
                            @foreach ($listProviders as $providers)
                            <option value="{{ $providers->id }}" @if ($providers->id == $products->providers_id)
                                selected @endif>
                                {{ $providers->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Trạng Thái</label>
                        <select name="is_deleted" class="form-select">
                            @foreach ($is_deleted as $del)
                            <option value="{{ $del->id }}" @if ($del->id == $products->is_deleted) selected @endif>
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