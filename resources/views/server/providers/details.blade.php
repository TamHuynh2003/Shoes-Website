@extends('server.master')

@section('content')

<div class="page-header">
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Nhà Cung Cấp</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chi Tiết</li>
        </ol>
    </div>
</div>

<div class="card-header border-bottom">
    <div>
        <a href=" {{route('providers.index')}}" class="btn btn-primary me-2">Trở Lại</a>
    </div>
</div>

<div class="row">

    <div class="col-xl ">
        <div class="card mb-4">
            <div class="card-body">
                <form>

                    <div class="mb-3">
                        <label class="form-label">Nhà Cung Cấp</label>
                        <input type="text" value="{{$providers->name}}" readonly class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Địa Chỉ</label>
                        <input type="text" value="{{$providers->address}}" readonly class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" value="{{$providers->email}}" readonly class="form-control">
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
                        <label class="form-label">Điện Thoại</label>
                        <input type="number" value="{{$providers->phone_number}}" readonly class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mô Tả</label>
                        <textarea class="form-control" placeholder="{{$providers->descriptions}}" readonly></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Trạng Thái</label>
                        <p class="form-control" readonly>{{ $providers->is_deleted == 1 ? 'Đang cung cấp' : 'Đã ngừng
                            cung cấp' }}</p>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>

@endsection