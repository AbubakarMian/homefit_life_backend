@extends('user.layouts.dasboard')

<link href="css/shippingform.css" rel="stylesheet">

@section('dashboard')


<section>
    <link href="css/shippingform.css" rel="stylesheet">
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
                            <form method="post" action="{{ url('user/saveshippingInfo') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-6 ">
                                        <div class="well" action="">
                                            <h2>Billing Details</h2>
                                            <div class="form-group">
                                                <label>Full Name:<span class="redText">*</span></label>
                                                <input type="text" class="form-control" id="name" placeholder="Enter Full Name" name="name" required>
                                            </div>
                                            <!-- <div class="form-group">
                                                <label>Last Name:<span class="redText">*</span></label>
                                                <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="last_name">
                                            </div> -->
                                            <div class="form-group">
                                                <label for="sel1">Country / Region:<span class="redText">*</span></label>
                                                <input type="text" class="form-control" id="country" placeholder="Enter Country Name" name="country" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Town / City:<span class="redText">*</span></label>
                                                <input type="text" class="form-control" id="city" placeholder="Enter City Name" name="city" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Street Address:<span class="redText">*</span></label>
                                                <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Mobile Number:<span class="redText">*</span></label>
                                                <input type="text" class="form-control" id="number" placeholder="Enter Mobile Number" name="number" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Email Address:<span class="redText">*</span></label>
                                                <input type="email" class="form-control" id="email" placeholder="Enter Email Address" name="email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="well">
                                            <h2>Shipping Method</h2>
                                            <div class="radio">
                                                <label><input type="radio" name="method" value="standard" checked>Standard Plan</label>
                                                <p><small>Your Product will be Deliverd to you within 7-9 Business Days </small></p>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="method" value="expedited" checked>Expedited Plan</label>
                                                <p><small>Your Product will be Deliverd to you Overnight.</small></p>
                                            </div>
                                            <div class="orderDetails">
                                                <h2>Order Details</h2>
                                                @foreach($product_cart as $pc)
                                                <p><strong>Product</strong></p>
                                                <br />
                                                <p>{{$pc->product->name}} x {{$pc->quantity}} <span>{{$pc->product->price}}$</span></p>
                                                @endforeach
                                                <br />



                                            </div>
                                            <center>
                                                <button type="submit" class="btn btn-primary btnPayment">Continue To Payment</button>
                                            </center>
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
</section>
@endsection