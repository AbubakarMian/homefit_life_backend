@extends('trainer.layouts.index')
@section('default')
<section>
    <div class="innerPage">
        <div class="container">
            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @elseif($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="row">
                <div class="col-sm-12">
                    <div class="pageTitle">
                        <h1>LogIn For Trainer Account!</h1>
                    </div>
                </div>

                <div class="col-sm-6 col-sm-offset-3">
                    <form method="post" action="{{ url('trainer/checklogin') }}">

                        <div class="LoginForm">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
                                {{ csrf_field() }}
                                <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                            <br />
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="forgetPass">
                                <a href="" data-toggle="modal" data-target="#LoginModal">Forgot My Password?</a>
                            </div>
                            <div class="btnLogIn">
                                <input type="submit" class="btn btn-primary " value="Login" />
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div id="LoginModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Forgot Your Password</h4>
            </div>
            <form method="post" action="{{ url('forgetpwd') }}">
                {{ csrf_field() }}
                <div class="modal-body">
                    <p>don't worry resetting your password is easy just tell us your email address and register with homefit live</p>
                    <div class="form-group">
                        <input type="Email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                    </div>
                    <button type="submit" class="btn btn-primary btn-modal">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection