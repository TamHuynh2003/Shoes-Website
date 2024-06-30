@foreach ($listPurchases as $purchases)
<tr>
    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$loop->iteration }}</strong></td>

    <td>{{ $purchases->purchase_date }}</td>
    <td>{{number_format( $purchases->total_price) }}</td>

    <td>{{ $purchases->admins->fullname }}</td>
    <td>{{ $purchases->providers->name }}</td>

    @if($purchases->status_id == 1)
    <td><span style="color:rgb(232, 186, 17)">{{$purchases->status->name}}</span></td>
    @else
    <td><span style="color:forestgreen">{{$purchases->status->name}}</span></td>
    @endif

    <td>
        <div class="d-flex align-items-stretch">
            <!--Details-->
            <a class=" btn btn-sm btn-outline-info border me-2" data-bs-toggle="tooltip"
                href="{{ route('purchases.show', ['id' => $purchases->id]) }}" data-bs-original-title="Chi Tiết">
                <i class="fe fe-info "></i>
            </a>

            @if($purchases->status_id == 1)
            <!--Verify-->
            <a class="btn btn-sm btn-outline-primary border me-2" data-bs-original-title="Duyệt"
                data-id="{{ $purchases->id }}" data-action="duyệt" data-bs-toggle="tooltip"
                data-route="{{ route('purchases.verify', ['id' => $purchases->id]) }}">

                <i class="fe fe-edit-2 "></i>
            </a>
            <!--Delete-->
            <a class="btn btn-sm btn-outline-secondary border me-2 delete-link" data-bs-original-title="Xóa"
                data-id="{{ $purchases->id }}" data-action="xóa" data-bs-toggle="tooltip"
                data-route="{{ route('purchases.delete', ['id' => $purchases->id]) }}">

                <i class="fe fe-trash-2 "></i>
            </a>
            @endif
        </div>
    </td>

</tr>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.delete-link').forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                var route = this.getAttribute('data-route');
                var id = this.getAttribute('data-id');
                var action = this.getAttribute('data-action');

                Swal.fire({
                    title: 'Xác nhận?',
                    text: 'Bạn có chắc muốn ' + action + ' hóa đơn ' + id + ' không?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Đồng ý',
                    cancelButtonText: 'Hủy bỏ',
                }).then(function(result) {
                    if (result.isConfirmed) {
                        window.location.href = route;
                    }
                });
            });
        });
    });
</script>

@endforeach
{{-- @foreach ($listPurchases as $purchases)
<tr>
    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$loop->iteration }}</strong></td>
    <td>{{ $purchases->purchase_date }}</td>
    <td>{{ $purchases->total_price }}</td>
    <td>{{ $purchases->admins->fullname }}</td>
    <td>{{ $purchases->providers->name }}</td>

    @if($purchases->is_deleted == 1)
    <td><span style="color:rgb(232, 186, 17)">Chờ Duyệt</span></td>
    @elseif($purchases->is_deleted == 2)
    <td><span style="color:forestgreen">Đã Duyệt</span></td>
    @endif

    <td>
        <div class="d-flex align-items-stretch">
            <!--Details-->
            <a class="btn btn-sm btn-outline-info border me-2"
                href="{{ route('purchases.show', ['id' => $purchases->id]) }}">
                <i class="fe fe-info"></i> Chi Tiết
            </a>

            @if($purchases->is_deleted == 1)
            <!--Verify-->
            <a class="btn btn-sm btn-outline-primary border me-2"
                href="{{ route('purchases.verify', ['id' => $purchases->id]) }}">
                <i class="fe fe-edit-2"></i> Duyệt
            </a>
            <!--Delete-->
            <a class="btn btn-sm btn-outline-secondary border me-2 delete-link" data-id="{{ $purchases->id }}"
                data-route="{{ route('purchases.delete', ['id' => $purchases->id]) }}">
                <i class="fe fe-trash-2"></i> Xóa
            </a>
            @endif
        </div>
    </td>
</tr>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.delete-link').forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                var route = this.getAttribute('data-route');
                var id = this.getAttribute('data-id');

                Swal.fire({
                    title: 'Xác nhận?',
                    text: 'Bạn có chắc muốn xóa hóa đơn ' + id + ' không?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Đồng ý',
                    cancelButtonText: 'Hủy bỏ',
                }).then(function(result) {
                    if (result.isConfirmed) {
                        window.location.href = route;
                    }
                });
            });
        });
    });
</script>

@endforeach --}}