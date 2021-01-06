@extends('user.layouts.dasboard')
<link href="{{ asset('css/collection.css') }}" rel="stylesheet">

@section('dashboard')
<section>
    <div class="innerPageBlank">
        <div class="collectionBanner">
            <h1>Checkout our new Collection</h1>
        </div>
        <div class="container">
            <div class=" row searchTrainer">
                <form method="post" action="{{ url('user/searchProduct') }}">
                    {{ csrf_field() }}
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type="text" name="prod_name" class="form-control" id="prod_name" placeholder="Search Products">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-primary btnSearch"><i class="flaticon-loupe"></i>Search</button>
                    </div>
                </form>
            </div>
            <div class="GroupClassSliderArea">
                <div class=" headSlider">
                    <div class="row">
                        <div class="col-md-9">

                            <h2><span class="firstbold">Online</span> store </h2>
                        </div>
                        <div class="col-md-3">
                            <!-- Controls -->
                            <div class="controls pull-right hidden-xs">
                                <a class="left fa fa-chevron-left btn btn-primary btnSlider" href="#GroupClassSlider" data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary btnSlider" href="#GroupClassSlider" data-slide="next"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="GroupClassSlider" class="carousel slide hidden-xs" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        @foreach($products as $key=>$p)
                        <div class="item {!!$key === 0 ? 'active':'' !!}">
                            <div class="row">
                                @foreach($p as $sp)
                                <div class="col-sm-3">
                                    <div class="FProductsiconbox">
                                        <a href="{{asset('user/productdetail?prod_id='.$sp->id)}}">
                                            <div class="FProductsiconImage">
                                                <img src="{{ $sp->avatar }}" class="img-responsive">
                                            </div>
                                            <div class="FProductsimagecontent">
                                                {!! $sp->name !!}
                                            </div>
                                            <div class="FProductsStars">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                        </a>
                                        <div class="addtoCart">
                                            <a href="{{asset('user/productdetail?prod_id='.$sp->id)}}" class="btn btn-primary btnCart">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection