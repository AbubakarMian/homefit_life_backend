
@extends('user.layouts.index')

@section('default')
    <section>
        <div class="mainSliderArea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mainImageContent">
                            <h4>Book Private fitness and wellness sessions to be deliverd via live stream</h4>
                            <h1><span>At-homex</span> workout and wellness sessions</h1>
                            <div class="sliderBtnsArea">
                                <ul class="sliderBtnslist1">
                                    <li class="btnsliderList btn btn-primary perTrain"><div class="">Personal Training</div></li>
                                </ul>
                                <ul class="sliderBtnslist2">
                                    <li class="btnsliderList btn btn-primary"><div class="KickBoxing">KickBoxing</div></li>
                                    <li class="btnsliderList btn btn-primary"><div class="Boxing">Boxing</div></li>
                                    <li class="btnsliderList btn btn-primary"><div class="Ballet">Ballet Fit</div></li>
                                    <li class="btnsliderList btn btn-primary"><div class="Streching">Streching</div></li>
                                    <li class="btnsliderList btn btn-primary"><div class="Natal">pre|post Natal</div></li>
                                    <li class="btnsliderList btn btn-primary"><div class="Pilates">Pilates</div></li>
                                    <li class="btnsliderList btn btn-primary"><div class="Yoga">Yoga</div></li>
                                    <li class="btnsliderList btn btn-primary"><div class="Meditation">Meditation</div></li>
                                </ul>
                            </div>
                            <div class="sliderSearchArea">
                                <div class="row">
                                    <div class="form-group col-sm-7">
                                        <input type="text" class="form-control" id="trainerSearch" placeholder="Find Trainer" name="trainerSearch">
                                    </div>
                                    <div class="col-sm-4">
                                        <button type="submit" class="btn btn-primary findTrainer-Btn">Find Your Trainer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="onlineStoreArea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Online <span>Store</span></h2>
                    </div>
                    <div class="col-sm-12">
                        <div class="carousel slide" id="store-carousel" data-interval="false" data-ride="carousel" data-interval="20000">
                            <ol class="carousel-indicators">
                                <li data-target="#store-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#store-carousel" data-slide-to="1" class=""></li>
                                <li data-target="#store-carousel" data-slide-to="2" class=""></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item testimonials active">
                                    <div class="col-sm-3">
                                        <div class="FProductsiconbox">
                                            <div class="FProductsiconImage">
                                                <img src="{{ asset('images/product-02.jpg')}}" class="img-responsive">
                                            </div>
                                            <div class="FProductsimagecontent">
                                                Gym Product 1
                                            </div>
                                            <div class="FProductsStars">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div class="addtoCart">
                                                <a href="" class="btn btn-primary btnCart">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="FProductsiconbox">
                                            <div class="FProductsiconImage">
                                                <img src="{{ asset('images/product-03.jpg')}}" class="img-responsive">
                                            </div>
                                            <div class="FProductsimagecontent">
                                                Gym Product 2
                                            </div>
                                            <div class="FProductsStars">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div class="addtoCart">
                                                <a href="" class="btn btn-primary btnCart">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="FProductsiconbox">
                                            <div class="FProductsiconImage">
                                                <img src="{{ asset('images/product-04.jpg')}}" class="img-responsive">
                                            </div>
                                            <div class="FProductsimagecontent">
                                                Gym Product 3
                                            </div>
                                            <div class="FProductsStars">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div class="addtoCart">
                                                <a href="" class="btn btn-primary btnCart">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="FProductsiconbox">
                                            <div class="FProductsiconImage">
                                                <img src="{{ asset('images/product-05.jpg')}}" class="img-responsive">
                                            </div>
                                            <div class="FProductsimagecontent">
                                                Gym Product 4
                                            </div>
                                            <div class="FProductsStars">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div class="addtoCart">
                                                <a href="" class="btn btn-primary btnCart">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <div class="item testimonials">
                                    <div class="col-sm-3">
                                        <div class="FProductsiconbox">
                                            <div class="FProductsiconImage">
                                                <img src="images/product-02.jpg" class="img-responsive">
                                            </div>
                                            <div class="FProductsimagecontent">
                                                Gym Product 1
                                            </div>
                                            <div class="FProductsStars">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div class="addtoCart">
                                                <a href="" class="btn btn-primary btnCart">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="FProductsiconbox">
                                            <div class="FProductsiconImage">
                                                <img src="images/product-03.jpg" class="img-responsive">
                                            </div>
                                            <div class="FProductsimagecontent">
                                                Gym Product 2
                                            </div>
                                            <div class="FProductsStars">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div class="addtoCart">
                                                <a href="" class="btn btn-primary btnCart">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="FProductsiconbox">
                                            <div class="FProductsiconImage">
                                                <img src="images/product-04.jpg" class="img-responsive">
                                            </div>
                                            <div class="FProductsimagecontent">
                                                Gym Product 3
                                            </div>
                                            <div class="FProductsStars">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div class="addtoCart">
                                                <a href="" class="btn btn-primary btnCart">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="FProductsiconbox">
                                            <div class="FProductsiconImage">
                                                <img src="images/product-05.jpg" class="img-responsive">
                                            </div>
                                            <div class="FProductsimagecontent">
                                                Gym Product 4
                                            </div>
                                            <div class="FProductsStars">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div class="addtoCart">
                                                <a href="" class="btn btn-primary btnCart">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item testimonials">
                                    <div class="col-sm-3">
                                        <div class="FProductsiconbox">
                                            <div class="FProductsiconImage">
                                                <img src="images/product-02.jpg" class="img-responsive">
                                            </div>
                                            <div class="FProductsimagecontent">
                                                Gym Product 1
                                            </div>
                                            <div class="FProductsStars">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div class="addtoCart">
                                                <a href="" class="btn btn-primary btnCart">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="FProductsiconbox">
                                            <div class="FProductsiconImage">
                                                <img src="images/product-02.jpg" class="img-responsive">
                                            </div>
                                            <div class="FProductsimagecontent">
                                                Gym Product 1
                                            </div>
                                            <div class="FProductsStars">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div class="addtoCart">
                                                <a href="" class="btn btn-primary btnCart">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="FProductsiconbox">
                                            <div class="FProductsiconImage">
                                                <img src="images/product-02.jpg" class="img-responsive">
                                            </div>
                                            <div class="FProductsimagecontent">
                                                Gym Product 1
                                            </div>
                                            <div class="FProductsStars">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div class="addtoCart">
                                                <a href="" class="btn btn-primary btnCart">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="FProductsiconbox">
                                            <div class="FProductsiconImage">
                                                <img src="images/product-02.jpg" class="img-responsive">
                                            </div>
                                            <div class="FProductsimagecontent">
                                                Gym Product 1
                                            </div>
                                            <div class="FProductsStars">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div class="addtoCart">
                                                <a href="" class="btn btn-primary btnCart">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <a class="left carousel-control" href="#store-carousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#store-carousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="groupClassesArea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Group <span>Class</span></h2>
                    </div>
                    <div class="col-sm-12">
                        <div class="carousel slide" id="GClass-carousel" data-interval="false" data-ride="carousel" data-interval="20000">
                            <ol class="carousel-indicators">
                                <li data-target="#GClass-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#GClass-carousel" data-slide-to="1" class=""></li>
                                <li data-target="#GClass-carousel" data-slide-to="2" class=""></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item testimonials active">
                                    <div class="col-sm-4">
                                        <div class="groupClassBox">
                                            <div class="groupClassImage">
                                                <img src="images/groupclass-07.jpg" class="img-responsive">
                                            </div>
                                            <div class="groupClassHead">
                                                Yoga
                                            </div>
                                            <div class="groupClasstext">
                                                Davide Fahim | John Doe
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="groupClassBox">
                                            <div class="groupClassImage">
                                                <img src="images/groupclass-08.jpg" class="img-responsive">
                                            </div>
                                            <div class="groupClassHead">
                                                Yoga
                                            </div>
                                            <div class="groupClasstext">
                                                Davide Fahim | John Doe
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="groupClassBox">
                                            <div class="groupClassImage">
                                                <img src="images/groupclass-09.jpg" class="img-responsive">
                                            </div>
                                            <div class="groupClassHead">
                                                Yoga
                                            </div>
                                            <div class="groupClasstext">
                                                Davide Fahim | John Doe
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item testimonials">
                                    <div class="col-sm-4">
                                        <div class="groupClassBox">
                                            <div class="groupClassImage">
                                                <img src="images/groupclass-07.jpg" class="img-responsive">
                                            </div>
                                            <div class="groupClassHead">
                                                Yoga
                                            </div>
                                            <div class="groupClasstext">
                                                Davide Fahim | John Doe
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="groupClassBox">
                                            <div class="groupClassImage">
                                                <img src="images/groupclass-08.jpg" class="img-responsive">
                                            </div>
                                            <div class="groupClassHead">
                                                Yoga
                                            </div>
                                            <div class="groupClasstext">
                                                Davide Fahim | John Doe
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="groupClassBox">
                                            <div class="groupClassImage">
                                                <img src="images/groupclass-09.jpg" class="img-responsive">
                                            </div>
                                            <div class="groupClassHead">
                                                Yoga
                                            </div>
                                            <div class="groupClasstext">
                                                Davide Fahim | John Doe
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item testimonials">
                                    <div class="col-sm-4">
                                        <div class="groupClassBox">
                                            <div class="groupClassImage">
                                                <img src="images/groupclass-07.jpg" class="img-responsive">
                                            </div>
                                            <div class="groupClassHead">
                                                Yoga
                                            </div>
                                            <div class="groupClasstext">
                                                Davide Fahim | John Doe
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="groupClassBox">
                                            <div class="groupClassImage">
                                                <img src="images/groupclass-08.jpg" class="img-responsive">
                                            </div>
                                            <div class="groupClassHead">
                                                Yoga
                                            </div>
                                            <div class="groupClasstext">
                                                Davide Fahim | John Doe
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="groupClassBox">
                                            <div class="groupClassImage">
                                                <img src="images/groupclass-09.jpg" class="img-responsive">
                                            </div>
                                            <div class="groupClassHead">
                                                Yoga
                                            </div>
                                            <div class="groupClasstext">
                                                Davide Fahim | John Doe
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#GClass-carousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#GClass-carousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="LiveSessionArea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Live <span>Session</span></h2>
                    </div>
                    <div class="col-sm-12">
                        <div class="carousel slide" id="LiveSession-carousel" data-interval="false" data-ride="carousel" data-interval="20000">
                            <ol class="carousel-indicators">
                                <li data-target="#LiveSession-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#LiveSession-carousel" data-slide-to="1" class=""></li>
                                <li data-target="#LiveSession-carousel" data-slide-to="2" class=""></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item testimonials active">
                                    <div class="col-sm-3">
                                        <div class="liveSessionBox">
                                            <div class="liveSessionImg">
                                                <img src="images/livesession-02.jpg" class="img-responsive">
                                                <div class="liveSessionActive">
                                                </div>
                                            </div>
                                            <div class="LiveSessionContetn">
                                                Yoga<br/> Session
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="liveSessionBox">
                                            <div class="liveSessionImg">
                                                <img src="images/livesession-03.jpg" class="img-responsive">
                                                <div class="liveSessionDeactiveActive">
                                                </div>
                                            </div>
                                            <div class="LiveSessionContetn">
                                                Yoga<br/> Session
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="liveSessionBox">
                                            <div class="liveSessionImg">
                                                <img src="images/livesession-04.jpg" class="img-responsive">
                                                <div class="liveSessionActive">
                                                </div>
                                            </div>
                                            <div class="LiveSessionContetn">
                                                Yoga<br/> Session
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="liveSessionBox">
                                            <div class="liveSessionImg">
                                                <img src="images/livesession-05.jpg" class="img-responsive">
                                                <div class="liveSessionDeactiveActive">
                                                </div>
                                            </div>
                                            <div class="LiveSessionContetn">
                                                Yoga<br/> Session
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item testimonials">
                                    <div class="col-sm-3">
                                        <div class="liveSessionBox">
                                            <div class="liveSessionImg">
                                                <img src="images/livesession-02.jpg" class="img-responsive">
                                                <div class="liveSessionDeactiveActive">
                                                </div>
                                            </div>
                                            <div class="LiveSessionContetn">
                                                Yoga<br/> Session
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="liveSessionBox">
                                            <div class="liveSessionImg">
                                                <img src="images/livesession-03.jpg" class="img-responsive">
                                                <div class="liveSessionActive">
                                                </div>
                                            </div>
                                            <div class="LiveSessionContetn">
                                                Yoga<br/> Session
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="liveSessionBox">
                                            <div class="liveSessionImg">
                                                <img src="images/livesession-04.jpg" class="img-responsive">
                                                <div class="liveSessionDeactiveActive">
                                                </div>
                                            </div>
                                            <div class="LiveSessionContetn">
                                                Yoga<br/> Session
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="liveSessionBox">
                                            <div class="liveSessionImg">
                                                <img src="images/livesession-05.jpg" class="img-responsive">
                                                <div class="liveSessionActive">
                                                </div>
                                            </div>
                                            <div class="LiveSessionContetn">
                                                Yoga<br/> Session
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item testimonials">
                                    <div class="col-sm-3">
                                        <div class="liveSessionBox">
                                            <div class="liveSessionImg">
                                                <img src="images/livesession-02.jpg" class="img-responsive">
                                                <div class="liveSessionActive">
                                                </div>
                                            </div>
                                            <div class="LiveSessionContetn">
                                                Yoga<br/> Session
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="liveSessionBox">
                                            <div class="liveSessionImg">
                                                <img src="images/livesession-03.jpg" class="img-responsive">
                                                <div class="liveSessionActive">
                                                </div>
                                            </div>
                                            <div class="LiveSessionContetn">
                                                Yoga<br/> Session
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="liveSessionBox">
                                            <div class="liveSessionImg">
                                                <img src="images/livesession-04.jpg" class="img-responsive">
                                                <div class="liveSessionDeactiveActive">
                                                </div>
                                            </div>
                                            <div class="LiveSessionContetn">
                                                Yoga<br/> Session
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="liveSessionBox">
                                            <div class="liveSessionImg">
                                                <img src="images/livesession-05.jpg" class="img-responsive">
                                                <div class="liveSessionActive">
                                                </div>
                                            </div>
                                            <div class="LiveSessionContetn">
                                                Yoga<br/> Session
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#LiveSession-carousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#LiveSession-carousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="trainingSesion">
            <div class="container">
                <div class="col-sm-8">
                    <div class="textTrainLight">
                        next upcomming
                    </div>
                    <div class="textTrainBold">
                        trainging Session
                    </div>
                    <div class="btnTraingArea">
                        <a href="" class="btn btn-primary btnJoinTrain">Join Now</a>
                    </div>
                </div>
                <div class="col-sm-4">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="galleryArea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <h2>Our Gallery</h2>
                    </div>
                    <div class="col-sm-8">
                        <ul class="nav nav-pills">
                            <li class="active"><a data-toggle="pill" href="#All">All</a></li>
                            <li><a data-toggle="pill" href="#Yoga">Yoga</a></li>
                            <li><a data-toggle="pill" href="#Fitness">Fitness</a></li>
                            <li><a data-toggle="pill" href="#Gym">Gym</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-12">
                        <div class="tab-content">
                            <div id="All" class="tab-pane fade in active">
                                <div class="col-sm-4">
                                    <div class="tabsImg">
                                        <img src="images/gallery-16.jpg" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="tabsImg">
                                        <img src="images/gallery-17.jpg" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="tabsImg">
                                        <img src="images/gallery-18.jpg" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="tabsImg">
                                        <img src="images/gallery-19.jpg" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="tabsImg">
                                        <img src="images/gallery-20.jpg" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="tabsImg">
                                        <img src="images/gallery-21.jpg" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                            <div id="Yoga" class="tab-pane fade">
                                <div class="col-sm-4">
                                    <div class="tabsImg">
                                        <img src="images/gallery-16.jpg" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="tabsImg">
                                        <img src="images/gallery-17.jpg" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="tabsImg">
                                        <img src="images/gallery-18.jpg" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                            <div id="Fitness" class="tab-pane fade">
                                <div class="col-sm-4">
                                    <div class="tabsImg">
                                        <img src="images/gallery-19.jpg" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="tabsImg">
                                        <img src="images/gallery-20.jpg" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                            <div id="Gym" class="tab-pane fade">
                                <div class="col-sm-4">
                                    <div class="tabsImg">
                                        <img src="images/gallery-21.jpg" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="tabsImg">
                                        <img src="images/gallery-17.jpg" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="tabsImg">
                                        <img src="images/gallery-18.jpg" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="tabsImg">
                                        <img src="images/gallery-19.jpg" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="nutriationArea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dailyTipsArea">
                            <h2>Daily Tips <span>On Nutrition</span></h2>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" >
                                                Collapsible Group Item #1
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" >
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                            raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Collapsible Group Item #2
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                            raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Collapsible Group Item #3
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                            raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                                Collapsible Group Item #3
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" aria-expanded="false">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                            raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFive">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                                Collapsible Group Item #3
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive" aria-expanded="false">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                            raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="nutrationCalArea">
                            <h2>Nutrition <span>calculator</span></h2>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>View Calculation</th>
                                    <th>Total</th>
                                    <th>Goal</th>
                                    <th>Left</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Protien</td>
                                    <td>000</td>
                                    <td>70</td>
                                    <td>70g</td>
                                </tr>
                                <tr>
                                    <td>Carbohydrates</td>
                                    <td>000</td>
                                    <td>70</td>
                                    <td>70g</td>
                                </tr>
                                <tr>
                                    <td>Fiber</td>
                                    <td>000</td>
                                    <td>70</td>
                                    <td>70g</td>
                                </tr>
                                <tr>
                                    <td>Sugars</td>
                                    <td>000</td>
                                    <td>70</td>
                                    <td>70g</td>
                                </tr>
                                <tr>
                                    <td>Fat</td>
                                    <td>000</td>
                                    <td>70</td>
                                    <td>70g</td>
                                </tr>
                                <tr>
                                    <td>Saturated</td>
                                    <td>000</td>
                                    <td>70</td>
                                    <td>70g</td>
                                </tr>
                                <tr>
                                    <td>polyunsaturated</td>
                                    <td>000</td>
                                    <td>70</td>
                                    <td>70g</td>
                                </tr>
                                <tr>
                                    <td>Monounsaturated </td>
                                    <td>000</td>
                                    <td>70</td>
                                    <td>70g</td>
                                </tr>
                                <tr>
                                    <td>Trans</td>
                                    <td>000</td>
                                    <td>70</td>
                                    <td>70g</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="nutrationBtnArea">
                            <a href="" class="btn btn-primary btnCal">LOGIN OR CREATE AN ACCOUNT <br/> <span>to use our Nutrational Calculator</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection