@extends('trainer.layouts.dasboard')


@section('dashboard')


<link href="{{ asset('css/globaldashboard.css')}}" rel="stylesheet">
<link href="{{ asset('css/newsampledashboard.css')}}" rel="stylesheet">




<section>
    <div class="content">
        <div class="main area">

            <strong>

                <div class="modules">
                    <h1>
                        Modules
                    </h1>
                </div>

            </strong>


            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="main box">
                                    <div class="text">
                                        <div class="group classes">
                                            Group Classes
                                        </div>
                                        <strong>
                                            <div class="sight">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        -Group Classes
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="number">
                                                            -08
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="ruquest">
                                                            -Group Classes Request
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="number">
                                                            -08
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="main box">
                                    <div class="text">
                                        <div class="group classes">
                                            Live Sessions
                                        </div>
                                        <strong>
                                            <div class="sight">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="live">
                                                            -Live Sessions
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="number">
                                                            -08
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="live ruquest">
                                                            -Live Session Request
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="number">
                                                            -08
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </strong>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bootom">
            
        </div>

    </div>
</section>



@endsection