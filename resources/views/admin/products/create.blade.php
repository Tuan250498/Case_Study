@extends('admin.home')
@section('title', 'Thêm mới sản phẩm')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới sản phẩm</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('admin.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name">
                        @if($errors->has('name'))
                            <p class="text-danger">{{$errors->first('name')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Color</label>
                        <input type="text" class="form-control" name="color">
                        @if($errors->has('color'))
                            <p style="color: red">{{$errors->first('color')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" class="form-control" name="quantity">
                        @if($errors->has('quantity'))
                            <p style="color: red">{{$errors->first('quantity')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" class="form-control" name="price">
                        @if($errors->has('price'))
                            <p style="color: red">{{$errors->first('price')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <img src={{asset('storage/images/6uS8z9O6snM7GBEEq34LZw1iqx8Ioc548gsAuKJt.png')}} id="image"
                             alt="your image" width="100" height="100"/>

                        <input type="file"
                               onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                               class="form-control-file"
                               id="inputFile"
                               name="image">
                        @if($errors->has('image'))
                            <p class=" text-danger">{{ $errors->first('image') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Network</label>
                        <input type="text" class="form-control" name="network">
                        @if($errors->has('network'))
                            <p style="color: red">{{$errors->first('network')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Sim</label>
                        <input type="text" class="form-control" name="sim">
                        @if($errors->has('sim'))
                            <p style="color: red">{{$errors->first('sim')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Memory</label>
                        <input type="text" class="form-control" name="memory">
                        @if($errors->has('memory'))
                            <p style="color: red">{{$errors->first('memory')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Os</label>
                        <input type="text" class="form-control" name="os">
                        @if($errors->has('os'))
                            <p style="color: red">{{$errors->first('os')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>CPU</label>
                        <input type="text" class="form-control" name="cpu">
                        @if($errors->has('cpu'))
                            <p style="color: red">{{$errors->first('cpu')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Camera</label>
                        <input type="text" class="form-control" name="camera">
                        @if($errors->has('camera'))
                            <p style="color: red">{{$errors->first('camera')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>SDcard</label>
                        <input type="text" class="form-control" name="sdcard">
                        @if($errors->has('sdcart'))
                            <p style="color: red">{{$errors->first('SDcart')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Battery</label>
                        <input type="text" class="form-control" name="battery">
                        @if($errors->has('Battery'))
                            <p style="color: red">{{$errors->first('Battery')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>bluetooth</label>
                        <input type="text" class="form-control" name="bluetooth">
                        @if($errors->has('Bluetooth'))
                            <p style="color: red">{{$errors->first('Bluetooth')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Loại</label>
                        <select class="form-control" name="types_product_id">
                            @foreach($types_products as $types_product)
                                <option value="{{ $types_product->id }}">{{ $types_product->name }}</option>
                            @endforeach
                        </select>
                        {{--                        @if($errors->has('city_id'))--}}
                        {{--                            <p style="color: red">{{$errors->first('city_id')}}</p>--}}
                        {{--                        @endif--}}
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
