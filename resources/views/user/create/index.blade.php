
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
                        <div class="createAcc" >
                         <form method="post" action="{{ url('user/save') }}">
       
                        
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
                                    {{ csrf_field() }}
                                    <input id="name" type="text" class="form-control" name="name" placeholder="Name">
                                </div>
                                <br/>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
                                    <input id="email" type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                                <br/>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="flaticon-email"></i></span>
                                    <input id="text" type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <br/>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="flaticon-telephone"></i></span>
                                    <input id="text" type="text" class="form-control" name="password1" placeholder="Password">
                                </div>
                                <br/>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input id="text" type="text" class="form-control" name="password2" placeholder="Password">
                                </div>
                                <br/>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input id="text" type="text" class="form-control" name="password3" placeholder="Password">
                                </div>
                                <div class="btnLogIn">
                                    <input type="submit" class="btn btn-primary " value="SignUp"/> 

                                </div>
                         </form>
                        </div>
                        <div class="desclaimerText col-sm-6 col-sm-offset-3">
                            by signing up you agree to our terms of service and privacy policy
                        </div>
                        <div class="HaveAcc col-sm-6 col-sm-offset-3">
                            already have an account <a href="/homefit/login.php">sign in here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection