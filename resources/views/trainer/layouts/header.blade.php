<?php

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

if (Auth::user()) {
$user = Auth::user();
$cart = Cart::with('product')
->where('user_id', $user->id)
->get();
}
$user_common = session()->get('user_common');
$header = $user_common['header'] ?? '';
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

</head>

<body>

    <header>
        <div class="topHeader">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div class="logoArea">
                            <a href="{{ asset('/trainer/dashboard') }}"><img src="{{ asset('images/logo.png') }}"
                                    class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="row mobileNav">
                            <div class="col-xs-4 visible-xs xs-marker">
                                <a href="https://goo.gl/maps/iE4esX3uT4hkjbuE9" target="_blank" title="Google Map"><i
                                        class="fa fa-map-marker "></i>Find</a>
                            </div>
                            <div class="col-xs-4 visible-xs xs-phone">
                                <a href="tel:+92-21-38897770" target="_blank" title="Contact Number"><i
                                        class="fa fa-phone "></i>Call</a>
                            </div>
                            <div class="col-xs-4 visible-xs">
                                <button data-target=".navbar-collapse" data-toggle="collapse" id="mnav-button"
                                    class="navbar-toggle fa fa-bars fa-2x collapsed" type="button">
                                </button>
                            </div>
                        </div>
                        <div class="menuBar">
                            <nav>
                                <div class="jump">
                                    <div class="navbar-collapse nav-collapse collapse" aria-expanded="false"
                                        style="height: 1px;">
                                        <!-- responsive nav -->
                                        <ul class="nav navbar-nav">

                                        </ul>
                                    </div> <!-- .nav-collapse -->
                                </div> <!-- .container -->
                            </nav>
                        </div>
                    </div>
                    <div class="col-sm-3 hidden-xs">
                        <div class="cartArea">
                            @if (Auth::check())
                            <a href="{{ asset('trainer/logout') }}"
                                class="btn btn-primary btn-sm btn-UserLogin ">Trainer Logout <i
                                    class="fa fa-user-circle" aria-hidden="true"></i></a>
                            @else
                            <a href="{{ asset('trainer/login') }}" class="btn btn-primary btn-sm btn-UserLogin ">Trainer
                                Login <i class="fa fa-user-circle" aria-hidden="true"></i></a>
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