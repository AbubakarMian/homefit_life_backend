@extends('trainer.layouts.dasboard')

<link href="{{ asset('css/trainerprofile.css')}}" rel="stylesheet">

@section('dashboard')
    <div class="innerPage">
             <form method="post" action="{{ url('user/update_profile') }}"  enctype="multipart/form-data">
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
                            <input id="email" type="text" class="form-control" name="name"  placeholder="First name">
                        </div>

                        <div class="form-group">
                            <!-- <textarea class="form-control" rows="5" id="comment" placeholder="Bio Information"></textarea> -->
                            <textarea class="ckeditor form-control" placeholder="Bio Information"  name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <input id="email" type="text" class="form-control" name="email"  placeholder="Email">
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
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>