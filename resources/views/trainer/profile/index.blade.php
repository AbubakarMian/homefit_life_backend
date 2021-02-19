@extends('trainer.layouts.dasboard')

<link href="{{ asset('css/trainerprofile.css') }}" rel="stylesheet">

<style>
    .upload-btn-wrapper {
        position: relative;
        overflow: hidden;
        display: inline-block;
    }

    .btn {
        border: 2px solid gray;
        color: gray;
        background-color: white;
        padding: 8px 20px;
        border-radius: 8px;
        font-size: 20px;
        font-weight: bold;
    }

    .upload-btn-wrapper input[type=file] {
        font-size: 100px;
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
    }

</style>
@section('dashboard')
    <div class="innerPage">
        <form method="post" action="{{ url('trainer/updateprofile') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{-- {{ Form::hidden('user_id', $user->id) }} --}}
            <div class="col-sm-6 col-sm-offset-3">
                <div class="proFileImgArea">
                    @if ($trainer->user->avatar)
                        <img src="{{ $trainer->user->avatar }}" class="img-responsive">
                    @else
                        <img src="{{ asset('images/default-trainer.jpg') }}" class="img-responsive">
                    @endif
                    <div class="form-group">
                        {!! Form::label('avatar', 'Trainer Image') !!}
                        {!! Form::file('profile_avatar',null, ['class' => 'btn btn-primary btnEditImg', 'id' => 'avatar']) !!}
                    </div>
                </div>
                <div class="editProfile">

                    <div class="form-group">
                        <input id="email" type="text" class="form-control" name="name" value="{!!  $trainer->name !!}"
                            placeholder="Full name">
                    </div>

                    <div class="form-group">
                        <input id="email" type="text" class="form-control" name="email"
                            value="{!!  $trainer->user->email !!}" placeholder="Email" readonly>
                    </div>

                    <div class="form-group">
                        <textarea class="ckeditor form-control" placeholder="Bio Information"
                            name="description"> {!!  $trainer->user->description !!}</textarea>
                    </div>

                    {{-- <div class="form-controle" style="border:1px #aaa solid;margin-bottom: 10px;padding: 10px;">
                        <h5>Training Speciality</h5>
                        <div style="display: flex;width: 100%;justify-content: space-between;margin-bottom: 10px;"
                            class="speciality_badge">
                            <button type="button" class="btn btn-primary">
                                {{ $trainer->specialities }}<span class="badge badge-light" style="margin-left: 5px"><i
                                        class="fa fa-times-circle"></i></span>
                            </button>

                            <button type="button" class="btn" style="background-color: #333333;color: #fff;"
                                data-toggle="modal" data-target="#specialityModal">
                                Search <span class="badge badge-light"><i class="fa fa-search"></i></span>
                            </button>
                        </div>
                    </div> --}}
                    <div class="row"
                        style="border:1px #aaa solid;margin-bottom: 10px;padding: 10px;margin-left: px;margin-right: 3px">
                        <div class="col-sm-10 scrollmenu">
                            <div class="form-controle">
                                <h5>Training Speciality</h5>
                                <div style="display: flex;width: 100%;justify-content: space-between;margin-bottom: 10px;overflow: scroll;"
                                    class="speciality_badge">
                                    <?php
                                        $specialities = json_decode($trainer->specialities);
                                        // $image = $image[0];
                                    ?>
                                    @if($specialities)
                                    @foreach($specialities as $spec)
                                    <button type="button" class="btn btn-primary">
                                        {{ $spec }}<span class="badge badge-light" style="margin-left: 5px"><i
                                                class="fa fa-times-circle"></i></span>
                                    </button>
                                    @endforeach
                                    @endif
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-2">
                            <button type="button" class="btn" style="background-color: #333333;color: #fff;"
                                data-toggle="modal" data-target="#specialityModal">
                                Search <span class="badge badge-light"><i class="fa fa-search"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="row"
                        style="border:1px #aaa solid;margin-bottom: 10px;padding: 10px;margin-left: px;margin-right: 3px">
                        <div class="col-sm-10 scrollmenu">
                            <div class="form-controle">
                                <h5>Training Categories</h5>
                                <div style="display: flex;width: 100%;justify-content: space-between;margin-bottom: 10px;overflow: scroll;"
                                    class="type_badge">
                                    {{-- <button type="button" class="btn btn-primary col-sm-3" name="sfds">
                                        Fitness <span class="badge badge-light"><i class="fa fa-times-circle"></i></span>
                                    </button> --}}


                                </div>

                            </div>
                        </div>
                        <div class="col-sm-2">
                            <button type="button" class="btn" style="background-color: #333333;color: #fff;"
                                data-toggle="modal" data-target="#categoryModal" name="training_types[]">
                                Search <span class="badge badge-light"><i class="fa fa-search"></i></span>
                            </button>
                        </div>
                    </div>

                    <div class="GroupClassSliderArea">
                        <div class=" headSlider">

                        </div>
                        <div id="groupClassSlider" class="carousel slide hidden-xs" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="row">
                                <div class="col-sm-10">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                            <li data-target="#myCarousel" data-slide-to="2"></li>
                                        </ol>

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            @foreach($trainer->gallery as $key=>$tg)
                                            <div class="item {!!$key === 0 ? 'active':'' !!}">
                                                <div style="display: flex; flex-direction: row" id="gallery_row">
                                                    @if($tg->type == 'image/jpeg' || $tg->type == 'image/png' )
                                                    <img src="{!!$tg->URL !!}"
                                                        style="height: 100px;width: 100px;margin-right: 5px" />
                                                        
                                                    @else
                                                    <video id="media" width="320" height="240" class="img-responsive gallery" name="media[]" controls>
                                                        <source src="{!!$tg->URL !!}" >      
                                                    </video>
                                                    @endif
                                                   

                                                </div>
                                            </div>
                                            @endforeach
                                        </div>



                                     

                                        <!-- Left and right controls -->
                                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-sm-2">
                                    <div class="col-item">
                                        <div class="photo"
                                            style="height: 100px;width: 100px; background-color: #0f96e7;align-items: center;justify-content: center">
                                            <i class="fa fa-plus-circle"
                                                style="margin-left: 24px;margin-top: 20;font-size: 60px;color: #fff"></i>
                                            <input class="fa fa-plus-circle fa-10x" type="file" id="trainergallery"
                                                name="gallery[]" multiple>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            {{-- <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row gallery" id="gallery_row">
                                        <div class="col-sm-3 galleryitem">
                                            <div class="col-item">
                                                <div class="photo">
                                                    <img id="blah"
                                                        src="http://localhost/homefit_life_backend/public/images/gallery-18.jpg"
                                                        class="img-responsive trainergallery" alt="Home Fit Group Class">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="col-item">
                                                <div class="photo " style="background-color:#blue ;">
                                                    <input class="fa fa-plus-circle fa-10x" type="file" id="trainergallery"
                                                        name="gallery[]" multiple>

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="container"
                        style="width: 100%; border: 1px solid #aaaa; margin-top: 10px;padding-bottom: 10px; padding-top: 10px;padding-left: 5px">
                        <h2>Packages</h2>
                        <div class="add_package">
                            <div style="border-bottom:2px solid #aaa;margin-bottom:10px">
                                <div class="form-group">
                                    <input id="package_name" type="text" class="form-control" name="total_package_name[]"
                                        placeholder="Enter Package Name">

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <!-- <input id="email" type="text" class="form-control" name="email" placeholder="Gender"> -->
                                                <input type="number" class="form-control" placeholder="Enter total session" name="total_sessions[]">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <input id="price" type="number" class="form-control" name="total_price[]"
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
                                            onchange="add_speciality(this)" value="{{ $item->name }}" >
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
                                                id="{{ $item->id }}" name="categories[]"
                                                onchange="add_categories(this)" value="{{ $item->name }}">
                                            <label class="form-check-label"
                                                for="{{ $item->id }}">{{ $item->name }}</label>
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

@section('app_jquery')

    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });

    </script>

    <script>
        function add_package() {
            console.log('fdhkjhsfdfdkjhskdf');
            // var package_arr[] = [] 
            var nextdivnum = $('.add_package').length ;
            $('.add_package').append(package_html(nextdivnum));
        }

        function package_html(num) {
            return `
        <div style="border-bottom:2px solid #aaa;margin-bottom:10px" >
                                <div class="form-group">
                                    <input id="package_name_` + num +
                `" type="text" class="form-control" name="total_package_name[]"
                placeholder="Enter Package Name">

        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                   
                    <input type="number" class="form-control" placeholder="Enter total session" name="total_sessions[]">
                </div>
            </div>
            <div class="col-sm-6">

            <div class="form-group">
                <input id="price" type="number" class="form-control" name="total_price[]"
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
            console.log('add_categories function')
            if (training_types.checked) {
                $(".type_badge").append(categoryBadgeHtml(training_types))
            } else {
                removeBtn(training_types)
            }
        }


        function categoryBadgeHtml(training_types) {
            return `
                    <button type="button" class="btn btn-primary" id="` +
                training_types
                .id + `" name="training_types[]">
                        ` + training_types.value + ` <span class="badge badge-light"><i class="fa fa-times-circle"></i></span>
                    </button>
                    <input id="training_types" value="` + training_types.id + `" name="training_types[]" hidden/>
                                                                                `
        }

        function removeBtn(element) {
            $('#' + element.id).remove();
        }

        function add_speciality(speciality) {

            console.log('add_speciality function')
            if (speciality.checked) {
                $(".speciality_badge").append(specialityBadgeHtml(speciality))
            } else {
                removeBtn(speciality)
            }

        }

        function specialityBadgeHtml(spec) {
            return `
                    <button type="button" class="btn btn-primary" id="` + spec.id + `" >
                        ` + spec.value + `<span class="badge badge-light" style="margin-left: 5px"><i
                                class="fa fa-times-circle"></i></span>
                    </button>
                    <input id="speciality" value="` + spec.id + `" hidden/>
                    `
        }

        $("#trainergallery").change(function() {
            fileURL(this);
        });

        function fileURL(input) {
            const file = input.files[0];
            const fileType = file['type'];
            const validImageTypes = ['image/gif', 'image/jpeg', 'image/png'];
            var reader = new FileReader();
            var nextdivnum = $('.galleryitem').length + 1;
            console.log('nextdivnum', nextdivnum);
            if (validImageTypes.includes(fileType)) {
                console.log('in if  condition')

                $('#gallery_row').append(trainerGalleryImageHtml(nextdivnum));
                reader.onload = function(e) {
                    $('#media_' + nextdivnum).attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string

            } else {
                console.log('else condition')
                $('#gallery_row').append(trainerGalleryVideoHtml(nextdivnum));
                var video = document.getElementById('media_' + nextdivnum);
                console.log('as video', video);

                var videoSource = document.createElement('source');
                const files = this.files || [];
                // if (!files.length) return;

                // setTimeout(function(){
                reader.onload = function(e) {
                    console.log('e.target.result', e.target.result)

                    videoSource.setAttribute('src', e.target.result);
                    video.appendChild(videoSource);
                    video.load();
                    video.play();
                };
                // },300)
                console.log('videoSource', videoSource)
                reader.onprogress = function(e) {
                    console.log('progress: ', Math.round((e.loaded * 100) / e.total));
                };
                reader.readAsDataURL(file);

            }
        }

        function trainerGalleryImageHtml(nextdivnum) {

            return `
                    <div class="col-sm-3 galleryitem">
                        <div class="col-item">
                            <div class="photo">
                                <img id="media_` + nextdivnum + `" src="http://localhost/homefit_life_backend/public/images/gallery-18.jpg"
                                    class="img-responsive gallery" name="media[] alt="Home Fit Group Class">
                            </div>

                        </div>
                    </div>
                            `
        }

        function trainerGalleryVideoHtml(nextdivnum) {

            return `
                                        <div class="col-sm-3 galleryitem">
                                            <div class="col-item">
                                                <div class="photo">
                                                        <video id="media_` + nextdivnum + `" width="320" height="240" class="img-responsive gallery" name="media[]" controls>
                                                                
                                                        </video>
                                                </div>

                                            </div>
                                        </div>
                                                `
        }

    </script>

@endsection
