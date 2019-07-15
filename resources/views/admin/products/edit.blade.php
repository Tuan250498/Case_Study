@extends('admin.home')
@section('title', 'Cập nhật sản phẩm')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Cập nhật sản phẩm</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('admin.update', $product->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{$product->name}}"  required>
                        @if($errors->has('name'))
                            <p class="text-danger">{{$errors->first('name')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Color</label>
                        <input type="text" class="form-control" name="color" value="{{$product->color}}"  required>
                        @if($errors->has('color'))
                            <p style="color: red">{{$errors->first('color')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" class="form-control" name="quantity" value="{{$product->quantity}}" required>
                        @if($errors->has('quantity'))
                            <p style="color: red">{{$errors->first('quantity')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" class="form-control" name="price" value="{{$product->price}}"  required>
                        @if($errors->has('price'))
                            <p style="color: red">{{$errors->first('price')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <img src={{asset('storage/images/6uS8z9O6snM7GBEEq34LZw1iqx8Ioc548gsAuKJt.png')}} id="image" alt="your image" width="100" height="100"/>

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
                        <input type="text" class="form-control" name="network"  value="{{$product->network}}" required>
                        @if($errors->has('network'))
                            <p style="color: red">{{$errors->first('network')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Sim</label>
                        <input type="text" class="form-control" name="sim" value="{{$product->sim}}" required>
                        @if($errors->has('sim'))
                            <p style="color: red">{{$errors->first('sim')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Memory</label>
                        <input type="text" class="form-control" name="memory" value="{{$product->memory}}"  required>
                        @if($errors->has('memory'))
                            <p style="color: red">{{$errors->first('memory')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Os</label>
                        <input type="text" class="form-control" name="os" value="{{$product->os}}" >
                        @if($errors->has('os'))
                            <p style="color: red">{{$errors->first('os')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>CPU</label>
                        <input type="text" class="form-control" name="cpu"  value="{{$product->CPU}}" >
                        @if($errors->has('CPU'))
                            <p style="color: red">{{$errors->first('CPU')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Camera</label>
                        <input type="text" class="form-control" name="camera" value="{{$product->camera}}" >
                        @if($errors->has('camera'))
                            <p style="color: red">{{$errors->first('camera')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>SDcard</label>
                        <input type="text" class="form-control" name="sdcard"  value="{{$product->SDcard}}" >
                        @if($errors->has('SDcart'))
                            <p style="color: red">{{$errors->first('SDcart')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Battery</label>
                        <input type="text" class="form-control" name="battery" value="{{$product->battery}}" >
                        @if($errors->has('battery'))
                            <p style="color: red">{{$errors->first('battery')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Bluetooth</label>
                        <input type="text" class="form-control" name="bluetooth" value="{{$product->bluetooth}}" >
                        @if($errors->has('bluetooth'))
                            <p style="color: red">{{$errors->first('bluetooth')}}</p>
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
