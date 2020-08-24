
@extends('user.layouts.index')

@section('default')
    <section>
        <div class="innerPage">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="pageTitle">
                            <h1>LogIn To Your Account</h1>
                        </div>
                    </div>
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="LoginForm">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
                                <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                            <br/>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="forgetPass">
                                <a href="" data-toggle="modal" data-target="#LoginModal">Forgot My Password?</a>
                            </div>
                            <div class="btnLogIn">
                                <a href=""  class="btn btn-primary btnLogin">Login</a>
                            </div>
                        </div>
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
                <div class="modal-body">
                    <p>don't worry resetting your password is easy just tell us your email address and register with homefit live</p>
                    <div class="form-group">
                        <input type="Email" class="form-control" id="email" placeholder="Enter Your Email">
                    </div>
                    <button type="button" class="btn btn-primary btn-modal">Send</button>
                </div>
            </div>
        </div>
    </div>
@endsection