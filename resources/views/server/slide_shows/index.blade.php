@extends('server.master')

@section('content')

<div class="page-header">
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Slideshow</a></li>
            <li class="breadcrumb-item active" aria-current="page">Danh Sách</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-12 col-sm-12">
        <div class="card product-sales-main">
            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                <div>
                    <a href="{{route('slideshows.create')}}" class="btn btn-primary me-2">Thêm</a>
                    <a href="{{route('slideshows.trash')}}" class="btn btn-primary me-2">Thùng Rác</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="listSlideShow" class="table text-nowrap mb-0 table-bordered">
                        <thead class="table-head">
                            <tr>
                                <th>STT</th>
                                <th>Slide</th>
                                <th>Trạng Thái</th>
                                <th>Chức Năng</th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            @include('server.slide_shows.search')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection