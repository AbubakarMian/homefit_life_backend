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
                                    <div class="ProductDes">
                                        <h2>{!! $product->name !!}</h2>
                                        <div class="price">${!! $product->price !!}</div>
                                        <div class="des">
                                            <p>{!! $product->details !!}</p>
                                        </div>
                                        <div class="btnsArea">
                                            <div class="form-inline" >
                                                <button type="submit" class="btn btn-danger">Add to cart</button>
                                                <select class="form-control" id="sel1">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
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