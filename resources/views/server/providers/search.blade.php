@foreach ($listProviders as $providers)
<tr>
    <td><strong>{{ $loop->iteration }}</strong></td>
    <td><span>{{ $providers->name }}</span></td>
    <td><span>{{ $providers->address }}</span></td>
    <td><span>{{ $providers->phone_number }}</span></td>
    <td>
        <span style="color:forestgreen">Đang cung cấp</span>
    </td>
    <td>
        <div class="d-flex align-items-stretch">
            <!--Edit-->
            <a class="btn btn-sm btn-outline-primary border me-2" data-bs-toggle="tooltip"
                href="{{ route('providers.update', ['id' => $providers->id]) }}" data-bs-original-title="Sửa">
                <i class="fe fe-edit-2 "></i>
            </a>
            <!--Details-->
            <a class=" btn btn-sm btn-outline-info border me-2" data-bs-toggle="tooltip"
                href="{{route('providers.show',['id' => $providers->id])}}" data-bs-original-title="Chi Tiết">
                <i class="fe fe-info "></i>
            </a>
            <!--Delete-->
            <a data-name="{{ $providers->name }}" class="btn btn-sm btn-outline-secondary border me-2 delete-link"
                data-bs-toggle="tooltip" data-route="{{ route('providers.delete', ['id' => $providers->id]) }}"
                data-bs-original-title="Xóa">
                <i class="fe fe-trash-2 "></i>
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
                    title: 'Xác Nhận Xóa Nhà Cung Cấp?',
                    text: 'Bạn có chắc muốn xóa nhà cung cấp ' + " '" + name + "' " + ' không?',
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