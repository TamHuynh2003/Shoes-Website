@foreach ($listComments as $comments)
<tr>
    <td><strong>{{ $loop->iteration }}</strong></td>

    <td><span>{{ $comments->users->fullname }}</span></td>
    <td><span>{{ $comments->products->name }}</span></td>

    <td><span>{{ $comments->content }}</span></td>
    {{-- <td>
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
    </td> --}}
    <td>
        @if(!empty($comments->rating))
        <ul class=" users-list m-0 avatar-group d-flex align-items-center">
            @for($i=1; $i<=$comments->rating; $i++)
                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                    class="avatar avatar-xs pull-up" title="">
                    <i class='ion ion-ios7-star' style="color:rgb(244, 244, 14)"></i>
                </li>
                @endfor
        </ul>
        @endif
    </td>

    <td>
        <span style="color:forestgreen">Tồn tại </span>
    </td>
    <td>
        <div class="d-flex align-items-stretch">
            <!--Delete-->
            @if($comments->is_deleted == 1)
            <a class="btn btn-sm btn-outline-secondary border me-2 delete-link" data-bs-toggle="tooltip"
                data-action="xóa" data-id="{{ $comments->id }}" data-bs-original-title=" Xóa"
                data-route="{{ route('comments.delete', ['id' => $comments->id]) }}">
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

                var id = this.getAttribute('data-id');
                var route = this.getAttribute('data-route');
                var action = this.getAttribute('data-action');

                Swal.fire({
                    title: 'Xác nhận '+ action +'?',
                    text: 'Bạn có chắc muốn ' + action + ' comment ' + id + ' không?',
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