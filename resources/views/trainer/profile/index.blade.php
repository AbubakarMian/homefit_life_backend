@extends('trainer.layouts.dasboard')

<link href="{{ asset('css/trainerprofile.css') }}" rel="stylesheet">

@section('dashboard')
    <div class="innerPage">
        <form method="post" action="{{ url('trainer/updateprofile') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{-- {{ Form::hidden('user_id', $user->id) }} --}}
            <div class="col-sm-6 col-sm-offset-3">
                <div class="proFileImgArea">
                    {{-- @if ($user->avatar) --}}
                    {{-- <img src="{{$user->avatar}}" class="img-responsive"> --}}
                    {{-- @else --}}
                    <img src="{{ asset('images/default-trainer.jpg') }}" class="img-responsive">
                    {{-- @endif --}}
                    <div class="form-group">
                        {!! Form::label('avatar', 'Product Image') !!}
                        {!! Form::file('avatar', ['class' => 'btn btn-primary btnEditImg', 'id' => 'avatar']) !!}
                    </div>
                </div>
                <div class="editProfile">

                    <div class="form-group">
                        <input id="email" type="text" class="form-control" name="name" placeholder="Full name">
                    </div>

                    <div class="form-group">
                        <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <!-- <textarea class="form-control" rows="5" id="comment" placeholder="Bio Information"></textarea> -->
                        <textarea class="ckeditor form-control" placeholder="Bio Information" name="description"></textarea>
                    </div>

                    <div class="form-controle" style="border:1px #aaa solid;margin-bottom: 10px;padding: 10px;">
                        <h5>Training Speciality</h5>
                        <div style="display: flex;width: 100%;justify-content: space-between;margin-bottom: 10px;">
                            <button type="button" class="btn btn-primary">
                                Fitness <span class="badge badge-light"><i class="fa fa-times-circle"></i></span>
                            </button>

                            <button type="button" class="btn" style="background-color: #333333;color: #fff;"
                                data-toggle="modal" data-target="#specialityModal">
                                Search <span class="badge badge-light"><i class="fa fa-search"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="form-controle" style="border:1px #aaa solid;margin-bottom: 10px;padding: 10px;">
                        <h5>Training Categories</h5>
                        <div style="display: flex;width: 100%;justify-content: space-between;margin-bottom: 10px;"
                            class="speciality_badge">
                            <button type="button" class="btn btn-primary" name="sfds">
                                Fitness <span class="badge badge-light"><i class="fa fa-times-circle"></i></span>
                            </button>

                            <button type="button" class="btn" style="background-color: #333333;color: #fff;"
                                data-toggle="modal" data-target="#categoryModal" name="training_types[]">
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
                                        <a class="left fa fa-chevron-left btn btn-primary btnSlider"
                                            href="#GroupClassSlider" data-slide="prev"></a><a
                                            class="right fa fa-chevron-right btn btn-primary btnSlider"
                                            href="#GroupClassSlider" data-slide="next"></a>
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
                                                    <img src="http://localhost/homefit_life_backend/public/images/gallery-18.jpg"
                                                        class="img-responsive" alt="Home Fit Group Class">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="col-item">
                                                <div class="photo">
                                                    <img src="http://localhost/homefit_life_backend/public/images/gallery-18.jpg"
                                                        class="img-responsive" alt="Home Fit Group Class">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="col-item">
                                                <div class="photo " style="background-color:#blue ;">
                                                    <input class="fa fa-plus-circle fa-10x" type="file" name="gallery[]">
                                                    {{-- <i class="fa fa-plus-circle fa-10x"
                                                        style="float: right;font-size: 60px"></i> --}}

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="item ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="col-item">
                                                <div class="photo">
                                                    <img src="http://localhost/homefit_life_backend/public/images/gallery-18.jpg"
                                                        class="img-responsive" alt="Home Fit Group Class">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="col-item">
                                                <div class="photo">
                                                    <i class="fa fa-plus-circle" style="float: right;font-size: 25px"></i>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container"
                        style="width: 100%; border: 1px solid #aaaa; margin-top: 10px;padding-bottom: 10px; padding-top: 10px;padding-left: 5px">
                        <h2>Packages</h2>
                        <div class="add_package">
                            <div style="border-bottom:2px solid #aaa;margin-bottom:10px">
                                <div class="form-group">
                                    <input id="package_name" type="text" class="form-control" name="package_name"
                                        placeholder="Enter Package Name">

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <!-- <input id="email" type="text" class="form-control" name="email" placeholder="Gender"> -->
                                            <select class="form-control" id="gender">
                                                <option>Sessions </option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <input id="price" type="text" class="form-control" name="price"
                                                placeholder="Price">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div style="background-color: #000;color: #fff;padding: 10px;margin-bottom: 10px" class="col-sm-6">
                            <a onclick="add_package()" style="color: #fff">add another package
                                <i class="fa fa-plus-circle" style="float: right;font-size: 25px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="btnLogIn">
                        <button type="submit" class="btn btn-primary ">Save</button>
                    </div>
                </div>
            </div>
            <!-- Modal Speciality -->
            <div id="specialityModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Speciality </h4>
                        </div>
                        <div class="row">
                            @foreach ($trainer_types as $item)
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="checkbox" class="form-check-input speciality"
                                            id="speciality_{{ $item->id }}" name="speciality[]"
                                            onchange="add_speciality(this)" value="{{ $item->name }}">
                                        <label class="form-check-label"
                                            for="speciality_{{ $item->id }}">{{ $item->name }}</label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Modal Categories -->
            <div id="categoryModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Categories </h4>
                        </div>
                        <div class="modal-body" style="display: flex;flex-direction: row">


                            <div class="row">
                                @foreach ($trainer_types as $item)
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="checkbox" class="form-check-input speciality"
                                                id="categories_{{ $item->id }}" name="categories[]"
                                                onchange="add_categories(this)" value="{{ $item->name }}">
                                            <label class="form-check-label"
                                                for="categories_{{ $item->id }}">{{ $item->name }}</label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
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

<script>
    function add_package() {
        console.log('fdhkjhsfdfdkjhskdf');

        var nextdivnum = $('.add_package').length + 1;
        $('.add_package').append(package_html(nextdivnum));
    }

    function package_html(num) {
        return `
        <div style="border-bottom:2px solid #aaa;margin-bottom:10px" >
                                <div class="form-group">
                                    <input id="package_name_` + num +
            `" type="text" class="form-control" name="package_name_` + num + `"
                                        placeholder="Enter Package Name">

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select class="form-control" id="session_` + num + `" name="session_` +
            num + `">
                                                <option>Sessions </option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <input id="price" type="text" class="form-control" name="price_` + num + `"
                                                placeholder="Price">
                                        </div>
                                    </div>

                                </div>

                            </div>
        `
    }


    function speciality() {
        console.log('speciality ');
        var length = $('.speciality');
        console.log('speciality ', length);
    }

    function add_categories(training_types) {
        console.log('checkboxElem ', training_types);
        if (training_types.checked) {
            $(".speciality_badge").append(categoryBadgeHtml(training_types))
        } else {
            removeBtn(training_types)
        }
    }


    function categoryBadgeHtml(training_types) {
        return `
                <button type="button" class="btn btn-primary" id="` + training_types.id + `" name="training_types[]">
                    ` + training_types.value + ` <span class="badge badge-light"><i class="fa fa-times-circle"></i></span>
                </button>
                <input id="training_types" value="` + training_types.id + `" name="training_types[]" hidden/>
                            `
    }

    function removeBtn(element) {
        $('#' + element.id).remove();
    }

    function add_speciality(speciality) {

        if (speciality.checked) {
            $(".speciality_badge").append(specialityBadgeHtml(speciality))
        } else {
            removeBtn(speciality)
        }

    }

    function specialityBadgeHtml (spec){

    }

</script>
