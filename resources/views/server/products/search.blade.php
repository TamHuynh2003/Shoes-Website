@foreach ($listProducts as $products)
<tr>
    <td><strong>{{ $loop->iteration }}</strong></td>
    <td><span>{{ $products->name }}</span></td>
    <td><span>{{ number_format($products->purchase_price) }}</span></td>
    <td><span>{{ number_format($products->selling_price) }}</span></td>
    <td>
        @if($productImage->where('products_id', $products->id)->count() > 0)
        <ul class="users-list m-0 avatar-group d-flex align-items-center">
            @foreach($productImage as $images)
            @if($images->products_id == $products->id)
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                class="avatar avatar-xs pull-up" title="{{ $products->name }}">
                <img src="{{ asset($images->url) }}" alt="Avatar" class="rounded-circle">
            </li>
            @endif
            @endforeach
        </ul>
        @else
        <p>Không có ảnh</p>
        @endif
    </td>
    <td>
        @if(!empty($products->rating))
        <ul class=" users-list m-0 avatar-group d-flex align-items-center">
            @for($i=1; $i<=$products->rating; $i++)
                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                    class="avatar avatar-xs pull-up" title="">
                    <i class='ion ion-ios7-star' style="color:rgb(244, 244, 14)"></i>
                </li>
                @endfor
        </ul>
        @endif
    </td>
    <td>
        <span style="color:forestgreen">Còn hàng </span>
    </td>
    <td>
        <div class="d-flex align-items-stretch">
            <a class="btn btn-sm btn-outline-primary border me-2" data-bs-toggle="tooltip"
                href="{{ route('products.edit', ['id' => $products->id]) }}" data-bs-original-title="Sửa">
                <i class="fe fe-edit-2"></i>
            </a>
            <a class="btn btn-sm btn-outline-info border me-2" data-bs-toggle="tooltip"
                href="{{ route('products.show', ['id' => $products->id]) }}" data-bs-original-title="Chi Tiết">
                <i class="fe fe-info"></i>
            </a>
            <a data-name="{{ $products->name }}" class="btn btn-sm btn-outline-secondary border me-2 delete-link"
                data-bs-toggle="tooltip" data-route="{{ route('products.delete', ['id' => $products->id]) }}"
                data-bs-original-title="Xóa">
                <i class="fe fe-trash-2"></i>
            </a>
        </div>
    </td>
</tr>

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

@endforeach