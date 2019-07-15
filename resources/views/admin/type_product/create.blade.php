@extends('admin.home')
@section('title', 'Thêm mới loại sản phẩm')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới loại sản phẩm</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('types.store')}}">
                    @csrf
                    <div class="form-group">
                        <label>Tên loại</label>
                        <input type="text" class="form-control" name="name"  placeholder="Enter name" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
