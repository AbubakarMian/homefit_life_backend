
@extends('user\layouts\dasboard')

<link href="css/shippingform.css" rel="stylesheet">

@section('dashboard')
    <section>
        <div class="innerPageBlank">
            <div class="breadCrumbArea">
                <div class="">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <a href="">Group Class Live Session</a> <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <a href="">Shipping</a>
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
                                <div class="row">
                                    <div class="col-sm-6 ">
                                        <div class="well" action="">
                                            <h2>Billing Details</h2>
                                            <div class="form-group">
                                                <label >First Name:<span class="redText">*</span></label>
                                                <input type="text" class="form-control" id="Name" placeholder="Enter First Name" name="Name">
                                            </div>
                                            <div class="form-group">
                                                <label >Last Name:<span class="redText">*</span></label>
                                                <input type="text" class="form-control" id="Name" placeholder="Enter First Name" name="Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="sel1">Country / Region:<span class="redText">*</span><span class="redText">*</span></label>
                                                <select class="form-control" id="sel1">
                                                    <option>Country / Region </option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label >Town / City:<span class="redText">*</span></label>
                                                <input type="text" class="form-control" id="Name" placeholder="Enter First Name" name="Name">
                                            </div>
                                            <div class="form-group">
                                                <label >Street Address:<span class="redText">*</span></label>
                                                <input type="text" class="form-control" id="Name" placeholder="Enter First Name" name="Name">
                                                <br/>
                                                <input type="text" class="form-control" id="Name" placeholder="Enter First Name" name="Name">
                                            </div>
                                            <div class="form-group">
                                                <label >Mobile Number:<span class="redText">*</span></label>
                                                <input type="text" class="form-control" id="Name" placeholder="Enter First Name" name="Name">
                                            </div>
                                            <div class="form-group">
                                                <label >Email Address:<span class="redText">*</span></label>
                                                <input type="email" class="form-control" id="Name" placeholder="Enter First Name" name="Name">
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Use Payment Method From The Profile</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="well">
                                            <h2>Shipping Method</h2>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio" checked>Standard Plan</label>
                                                <p><small>Your Product will be Deliverd to you within 7-9 Business Days </small></p>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio" checked>Expedited Plan</label>
                                                <p><small>Your Product will be Deliverd to you Overnight.</small></p>
                                            </div>
                                            <div class="orderDetails">
                                                <h2>Order Details</h2>
                                                <p><strong>Product</strong></p>
                                                <br/>
                                                <p>Puma Trousers x 2 <span>44.44$</span></p>
                                                <p>Puma Trousers x 2 <span>66.66$</span></p>
                                                <br/>
                                                <p><strong>Subtotal <span>44.44$</span></strong></p>
                                                <p><strong>Shipping Method <span>Method</span></strong></p>
                                                <br/>
                                                <p>Expedited Plan <span>50$</span></p>
                                                <p><strong>Total <span>160$</span></strong></p>
                                            </div>
                                            <center>
                                                <button type="submit" class="btn btn-primary btnPayment">Continue To Payment</button>
                                            </center>
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