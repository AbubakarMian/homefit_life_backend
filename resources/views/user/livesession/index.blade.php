
@extends('user.layouts.dasboard')
<link href="{{asset('css/livesession.css')}}" rel="stylesheet">
@section('dashboard')
    <section>
        <div class="innerPageBlank">
            <div class="">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="pageTitle">
                            <h1>Group Classes Live Session</h1>
                        </div>
                    </div>
                </div>
                <div class="InnerContent">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="liveSessionClassImg">
                                <iframe src="{!! $session->live_url !!}" allow="camera ;microphone" height="100%" width="100%"></iframe>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="participantsArea">
                                <div class="form-group">
                                    <select class="form-control" id="sel1">
                                        <option>participants</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="featuredTrainerArea well">
                                <ul class="list-inline">
                                    <li>
                                        <div class="featuredTrainerBox">
                                            <div class="featuredTrainerBoxImg">
                                                <img src="{{asset('images/livesession-02.jpg')}}" class="img-responsive">
                                                <div class="featuredTrainerActive">
                                                </div>
                                            </div>
                                            <div class="featuredTrainerName">
                                                Michle Clark
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="featuredTrainerBox">
                                            <div class="featuredTrainerBoxImg">
                                                <img src="{{asset('images/livesession-02.jpg')}}" class="img-responsive">
                                                <div class="featuredTrainerDeactiveActive">
                                                </div>
                                            </div>
                                            <div class="featuredTrainerName">
                                                Michle Clark
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="featuredTrainerBox">
                                            <div class="featuredTrainerBoxImg">
                                                <img src="{{asset('images/livesession-02.jpg')}}" class="img-responsive">
                                                <div class="featuredTrainerActive">
                                                </div>
                                            </div>
                                            <div class="featuredTrainerName">
                                                Michle Clark
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="featuredTrainerBox">
                                            <div class="featuredTrainerBoxImg">
                                                <img src="{{asset('images/livesession-02.jpg')}}" class="img-responsive">
                                                <div class="featuredTrainerDeactiveActive">
                                                </div>
                                            </div>
                                            <div class="featuredTrainerName">
                                                Michle Clark
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="featuredTrainerBox">
                                            <div class="featuredTrainerBoxImg">
                                                <img src="{{asset('images/livesession-02.jpg')}}" class="img-responsive">
                                                <div class="featuredTrainerActive">
                                                </div>
                                            </div>
                                            <div class="featuredTrainerName">
                                                Michle Clark
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="featuredTrainerBox">
                                            <div class="featuredTrainerBoxImg">
                                                <img src="{{asset('images/livesession-02.jpg')}}" class="img-responsive">
                                                <div class="featuredTrainerDeactiveActive">
                                                </div>
                                            </div>
                                            <div class="featuredTrainerName">
                                                Michle Clark
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="featuredTrainerBox">
                                            <div class="featuredTrainerBoxImg">
                                                <img src="{{asset('images/livesession-02.jpg')}}" class="img-responsive">
                                                <div class="featuredTrainerActive">
                                                </div>
                                            </div>
                                            <div class="featuredTrainerName">
                                                Michle Clark
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="featuredTrainerBox">
                                            <div class="featuredTrainerBoxImg">
                                                <img src="{{asset('images/livesession-02.jpg')}}" class="img-responsive">
                                                <div class="featuredTrainerDeactiveActive">
                                                </div>
                                            </div>
                                            <div class="featuredTrainerName">
                                                Michle Clark
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="recomendedItemsArea">
                               
                                <h2>Recommmended Items</h2>
                                @foreach($recomended_product as $key=>$rp)
                                <div class="recomendedItem"> 
                                    <div class="productImg">
                                   
                                        <img src="{{$rp->products->avatar}}" class="img-responsive">
                                    </div>
                                    <div class="productName">
                                        {{ $rp->products->name}}
                                        <div class="FProductsStars">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                    </div>
                                    <div class="productAction">
                                        <a href="{{asset('user/productdetail?prod_id='. $rp->products->id)}}" class="btn btn-primary btnCart">Add To Cart</a>
                                    </div>
                                </div>
                                @endforeach
                               
                                <ul class="list-inline">
                                    <li><a href= "" class="btn btn-primary">Order Now </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection