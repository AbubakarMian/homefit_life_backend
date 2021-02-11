@extends('trainer.layouts.dasboard')

<link href="{{ asset('css/user.css')}}" rel="stylesheet">
<link href="{{ asset('css/advancesearch.css')}}" rel="stylesheet">



@section('dashboard')

<link href="{{ asset('css/globaldashboard.css')}}" rel="stylesheet">
<link href="{{ asset('css/newsampledashboard.css')}}" rel="stylesheet">
<link href="{{ asset('css/livesessiongroup.css')}}" rel="stylesheet">
<link href="{{ asset('css/newstore.css')}}" rel="stylesheet">





<section>

    <div class="content">
        <div class="hilton">
            <strong>
                <div class="modules1">
                    <h1>
                        Live Session Group
                    </h1>
                </div>

            </strong>
            <div class="closer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <p id="demo">
                            </p>
                            <div class="LiveSessionImg">
                                <iframe src="{!! $trainng_class->live_url !!}" allow="camera ;microphone" height="100%" width="100%"></iframe>

                            </div>

                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#ViewParticipants" id="view">View Participants</button>
                            <div class="modal fade" id="ViewParticipants" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="fox">
                                            <strong>
                                                <div class="modal-header">
                                                    <div class="obi">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <h4 class="mymodal-title">Participants List</h4>
                                                </div>
                                            </strong>
                                            <div class="modal-body">
                                                <table class="bigger">
                                                    <tr class="first">
                                                        <th class="user"> User image</th>
                                                        <th class="user"> User name</th>
                                                        <th class="user"> Group Title</th>
                                                        <th class="user"> Category</th>
                                                    </tr>
                                                    @foreach($trainng_class->training_class_user as $us)
                                                    <tr class="first">
                                                        <td class="user">
                                                            <img src="{!! $us->user->avatar ?? '' !!}" class="img-responsive">
                                                        </td>
                                                        <td class="user"> {{$us->user->name ??''}}</td>
                                                        <td class="user">{{$trainng_class->name}}</td>
                                                        <td class="user">{!!$trainng_class->trainer_type->name !!}</td>
                                                    </tr>
                                                    @endforeach

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Trigger the modal with a button -->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Recommend" id="recommend">Recommend</button>
                            <!-- Modal -->
                            <div class="modal fade" id="Recommend" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <div class="obi">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <h4 class="themodal-title">Store</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="fitnees area">
                                                    <div class="col-sm-12">
                                                        <div class="row">
                                                            @foreach($produst_list as $pl)
                                                            <div class="first box">
                                                                <div class="col-sm-3">
                                                                    <div class="img1">
                                                                        <img src="{{$pl->avatar}}" class="img-responsive">
                                                                    </div>
                                                                    <div class="text"> {{$pl->name}}</div>
                                                                    <div class="stars">
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                    </div>
                                                                    <div class="number"> ${{$pl->price}} </div>
                                                                    <div class="ob">
                                                                        <button class="button button1" id="rec_btn_{{$pl->id}}" onclick="recomendedPro({{$pl->id}})">Recommend</button>
                                                                    </div>
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

                            <a class="button button1" id="byer" href="{!! asset('trainer/groupclass') !!}">Leave Class</a>



                            <script>
                                // Set the date we're counting down to
                                var countDownDate = new Date("Jan 29, 2021 15:37:25").getTime();

                                // Update the count down every 1 second
                                var x = setInterval(function() {

                                    // Get today's date and time
                                    var now = new Date().getTime();

                                    // Find the distance between now and the count down date
                                    var distance = countDownDate - now;

                                    // Time calculations for days, hours, minutes and seconds

                                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                    // Output the result in an element with id="demo"
                                    document.getElementById("demo").innerHTML =
                                        minutes + "m " + seconds + "s ";

                                    // If the count down is over, write some text 
                                    if (distance < 0) {
                                        clearInterval(x);
                                        document.getElementById("demo").innerHTML = "EXPIRED";
                                    }
                                }, 1000);
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- <section>
    <div class="innerPageBlank">
        <iframe src="" title="W3Schools Free Online Web Tutorials" height="100%" width="100%"></iframe>
    </div>
</section> -->


<script>
    function recomendedPro(prod_id) {

        console.log('product id !!!!!!!!', prod_id)
        var my_url = "{!! asset('/trainer/recomproduct')!!}" + "?prod_id=" + prod_id;
        $.ajax({
            url: my_url,
            method: 'get',
            dataType: 'json',
            success: function(data) {

                if (data.status) {
                    $('#rec_btn_' + prod_id).css('background-color', '#808080');
                    $('#rec_btn_' + prod_id).attr('disabled', 'disabled');;
                }
            }
        });

    }
</script>
@endsection