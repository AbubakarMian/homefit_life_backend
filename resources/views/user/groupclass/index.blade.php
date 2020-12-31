@extends('user.layouts.dasboard')
<link href="{{ asset('css/groupclass.css')}}" rel="stylesheet">


@section('dashboard')
    <section>
        <div class="innerPageBlank">
            <div class="">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="pageTitle">

                        </div>
                        <div class="InnerContent">
                            <div class="GroupClasses bgProfile">
                                <div class="GroupClassSliderArea">
                                    <div class=" headSlider">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <h2>{!! $category[0]['name'] !!} Group Classes</h2>
                                            </div>
                                            <div class="col-md-3">
                                                <!-- Controls -->
                                                <div class="controls pull-right hidden-xs">
                                                    <a class="left fa fa-chevron-left btn btn-primary btnSlider" href="#GroupClassSlider"
                                                       data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary btnSlider" href="#GroupClassSlider"
                                                                                data-slide="next"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="GroupClassSlider" class="carousel slide hidden-xs" data-ride="carousel">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                        @foreach($training_class as $key=>$tc)
                                
                                            <div class="item {!!$key === 0 ? 'active':'' !!}">
                                                <div class="row">
                                                    @foreach($tc as $stc)
                                                        <div class="col-sm-3">
                                                            <a href="{!!asset('user/groupclass/group_desc?class_id=').$stc->id!!}">
                                                                <div class="col-item">
                                                                
                                                                    <div class="photo">
                                                                        <img src="{{ asset('images/gallery-18.jpg')}}" class="img-responsive" alt="Home Fit Group Class" />
                                                                    </div>
                                                                    <div class="Details">
                                                                        <h5>{!! $stc->name !!}</h5>
                                                                        <p> {!!  $stc->details !!} </p>
                                                                        <span>20 Members</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    
                                                    @endforeach 
                                                 
                                                   
                                                 </div>
                                            </div>
                                            @endforeach   
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="liveSessions bgProfile">
                                <div class="liveSessionsSliderArea">
                                    <div class=" headSlider">
                                        <div class="row">
                                            
                                            <div class="col-md-9">
                                                <h2>{!! $category[0]['name'] !!} Free Live Sessions</h2>
                                            </div>
                                            <div class="col-md-3">
                                                <!-- Controls -->
                                                <div class="controls pull-right hidden-xs">
                                                    <a class="left fa fa-chevron-left btn btn-primary btnSlider" href="#liveSessionsSlider"
                                                       data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary btnSlider" href="#liveSessionsSlider"
                                                                                data-slide="next"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="liveSessionsSlider" class="carousel slide hidden-xs" data-ride="carousel">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                        @foreach($free_live_session as $key=>$ls)
                                
                                            <div class="item {!!$key === 0 ? 'active':'' !!}">
                                                    <div class="row">
                                                        @foreach($ls as $fls)
                                                            <div class="col-sm-3">
                                                                <div class="col-item">
                                                                    <div class="photo">
                                                                        <img src="{{ asset('images/gallery-18.jpg')}}" class="img-responsive" alt="Home Fit Group Class" />
                                                                    </div>
                                                                    <div class="Details">
                                                                        <h5>{!! $fls->name !!}</h5>
                                                                        <p>{!! $fls->details !!}</p>
                                                                        <span>20 Members</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach 
                                                        </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
@endsection


@include('user.groupclass.partial.description_modal')
@section('app_jquery')

<script>
	
		$(function(){

			$('span[name="descriptionPop"]').on('click', function(e){
				e.preventDefault();
				var my_url = $(this).attr('data-url');
				var mySpan = this;
				$.get(my_url , function (data) {
					var trHTML = '';
					$.ajax({
						type: 'GET',
						url: my_url,
						data: 'application/json',
						dataType: 'json',
						success: function (data) {

								console.log("sucess",data);
								trHTML = data.msg;

							$('#my_msg_div').html(trHTML);
							$('#descriptionPop').modal('show');
						},
						error: function (data) {
							console.log('Error:', data);
						}
					});
				});
			});
		});

	</script>


@endsection