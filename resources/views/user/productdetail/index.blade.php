@extends('user.layouts.dasboard')

<link href="css/productdetail.css" rel="stylesheet">

@section('dashboard')
<section>
    <div class="innerPageBlank">
        <div class="breadCrumbArea">
            <div class="">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <a href="">Online Store</a> <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <a href="">The Ultimate Wheel</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            @if (Session::has('success'))
            <div class="alert alert-success text-center">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <p>{{ Session::get('success') }}</p>
            </div>
            @elseif(Session::has('error'))
            <div class="alert alert-danger text-center">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <p>{{ Session::get('error') }}</p>
            </div>
            @endif
            <div class="row">
                <div class="col-sm-12">
                    <div class="pageTitle">
                    </div>
                    <div class="InnerContent">
                        <div class="bgProfile ">
                            <div class="col-sm-3">
                                <div class="productImg">
                                    <img src="{!! $product->avatar !!}" class="img-responsive">
                                    <div class="FProductsStars">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <form method="post" action="{{ url('user/addCart') }}">
                                    {{ csrf_field() }}
                                    <input name="product_id" value="{!!$product->id !!}" hidden />
                                    <div class="ProductDes">
                                        <h2>{!! $product->name !!}</h2>
                                        <div class="price">${!! $product->price !!}</div>
                                        <div class="des">
                                            <p>{!! $product->details !!}</p>
                                        </div>
                                        <div class="btnsArea">
                                            <div class="form-inline">
                                                <button type="submit" class="btn btn-danger">Add to cart</button>
                                                <input class="form-control" id="qty" name="qty" type="number" min="1" placeholder="Enter quantity" />

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection