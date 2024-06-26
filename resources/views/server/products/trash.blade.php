@extends('server.master')

@section('content')

<div class="page-header">
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Sản Phẩm</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thùng Rác</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-12 col-sm-12">
        <div class="card product-sales-main">
            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                <div>
                    <a href="{{route('products.index')}}" class="btn btn-primary me-2">Trở Lại</a>
                </div>

            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="data-table" class="table text-nowrap mb-0 table-bordered">
                        <thead class="table-head">
                            <tr>
                                <th>STT</th>
                                <th>Giày </th>
                                <th>Giá Nhập</th>
                                <th>Giá Bán</th>
                                <th>Ảnh Giày</th>
                                <th>Số Sao</th>
                                <th>Trạng Thái</th>
                                <th>Chức Năng</th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            @foreach ($listProducts as $products)
                            <tr>
                                <td><strong>{{ $loop->iteration }}</strong></td>
                                <td><span>{{ $products->name }}</span></td>
                                <td><span>{{ $products->purchase_price }}</span></td>
                                <td><span>{{ $products->selling_price }}</span></td>
                                <td>
                                    @if(!empty($productImage))
                                    <ul class=" m-0 avatar-group d-flex align-items-center">
                                        @foreach($productImage as $images)
                                        @if($images->products_id == $products->id)
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" title=""
                                            data-bs-original-title="{{$products->categories->name}}">
                                            <img src="{{asset($images->url)}}" alt="Avatar" class="rounded-circle">
                                        </li>
                                        @endif
                                        @endforeach
                                    </ul>
                                    @else
                                    <p>Không có ảnh cho sản phẩm này</p>
                                    @endif
                                </td>
                                <td>
                                    @if(!empty($products->rating))
                                    <ul class=" users-list m-0 avatar-group d-flex align-items-center">
                                        @for($i=1;$i<=$products->rating;$i++)
                                            <li data-bs-toggle="tooltip" class="avatar avatar-xs pull-up">
                                                <i class='ion ion-ios7-star' style=" color:rgb(244, 244, 14)"></i>
                                            </li>
                                            @endfor
                                    </ul>
                                    @endif
                                </td>
                                <td>
                                    <span style="color:red">Hết hàng</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-stretch">
                                        <!--Edit-->
                                        <a class="btn btn-sm btn-outline-primary border me-2"
                                            href="{{ route('products.update', ['id' => $products->id]) }}"
                                            data-bs-toggle="tooltip" data-bs-original-title="Khôi Phục">
                                            <i class="fe fe-rotate-ccw"></i>
                                        </a>
                                        <!--Details-->
                                        <a class=" btn btn-sm btn-outline-info border me-2" data-bs-toggle="tooltip"
                                            href="{{route('products.show',['id' => $products->id])}}"
                                            data-bs-original-title=" Chi Tiết">
                                            <i class="fe fe-info"></i>
                                        </a>
                                        <!--Delete-->
                                        <a data-name="{{ $products->name }}"
                                            class="btn btn-sm btn-outline-secondary border me-2 delete-link"
                                            data-bs-toggle="tooltip"
                                            data-route="{{ route('products.delete', ['id' => $products->id]) }}"
                                            data-bs-original-title=" Xóa">
                                            <i class="fe fe-trash-2 "></i>
                                        </a>

                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.delete-link').forEach(function (link) {
            link.addEventListener('click', function (event) {
                event.preventDefault();

                var route = this.getAttribute('data-route');
                var name = this.getAttribute('data-name');

                Swal.fire({
                    title: 'Xác Nhận Xóa Giày?',
                    text: 'Bạn có chắc muốn xóa giày ' + " '" + name + "' " + ' không?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Xóa',
                    cancelButtonText: 'Hủy',
                }).then(function (result) {
                    if (result.isConfirmed) {
                        window.location.href = route;
                    }
                });
            });
        });
    });
</script>

@endsection