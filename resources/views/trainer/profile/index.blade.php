@extends('trainer.layouts.dasboard')

<link href="{{ asset('css/trainerprofile.css')}}" rel="stylesheet">

@section('dashboard')
<div class="innerPage">
    <form method="post" action="{{ url('user/update_profile') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{-- {{ Form::hidden('user_id', $user->id) }} --}}
        <div class="col-sm-6 col-sm-offset-3">
            <div class="proFileImgArea">
                {{-- @if($user->avatar) --}}
                {{-- <img src="{{$user->avatar}}" class="img-responsive"> --}}
                {{-- @else --}}
                <img src="{{asset('images/default-trainer.jpg')}}" class="img-responsive">
                {{-- @endif --}}
                <div class="form-group">
                    {!! Form::label('avatar','Product Image') !!}
                    {!! Form::file('avatar', ['class' => 'btn btn-primary btnEditImg', 'id'=>'avatar'] ) !!}
                </div>
            </div>
            <div class="editProfile">

                <div class="form-group">
                    <input id="email" type="text" class="form-control" name="name" placeholder="First name">
                </div>

                <div class="form-group">
                    <!-- <textarea class="form-control" rows="5" id="comment" placeholder="Bio Information"></textarea> -->
                    <textarea class="ckeditor form-control" placeholder="Bio Information" name="description"></textarea>
                </div>
                <div class="form-group">
                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input id="email" type="text" class="form-control" name="phone" placeholder="Phone">
                </div>
                <div class="form-group">
                    <!-- <input id="email" type="text" class="form-control" name="email" placeholder="Gender"> -->
                    <select class="form-control" id="gender">
                        <option>Gender Type</option>
                        <option value="1">Male</option>
                        <option value="0">Female</option>
                    </select>
                </div>
                <div class="form-controle" style="border:1px #aaa solid;margin-bottom: 10px;padding: 10px;">
                    <h5>Training Speciality</h5>
                    <div style="display: flex;width: 100%;justify-content: space-between;margin-bottom: 10px;">
                        <button type="button" class="btn btn-primary">
                            Fitness <span class="badge badge-light"><i class="fa fa-times-circle"></i></span>
                        </button>
                        <button type="button" class="btn btn-primary">
                            Aerobic <span class="badge badge-light"><i class="fa fa-times-circle"></i></span>
                        </button>
                        <button type="button" class="btn btn-primary">
                            Yoga <span class="badge badge-light"><i class="fa fa-times-circle"></i></span>
                        </button>
                        <button type="button" class="btn btn-primary">
                            Pilates <span class="badge badge-light"><i class="fa fa-times-circle"></i></span>
                        </button>
                        <button type="button" class="btn" style="background-color: #333333;color: #fff;">
                            Search <span class="badge badge-light"><i class="fa fa-search"></i></span>
                        </button>
                    </div>
                </div>
                <div class="form-controle" style="border:1px #aaa solid;margin-bottom: 10px;padding: 10px;">
                    <h5>Training Categories</h5>
                    <div style="display: flex;width: 100%;justify-content: space-between;margin-bottom: 10px;">
                        <button type="button" class="btn btn-primary">
                            Fitness <span class="badge badge-light"><i class="fa fa-times-circle"></i></span>
                        </button>
                        <button type="button" class="btn btn-primary">
                            Aerobic <span class="badge badge-light"><i class="fa fa-times-circle"></i></span>
                        </button>
                        <button type="button" class="btn btn-primary">
                            Yoga <span class="badge badge-light"><i class="fa fa-times-circle"></i></span>
                        </button>
                        <button type="button" class="btn btn-primary">
                            Pilates <span class="badge badge-light"><i class="fa fa-times-circle"></i></span>
                        </button>
                        <button type="button" class="btn" style="background-color: #333333;color: #fff;">
                            Search <span class="badge badge-light"><i class="fa fa-search"></i></span>
                        </button>
                    </div>
                </div>
                <div class="GroupClassSliderArea">
                    <div class=" headSlider">
                        <div class="row">
                            <div class="col-md-9">
                                <h2>Yoga Group Classes</h2>
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
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="col-item">
                                            <div class="photo">
                                                <img src="http://localhost/homefit_life_backend/public/images/gallery-18.jpg" class="img-responsive" alt="Home Fit Group Class">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="col-item">
                                            <div class="photo">
                                                <img src="http://localhost/homefit_life_backend/public/images/gallery-18.jpg" class="img-responsive" alt="Home Fit Group Class">
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="border:  1px solid #aaa;margin-top: 10px;padding: 10px;">
                    <h2>Discount Packages</h2>
                    <div class="form-group">
                        <!-- <input id="email" type="text" class="form-control" name="email" placeholder="Gender"> -->
                        <select class="form-control" id="gender">
                            <option>Package 1</option>
                            <option value="1">Male</option>
                            <option value="0">Female</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <!-- <input id="email" type="text" class="form-control" name="email" placeholder="Gender"> -->
                                <select class="form-control" id="gender">
                                    <option>Package 1</option>
                                    <option value="1">Male</option>
                                    <option value="0">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">

                            <div class="form-group">
                                <input id="email" type="text" class="form-control" name="name" placeholder="First name">
                            </div>
                        </div>
                        <div style="margin-left: 20px;">
                <div class="panel-group col-sm-8" style="margin-top: 10px; background-color: #333333;" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default "  style="background-color: #333333;border: none;">
                        <div class="panel-heading"  style="background-color: #333333;color: #fff;" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"  aria-expanded="true" aria-controls="collapseOne">
                                add another package <i class="accordion_icon fa fa-plus" style="float: right;"></i>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body" style="color: #fff;">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                
               
                </div>
               
                </div>
                    </div>
                
                </div>
                <div class="form-group">


                    <div class="btnLogIn">
                        <button type="submit" class="btn btn-primary ">Save </button>
                    </div>
                </div>
            </div>
    </form>


</div>
@endsection

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });
</script>