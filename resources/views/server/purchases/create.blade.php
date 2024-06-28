@extends('server.master')

@section('content')

<div class="page-header">
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Hóa Đơn Nhập Hàng</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thêm Mới</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('purchases.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Ngày Tạo Hóa Đơn</label>

                        <input id="purchase_date" type="date" name="purchase_date" class="form-control" required>

                    </div>

                    <div class="mb-3">
                        <label class="form-label">Chọn Nhà Cung Cấp Giày</label>

                        <select id="provider" name="suppliers_id" class="form-select">

                            @foreach ($listProviders as $providers)
                            <option value="{{ $providers->id }}">{{ $providers->name }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Chọn Giày Muốn Nhập</label>

                        <select id="product" class="form-select">

                            @foreach ($listProducts as $products)
                            <option value="{{ $products->id }}">{{ $products->name }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Chọn Màu Sắc</label>

                        <select id="color" class="form-select">

                            @foreach ($listColors as $colors)
                            <option value="{{ $colors->id }}">{{ $colors->name }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Chọn Kích Cỡ</label>

                        <select id="size" class="form-select">

                            @foreach ($listSizes as $sizes)
                            <option value="{{ $sizes->id }}">{{ $sizes->name }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="col-sm-2 col-form-label">Số lượng</label>

                        <div class="col-sm-100">
                            <input type="number" id="quantity" class="form-control" />
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="col-sm-2 col-form-label"> Giá nhập</label>

                        <div class="col-sm-100">
                            <input type="number" id="purchase_price" class="form-control" placeholder=" " />
                        </div>
                    </div>
                    <br />
                    <button id="add-button" type="button" class="btn btn-primary me-2" onclick="productUpdate()">Thêm
                    </button>

                    <br />
                    <br />
                    <br />

                    <label for="basic-icon-default-name">Nhà Cung Cấp: </label>

                    <b id="provider-alt-name">{{ $listProviders[0]->name }}</b>

                    <input type="hidden" name="provider_id" id="provider-alt" value='1' />

                    <table id="listProducts" class="table">
                        <tbody>
                            <tr>
                                <td>Loại Giày </td>
                                <td>Màu Sắc</td>
                                <td>Kích Cỡ</td>
                                <td>Số lượng</td>
                                <td>Giá nhập</td>
                                <td>Tổng Tiền</td>
                                <td>Chức Năng</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Nhập Hàng</button>
                        <a href="{{ route('purchases.index') }}" class="btn btn-outline-secondary">Trở Lại</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('admin_template/assets/jquery-3.7.1.min.js') }}"></script>
<script>
    $("#provider").change(function() {
        $('#provider-alt').val(this.value);
        $('#provider-alt-name').text($(this).find('option[value="' + this.value + '"]').text());
    });

    $("#product").change(function() {
        add_button_check();
    });

    $("#color").change(function() {
        add_button_check();
    });

    $("#size").change(function() {
        add_button_check();
    });

    function add_button_check() {

        var productId = $("#product").find(":selected").val();
        var colorId = $("#color").find(":selected").val();
        var sizeId = $("#size").find(":selected").val();

        var matchingRows = $('tr:has(td #color-id[value="' + colorId + '"])')
            .filter(':has(td #size-id[value="' + sizeId + '"])')
            .filter(':has(td #product-id[value="' + productId + '"])');

        if (matchingRows.length > 0) {
            $('#add-button').text('Sửa');
        } else {
            $('#add-button').text('Thêm');
        }
    }

    function productUpdate() {
        if ($("#quantity").val() != "" && $("#purchase_price").val() != "" && $("#color").val() != "" && $("#size").val() !=
            "") {
            productsAdd();
            formClear();
            add_button_check();
        }
    }

    function formClear() {
        $("#quantity").val("");
        $("#purchase_price").val("");
        $("#product").val("");
        $("#color").val("");
        $("#size").val("");
    }

    function productDelete(ctl) {
        $(ctl).parents('tr').remove();
        add_button_check();
    }

    function productsAdd() {
        var colorId = $("#color").find(":selected").val();
        var sizeId = $("#size").find(":selected").val();

        var color = $("#color").find(":selected").text();
        var size = $("#size").find(":selected").text();

        var price = $("#purchase_price").val();
        var date = $("#purchase_date").val();

        var quantity = $("#quantity").val();

        var product = $("#product").find(":selected").text();
        var productId = $("#product").find(":selected").val();

        var totalprice = price * quantity;

        var $productElement = $('#product-id[value="' + productId + '"]');
        var $colorElement = $('#color-id[value="' + colorId + '"]');

        var $sizeElement = $('#size-id[value="' + sizeId + '"]');

        var matchingRows = $('tr:has(td #color-id[value="' + colorId + '"])')
            .filter(':has(td #size-id[value="' + sizeId + '"])')
            .filter(':has(td #product-id[value="' + productId + '"])');

        if (matchingRows.length > 0) {
            productEdit(matchingRows);
        } else 
        {
            $("#listProducts tbody").append(
                `<tr> 
                    <td>${product}<input type="hidden" name="product_id[]" id="product-id" value="${productId}"/></td>
                    <td>${color}<input type="hidden" name="color[]" id="color-id" value="${colorId}"/></td>
                    <td>${size}<input type="hidden" name="size[]" id="size-id" value="${sizeId}"/></td>
                    <td>${quantity}<input type="hidden" name="quantity[]" value="${quantity}"/></td>
                    <td>${price}<input type="hidden" name="purchase_price[]" value="${price}"/></td>
                    <td>${totalprice}<input type="hidden" name="totalprice[]" value="${totalprice}"/></td>
                    <td>
                        <button type='button'onclick='productDelete(this);'class='btn btn-default'>
                        <span class='glyphicon glyphicon-remove' />
                        Xóa
                        </button>
                    </td>
                </tr>`);
        }
    }

    function productEdit(ctl) {
        if ($("#quantity").val() != "" && $("#purchase_price").val() != "" && $("#color").val() != "" 
            && $("#size").val() !="") 
        {
            var colorId = $("#color").find(":selected").val();
            var sizeId = $("#size").find(":selected").val();

            var color = $("#color").find(":selected").text();
            var size = $("#size").find(":selected").text();

            var price = $("#purchase_price").val();
            var quantity = $("#quantity").val();

            var product = $("#product").find(":selected").text();
            var productId = $("#product").find(":selected").val();

            var totalprice = price * quantity;

            $(ctl).after(
                `<tr> 
                    <td>${product}<input type="hidden" name="product_id[]" id="product-id" value="${productId}"/></td>
                    <td>${color}<input type="hidden" name="color[]" id="color-id" value="${colorId}"/></td>
                    <td>${size}<input type="hidden" name="size[]" id="size-id" value="${sizeId}"/></td>
                    <td>${quantity}<input type="hidden" name="quantity[]" value="${quantity}"/></td>
                    <td>${price}<input type="hidden" name="purchase_price[]" value="${price}"/></td>
                    <td>${totalprice}<input type="hidden" name="totalprice[]" value="${totalprice}"/></td>
                    <td>
                        <button type='button' onclick='productDelete(this);'class='btn btn-default'>
                        <span class='glyphicon glyphicon-remove' />
                        Xóa
                        </button>
                    </td>
                </tr>`);
            productDelete(ctl.find('td'));
            formClear();
            add_button_check();
        }
    }

</script>

@endsection