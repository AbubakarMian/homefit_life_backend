
@extends('user\layouts\dasboard')

<link href="{{ asset('css/profileedit.css')}}" rel="stylesheet">

@section('dashboard')
    <div class="innerPage">
             <form method="post" action="{{ url('user/update_profile') }}">
               {{ csrf_field() }}
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="proFileImgArea">
                        <img src="{{ $user->avatar}}" class="img-responsive">
                        <a href="" class="btn btn-primary btnEditImg">Edit Image</a>
                    </div>
                    <div class="editProfile">
                        <div class="form-group">
                            <input id="email" type="text" class="form-control" name="name" value="{{ $user->name}}" placeholder="First name">
                        </div>

                        <div class="form-group">
                            <!-- <textarea class="form-control" rows="5" id="comment" placeholder="Bio Information"></textarea> -->
                            <textarea class="ckeditor form-control" placeholder="Bio Information" value="{{ $user->description}}" name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <input id="email" type="text" class="form-control" name="email" value="{{ $user->email}}" placeholder="Email">
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
                            <button type="submit" class="btn btn-primary ">Save Changes</button>
                            <a href=""  class="btn btn-primary ">Temporary Disable My Account</a>
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