@extends('user.layouts.dasboard')

<link href="{{ asset('css/categories.css')}}" rel="stylesheet">

@section('dashboard')
    <section>
        <div class="innerPageBlank">
            <div class="">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="pageTitle">

                        </div>
                        <div class="InnerContent">
                            <div class="catagoriesArea bgProfile">
                                <h2>Categories</h2>
                                <ul class="list-inline">
                                   @foreach($training_category as $tc)
                                    <li>
                                        <a href="{!!asset('user/groupclass?cat_id=').$tc->id!!}">
                                            <div class="catagoresBox">
                                                <div class="catagoryIcon">
                                                    <!-- <i class="flaticon-yoga"></i> -->
                                                    <img src="{{asset($tc->avatar)}}" class="img-responsive"> </img>
                                                </div>
                                                <div class="catagoryText">
                                                   {{$tc->name}}
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection