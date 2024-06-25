@extends('server.master')

@section('content')

<div class="page-header">
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Phương Thức Thanh Toán</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cập Nhật</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('payment_methods.update', ['id' => $payments->id]) }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Phương Thức Thanh Toán </label>

                        <div class="input-group input-group-merge">
                            <input type="text" name="name" value="{{ $payments->name }}" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Trạng Thái</label>
                        <select name="is_deleted" class="form-select">
                            @foreach ($is_deleted as $del)
                            <option value="{{ $del->id }}" @if ($del->id == $payments->is_deleted) selected
                                @endif>
                                {{ $del->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Cập Nhật</button>
                            <a href="{{ route('payment_methods.index') }}" class="btn btn-outline-secondary">Trở Lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection