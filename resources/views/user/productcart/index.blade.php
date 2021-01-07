@extends('user.layouts.dasboard')

<link href="css/productcart.css" rel="stylesheet">

@section('dashboard')
    <div class="innerPageBlank">
        <div class="breadCrumbArea">
            <div class="">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <a href="">Group Class Live Session</a> <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <a href="">Product Cart</a>
                    </div>
                </div>
            </div>
        </div>
     
        <div class="">
            <div class="row">
                <div class="col-sm-12">
                    <div class="pageTitle">
                    </div>
                    <div class="InnerContent">
                        <div class="bgProfile table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Item </th>
                                    <th>Details</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Total</th>
                                    <th>X</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($product_cart as $pc)
                                <tr>
                                    <td class="cartImg"><img src="{!! $pc->product->avatar!!}" class="img-responsive"></td>
                                    <td>{!! $pc->product->name!!}</td>
                                    <td>{!! $pc->product->price!!} $</td>
                                    <td>{!! $pc->quantity!!}</td>
                                    <td>{!! $pc->quantity * $pc->product->price!!}$</td>
                                    <td><a href="{!! asset('user/remove_cart_product?cart_id=').$pc->id !!}"><i style="color: #c10530;" class="fa fa-times-circle" aria-hidden="true"></i></a></td>
                                </tr>
                                @endforeach
                              
                                </tbody>
                            </table>
                            <div class="btnShop">
                                <a href="{!! asset('user/shippingInfo')!!}" class="btn btn-primary">Check Out</a>
                                <a href="{!! asset('user/store')!!}" class="btn btn-primary">Continue Shopping</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection