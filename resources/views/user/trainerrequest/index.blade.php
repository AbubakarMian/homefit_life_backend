
@extends('user\layouts\dasboard')
<link href="css/trainerrequest.css" rel="stylesheet">

@section('dashboard')
    <section>
        <div class="innerPage">
            <div class="">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="pageTitle">
                            <h1>Trainer Request Form</h1>
                        </div>
                    </div>
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="trainerrequestArea">
                        <form method="post" action="{{ url('user/trainer_permission') }}">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <textarea class="form-control" rows="10" id="message" placeholder="Type your message here." name="message" ></textarea>
                            </div>
                            <div class="btnLogIn">
                                <input type="submit" class="btn btn-primary btnAcc" value="Submit Request"/> 
                            </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection