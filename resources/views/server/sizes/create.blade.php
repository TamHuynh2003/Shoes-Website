@extends('server.master')

@section('content')

<div class="page-header">
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Kích Cỡ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thêm Mới</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('sizes.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Kích Cỡ</label>

                        <input type="text" name="name" value="{{ old('name') }}" class="form-control">

                        @error('name')
                        <div class="form-text" style="color:red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                            <a href="{{ route('sizes.index') }}" class="btn btn-outline-secondary">Trở Lại</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection