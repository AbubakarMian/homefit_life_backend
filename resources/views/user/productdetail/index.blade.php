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
                                        <img src="images/product-04.jpg" class="img-responsive">
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
                                        <h2>The Ultimate Wheel</h2>
                                        <div class="price">$125.0</div>
                                        <div class="des">
                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
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