
@extends('user.layouts.dasboard')

<link href="{{ asset('css/description.css')}}" rel="stylesheet">

@section('dashboard')
    <section>
        <div class="innerPageBlank">
            <div class="">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="pageTitle">
                        </div>
                        <div class="InnerContent">
                            <div class="descriptionClasses">
                                <h2>Group Class</h2>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="{{ asset('images/livesession-03.jpg')}}" class="img-responsive">
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="headArea">
                                            <h1>{!! $class_detail['name'] !!}</h1>
                                            <h2>Trainer: {!! $class_detail->trainer->name !!}</h2>
                                            <h3>Start Time: 10:30 am</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h2>Description</h2>
                                        <p>{!! $class_detail->details !!}</p>

                                    </div>
                                </div>
                                <div class="row featuredTrainerArea">

                                    <div class="col-sm-12">
                                        <h2>Group Member Join Session</h2>
                                        <ul class="list-inline">
                                            @foreach($group_member as $gm)
                                                <li>
                                                    <div class="featuredTrainerBox">
                                                        <div class="featuredTrainerBoxImg">
                                                            <img src="{{ $gm->user->avatar}}" class="img-responsive">
                                                            <div class="featuredTrainerActive">
                                                            </div>
                                                        </div>
                                                        <div class="featuredTrainerName">
                                                           {!! $gm->user->name!!}
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-sm-12 bookNowBtn">
                                        <a href="" class="btn btn-primary btnbook">Book Now</a>
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