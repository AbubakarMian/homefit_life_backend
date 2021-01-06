<?php

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

$user = Auth::user();
$cart = Cart::with('product')->where('user_id', $user->id)->get();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home Fit Live</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('font/flaticon.css') }}">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

</head>
<!-- @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif -->

<body>
    <header>
        <div class="topHeader">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div class="logoArea">
                            <a href="{{ asset('/user/dashboard')}}"><img src="{{ asset('images/logo.png')}}" class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="row mobileNav">
                            <div class="col-xs-4 visible-xs xs-marker">
                                <a href="https://goo.gl/maps/iE4esX3uT4hkjbuE9" target="_blank" title="Google Map"><i class="fa fa-map-marker "></i>Find</a>
                            </div>
                            <div class="col-xs-4 visible-xs xs-phone">
                                <a href="tel:+92-21-38897770" target="_blank" title="Contact Number"><i class="fa fa-phone "></i>Call</a>
                            </div>
                            <div class="col-xs-4 visible-xs">
                                <button data-target=".navbar-collapse" data-toggle="collapse" id="mnav-button" class="navbar-toggle fa fa-bars fa-2x collapsed" type="button">
                                </button>
                            </div>
                        </div>
                        <div class="menuBar">
                            <nav>
                                <div class="jump">
                                    <div class="navbar-collapse nav-collapse collapse" aria-expanded="false" style="height: 1px;">
                                        <!-- responsive nav -->
                                        <ul class="nav navbar-nav">
                                            <li id="" class="inMenu">
                                                <a href="{{ asset('user/dashboard')}}"><span>Home</span> </a>
                                            </li>
                                            <li id="">
                                                <a href="{!! asset('user/categories') !!}"><span>Categories</span> </a>
                                            </li>
                                            <li id="">
                                                <a href="{!! asset('user/trainer/index') !!}"><span>Trainers</span> </a>
                                            </li>
                                            <li id="">
                                                <a href="{!! asset('user/store') !!}"><span>Store</span> </a>
                                            </li>
                                            <li id="">
                                                <a href=""><span>Live Sessions</span> </a>
                                            </li>
                                        </ul>
                                    </div> <!-- .nav-collapse -->
                                </div> <!-- .container -->
                            </nav>
                        </div>
                    </div>
                    <div class="col-sm-3 hidden-xs">
                        <div class="cartArea">
                            <button id="notification" class="btn btn-link btn-sm btn-notification"><i class="flaticon-bell" aria-hidden="true"></i></button>
                            <div class="notificationArea" style="display: none;">
                                <h3>Yoga Group Class</h3>
                                <p>Starts in 15 Min</p>
                                <ul class="list-inline">
                                    <li><a href="" class="btn btn-primary btn-sm">Join!</a></li>
                                    <li><a href="" class="btn btn-primary btn-sm">HomePage</a></li>
                                </ul>
                            </div>
                            <button id="cartItems" class="btn btn-link btn-sm btn-cart"><i class="flaticon-cart" aria-hidden="true"></i></button>
                            <div class="cartItemArea" style="display: none;">
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
                                        @foreach($cart as $c)
                                        <tr>
                                            <td class="cartImg"><img src="{!!  $c->product->avatar  !!}" class="img-responsive"></td>
                                            <td>{!! $c->product->name !!}</td>
                                            <td>{!! $c->product->price !!}</td>
                                            <td>{!! $c->quantity !!}</td>
                                            <td>{!! $c->quantity * $c->product->price !!}</td>
                                            <td ><a href="{!! asset('user/remove_cart_product?cart_id=').$c->id !!}">X</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <center><a href="" class="btn btn-primary btn-xs">Checkout</a></center>

                            </div>
                            @if(Auth::check())
                            <a href="{{ asset('user/logout')}}" class="btn btn-primary btn-sm btn-UserLogin ">User Logout <i class="fa fa-user-circle" aria-hidden="true"></i></a>
                            @else
                            <a href="{{ asset('/homefit/login.php')}}" class="btn btn-primary btn-sm btn-UserLogin ">User Login <i class="fa fa-user-circle" aria-hidden="true"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <script>
        $(document).ready(function() {
            $("#notification").click(function() {
                $(".notificationArea").toggle();
            });
        });

        $(document).ready(function() {
            $("#cartItems").click(function() {
                $(".cartItemArea").toggle();
            });
        });
    </script>