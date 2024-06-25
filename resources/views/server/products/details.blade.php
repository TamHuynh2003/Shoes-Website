@extends('server.master')

@section('content')

<div class="page-header">
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Sản Phẩm</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chi Tiết</li>
        </ol>
    </div>
</div>

<div class="card-header border-bottom">
    <div>
        <a href=" {{route('products.index')}}" class="btn btn-primary me-2">Trở Lại</a>
    </div>
</div>

<div class="row">

    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label"> Giày</label>
                        <input type="text" value="{{$products->name}}" readonly class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Giá Nhập</label>
                        <input type="text" value="{{$products->purchase_price}}" readonly class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Giá Bán</label>
                        <input type="text" value="{{$products->selling_price}}" readonly class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mô Tả</label>
                        <textarea class="form-control" placeholder="{{$products->descriptions}}" readonly></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Số Sao</label>
                        <input type="text" value="{{$products->rating}}" readonly class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Danh Mục Sản Phẩm </label>
                        <input type="text" value="{{$products->categories->name}}" readonly class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nhà Cung Cấp</label>
                        <input type="text" value="{{$products->providers->name}}" readonly class="form-control">
                    </div>

                    {{-- <div class="mb-3">
                        <label class="form-label">Đăng Nhập </label>
                        <input type="text" value="{{$products->providers->name}}" readonly class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Giới Tính</label>
                        <input type="text" value="{{$products->genders->name}}" readonly class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Chức Vụ</label>
                        <input type="text" value="{{$products->roles->name}}" readonly class="form-control">
                    </div> --}}
                    <div class="mb-3">
                        <label class="form-label">Trạng Thái</label>
                        <p class="form-control" readonly>{{ $products->is_deleted == 1 ? 'Còn hàng' : 'Hết
                            hàng' }}</p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection