@extends('layouts.home')
@section('content')
<div id="content" class="space-top-none">
    <div class="main-content">
        <div class="space60">&nbsp;</div>
        <div class="row">
            <div class="col-sm-12">
                <div class="beta-products-list">
                    <h4>New Products</h4>
                    <div class="beta-products-details">
                        <p class="pull-left">438 styles found</p>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row">
                        @if(count($products) == 0)
                            <tr>
                                <td colspan="4">Không có dữ liệu</td>
                            </tr>
                        @else
                            @foreach($products as $key=>$product)
                        <div class="col-sm-3">
                            <div class="single-item">
                                <div class="single-item-header">
                                    <a href=""><img src="{{ asset('storage/' . $product->image) }}" alt=""></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">{{$product->name}}</p>
                                    <p class="single-item-price">
                                        <span>{{number_format($product->price,0,',','.')}}</span>
                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href=""><i class="fa fa-shopping-cart"></i></a>
                                    <a class="beta-btn primary" href="{{route('product.ditails', $product->id)}}">Details <i class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                        @endif
                    </div>

                </div> <!-- .beta-products-list -->

                <div class="space50">&nbsp;</div>

            </div>
        </div> <!-- end section with sidebar and main content -->


    </div> <!-- .main-content -->
</div> <!-- #content -->

@endsection
