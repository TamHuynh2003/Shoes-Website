@extends('server.master')

@section('content')

<div class="page-header">
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Mã Giảm Giá</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chi Tiết</li>
        </ol>
    </div>
</div>

<div class="card-header border-bottom">
    <div>
        <a href=" {{route('discounts.index')}}" class="btn btn-primary me-2">Trở Lại</a>
    </div>
</div>

<div class="row">

    <div class="col-xl ">
        <div class="card mb-4">
            <div class="card-body">
                <form>

                    <div class="mb-3">
                        <label class="form-label">Mã Giảm Giá</label>
                        <input type="text" value="{{$discounts->name}}" readonly class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phần Trăm Giảm</label>
                        <input type="text" value="{{$discounts->amount}}" readonly class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Loại Giảm Giá</label>
                        <input type="text" value="{{$discounts->type_discounts->name}}" readonly class="form-control">
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
                        <label class="form-label">Ngày Áp Dụng</label>
                        <input type="text" value="{{$discounts->start_date}}" readonly class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ngày Hết Hạn</label>
                        <input type="text" value="{{$discounts->end_date}}" readonly class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Trạng Thái</label>
                        <p class="form-control" readonly>{{ $discounts->is_deleted == 1 ? 'Đang áp dụng' : 'Đã hết
                            áp dụng' }}</p>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>

@endsection