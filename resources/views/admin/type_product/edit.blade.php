@extends('admin.home')
@section('title', 'Cập nhật thông tin loại sản phẩm')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Cập nhật thông tin loại sản phẩm</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('types.update', $types_product->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên tỉnh</label>
                        <input type="text" class="form-control" name="name" value="{{ $types_product->name }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
