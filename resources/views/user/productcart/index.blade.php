
@extends('user\layouts\dasboard')

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
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="cartImg"><img src="images/product-02.jpg" class="img-responsive"></td>
                                    <td>Gym Product 1</td>
                                    <td>22.22 $</td>
                                    <td>02</td>
                                    <td>44.44$</td>
                                    <td><i class="fa fa-times-circle" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <td class="cartImg"><img src="images/product-02.jpg" class="img-responsive"></td>
                                    <td>Gym Product 1</td>
                                    <td>22.22 $</td>
                                    <td>02</td>
                                    <td>44.44$</td>
                                    <td><i class="fa fa-times-circle" aria-hidden="true"></i></td>
                                </tr>
                                </tr>
                                <tr>
                                    <td class="cartImg"><img src="images/product-02.jpg" class="img-responsive"></td>
                                    <td>Gym Product 1</td>
                                    <td>22.22 $</td>
                                    <td>02</td>
                                    <td>44.44$</td>
                                    <td><i class="fa fa-times-circle" aria-hidden="true"></i></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="btnShop">
                                <a href="" class="btn btn-primary">Check Out</a>
                                <a href="" class="btn btn-primary">Continue Shopping</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection