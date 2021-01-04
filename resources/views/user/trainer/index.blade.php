@extends('user.layouts.dasboard')

<link href="{{ asset('css/trainer.css')}}" rel="stylesheet">
<link href="{{ asset('css/advancesearch.css')}}" rel="stylesheet">

@section('dashboard')
<section>
    <div class="innerPage">
        <div class="">
            <div class="row">
                <div class="col-sm-12">
                    <div class="pageTitle">
                        <h1>Trainers</h1>
                    </div>
                    <div class="InnerContent">
                        <div class=" row searchTrainer">
                            <form method="post" action="{{ url('user/trainer/index') }}">
                                {{ csrf_field() }}
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="trainer" name="trainer" placeholder="Search Trainers">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <button type="submit" class="btn btn-primary btnSearch"><i class="flaticon-loupe"></i>Search</button>
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" data-toggle="modal" data-target="#AdvanceSearchModal" class="btn btn-primary btnAdvSearch"><i class="fa fa-server" aria-hidden="true"></i> Advance Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- trainer container -->
        <div class="featuredTrainerArea">

            <div class=" bgContainer">
                <h2>Featured Trainers</h2>
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="list-inline">
                            @foreach($featured_trainers as $ft)
                            <li>
                                <a href="{{asset('user/trainerclassprofile?trainer='.$ft->id)}}">
                                    <div class="featuredTrainerBox">
                                        <div class="featuredTrainerBoxImg">
                                            <img src="{{ asset('images/livesession-02.jpg')}}" class="img-responsive">
                                            <div class="featuredTrainerActive">
                                            </div>
                                        </div>
                                        <div class="featuredTrainerName">
                                            {{$ft->name}}
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- all trainers -->

                <h2>All Trainers</h2>
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="list-inline">
                            @foreach($all_trainers as $at)
                            <li>
                                <a href="{{asset('user/trainerclassprofile?trainer='.$at->id)}}">
                                    <div class="featuredTrainerBox">
                                        <div class="featuredTrainerBoxImg">
                                            <img src="{{ asset('images/livesession-02.jpg')}}" class="img-responsive">
                                            <div class="featuredTrainerActive">
                                            </div>
                                        </div>
                                        <div class="featuredTrainerName">
                                            {{$at->name}}
                                        </div>
                                    </div>
                                </a>
                            </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal Advance Search -->
<div id="AdvanceSearchModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div id="regForm">
                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">
                        <div class="AdvanceSearchArea">
                            <h2>Advance Search</h2>
                            <div class="formAdvanceSearch">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Country, City. State. Zip">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="sel1">
                                        <option>Mandatory Training Type</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="sel1">
                                        <option>Class Type</option>
                                        <option>Personal Class</option>
                                        <option>Group Class</option>
                                        <option>Both</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Trainer Name (optional)">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="sel1">
                                        <option>Gender Type</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab">
                        <h3>Sort By</h3>
                        <div class="trainerSelect">
                            <ul class="nav nav-pills">
                                <li><a data-toggle="pill" class="btn btn-primary btnTabs" href="#home">Rating</a></li>
                                <li><a data-toggle="pill" class="btn btn-primary btnTabs" href="#menu1">Location</a></li>
                                <li><a data-toggle="pill" class="btn btn-primary btnTabs" href="#menu2">Time</a></li>
                                <li><a data-toggle="pill" class="btn btn-primary btnTabs" href="#menu3">Upcomming Group Class</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <h3>Rating</h3>
                                    <ul class="list-inline">
                                        <li>
                                            <div class="ADSearchTrainerBox">
                                                <div class="ADSearchTrainerBoxImg">
                                                    <img src="images/livesession-02.jpg" class="img-responsive">
                                                    <div class="ADSearchTrainerActive">
                                                    </div>
                                                </div>
                                                <div class="ADSearchTrainerName">
                                                    Michle Clark
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ADSearchTrainerBox">
                                                <div class="ADSearchTrainerBoxImg">
                                                    <img src="images/livesession-02.jpg" class="img-responsive">
                                                    <div class="ADSearchTrainerDeactiveActive">
                                                    </div>
                                                </div>
                                                <div class="ADSearchTrainerName">
                                                    Michle Clark
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <h3>Location</h3>
                                    <ul class="list-inline">
                                        <li>
                                            <div class="ADSearchTrainerBox">
                                                <div class="ADSearchTrainerBoxImg">
                                                    <img src="images/livesession-02.jpg" class="img-responsive">
                                                    <div class="ADSearchTrainerActive">
                                                    </div>
                                                </div>
                                                <div class="ADSearchTrainerName">
                                                    Michle Clark
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ADSearchTrainerBox">
                                                <div class="ADSearchTrainerBoxImg">
                                                    <img src="images/livesession-02.jpg" class="img-responsive">
                                                    <div class="ADSearchTrainerDeactiveActive">
                                                    </div>
                                                </div>
                                                <div class="ADSearchTrainerName">
                                                    Michle Clark
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <h3>Time</h3>
                                    <ul class="list-inline">
                                        <li>
                                            <div class="ADSearchTrainerBox">
                                                <div class="ADSearchTrainerBoxImg">
                                                    <img src="images/livesession-02.jpg" class="img-responsive">
                                                    <div class="ADSearchTrainerActive">
                                                    </div>
                                                </div>
                                                <div class="ADSearchTrainerName">
                                                    Michle Clark
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ADSearchTrainerBox">
                                                <div class="ADSearchTrainerBoxImg">
                                                    <img src="images/livesession-02.jpg" class="img-responsive">
                                                    <div class="ADSearchTrainerDeactiveActive">
                                                    </div>
                                                </div>
                                                <div class="ADSearchTrainerName">
                                                    Michle Clark
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div id="menu3" class="tab-pane fade">
                                    <h3>Upcomming Group Class</h3>
                                    <ul class="list-inline">
                                        <li>
                                            <div class="ADSearchTrainerBox">
                                                <div class="ADSearchTrainerBoxImg">
                                                    <img src="images/livesession-02.jpg" class="img-responsive">
                                                    <div class="ADSearchTrainerActive">
                                                    </div>
                                                </div>
                                                <div class="ADSearchTrainerName">
                                                    Michle Clark
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ADSearchTrainerBox">
                                                <div class="ADSearchTrainerBoxImg">
                                                    <img src="images/livesession-02.jpg" class="img-responsive">
                                                    <div class="ADSearchTrainerDeactiveActive">
                                                    </div>
                                                </div>
                                                <div class="ADSearchTrainerName">
                                                    Michle Clark
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="overflow:auto;">
                        <div style="float:right;">
                            <button type="button" class="btn btn-primary" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>
                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Advance Search -->
<script type="text/javascript" src="{{ asset('js/advancesearch.js')}}"></script>
@endsection