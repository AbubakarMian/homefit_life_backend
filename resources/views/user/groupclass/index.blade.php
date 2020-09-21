@extends('user.layouts.dasboard')
<link href="{{ asset('css/groupclass.css')}}" rel="stylesheet">


@section('dashboard')
    <section>
        <div class="innerPageBlank">
            <div class="">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="pageTitle">

                        </div>
                        <div class="InnerContent">
                            <div class="GroupClasses bgProfile">
                                <div class="GroupClassSliderArea">
                                    <div class=" headSlider">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <h2>Yoga Group Classes</h2>
                                            </div>
                                            <div class="col-md-3">
                                                <!-- Controls -->
                                                <div class="controls pull-right hidden-xs">
                                                    <a class="left fa fa-chevron-left btn btn-primary btnSlider" href="#GroupClassSlider"
                                                       data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary btnSlider" href="#GroupClassSlider"
                                                                                data-slide="next"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="GroupClassSlider" class="carousel slide hidden-xs" data-ride="carousel">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <a href="" data-toggle="modal" data-target="#descriptionPop">
                                                            <div class="col-item">
                                                                <div class="photo">
                                                                    <img src="{{ asset('images/gallery-18.jpg')}}" class="img-responsive" alt="Home Fit Group Class" />
                                                                </div>
                                                                <div class="Details">
                                                                    <h5>Yoga Group Class 1</h5>
                                                                    <p>Anim pariatur cliche reprehenderit, </p>
                                                                    <span>20 Members</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" data-toggle="modal" data-target="#descriptionPop">
                                                            <div class="col-item">
                                                                <div class="photo">
                                                                    <img src="{{ asset('images/gallery-18.jpg')}}" class="img-responsive" alt="Home Fit Group Class" />
                                                                </div>
                                                                <div class="Details">
                                                                    <h5>Yoga Group Class 1</h5>
                                                                    <p>Anim pariatur cliche reprehenderit, </p>
                                                                    <span>20 Members</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" data-toggle="modal" data-target="#descriptionPop">
                                                            <div class="col-item">
                                                                <div class="photo">
                                                                    <img src="{{ asset('images/gallery-18.jpg')}}" class="img-responsive" alt="Home Fit Group Class" />
                                                                </div>
                                                                <div class="Details">
                                                                    <h5>Yoga Group Class 1</h5>
                                                                    <p>Anim pariatur cliche reprehenderit, </p>
                                                                    <span>20 Members</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" data-toggle="modal" data-target="#descriptionPop">
                                                            <div class="col-item">
                                                                <div class="photo">
                                                                    <img src="{{ asset('images/gallery-18.jpg')}}" class="img-responsive" alt="Home Fit Group Class" />
                                                                </div>
                                                                <div class="Details">
                                                                    <h5>Yoga Group Class 1</h5>
                                                                    <p>Anim pariatur cliche reprehenderit, </p>
                                                                    <span>20 Members</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" data-toggle="modal" data-target="#descriptionPop">
                                                            <div class="col-item">
                                                                <div class="photo">
                                                                    <img src="{{ asset('images/gallery-18.jpg')}}" class="img-responsive" alt="Home Fit Group Class" />
                                                                </div>
                                                                <div class="Details">
                                                                    <h5>Yoga Group Class 1</h5>
                                                                    <p>Anim pariatur cliche reprehenderit, </p>
                                                                    <span>20 Members</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" data-toggle="modal" data-target="#descriptionPop">
                                                            <div class="col-item">
                                                                <div class="photo">
                                                                    <img src="{{ asset('images/gallery-18.jpg')}}" class="img-responsive" alt="Home Fit Group Class" />
                                                                </div>
                                                                <div class="Details">
                                                                    <h5>Yoga Group Class 1</h5>
                                                                    <p>Anim pariatur cliche reprehenderit, </p>
                                                                    <span>20 Members</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" data-toggle="modal" data-target="#descriptionPop">
                                                            <div class="col-item">
                                                                <div class="photo">
                                                                    <img src="{{ asset('images/gallery-18.jpg')}}" class="img-responsive" alt="Home Fit Group Class" />
                                                                </div>
                                                                <div class="Details">
                                                                    <h5>Yoga Group Class 1</h5>
                                                                    <p>Anim pariatur cliche reprehenderit, </p>
                                                                    <span>20 Members</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" data-toggle="modal" data-target="#descriptionPop">
                                                            <div class="col-item">
                                                                <div class="photo">
                                                                    <img src="{{ asset('images/gallery-18.jpg')}}" class="img-responsive" alt="Home Fit Group Class" />
                                                                </div>
                                                                <div class="Details">
                                                                    <h5>Yoga Group Class 1</h5>
                                                                    <p>Anim pariatur cliche reprehenderit, </p>
                                                                    <span>20 Members</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <a href="" data-toggle="modal" data-target="#descriptionPop">
                                                            <div class="col-item">
                                                                <div class="photo">
                                                                    <img src="{{ asset('images/gallery-18.jpg')}}" class="img-responsive" alt="Home Fit Group Class" />
                                                                </div>
                                                                <div class="Details">
                                                                    <h5>Yoga Group Class 1</h5>
                                                                    <p>Anim pariatur cliche reprehenderit, </p>
                                                                    <span>20 Members</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" data-toggle="modal" data-target="#descriptionPop">
                                                            <div class="col-item">
                                                                <div class="photo">
                                                                    <img src="{{ asset('images/gallery-18.jpg')}}" class="img-responsive" alt="Home Fit Group Class" />
                                                                </div>
                                                                <div class="Details">
                                                                    <h5>Yoga Group Class 1</h5>
                                                                    <p>Anim pariatur cliche reprehenderit, </p>
                                                                    <span>20 Members</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" data-toggle="modal" data-target="#descriptionPop">
                                                            <div class="col-item">
                                                                <div class="photo">
                                                                    <img src="{{ asset('images/gallery-18.jpg')}}" class="img-responsive" alt="Home Fit Group Class" />
                                                                </div>
                                                                <div class="Details">
                                                                    <h5>Yoga Group Class 1</h5>
                                                                    <p>Anim pariatur cliche reprehenderit, </p>
                                                                    <span>20 Members</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" data-toggle="modal" data-target="#descriptionPop">
                                                            <div class="col-item">
                                                                <div class="photo">
                                                                    <img src="{{ asset('images/gallery-18.jpg')}}" class="img-responsive" alt="Home Fit Group Class" />
                                                                </div>
                                                                <div class="Details">
                                                                    <h5>Yoga Group Class 1</h5>
                                                                    <p>Anim pariatur cliche reprehenderit, </p>
                                                                    <span>20 Members</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" data-toggle="modal" data-target="#descriptionPop">
                                                            <div class="col-item">
                                                                <div class="photo">
                                                                    <img src="{{ asset('images/gallery-18.jpg')}}" class="img-responsive" alt="Home Fit Group Class" />
                                                                </div>
                                                                <div class="Details">
                                                                    <h5>Yoga Group Class 1</h5>
                                                                    <p>Anim pariatur cliche reprehenderit, </p>
                                                                    <span>20 Members</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" data-toggle="modal" data-target="#descriptionPop">
                                                            <div class="col-item">
                                                                <div class="photo">
                                                                    <img src="{{ asset('images/gallery-18.jpg')}}" class="img-responsive" alt="Home Fit Group Class" />
                                                                </div>
                                                                <div class="Details">
                                                                    <h5>Yoga Group Class 1</h5>
                                                                    <p>Anim pariatur cliche reprehenderit, </p>
                                                                    <span>20 Members</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" data-toggle="modal" data-target="#descriptionPop">
                                                            <div class="col-item">
                                                                <div class="photo">
                                                                    <img src="{{ asset('images/gallery-18.jpg')}}" class="img-responsive" alt="Home Fit Group Class" />
                                                                </div>
                                                                <div class="Details">
                                                                    <h5>Yoga Group Class 1</h5>
                                                                    <p>Anim pariatur cliche reprehenderit, </p>
                                                                    <span>20 Members</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="" data-toggle="modal" data-target="#descriptionPop">
                                                            <div class="col-item">
                                                                <div class="photo">
                                                                    <img src="{{ asset('images/gallery-18.jpg')}}" class="img-responsive" alt="Home Fit Group Class" />
                                                                </div>
                                                                <div class="Details">
                                                                    <h5>Yoga Group Class 1</h5>
                                                                    <p>Anim pariatur cliche reprehenderit, </p>
                                                                    <span>20 Members</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="liveSessions bgProfile">
                                <div class="liveSessionsSliderArea">
                                    <div class=" headSlider">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <h2>Yoga Free Live Sessions</h2>
                                            </div>
                                            <div class="col-md-3">
                                                <!-- Controls -->
                                                <div class="controls pull-right hidden-xs">
                                                    <a class="left fa fa-chevron-left btn btn-primary btnSlider" href="#liveSessionsSlider"
                                                       data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary btnSlider" href="#liveSessionsSlider"
                                                                                data-slide="next"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="liveSessionsSlider" class="carousel slide hidden-xs" data-ride="carousel">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="col-item">
                                                            <div class="photo">
                                                                <img src="images/gallery-18.jpg" class="img-responsive" alt="Home Fit Group Class" />
                                                            </div>
                                                            <div class="Details">
                                                                <h5>Yoga Group Class 1</h5>
                                                                <p>Anim pariatur cliche reprehenderit, </p>
                                                                <span>20 Members</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="col-item">
                                                            <div class="photo">
                                                                <img src="images/gallery-18.jpg" class="img-responsive" alt="Home Fit Group Class" />
                                                            </div>
                                                            <div class="Details">
                                                                <h5>Yoga Group Class 1</h5>
                                                                <p>Anim pariatur cliche reprehenderit, </p>
                                                                <span>20 Members</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="col-item">
                                                            <div class="photo">
                                                                <img src="images/gallery-18.jpg" class="img-responsive" alt="Home Fit Group Class" />
                                                            </div>
                                                            <div class="Details">
                                                                <h5>Yoga Group Class 1</h5>
                                                                <p>Anim pariatur cliche reprehenderit, </p>
                                                                <span>20 Members</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="col-item">
                                                            <div class="photo">
                                                                <img src="images/gallery-18.jpg" class="img-responsive" alt="Home Fit Group Class" />
                                                            </div>
                                                            <div class="Details">
                                                                <h5>Yoga Group Class 1</h5>
                                                                <p>Anim pariatur cliche reprehenderit, </p>
                                                                <span>20 Members</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="col-item">
                                                            <div class="photo">
                                                                <img src="images/gallery-18.jpg" class="img-responsive" alt="Home Fit Group Class" />
                                                            </div>
                                                            <div class="Details">
                                                                <h5>Yoga Group Class 1</h5>
                                                                <p>Anim pariatur cliche reprehenderit, </p>
                                                                <span>20 Members</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="col-item">
                                                            <div class="photo">
                                                                <img src="images/gallery-18.jpg" class="img-responsive" alt="Home Fit Group Class" />
                                                            </div>
                                                            <div class="Details">
                                                                <h5>Yoga Group Class 1</h5>
                                                                <p>Anim pariatur cliche reprehenderit, </p>
                                                                <span>20 Members</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="col-item">
                                                            <div class="photo">
                                                                <img src="images/gallery-18.jpg" class="img-responsive" alt="Home Fit Group Class" />
                                                            </div>
                                                            <div class="Details">
                                                                <h5>Yoga Group Class 1</h5>
                                                                <p>Anim pariatur cliche reprehenderit, </p>
                                                                <span>20 Members</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="col-item">
                                                            <div class="photo">
                                                                <img src="images/gallery-18.jpg" class="img-responsive" alt="Home Fit Group Class" />
                                                            </div>
                                                            <div class="Details">
                                                                <h5>Yoga Group Class 1</h5>
                                                                <p>Anim pariatur cliche reprehenderit, </p>
                                                                <span>20 Members</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="col-item">
                                                            <div class="photo">
                                                                <img src="images/gallery-18.jpg" class="img-responsive" alt="Home Fit Group Class" />
                                                            </div>
                                                            <div class="Details">
                                                                <h5>Yoga Group Class 1</h5>
                                                                <p>Anim pariatur cliche reprehenderit, </p>
                                                                <span>20 Members</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="col-item">
                                                            <div class="photo">
                                                                <img src="images/gallery-18.jpg" class="img-responsive" alt="Home Fit Group Class" />
                                                            </div>
                                                            <div class="Details">
                                                                <h5>Yoga Group Class 1</h5>
                                                                <p>Anim pariatur cliche reprehenderit, </p>
                                                                <span>20 Members</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="col-item">
                                                            <div class="photo">
                                                                <img src="images/gallery-18.jpg" class="img-responsive" alt="Home Fit Group Class" />
                                                            </div>
                                                            <div class="Details">
                                                                <h5>Yoga Group Class 1</h5>
                                                                <p>Anim pariatur cliche reprehenderit, </p>
                                                                <span>20 Members</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="col-item">
                                                            <div class="photo">
                                                                <img src="images/gallery-18.jpg" class="img-responsive" alt="Home Fit Group Class" />
                                                            </div>
                                                            <div class="Details">
                                                                <h5>Yoga Group Class 1</h5>
                                                                <p>Anim pariatur cliche reprehenderit, </p>
                                                                <span>20 Members</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="col-item">
                                                            <div class="photo">
                                                                <img src="images/gallery-18.jpg" class="img-responsive" alt="Home Fit Group Class" />
                                                            </div>
                                                            <div class="Details">
                                                                <h5>Yoga Group Class 1</h5>
                                                                <p>Anim pariatur cliche reprehenderit, </p>
                                                                <span>20 Members</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="col-item">
                                                            <div class="photo">
                                                                <img src="images/gallery-18.jpg" class="img-responsive" alt="Home Fit Group Class" />
                                                            </div>
                                                            <div class="Details">
                                                                <h5>Yoga Group Class 1</h5>
                                                                <p>Anim pariatur cliche reprehenderit, </p>
                                                                <span>20 Members</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="col-item">
                                                            <div class="photo">
                                                                <img src="images/gallery-18.jpg" class="img-responsive" alt="Home Fit Group Class" />
                                                            </div>
                                                            <div class="Details">
                                                                <h5>Yoga Group Class 1</h5>
                                                                <p>Anim pariatur cliche reprehenderit, </p>
                                                                <span>20 Members</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="col-item">
                                                            <div class="photo">
                                                                <img src="images/gallery-18.jpg" class="img-responsive" alt="Home Fit Group Class" />
                                                            </div>
                                                            <div class="Details">
                                                                <h5>Yoga Group Class 1</h5>
                                                                <p>Anim pariatur cliche reprehenderit, </p>
                                                                <span>20 Members</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
    <!-- Modal -->
    <div class="modal fade" id="descriptionPop" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Yoga Group Class 1</h4>
                </div>
                <div class="modal-body">
                    <div class="descriptionClasses">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="images/livesession-03.jpg" class="img-responsive">
                            </div>
                            <div class="col-sm-9">
                                <div class="headArea">
                                    <h1>Yoga Group Class 1</h1>
                                    <h2>Trainer: Edward Buttler</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h2>Description</h2>
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
@endsection