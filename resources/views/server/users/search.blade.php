@foreach ($listUsers as $users)
<tr>
    <td><strong>{{ $loop->iteration }}</strong></td>
    <td><span>{{ $users->fullname }}</span></td>
    <td><span>{{ $users->address }}</span></td>
    <td><span>{{ $users->phone_number }}</span></td>
    <td>
        <ul class="users-list m-0 avatar-group d-flex align-items-center">
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                class="avatar avatar-xs pull-up" title="" data-bs-original-title="{{ $users->fullname }}">
                <img src="{{ asset($users->avatar) }}" alt="Avatar" class="rounded-circle">
            </li>
        </ul>
    </td>
    <td>
        <span style="color:gold">{{ $users->login_at }}</span>
    </td>
    <td>
        <span style="color:forestgreen">{{ $users->status->name }}</span>
    </td>
    <td>
        <div class="d-flex align-items-stretch">
            <!--Edit-->
            <a class="btn btn-sm btn-outline-primary border me-2" data-bs-toggle="tooltip"
                href="{{ route('users.update', ['id' => $users->id]) }}" data-bs-original-title="Sửa">
                <i class="fe fe-edit-2 "></i>
            </a>
            <!--Details-->
            <a class=" btn btn-sm btn-outline-info border me-2" data-bs-toggle="tooltip"
                href="{{route('users.show',['id' => $users->id])}}" data-bs-original-title="Chi Tiết">
                <i class="fe fe-info "></i>
            </a>
            <!--Delete-->
            <a data-name="{{ $users->fullname }}" class="btn btn-sm btn-outline-secondary border me-2 delete-link"
                data-bs-toggle="tooltip" data-route="{{ route('users.delete', ['id' => $users->id]) }}"
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