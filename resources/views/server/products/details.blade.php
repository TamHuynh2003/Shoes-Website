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
        <a href="{{ route('products.index') }}" class="btn btn-primary me-2">Trở Lại</a>
    </div>
</div>

<div class="row">

    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label"> Giày</label>
                        <input type="text" value="{{ $products->name }}" readonly class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Giá Nhập</label>
                        <input type="text" value="{{ $products->purchase_price }}" readonly class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Giá Bán</label>
                        <input type="text" value="{{ $products->selling_price }}" readonly class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Số Sao</label>

                        @if(!empty($products->rating))
                        <ul class=" users-list m-0 avatar-group d-flex align-items-center">

                            @for($i = 1; $i <= $products->rating; $i++)
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-xs pull-up" title="">
                                    <i class='ion ion-ios7-star' style="color:rgb(245, 245, 52)" aria-hidden="true">

                                    </i>
                                </li>
                                @endfor

                        </ul>
                        @endif
                    </div>

                    <div class="mb-5">
                        <label class="form-label">Mô Tả</label>
                        <textarea style="height: 100px" class="form-control" placeholder="{{ $products->descriptions }}"
                            readonly></textarea>
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
                        <label class="form-label">Chọn Màu Sắc</label>

                        <select class="form-select" id="color">

                            @foreach($listColors as $detail)
                            <option value="{{$detail->colors_id}}">{{$detail->colors[0]->name}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Chọn Kích Cỡ</label>

                        <select class="form-select" id="size">

                            @foreach($listSizes as $detail)
                            <option value="{{$detail->sizes_id}}">{{$detail->sizes[0]->name}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Số Lượng Tồn</label>
                        <input type="text" name="quantity" id="quantity" readonly class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Danh Mục Sản Phẩm </label>
                        <input type="text" value="{{ $products->categories->name }}" readonly class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nhà Cung Cấp</label>
                        <input type="text" value="{{ $products->providers->name }}" readonly class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Trạng Thái</label>
                        <p class="form-control" readonly>{{ $products->is_deleted == 1 ? 'Còn hàng' : 'Hết hàng' }}</p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('admin_template/assets/jquery-3.7.1.min.js') }}"></script>
<script>
    var $j = jQuery.noConflict();
    $j(document).ready(function() {
        $j('select#color, select#size').change(function() {
            var colorId = $j('select#color').val();
            var sizeId = $j('select#size').val();
            console.log(colorId, sizeId)
            $j.ajax({
                url: "{{ route('products.quantity', ['id' => $products->id]) }}",
                type: 'POST',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'color_id': colorId,
                    'size_id': sizeId
                },

                success: function(data) {
                    $j('#quantity').val(data.quantity);

                    console.log(data);
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>

@endsection