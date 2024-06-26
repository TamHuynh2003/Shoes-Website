@foreach ($listAdmins as $admins)
<tr>
    <td><strong>{{ $loop->iteration }}</strong></td>
    <td><span>{{ $admins->fullname }}</span></td>
    <td><span>{{ $admins->address }}</span></td>
    <td><span>{{ $admins->phone_number }}</span></td>
    <td>
        <ul class=" users-list m-0 avatar-group d-flex align-items-center">
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                class="avatar avatar-xs pull-up" title="" data-bs-original-title="{{ $admins->fullname }}">
                <img src="{{ asset($admins->avatar) }}" alt="Avatar" class="rounded-circle">
            </li>
        </ul>
    </td>
    <td>
        <span style="color:gold">{{ $admins->login_at }}</span>
    </td>
    <td>
        <span style="color:forestgreen">{{ $admins->status->name }}</span>
    </td>
    <td>
        <div class="d-flex align-items-stretch">
            <!--Edit-->
            <a class="btn btn-sm btn-outline-primary border me-2" data-bs-toggle="tooltip"
                href="{{ route('admins.update', ['id' => $admins->id]) }}" data-bs-original-title="Sửa">
                <i class="fe fe-edit-2"></i>
            </a>
            <!--Details-->
            <a class=" btn btn-sm btn-outline-info border me-2" data-bs-toggle="tooltip"
                href="{{route('admins.show',['id' => $admins->id])}}" data-bs-original-title=" Chi Tiết">
                <i class="fe fe-info"></i>
            </a>
            <!--Delete-->
            <a data-name="{{ $admins->fullname }}" class="btn btn-sm btn-outline-secondary border me-2 delete-link"
                data-bs-toggle="tooltip" data-route="{{ route('admins.delete', ['id' => $admins->id]) }}"
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
                    title: 'Xác Nhận Xóa Tài Khoản?',
                    text: 'Bạn có chắc muốn xóa tài khoản ' + " '" + name + "' " + ' không?',
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