@foreach ($listPayments as $payments)
<tr>
    <td><strong>{{ $loop->iteration }}</strong></td>
    <td><span>{{ $payments->name }}</span></td>
    <td>
        <span style="color:forestgreen">Đang áp dụng </span>
    </td>
    <td>
        <div class="d-flex align-items-stretch">
            <!--Edit-->
            <a class="btn btn-sm btn-outline-primary border me-2" data-bs-toggle="tooltip"
                href="{{ route('payment_methods.update', ['id' => $payments->id]) }}" data-bs-original-title="Sửa">
                <i class="fe fe-edit-2 me"></i>
            </a>

            <!--Delete-->
            <a data-name="{{ $payments->name }}" class="btn btn-sm btn-outline-secondary border me-2 delete-link"
                data-bs-toggle="tooltip" data-route="{{ route('payment_methods.delete', ['id' => $payments->id]) }}"
                data-bs-original-title=" Xóa">
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
                    title: 'Xác Nhận Xóa Phương Thức Thanh Toán?',
                    text: 'Bạn có chắc muốn xóa phương thức' + " '" + name + "' " + ' không?',
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