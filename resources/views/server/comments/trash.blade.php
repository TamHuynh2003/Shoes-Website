@extends('server.master')

@section('content')

<div class="page-header">

    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Đánh Giá</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thùng Rác </li>
        </ol>
    </div>

</div>

<div class="row">
    <div class="col-12 col-sm-12">
        <div class="card product-sales-main">
            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                <div>
                    <a href="{{route('comments.index')}}" class="btn btn-primary me-2">Trở Lại</a>
                </div>

            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="listComments" class="table text-nowrap mb-0 table-bordered">
                        <thead class="table-head">
                            <tr>
                                <th>STT</th>
                                <th>Người Đánh Giá</th>
                                <th>Sản Phẩm Đánh Giá</th>
                                <th>Nội Dung Đánh Giá</th>
                                <th>Số Sao</th>
                                <th>Trạng Thái</th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            @foreach ($listComments as $comments)
                            <tr>
                                <td><strong>{{ $loop->iteration }}</strong></td>

                                <td><span>{{ $comments->users->fullname }}</span></td>
                                <td><span>{{ $comments->products->name }}</span></td>

                                <td><span>{{ $comments->content }}</span></td>
                                <td>
                                    @if(!empty($comments->rating))
                                    <ul class=" users-list m-0 avatar-group d-flex align-items-center">
                                        @for($i=1; $i<=$comments->rating; $i++)
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" class="avatar avatar-xs pull-up" title="">
                                                <i class='ion ion-ios7-star' style="color:rgb(244, 244, 14)"></i>
                                            </li>
                                            @endfor
                                    </ul>
                                    @endif
                                </td>

                                <td>
                                    <span style="color:red">Đã xóa </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-stretch">
                                        <!--Delete-->
                                        @if($comments->is_deleted == 1)
                                        <a class="btn btn-sm btn-outline-secondary border me-2 delete-link"
                                            data-bs-toggle="tooltip" data-action="xóa" data-id="{{ $comments->id }}"
                                            data-bs-original-title=" Xóa"
                                            data-route="{{ route('comments.delete', ['id' => $comments->id]) }}">
                                            <i class="fe fe-trash-2 "></i>
                                        </a>
                                        @endif
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

{{-- <script src="{{ asset('admin_template/assets/jquery-3.7.1.min.js') }}"></script>
<script>
    var $j = jQuery.noConflict();

    $j(document).ready(function() {
        $j('#search').on('keyup', function(event) {
            if (event.key === 'Enter') {
                searchComments();
            }
        });
    });

    function searchComments() {
        let keyword = $j('#search').val();
        $j.ajax({
            url: "{{ route('comments.search') }}",
            type: 'POST',
            data: {
                data: keyword,
                _token: '{{ csrf_token() }}'
            },
            success: function(data) {
                $j('#listComments tbody').html(data);
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        });
    }
</script> --}}

@endsection