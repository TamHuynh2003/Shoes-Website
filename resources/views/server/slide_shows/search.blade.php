@foreach($listSlides as $slide)
<tr>
    <td><strong>{{ $loop->iteration }}</strong></td>
    <td>
        <img class="card-img" style="width: 150px;" src="{{ asset($slide->url) }}" alt="Card image">
    </td>
    <td>
        <span style="color:forestgreen">Đang Sử Dụng</span>
    </td>
    <td>
        <div class="d-flex align-items-stretch">
            <!-- Edit -->
            <a class="btn btn-sm btn-outline-primary border me-2" data-bs-toggle="tooltip"
                href="{{ route('slideshows.update', ['id' => $slide->id]) }}" data-bs-original-title="Sửa">
                <i class="fe fe-edit-2 "></i>
            </a>
            <!-- Delete -->
            <a data-name="{{ $slide->id }}" class="btn btn-sm btn-outline-secondary border me-2 delete-link"
                data-bs-toggle="tooltip" data-route="{{ route('slideshows.delete', ['id' => $slide->id]) }}"
                data-bs-original-title=" Xóa">
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
                    title: 'Xác Nhận Xóa Slideshow?',
                    text: 'Bạn có chắc muốn xóa silde ' + "' " + name + " '" + ' không?',
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