
@extends('user\layouts\dasboard')

<link href="css/profileedit.css" rel="stylesheet">

@section('dashboard')
    <div class="innerPage">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="proFileImgArea">
                <img src="images/livesession-02.jpg" class="img-responsive">
                <a href="" class="btn btn-primary btnEditImg">Edit Image</a>
            </div>
            <div class="editProfile">
                <div class="form-group">
                    <input id="email" type="text" class="form-control" name="email" placeholder="First name">
                </div>

                <div class="form-group">
                    <textarea class="form-control" rows="5" id="comment" placeholder="Bio Information"></textarea>
                </div>
                <div class="form-group">
                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input id="email" type="text" class="form-control" name="email" placeholder="Phone">
                </div>
                <div class="form-group">
                    <input id="email" type="text" class="form-control" name="email" placeholder="Gender">
                </div>
                <div class="btnLogIn">
                    <a href=""  class="btn btn-primary ">Save Changes</a>
                    <a href=""  class="btn btn-primary ">Temporary Disable My Account</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>
@endsection