
@extends('user\layouts\dasboard')

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
                                <h2>Yoga Group Class</h2>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="{{ asset('images/livesession-03.jpg')}}" class="img-responsive">
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="headArea">
                                            <h1>Yoga Group Class 1</h1>
                                            <h2>Trainer: Edward Buttler</h2>
                                            <h3>Start Time: 10:30 am</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h2>Description</h2>
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>

                                    </div>
                                </div>
                                <div class="row featuredTrainerArea">

                                    <div class="col-sm-12">
                                        <h2>Group Member Join Session</h2>
                                        <ul class="list-inline">
                                            <li>
                                                <div class="featuredTrainerBox">
                                                    <div class="featuredTrainerBoxImg">
                                                        <img src="{{ asset('images/livesession-02.jpg')}}" class="img-responsive">
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
                                                        <img src="{{ asset('images/livesession-02.jpg')}}" class="img-responsive">
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
                                                        <img src="{{ asset('images/livesession-02.jpg')}}" class="img-responsive">
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
                                                        <img src="{{ asset('images/livesession-02.jpg')}}" class="img-responsive">
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
                                                        <img src="{{ asset('images/livesession-02.jpg')}}" class="img-responsive">
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
                                                        <img src="{{ asset('images/livesession-02.jpg')}}" class="img-responsive">
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
                                                        <img src="{{ asset('images/livesession-02.jpg')}}" class="img-responsive">
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
                                                        <img src="{{ asset('images/livesession-02.jpg')}}" class="img-responsive">
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